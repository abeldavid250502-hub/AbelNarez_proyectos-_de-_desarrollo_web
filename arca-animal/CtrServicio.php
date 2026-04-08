<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrServicio extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('ModelServicio');
    }

    public function index() {
        $data['servicios'] = $this->ModelServicio->getAll();
        $this->load->view('servicio/ListaServicio', $data);
    }

    public function agregar() {
        $this->load->view('servicio/FormServicio');
    }

    public function registrar() {

        $horariosPost = $this->input->post('horarios');

        if (is_array($horariosPost)) {
            $horarios = implode(",", $horariosPost);
        } else {
            $horarios = "";
        }

        $data = [
            'nombre'            => $this->input->post('nombre'),
            'tipo'              => $this->input->post('tipo'),
            'descripcion'       => $this->input->post('descripcion'),
            'precio'            => $this->input->post('precio'),
            'duracion_estimada' => $this->input->post('duracion_estimada'),
            'disponibilidad'    => $this->input->post('disponibilidad'),
            'horarios'          => $horarios
        ];

        $this->ModelServicio->insertar($data);

        redirect('CtrServicio');
    }

    public function editar($id) {
        $data['servicio'] = $this->ModelServicio->getById($id);
        $this->load->view('servicio/EditarServicio', $data);
    }

    public function actualizar($id) {

        $horariosPost = $this->input->post('horarios');

        if (is_array($horariosPost)) {
            $horarios = implode(",", $horariosPost);
        } else {
            $horarios = "";
        }

        $data = [
            'nombre'            => $this->input->post('nombre'),
            'tipo'              => $this->input->post('tipo'),
            'descripcion'       => $this->input->post('descripcion'),
            'precio'            => $this->input->post('precio'),
            'duracion_estimada' => $this->input->post('duracion_estimada'),
            'disponibilidad'    => $this->input->post('disponibilidad'),
            'horarios'          => $horarios
        ];

        $this->ModelServicio->actualizar($id, $data);

        redirect('CtrServicio');
    }

    public function eliminar($id) {
        $this->ModelServicio->eliminar($id);
        redirect('CtrServicio');
    }
}
