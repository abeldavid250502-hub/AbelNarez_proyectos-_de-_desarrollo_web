<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrMascota extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('ModelMascota');
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
        $data['mascotas'] = $this->ModelMascota->getAllMascotas();
        $this->load->view('mascota/ListaMascota', $data);
    }

    public function agregar() {
        $data['clientes'] = $this->ModelMascota->getClientes();
        $this->load->view('mascota/FormMascota', $data);
    }

    public function guardar() {
        $data = [
            'nombre'     => $this->input->post('nombre'),
            'especie'    => $this->input->post('especie'),
            'raza'       => $this->input->post('raza'),
            'edad'       => $this->input->post('edad'),
            'id_cliente' => $this->input->post('id_cliente')
        ];

        $this->ModelMascota->insertMascota($data);
        redirect('CtrMascota');
    }

    public function editar($id) {
        $data['mascota']  = $this->ModelMascota->getMascotaById($id);
        $data['clientes'] = $this->ModelMascota->getClientes();
        $this->load->view('mascota/EditarMascota', $data);
    }

    public function actualizar($id) {
        $data = [
            'nombre'     => $this->input->post('nombre'),
            'especie'    => $this->input->post('especie'),
            'raza'       => $this->input->post('raza'),
            'edad'       => $this->input->post('edad'),
            'id_cliente' => $this->input->post('id_cliente')
        ];

        $this->ModelMascota->updateMascota($id, $data);
        redirect('CtrMascota');
    }

    public function eliminar($id) {
        $this->ModelMascota->deleteMascota($id);
        redirect('CtrMascota');
    }
}
