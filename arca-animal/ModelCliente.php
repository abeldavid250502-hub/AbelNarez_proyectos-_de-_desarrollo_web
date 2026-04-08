<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelCliente extends CI_Model {

    public function getAll() {
        return $this->db->get('clientes')->result();
    }

    public function getById($id) {
        return $this->db->get_where('clientes', ['id' => $id])->row();
    }

    public function insertar($data) {
        return $this->db->insert('clientes', $data);
    }

    public function actualizar($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('clientes', $data);
    }

    public function eliminar($id) {
        return $this->db->delete('clientes', ['id' => $id]);
    }

    public function buscarPorNombre($nombre)
    {
        $this->db->limit(1);
        return $this->db->get_where('clientes', ['nombre' => $nombre])->row();
    }

    public function crearRapido($nombre)
    {
        $data = [
            'nombre'            => $nombre,
            'apellido_paterno'  => '',
            'apellido_materno'  => '',
            'domicilio'         => '',
            'telefono'          => '',
            'correo'            => '',
            'tiene_cita'        => 1
        ];

        $this->db->insert('clientes', $data);
        return $this->db->insert_id();
    }
}
