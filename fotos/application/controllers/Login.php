<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed'); // linha de proteção ao controller

class Login extends CI_Controller { // criação da classe INICIAL DO SITE
//contrutor retornando todas as models necessárias e carregando o menu

    public function __construct() {
        parent::__construct();
        $this->load->helper('uteis_helper');
        $this->load->model('Model_Pessoa', 'pessoa');
        $this->load->model('Model_Perfil', 'perfil');
        $this->load->helper('string');
    }

    public function index() {

        $this->load->view('admin/login');
    }

    public function logar() {
        $email = $this->input->post('email');
        $senha = $this->input->post('senha');
        $senhaMD5 = md5($senha);

        $pessoa = $this->pessoa->retornaNumPessoa($email, $senhaMD5);

        if ($pessoa > 0) {
            $dados = $this->pessoa->retornaPessoa($email, $senhaMD5);
            $registro = array('usuario' => $dados[0], 'usuario_logado' => true);
            $this->session->set_userdata($registro);
            redirect(base_url('admin/inicio'));
        } else {
            $data['mensagem'] = "Email ou Senha inválidos";
            $data['alert'] = "danger";
            $this->load->view('admin/login', $data);
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }

    public function recuperarSenha() {

        $this->load->view('admin/recuperar-senha');
    }

    public function resetPassword() {
        $email = $this->input->post('email');
        $numEmail = $this->perfil->verificaEmail($email);

        if ($numEmail > 0) {
            $string_random = random_string('alnum', 10);
            $senhaMD5 = md5($string_random);
            $data['senha'] = $senhaMD5;
            $this->perfil->resetPassword($email, $data);
            $corpo = "RECUPERAÇÃO DE SENHA<br>"
                    . "<strong>Email:</strong> $email<br>"
                    . "<strong>Senha:</strong> $string_random";
            if (enviar_email($email, "RECUPERAÇÃO DE SENHA", $corpo)) {
                $data['mensagem'] = "Senha recuperada com Sucesso!<br>Acesse o email para verificar sua nova senha!";
                $data['alert'] = "success";
                $this->load->view('admin/login', $data);
            }
        } else {
            $data['mensagem'] = "Ops! O email informado não existe em nossa base de dados!";
            $data['alert'] = "danger";
            $this->load->view('admin/recuperar-senha', $data);
        }
    }

    public function areaRestrita() {
        $data['mensagem'] = "Ops! Área restrita!<br>Faça Login para continuar";
        $data['alert'] = "danger";
        $this->load->view('admin/login', $data);
    }

    public function verificaLogado() {
        if ($this->session->userdata('usuario_logado') == false) {
            redirect('login/areaRestrita');
        }
    }

}
