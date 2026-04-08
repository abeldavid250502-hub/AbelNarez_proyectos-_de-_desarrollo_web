<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrLogin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('ModelEmpleado');
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function index() {
        // Si ya está logueado, lo mando a su módulo principal
        if ($this->session->userdata('logueado')) {
            $rol = $this->session->userdata('rol');

            switch ($rol) {
                case 'administrador':
                    redirect('CtrEmpleado');
                    break;
                case 'veterinario':
                    redirect('CtrHistorial');
                    break;
                case 'recepcionista':
                    redirect('CtrCliente');
                    break;
            }
        }

        $this->load->view('login');
    }

    public function procesar() {
        $correo   = $this->input->post('correo');
        $password = $this->input->post('contrasena');

        $empleado = $this->ModelEmpleado->login($correo, $password);

        if ($empleado) {
            // Datos que se guardan en sesión
            $session = [
                'id'        => $empleado->id,
                'nombre'    => $empleado->nombre,
                'rol'       => $empleado->rol,
                'logueado'  => TRUE
            ];

            $this->session->set_userdata($session);

            // Redirección por rol
            switch ($empleado->rol) {
                case 'administrador':
                    redirect('CtrEmpleado');
                    break;

                case 'veterinario':
                    redirect('CtrHistorial');
                    break;

                case 'recepcionista':
                    redirect('CtrCliente');
                    break;

                default:
                    $this->session->set_flashdata('error', 'Rol no válido');
                    redirect('CtrLogin');
            }

        } else {
            $this->session->set_flashdata('error', 'Correo o contraseña incorrectos');
            redirect('CtrLogin');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('CtrLogin');
    }
}
