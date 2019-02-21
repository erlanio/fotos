<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed'); // linha de proteção ao controller

class Inicio extends MY_Controller { // criação da classe INICIAL DO SITE
//contrutor retornando todas as models necessárias e carregando o menu

    public function __construct() {
        parent::__construct();
        $this->load->helper('uteis_helper');

    }
 
    public function index() {
        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/pagina-inicial');
    }
}