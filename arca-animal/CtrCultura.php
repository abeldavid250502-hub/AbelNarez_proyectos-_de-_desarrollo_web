<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrCultura extends CI_Controller {

    // PANTALLA 1 - PROPOSITO
    public function index($origen = 'publico')
    {
        $data['interno'] = ($origen != 'publico'); // es interno si origen != publico
        $data['origen'] = $origen;
        $this->load->view('cultura/Proposito', $data);
    }

    // PANTALLA 2 - MISION Y VISION
    public function MyV($origen = 'publico')
    {
        $data['interno'] = ($origen != 'publico');
        $data['origen'] = $origen;
        $this->load->view('cultura/MisionVision', $data);
    }

    // PANTALLA 3 - FILOSOFIA
    public function Final($origen = 'publico')
    {
        $data['interno'] = ($origen != 'publico');
        $data['origen'] = $origen;
        $this->load->view('cultura/Final', $data);
    }

    // PANTALLA 4 - ORGANIGRAMA (solo si es interno)
    public function Organigrama($origen = 'publico')
    {
        if ($origen == 'publico') {
            redirect('CtrInicio');
            return;
        }

        $data['interno'] = true;
        $data['origen'] = $origen;
        $this->load->view('cultura/Organigrama', $data);
    }
}
