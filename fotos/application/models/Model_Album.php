<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_Album extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function inserir($data) {
        $this->db->insert('album', $data);
    }

    public function getAlbum() {
        $this->db->order_by('id_album', 'desc');
        return $this->db->get('album')->result();
    }

    public function update($id_album, $data) {
        $this->db->where('id_album', $id_album);
        $this->db->update('album', $data);
    }

    public function getAlbumWhere($id_album) {
        return $this->db->select("album.*, imagem.*, categoria.*")
                        ->join("imagem", "imagem.id_album = $id_album and album.id_album = $id_album")
                        ->join("categoria", "categoria.id_categoria = album.id_categoria")
                        ->get("album")->result();
    }

    public function getLastInsert() {
        $this->db->order_by('id_album', 'desc');
        $this->db->limit(1);
        return $this->db->get('album')->result();
    }

    public function deletar($id_album) {
        $this->db->where('id_album', $id_album);
        $this->db->delete('album');
    }

    public function getAlbumCategoriaImagem() {
        return $this->db->select("album.*, categoria.*")                        
                        ->order_by('id_album', 'desc')
                        ->join("categoria", "categoria.id_categoria = album.id_categoria")
                        ->get("album")->result();
    }

}
