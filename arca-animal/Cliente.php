<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function listar() {
        return $this->db->get('clientes')->result();
    }

    public function agregar($data) {
        $this->db->insert('clientes', $data);
        return $this->db->insert_id();
    }

    public function obtenerPorId($id) {
        return $this->db->get_where('clientes', ['id' => $id])->row();
    }

    public function actualizar($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('clientes', $data);
    }

    public function eliminar($id) {
        $this->db->where('id', $id);
        return $this->db->delete('clientes');
    }

    public function buscar($texto) {
        $this->db->like('nombre', $texto);
        $this->db->or_like('apellido_paterno', $texto);
        $this->db->or_like('apellido_materno', $texto);
        return $this->db->get('clientes')->result();
    }
}
?>
