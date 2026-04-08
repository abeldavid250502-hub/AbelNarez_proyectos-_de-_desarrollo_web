<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelHistorial extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database(); // Usa la conexión de CodeIgniter
    }

    //  Listar historiales
    public function listar() {
        return $this->db->get('historial_clinico')->result_array();
    }

    //  Agregar nuevo historial
    public function agregar($data) {
        $this->db->insert('historial_clinico', $data);
    }

    //  Actualizar historial
    public function actualizar($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('historial_clinico', $data);
    }

    //  Eliminar historial
    public function eliminar($id) {
        $this->db->where('id', $id);
        $this->db->delete('historial_clinico');
    }

    //  Obtener historial por ID
    public function obtenerPorId($id) {
        return $this->db->get_where('historial_clinico', ['id' => $id])->row_array();
    }
}
?>
