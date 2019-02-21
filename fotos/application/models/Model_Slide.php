<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_Slide extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function inserir($data) {
        $this->db->insert('slide', $data);
    }

    public function getAll() {
        $this->db->order_by('id_slide', 'desc');
        return $this->db->get('slide')->result();
    }

    public function deletar($id_slide) {
        $this->db->where('id_slide', $id_slide);
        return $this->db->delete('slide');
    }

    public function update($id_slide, $data) {
        $this->db->where('id_slide', $id_slide);
        $this->db->update('slide', $data);
    }

    public function getAllInner() {
        return $this->db->select("categoria.*, slide.*")
                        ->join("categoria", "categoria.id_categoria = slide.id_categoria_slide") 
                        ->order_by('id_slide', 'desc')
                        ->get("slide")->result();
    }

}
