<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed'); // linha de proteção ao controller

class Categoria extends MY_Controller { // criação da classe INICIAL DO SITE
//contrutor retornando todas as models necessárias e carregando o menu

    public function __construct() {
        parent::__construct();
        $this->load->helper('uteis_helper');
        $this->load->model('Model_Categoria', 'categoria');
    }

    public function index() {
        $data['categoria'] = $this->categoria->getCategoria();

        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/new-categoria', $data);
    }

    public function inserir() {
        $desc_categoria = $this->input->post('desc-categoria');
        $verificaExiste = false;
        if ($this->categoria->verificaExite($desc_categoria) > 0) {





            echo "<script language=\"javascript\">\n\n

                bootbox.alert (\"Ops...Categoria já cadastrada\");\n\n

                </script>";
        } else {
            $data['desc_categoria'] = $desc_categoria;
            $this->categoria->inserir($data);

            $data['ultimo'] = $this->categoria->retornaUltimoRegistro();
            foreach ($data['ultimo'] as $dados) {
                $ultimoRegistro = $dados->id_categoria;
            }

            echo "<tr id='$ultimoRegistro'>"
            . "<th id='$ultimoRegistro'>$desc_categoria</th>"
            . "<th><i class='glyphicon glyphicon-edit' onclick=\"editarCategoria('$ultimoRegistro','$desc_categoria');\")></i></th>"
            . "<th><i class='glyphicon glyphicon-trash' onclick=\"apagarCategoria('$ultimoRegistro','$desc_categoria');\")></i></th>"
            . "</tr>";
        }
    }

    public function apagar() {
        $id_categoria = $this->input->post('id_categoria');
        $this->categoria->apagar($id_categoria);
    }

    public function alterar() {
        $id_categoria = $this->input->post('id_categoria');
        $data['desc_categoria'] = $this->input->post('desc_categoria');
        $desc_categoria = $this->input->post('desc_categoria');

        if ($this->categoria->verificaExite($desc_categoria) > 0) {
            echo "<script language=\"javascript\">\n\n
                bootbox.alert (\"Ops...Categoria já cadastrada\");\n\n
                </script>";
         
        } else {
            $this->categoria->updateCategoria($id_categoria, $data);
            echo "<script language=\"javascript\">\n\n
                bootbox.alert (\"Sucesso!\");\n\n
                </script>";
        }
    }

}
