<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed'); // linha de proteção ao controller

class Imagens extends MY_Controller { // criação da classe INICIAL DO SITE
//contrutor retornando todas as models necessárias e carregando o menu

    public function __construct() {
        parent::__construct();
        $this->load->helper('uteis_helper');
        $this->load->model('Model_Categoria', 'categoria');
        $this->load->model('Model_Album', 'album');
        $this->load->model('Model_Imagem', 'imagem');
        $this->load->library('upload');
        $this->load->helper('uteis');
    }

    public function inserir() {
        $pasta = "assets/imgs/albuns/";

        /* formatos de imagem permitidos */
        $permitidos = array(".jpg", ".jpeg", ".gif", ".png", ".bmp");
        $id_imagem = $this->input->post('id_imagem');
        if (isset($_POST)) {
            if (isset($_FILES['img1'])) {
                $nome_imagem = $_FILES['img1']['name'];
                $tamanho_imagem = $_FILES['img1']['size'];
            } else if (isset($_FILES['img2'])) {
                $nome_imagem = $_FILES['img2']['name'];
                $tamanho_imagem = $_FILES['img2']['size'];
            } else if (isset($_FILES['img3'])) {
                $nome_imagem = $_FILES['img3']['name'];
                $tamanho_imagem = $_FILES['img3']['size'];
            } else if (isset($_FILES['img4'])) {
                $nome_imagem = $_FILES['img4']['name'];
                $tamanho_imagem = $_FILES['img4']['size'];
            } else if (isset($_FILES['img5'])) {
                $nome_imagem = $_FILES['img5']['name'];
                $tamanho_imagem = $_FILES['img5']['size'];
            } else if (isset($_FILES['img6'])) {
                $nome_imagem = $_FILES['img6']['name'];
                $tamanho_imagem = $_FILES['img6']['size'];
            } else if (isset($_FILES['img7'])) {
                $nome_imagem = $_FILES['img7']['name'];
                $tamanho_imagem = $_FILES['img7']['size'];
            } else if (isset($_FILES['img8'])) {
                $nome_imagem = $_FILES['img8']['name'];
                $tamanho_imagem = $_FILES['img8']['size'];
            } else if (isset($_FILES['img9'])) {
                $nome_imagem = $_FILES['img9']['name'];
                $tamanho_imagem = $_FILES['img9']['size'];
            } else if (isset($_FILES['img10'])) {
                $nome_imagem = $_FILES['img10']['name'];
                $tamanho_imagem = $_FILES['img10']['size'];
            }



            /* pega a extensão do arquivo */
            $ext = strtolower(strrchr($nome_imagem, "."));

            /*  verifica se a extensão está entre as extensões permitidas */
            if (in_array($ext, $permitidos)) {

                /* converte o tamanho para KB */
                $tamanho = round($tamanho_imagem / 1024);


                $nome_atual = md5(uniqid(time())) . $ext; //nome que dará a imagem
                if (isset($_FILES['img1'])) {
                    $tmp = $_FILES['img1']['tmp_name']; //caminho temporário da imagem    
                    $data['img1'] = $nome_atual;
                } else if (isset($_FILES['img2'])) {
                    $tmp = $_FILES['img2']['tmp_name']; //caminho temporário da imagem
                    $data['img2'] = $nome_atual;
                } else if (isset($_FILES['img3'])) {
                    $tmp = $_FILES['img3']['tmp_name']; //caminho temporário da imagem
                    $data['img3'] = $nome_atual;
                } else if (isset($_FILES['img4'])) {
                    $tmp = $_FILES['img4']['tmp_name']; //caminho temporário da imagem
                    $data['img4'] = $nome_atual;
                } else if (isset($_FILES['img5'])) {
                    $tmp = $_FILES['img5']['tmp_name']; //caminho temporário da imagem
                    $data['img5'] = $nome_atual;
                } else if (isset($_FILES['img6'])) {
                    $tmp = $_FILES['img6']['tmp_name']; //caminho temporário da imagem
                    $data['img6'] = $nome_atual;
                } else if (isset($_FILES['img7'])) {
                    $tmp = $_FILES['img7']['tmp_name']; //caminho temporário da imagem
                    $data['img7'] = $nome_atual;
                } else if (isset($_FILES['img8'])) {
                    $tmp = $_FILES['img8']['tmp_name']; //caminho temporário da imagem
                    $data['img8'] = $nome_atual;
                } else if (isset($_FILES['img9'])) {
                    $tmp = $_FILES['img9']['tmp_name']; //caminho temporário da imagem
                    $data['img9'] = $nome_atual;
                } else if (isset($_FILES['img10'])) {
                    $tmp = $_FILES['img10']['tmp_name']; //caminho temporário da imagem
                    $data['img10'] = $nome_atual;
                }


                /* se enviar a foto, insere o nome da foto no banco de dados */
                if (move_uploaded_file($tmp, $pasta . $nome_atual)) {
                    $url = base_url('assets/imgs/albuns/');
                    echo "<div class='col-md-12'><img src='$url/" . $nome_atual . "' id='previsualizar' class='img-responsive col-md-8'></div>"; //imprime a foto na tela
                    $this->imagem->update($id_imagem, $data);
                    
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
