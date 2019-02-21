<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_Pessoa extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function retornaNumPessoa($email, $senha) {
        $this->db->where('email', $email);
        $this->db->where('senha', $senha);

        return $this->db->get('usuario')->num_rows();
    }

    public function retornaPessoa($email, $senha) {
        $this->db->where('email', $email);
        $this->db->where('senha', $senha);

        return $this->db->get('usuario')->result();
    }

}
