<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_Imagem extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
    public function inserir($data) {
        $this->db->insert('imagem', $data);
    }
    
    public function update($id_imagem, $data) {
        $this->db->where('id_imagem', $id_imagem);
        $this->db->update('imagem', $data);
    }
    
  
}