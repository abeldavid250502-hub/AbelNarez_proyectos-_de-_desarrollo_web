<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelCita extends CI_Model {

    public function getAll() {
        $this->db->select('
            citas.*,
            clientes.nombre AS cliente,
            mascotas.nombre AS mascota,
            servicios.nombre AS servicio
        ');
        $this->db->from('citas');
        $this->db->join('clientes', 'clientes.id = citas.id_cliente', 'left');
        $this->db->join('mascotas', 'mascotas.id = citas.id_mascota', 'left');
        $this->db->join('servicios', 'servicios.id = citas.id_servicio', 'left');
        $this->db->order_by('fecha', 'ASC');
        $this->db->order_by('hora', 'ASC');
        return $this->db->get()->result();
    }

    public function getById($id) {
        $this->db->select('
            citas.*,
            clientes.nombre AS cliente,
            mascotas.nombre AS mascota,
            servicios.nombre AS servicio
        ');
        $this->db->from('citas');
        $this->db->join('clientes', 'clientes.id = citas.id_cliente', 'left');
        $this->db->join('mascotas', 'mascotas.id = citas.id_mascota', 'left');
        $this->db->join('servicios', 'servicios.id = citas.id_servicio', 'left');
        $this->db->where('citas.id_cita', $id);
        return $this->db->get()->row();
    }

    public function insertar($data) {
        return $this->db->insert('citas', $data);
    }

    public function actualizar($id, $data) {
        $this->db->where('id_cita', $id);
        return $this->db->update('citas', $data);
    }

    public function eliminar($id) {
        return $this->db->delete('citas', ['id_cita' => $id]);
    }

    public function horaOcupada($id_servicio, $fecha, $hora, $excluir = null) {
        $this->db->where('id_servicio', $id_servicio);
        $this->db->where('fecha', $fecha);
        $this->db->where('hora', $hora);
        if ($excluir) {
            $this->db->where('id_cita !=', $excluir);
        }
        return $this->db->get('citas')->row();
    }
}
