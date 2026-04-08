<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrCita extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('ModelCita');
        $this->load->model('ModelCliente');
        $this->load->model('ModelMascota');
        $this->load->model('ModelServicio');
    }

    // LISTAR CITAS
    public function index() {
        $data['citas'] = $this->ModelCita->getAll();
        $this->load->view('cita/ListaCita', $data);
    }

    // FORMULARIO DE NUEVA CITA
    public function agregar() {
        $data['servicios'] = $this->ModelServicio->getAll();
        $this->load->view('cita/FormCitaCliente', $data);
    }

    // REGISTRAR CITA
    public function registrarCliente() 
    {
        $nombre_cliente = $this->input->post('nombre_cliente');
        $nombre_mascota = $this->input->post('nombre_mascota');
        $id_servicio    = $this->input->post('id_servicio');
        $fecha          = $this->input->post('fecha');
        $hora           = $this->input->post('hora');

        // BUSCAR O CREAR CLIENTE
        $cliente = $this->ModelCliente->buscarPorNombre($nombre_cliente);
        if (!$cliente) {
            $id_cliente = $this->ModelCliente->crearRapido($nombre_cliente);
        } else {
            $id_cliente = $cliente->id;
        }

        // BUSCAR O CREAR MASCOTA
        $mascota = $this->ModelMascota->buscarPorNombre($nombre_mascota);
        if (!$mascota) {
            $id_mascota = $this->ModelMascota->crearRapida($nombre_mascota, $id_cliente);
        } else {
            $id_mascota = $mascota->id;
        }

        // VALIDAR HORARIO
        $ocupada = $this->ModelCita->horaOcupada($id_servicio, $fecha, $hora);
        if ($ocupada) {
            echo "<script>alert('El horario ya está ocupado.');history.back();</script>";
            return;
        }

        // GUARDAR CITA
        $data = [
            'id_cliente'  => $id_cliente,
            'id_mascota'  => $id_mascota,
            'id_servicio' => $id_servicio,
            'fecha'       => $fecha,
            'hora'        => $hora,
            'estado'      => 'Pendiente'
        ];

        $this->ModelCita->insertar($data);

        // REGRESAR A LISTA DE CITAS
        redirect('CtrCita');
    }

    // FORMULARIO EDITAR CITA
    public function editar($id)
    {
        $data['cita']      = $this->ModelCita->getById($id);
        $data['servicios'] = $this->ModelServicio->getAll();
        $this->load->view('cita/FormEditarCita', $data);
    }

    // ACTUALIZAR CITA
    public function actualizar($id)
    {
        $id_servicio = $this->input->post('id_servicio');
        $fecha       = $this->input->post('fecha');
        $hora        = $this->input->post('hora');

        $ocupada = $this->ModelCita->horaOcupada($id_servicio, $fecha, $hora, $id);

        if ($ocupada) {
            echo "<script>alert('Ese horario ya está ocupado.');history.back();</script>";
            return;
        }

        $data = [
            'id_servicio' => $id_servicio,
            'fecha'       => $fecha,
            'hora'        => $hora,
        ];

        $this->ModelCita->actualizar($id, $data);

        redirect('CtrCita');
    }

    // FINALIZAR CITA
    public function finalizar($id)
    {
        $this->ModelCita->actualizar($id, ['estado' => 'Finalizada']);
        redirect('CtrCita');
    }

    // ELIMINAR CITA
    public function eliminar($id)
    {
        $this->ModelCita->eliminar($id);
        redirect('CtrCita');
    }
}
