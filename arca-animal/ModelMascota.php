<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelMascota extends CI_Model {

    public function getAllMascotas() {
        return $this->db->get('mascotas')->result();
    }

    public function buscarPorNombre($nombre)
    {
        $this->db->limit(1);
        return $this->db->get_where('mascotas', ['nombre' => $nombre])->row();
    }

    public function crearRapida($nombre, $id_cliente)
    {
        $data = [
            'nombre'     => $nombre,
            'especie'    => '',
            'raza'       => '',
            'edad'       => '',
            'id_cliente' => $id_cliente,
            'tiene_cita' => 1
        ];

        $this->db->insert('mascotas', $data);
        return $this->db->insert_id();
    }
}
