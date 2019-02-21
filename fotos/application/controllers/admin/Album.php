<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed'); // linha de proteção ao controller

class Album extends MY_Controller { // criação da classe INICIAL DO SITE
//contrutor retornando todas as models necessárias e carregando o menu

    public function __construct() {
        parent::__construct();
        $this->load->helper('uteis_helper');
        $this->load->model('Model_Categoria', 'categoria');
        $this->load->model('Model_Album', 'album');
        $this->load->model('Model_Imagem', 'imagem');
        $this->load->library('upload');   
        
        
    }

    public function index() {
        $data['categoria'] = $this->categoria->getCategoria();

        $data['album'] = $this->album->getAlbum();
        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/new-album', $data);
        $this->load->view('admin/footer');
    }

    public function inserir() {



        $nome_album = $this->input->post('titulo-album');
        $local = $this->input->post('local-album');
        $categoria = $this->input->post('categoria-album');
        $data_album = $this->input->post('data-album');
        if (!isset($_FILES['capa'])) {
            
        } else {
            $capa = $_FILES['capa'];
            $titulo_arquivo = url_title($nome_album);
            $titulo_arquivo = removeAcentos($titulo_arquivo);
            $configuracao = array(
                'upload_path' => 'assets/imgs/capas/',
                'allowed_types' => 'jpg|png|bmp|jpeg',
                'file_name' => 'capa-' . $titulo_arquivo . '.jpg',
            );

            $this->load->library('upload');
            $this->upload->initialize($configuracao);

            if ($this->upload->do_upload('capa')) {

                $data['categoria'] = $this->categoria->getCategoria();
                $data['alert'] = 'alert-success';
                $data['mensagem'] = "Dados cadastrados com sucesso!";

                $data2['nome_album'] = $nome_album;
                $data2['local_album'] = $local;
                $data2['data_album'] = $data_album;
                $data2['id_categoria'] = $categoria;
                $data2['capa_album'] = 'capa-' . $titulo_arquivo . '.jpg';
                $data2['id_autor'] = $this->session->userdata('usuario')->id_usuario;
                $this->album->inserir($data2);

                $data3['ultimo'] = $lastInsert = $this->album->getLastInsert();
                foreach ($data3['ultimo'] as $ultimo) {
                    $ultimoInsert = $ultimo->id_album;
                }
                $data4['id_categoria'] = $categoria;
                $data4['id_album'] = $ultimoInsert;
                $this->imagem->inserir($data4);
                $data['album'] = $this->album->getAlbum();
                $this->load->view('admin/header');
                $this->load->view('admin/menu');
                $this->load->view('admin/new-album', $data);
            } else {
                $data['album'] = $this->album->getAlbum();
                $data['categoria'] = $this->categoria->getCategoria();
                $data['alert'] = 'alert-danger';
                $data['mensagem'] = "Ocorreu um erro! tente novamente!";

                $this->load->view('admin/header');
                $this->load->view('admin/menu');
                $this->load->view('admin/new-album', $data);
            }
        }
    }

    public function gerenciar() {

        $data['categoria'] = $this->categoria->getCategoria();
        $data['album'] = $this->album->getAlbum();

        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/ger-album', $data);
    }

    public function editar() {
        $nome_album = $this->input->post('titulo-album');
        $local = $this->input->post('local-album');
        $categoria = $this->input->post('categoria-album');
        $data_album = $this->input->post('data-album');

        $id_album = $this->input->post('id_album');
        if (($_FILES['capa-update']['name']) == "") {
            $data['categoria'] = $this->categoria->getCategoria();
            $data['album'] = $this->album->getAlbum();

            $data['alert'] = 'alert-success';
            $data['mensagem'] = "Dados cadastrados com sucesso!";

            $data2['nome_album'] = $nome_album;
            $data2['local_album'] = $local;
            $data2['data_album'] = $data_album;
            $data2['id_categoria'] = $categoria;

            $data2['id_autor'] = $this->session->userdata('usuario')->id_usuario;
            $this->album->update($id_album, $data2);

            
            redirect('admin/album');                               
        } else {

            $capa = $_FILES['capa-update'];
            $titulo_arquivo = url_title($nome_album);
            $titulo_arquivo = removeAcentos($titulo_arquivo);
            try {
                unlink("assets/imgs/capas/capa-$titulo_arquivo.jpg");
            } catch (Exception $exc) {
                
            }

            $configuracao = array(
                'upload_path' => 'assets/imgs/capas/',
                'allowed_types' => 'jpg|png|bmp|jpeg',
                'file_name' => 'capa-' . $titulo_arquivo . '.jpg',
            );


            $this->upload->initialize($configuracao);

            if ($this->upload->do_upload('capa-update')) {
                $data['album'] = $this->album->getAlbum();
                $data['categoria'] = $this->categoria->getCategoria();
                $data['alert'] = 'alert-success';
                $data['mensagem'] = "Dados cadastrados com sucesso!";

                $data2['nome_album'] = $nome_album;
                $data2['local_album'] = $local;
                $data2['data_album'] = $data_album;
                $data2['id_categoria'] = $categoria;
                $data2['capa_album'] = 'capa-' . $titulo_arquivo . '.jpg';
                $data2['id_autor'] = $this->session->userdata('usuario')->id_usuario;
                $this->album->update($id_album, $data2);

                $this->load->view('admin/header');
                $this->load->view('admin/menu');
                $this->load->view('admin/ger-album', $data);
            } else {

                $data['categoria'] = $this->categoria->getCategoria();
                $data['alert'] = 'alert-danger';
                $data['mensagem'] = "Ocorreu um erro! tente novamente!";

                $this->load->view('admin/header');
                $this->load->view('admin/menu');
                $this->load->view('admin/new-album', $data);
            }
        }
    }

    public function imagens() {
        $id_album = $this->uri->segment(4);

        $data['album'] = $this->album->getAlbumWhere($id_album);
        if($data['album'] != null){
             $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/imagens', $data);
        $this->load->view('admin/footer');
        }else{
            echo '404';
        }
       
    }

    public function apagar() {
        $id_album = $this->input->post('id_album');
        $this->album->deletar($id_album);
    }
    
    
  

}
