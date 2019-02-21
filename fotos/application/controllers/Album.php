<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed'); // linha de proteção ao controller

class Album extends CI_Controller { // criação da classe INICIAL DO SITE
//contrutor retornando todas as models necessárias e carregando o menu

    public function __construct() {
        parent::__construct();
        $this->load->helper('uteis_helper');
        $this->load->model('Model_Album', 'album');
        $this->load->model('Model_Categoria', 'categoria');
        $this->load->model('Model_Perfil', 'perfil');
    }

//metódos que carrega a página inicial do site
    public function view() {

        $id_album = $this->uri->segment(4);

        $data['album'] = $this->album->getAlbumWhere($id_album);
        $data['categoria'] = $this->categoria->getCategoria();
        $data['usuario'] = $this->perfil->getFotografo();
        $this->load->view('header', $data);
        $this->load->view('menu', $data);
        $this->load->view('album', $data);
        $this->load->view('footer', $data);
    }

    public function gerarImagem() {


//libray
        $this->load->library('mpdf2');
        $data['nome'] = "Erlânio Freire Barros";
        $data['cpf'] = "07172603303";
        $data['imagem'] = base_url('assets/imgs/frente1.jpg');
        $data['lar'] = "1016";
        $data['alt'] = "661";
        $html = $this->load->view('pdf_cartao', $data, true);
        
        $mpdf = new mPDF('', "A-4");
        
        $mpdf->WriteHTML($html);
        $mpdf->Output();
        exit();
    }

}
