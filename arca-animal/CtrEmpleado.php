<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrEmpleado extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('ModelEmpleado');
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function index() {
        $data['empleados'] = $this->ModelEmpleado->listar();
        $this->load->view('empleado/ListaEmpleado', $data);
    }

    public function registrar() {
        $data = [
            'nombre'            => $this->input->post('nombre'),
            'apellido_paterno'  => $this->input->post('apellido_paterno'),
            'apellido_materno'  => $this->input->post('apellido_materno'),
            'rol'               => $this->input->post('rol'),
            'telefono'          => $this->input->post('telefono'),
            'correo'            => $this->input->post('correo'),
            'cedula'            => $this->input->post('cedula'),
            'usuario'           => $this->input->post('usuario'),
            'contrasena'        => $this->input->post('contrasena')
        ];

        $this->ModelEmpleado->agregar($data);
        redirect('CtrEmpleado');
    }

    public function editar($id) {
        $empleado = $this->ModelEmpleado->obtenerPorId($id);

        if (!$empleado) show_404();

        $data['empleado'] = $empleado;
        $this->load->view('empleado/EditarEmpleado', $data);
    }

    public function actualizar($id) {
        
        $data = [
            'nombre'            => $this->input->post('nombre'),
            'apellido_paterno'  => $this->input->post('apellido_paterno'),
            'apellido_materno'  => $this->input->post('apellido_materno'),
            'rol'               => $this->input->post('rol'),
            'telefono'          => $this->input->post('telefono'),
            'correo'            => $this->input->post('correo'),
            'cedula'            => $this->input->post('cedula'),
            'usuario'           => $this->input->post('usuario')
        ];

        // Si escribió nueva contraseña
        if ($this->input->post('contrasena') !== "") {
            $data['contrasena'] = $this->input->post('contrasena');
        }

        $this->ModelEmpleado->actualizar($id, $data);
        redirect('CtrEmpleado');
    }

    public function eliminar($id) {
        $this->ModelEmpleado->eliminar($id);
        redirect('CtrEmpleado');
    }
}
