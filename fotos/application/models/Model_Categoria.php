<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_Categoria extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function inserir($data) {
        return $this->db->insert('categoria', $data);
    }

    public function getCategoria() {
        $this->db->order_by('desc_categoria', 'desc');
        return $this->db->get('categoria')->result();
    }

    public function totalCategoria() {
        $this->db->order_by('id_categoria', 'desc');
        return $this->db->get('categoria')->num_rows();
    }

    public function retornaUltimoRegistro() {
        $this->db->order_by('id_categoria', 'desc');
        $this->db->limit(1);
        return $this->db->get('categoria')->result();
    }

    public function apagar($id_categoria) {
        $this->db->where('id_categoria', $id_categoria);
        $this->db->delete('categoria');
    }

    public function verificaExite($nome_categoria) {
        $this->db->where('desc_categoria', $nome_categoria);
        return $this->db->get('categoria')->num_rows();
    }

    public function updateCategoria($id_categoria, $data) {
        $this->db->where('id_categoria', $id_categoria);
        $this->db->update('categoria', $data);
    }

    public function getCategoriaID($id_categoria) {
        return $this->db->select("album.*, categoria.*")
                        ->join("categoria", "categoria.id_categoria = album.id_categoria and album.id_categoria = $id_categoria")
                        ->get("album")->result();
    }

}
