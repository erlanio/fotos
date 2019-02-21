<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_Perfil extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
    public function update($data, $id_usuario) {
        $this->db->where('id_usuario', $id_usuario);        
        $this->db->update('usuario', $data);
    }
    
    public function get($id_usuario) {
        $this->db->where('id_usuario', $id_usuario);
        return $this->db->get('usuario')->result();
    }
    
    public function getFotografo() {
        $this->db->where('nivel_usuario', 1);
        return $this->db->get('usuario')->result();
    }
    
    public function verificaEmail($email) {
        $this->db->where('email', $email);
        return $this->db->get('usuario')->num_rows();
    }
    
    public function resetPassword($email, $data) {
        $this->db->where('email', $email);
        $this->db->update('usuario', $data);
    }
    
}