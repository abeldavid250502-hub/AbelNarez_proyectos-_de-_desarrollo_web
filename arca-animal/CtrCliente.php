<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrCliente extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Cliente');
        $this->load->helper(['url', 'form']);
        $this->load->library('session');

        // Solo administrador y recepcionista
        $this->verificar_acceso(['administrador', 'recepcionista']);
    }

    /**
     * Verifica que haya sesión y que el rol esté permitido.
     */
    private function verificar_acceso($roles_permitidos = []) {
        if (!$this->session->userdata('logueado')) {
            redirect('CtrLogin');
        }

        $rol = $this->session->userdata('rol');

        if (!in_array($rol, $roles_permitidos)) {
            $data['rol'] = $rol;
            $this->load->view('errors/acceso_denegado', $data);
            exit; // Detener el controlador
        }
    }

    public function index() {
        $busqueda = $this->input->get('buscar');

        if (!empty($busqueda)) {
            $data['clientes'] = $this->Cliente->buscar($busqueda);
        } else {
            $data['clientes'] = $this->Cliente->listar();
        }

        $data['busqueda'] = $busqueda;

        $this->load->view('clientes/ListaCliente', $data);
    }

    public function agregar() {
        if ($this->input->post()) {
            $data = [
                'nombre'            => $this->input->post('nombre'),
                'apellido_paterno'  => $this->input->post('apellido_paterno'),
                'apellido_materno'  => $this->input->post('apellido_materno'),
                'domicilio'         => $this->input->post('domicilio'),
                'telefono'          => $this->input->post('telefono'),
                'correo'            => $this->input->post('correo')
            ];

            $this->Cliente->agregar($data);
        }

        redirect('CtrCliente');
    }

    public function editar($id = null) {
        if ($this->input->post()) {
            $data = [
                'nombre'            => $this->input->post('nombre'),
                'apellido_paterno'  => $this->input->post('apellido_paterno'),
                'apellido_materno'  => $this->input->post('apellido_materno'),
                'domicilio'         => $this->input->post('domicilio'),
                'telefono'          => $this->input->post('telefono'),
                'correo'            => $this->input->post('correo')
            ];

            $this->Cliente->actualizar($this->input->post('id'), $data);
            redirect('CtrCliente');

        } else {
            $data['cliente'] = $this->Cliente->obtenerPorId($id);
            $this->load->view('clientes/EditarCliente', $data);
        }
    }

    public function eliminar($id) {
        $this->Cliente->eliminar($id);
        redirect('CtrCliente');
    }
}
