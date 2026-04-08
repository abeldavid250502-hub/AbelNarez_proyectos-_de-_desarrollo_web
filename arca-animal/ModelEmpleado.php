<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelEmpleado extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function listar() {
        return $this->db->get('empleados')->result_array();
    }

    public function agregar($data) {
        $this->db->insert('empleados', $data);
        return $this->db->insert_id();
    }

    public function obtenerPorId($id) {
        return $this->db->get_where('empleados', ['id' => $id])->row_array();
    }

    public function actualizar($id, $data) {
        $this->db->where('id', $id)->update('empleados', $data);
    }

    public function eliminar($id) {
        $this->db->where('id', $id)->delete('empleados');
    }

    public function login($correo, $password) {
        $empleado = $this->db->get_where('empleados', ['correo' => $correo])->row_array();
        if (!$empleado) return false;

        if ($password === $empleado['contrasena']) {
            return (object) $empleado;
        }

        return false;
    }
}
