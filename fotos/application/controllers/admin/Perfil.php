<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed'); // linha de proteção ao controller

class Perfil extends MY_Controller { // criação da classe INICIAL DO SITE
//contrutor retornando todas as models necessárias e carregando o menu

    public function __construct() {
        parent::__construct();
        $this->load->helper('uteis_helper');
        $this->load->model('Model_Categoria', 'categoria');
        $this->load->model('Model_Album', 'album');
        $this->load->model('Model_Imagem', 'imagem');
        $this->load->model('Model_Perfil', 'perfil');
        $this->load->library('upload');
        $this->load->helper('uteis');
    }

    public function index() {
        $id_usuario = $this->session->userdata('usuario')->id_usuario;
        $data['perfil'] = $this->perfil->get($id_usuario);

        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/perfil', $data);
        $this->load->view('admin/footer');
    }

    public function update() {
        $data['nome'] = $this->input->post('nome');
        $data['nome_artistico'] = $this->input->post('nome-artistico');
        $data['telefone'] = $this->input->post('telefone');
        $data['email'] = $this->input->post('email');
        $data['endereco'] = $this->input->post('endereco');
        $data['facebook'] = $this->input->post('facebook');
        $data['instagram'] = $this->input->post('instagram');
        $data['sobre'] = $this->input->post('sobre');
        if ($this->input->post('senha') != "") {
            $data['senha'] = md5($this->input->post('senha'));
        }
        $id_usuario = $this->session->userdata('usuario')->id_usuario;


        if ($this->perfil->update($data, $id_usuario)) {

            echo "<script>"
            . "window.location.href = '"
            . base_url('admin/Perfil')
            . "';"
            . "</script>";
        }
    }

    public function foto() {
        $pasta = "assets/imgs/";

        /* formatos de imagem permitidos */
        $permitidos = array(".jpg", ".jpeg", ".gif", ".png", ".bmp");

        if (isset($_POST)) {
            if (isset($_FILES['foto-perfil-input'])) {
                $nome_imagem = $_FILES['foto-perfil-input']['name'];
                $tamanho_imagem = $_FILES['foto-perfil-input']['size'];
            }



            /* pega a extensão do arquivo */
            $ext = strtolower(strrchr($nome_imagem, "."));

            /*  verifica se a extensão está entre as extensões permitidas */
            if (in_array($ext, $permitidos)) {

                /* converte o tamanho para KB */
                $tamanho = round($tamanho_imagem / 1024);


                $nome_atual = md5(uniqid(time())) . $ext; //nome que dará a imagem
                if (isset($_FILES['foto-perfil-input'])) {
                    $tmp = $_FILES['foto-perfil-input']['tmp_name']; //caminho temporário da imagem    
                    $data['foto-perfil'] = $nome_atual;
                }

                /* se enviar a foto, insere o nome da foto no banco de dados */
                if (move_uploaded_file($tmp, $pasta . $nome_atual)) {
                    $url = base_url('assets/imgs/');
                    
                    $id_usuario = $this->session->userdata('usuario')->id_usuario;
                    $data2['imagem'] = $nome_atual;
                    $this->perfil->update($data2, $id_usuario);

                    echo "<div class='col-md-12'><img src='$url/" . $nome_atual . "' id='previsualizar' class='img-responsive col-md-8'></div>"; //imprime a foto na tela

                    
                } else {
                    echo "Falha ao enviar";
                }
            } else {
                echo "Somente são aceitos arquivos do tipo Imagem";
            }
        } else {
            echo "Selecione uma imagem";
            exit;
        }
    }

}
