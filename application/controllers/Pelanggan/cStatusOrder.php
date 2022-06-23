<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cStatusOrder extends CI_Controller
{

    public function index()
    {
        $this->load->view('Pelanggan/Layouts/head');
        $this->load->view('Pelanggan/Layouts/header');
        $this->load->view('Pelanggan/Layouts/section');
        $this->load->view('Pelanggan/status_order');
        $this->load->view('Pelanggan/Layouts/footer');
    }
}

/* End of file cStatusOrder.php */
