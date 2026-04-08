<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelServicio extends CI_Model {

    // Listar servicios
    public function getAll() {
        return $this->db->get('servicios')->result();
    }

    // Obtener servicio por ID
    public function getById($id) {
        return $this->db->get_where('servicios', ['id' => $id])->row();
    }

    // Insertar servicio
    public function insertar($data) {
        return $this->db->insert('servicios', $data);
    }

    // Actualizar servicio
    public function actualizar($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('servicios', $data);
    }

    // Eliminar servicio
    public function eliminar($id) {
        return $this->db->delete('servicios', ['id' => $id]);
    }
}
