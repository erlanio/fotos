<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed'); // linha de proteção ao controller

class Slide extends MY_Controller { // criação da classe INICIAL DO SITE
//contrutor retornando todas as models necessárias e carregando o menu

    public function __construct() {
        parent::__construct();
        $this->load->helper('uteis_helper');
        $this->load->model('Model_Categoria', 'categoria');
        $this->load->model('Model_Slide', 'slide');
        $this->load->library('upload');
        $this->load->helper('uteis');
    }

    public function index() {
        $data['categoria'] = $this->categoria->getCategoria();

        $data['slide'] = $this->slide->getAll();
        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/ger-slide', $data);
        $this->load->view('admin/footer');
    }

    public function inserir() {
        $titulo = $this->input->post('titulo-slide');
        $local = $this->input->post('local-slide');
        $id_categoria = $this->input->post('categoria-slide');




        if (!isset($_FILES['imagem-slide'])) {
            
        } else {
            $capa = $_FILES['imagem-slide'];
            $titulo_arquivo = url_title($titulo);
            $titulo_arquivo = removeAcentos($titulo_arquivo);
            $configuracao = array(
                'upload_path' => 'assets/imgs/slide/',
                'allowed_types' => 'jpg|png|bmp|jpeg',
                'file_name' => 'slide-' . $titulo_arquivo . '.jpg',
            );

            $this->load->library('upload');
            $this->upload->initialize($configuracao);

            if ($this->upload->do_upload('imagem-slide')) {


                $data['alert'] = 'alert-success';
                $data['mensagem'] = "Dados cadastrados com sucesso!";

                $data2['titulo_slide'] = $titulo;
                $data2['local_slide'] = $local;
                $data2['id_categoria_slide'] = $id_categoria;
                $data2['imagem_slide'] = 'slide-' . $titulo_arquivo . '.jpg';

                $this->slide->inserir($data2);
                $data['categoria'] = $this->categoria->getCategoria();
                $data['slide'] = $this->slide->getAll();
                $this->load->view('admin/header');
                $this->load->view('admin/menu');
                $this->load->view('admin/ger-slide', $data);
                $this->load->view('admin/footer');
            } else {

                $data['categoria'] = $this->categoria->getCategoria();
                $data['alert'] = 'alert-danger';
                $data['mensagem'] = "Ocorreu um erro! tente novamente!";
                $data['slide'] = $this->slide->getAll();

                $this->load->view('admin/header');
                $this->load->view('admin/menu');
                $this->load->view('admin/new-album', $data);
            }
        }
    }

    public function apagar() {
        $id_slide = $this->input->post('id_slide');
        $titulo = $this->input->post('nome_slide');
        $titulo_arquivo = url_title($titulo);
        $titulo_arquivo = removeAcentos($titulo_arquivo);
        unlink("assets/imgs/slide/slide-$titulo_arquivo.jpg");
        $this->slide->deletar($id_slide);
    }

    public function editar() {
        $id_slide = $this->input->post('id-slide-update');
        $titulo = $this->input->post('titulo');
        $id_categoria = $this->input->post('categoria-slide-update');
        $local = $this->input->post('local-slide-update');

        $imagem = $_FILES['imagem-slide-upload'];


        if ($imagem['name'] == "") {
            $data2['titulo_slide'] = $titulo;
            $data2['id_categoria_slide'] = $id_categoria;
            $data2['local_slide'] = $local;
            $this->slide->update($id_slide, $data2);

            $data['alert'] = 'alert-success';
            $data['mensagem'] = "Dados alterados com sucesso!";
            $data['categoria'] = $this->categoria->getCategoria();

            $data['slide'] = $this->slide->getAll();

            $this->load->view('admin/header');
            $this->load->view('admin/menu');
            $this->load->view('admin/ger-slide', $data);
            $this->load->view('admin/footer');
        } else {
            $capa = $imagem;
            $titulo_arquivo = url_title($titulo);
            $titulo_arquivo = removeAcentos($titulo_arquivo);
            $configuracao = array(
                'upload_path' => 'assets/imgs/slide/',
                'allowed_types' => 'jpg|png|bmp|jpeg',
                'file_name' => 'slide-' . $titulo_arquivo . '-update.jpg',
            );

            $this->load->library('upload');
            $this->upload->initialize($configuracao);


            if (file_exists("assets/imgs/slide/slide-" . $titulo_arquivo . "-update.jpg")) {
                unlink("assets/imgs/slide/slide-" . $titulo_arquivo . "-update.jpg");
            }
            if ($this->upload->do_upload('imagem-slide-upload')) {


                $data['alert'] = 'alert-success';
                $data['mensagem'] = "Dados cadastrados com sucesso!";

                $data2['titulo_slide'] = $titulo;
                $data2['local_slide'] = $local;
                $data2['id_categoria_slide'] = $id_categoria;
                $data2['imagem_slide'] = 'slide-' . $titulo_arquivo . '-update.jpg';

                $this->slide->update($id_slide, $data2);

                $data['alert'] = 'alert-success';
                $data['mensagem'] = "Dados alterados com sucesso!";
                $data['categoria'] = $this->categoria->getCategoria();

                $data['slide'] = $this->slide->getAll();

                $this->load->view('admin/header');
                $this->load->view('admin/menu');
                $this->load->view('admin/ger-slide', $data);
                $this->load->view('admin/footer');
            } else {

                $data['categoria'] = $this->categoria->getCategoria();
                $data['alert'] = 'alert-danger';
                $data['mensagem'] = "Ocorreu um erro! tente novamente!";
                $data['slide'] = $this->slide->getAll();

                $this->load->view('admin/header');
                $this->load->view('admin/menu');
                $this->load->view('admin/new-album', $data);
            }
        }
    }

}
