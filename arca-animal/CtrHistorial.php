<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrHistorial extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('ModelHistorial');
        $this->load->library('session');
        $this->load->helper('url');

        // Admin, recepcionista y veterinario
        $this->verificar_acceso(['administrador', 'recepcionista', 'veterinario']);
    }

    private function verificar_acceso($roles_permitidos = []) {
        if (!$this->session->userdata('logueado')) {
            redirect('CtrLogin');
        }

        $rol = $this->session->userdata('rol');

        if (!in_array($rol, $roles_permitidos)) {
            $data['rol'] = $rol;
            $this->load->view('errors/acceso_denegado', $data);
            exit;
        }
    }

    public function index() {
        $data['historiales'] = $this->ModelHistorial->listar();
        $this->load->view('historial/ListaHistorial', $data);
    }

    public function registrar() {
        if ($this->input->post()) {
            $data = [
                'id_mascota'     => $this->input->post('id_mascota'),
                'fecha'          => $this->input->post('fecha'),
                'motivo'         => $this->input->post('motivo'),
                'diagnostico'    => $this->input->post('diagnostico'),
                'tratamiento'    => $this->input->post('tratamiento'),
                'responsable'    => $this->input->post('responsable'),
                'observaciones'  => $this->input->post('observaciones')
            ];
            $this->ModelHistorial->agregar($data);
        }
        redirect('CtrHistorial');
    }

    public function actualizar($id) {
        if ($this->input->post()) {
            $data = [
                'fecha'          => $this->input->post('fecha'),
                'motivo'         => $this->input->post('motivo'),
                'diagnostico'    => $this->input->post('diagnostico'),
                'tratamiento'    => $this->input->post('tratamiento'),
                'responsable'    => $this->input->post('responsable'),
                'observaciones'  => $this->input->post('observaciones')
            ];
            $this->ModelHistorial->actualizar($id, $data);
        }
        redirect('CtrHistorial');
    }

    public function eliminar($id) {
        $this->ModelHistorial->eliminar($id);
        redirect('CtrHistorial');
    }

    public function ver($id) {
        $data['historial'] = $this->ModelHistorial->obtenerPorId($id);
        $this->load->view('historial/EditarHistorial', $data);
    }
}
