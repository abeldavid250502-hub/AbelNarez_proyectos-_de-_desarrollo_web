<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrMascota extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('ModelMascota'); // Cargamos el modelo personalizado
    }

    public function index() {
        $data['mascotas'] = $this->ModelMascota->getAllMascotas();
        $this->load->view('ListaMascota', $data);
    }

    public function agregar() {
        if ($this->input->post()) {
            $data = array(
                'nombre' => $this->input->post('nombre'),
                'especie' => $this->input->post('especie'),
                'raza' => $this->input->post('raza'),
                'edad' => $this->input->post('edad'),
                'id_cliente' => $this->input->post('id_cliente')
            );
            $this->ModelMascota->insertMascota($data);
            redirect('CtrMascota');
        } else {
            $data['clientes'] = $this->ModelMascota->getClientes();
            $this->load->view('FormMascota', $data);
        }
    }

    public function editar($id) {
        $data['mascota'] = $this->ModelMascota->getMascotaById($id);
        $data['clientes'] = $this->ModelMascota->getClientes();

        if ($this->input->post()) {
            $updateData = array(
                'nombre' => $this->input->post('nombre'),
                'especie' => $this->input->post('especie'),
                'raza' => $this->input->post('raza'),
                'edad' => $this->input->post('edad'),
                'id_cliente' => $this->input->post('id_cliente')
            );
            $this->ModelMascota->updateMascota($id, $updateData);
            redirect('CtrMascota');
        } else {
            $this->load->view('EditarMascota', $data);
        }
    }

    public function eliminar($id) {
        $this->ModelMascota->deleteMascota($id);
        redirect('CtrMascota');
    }
}
