<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cCheckout extends CI_Controller
{

    public function index()
    {
        $this->load->view('Pelanggan/Layouts/head');
        $this->load->view('Pelanggan/Layouts/header');
        $this->load->view('Pelanggan/Layouts/section');
        $this->load->view('Pelanggan/checkout');
        $this->load->view('Pelanggan/Layouts/footer');
    }
}

/* End of file cCheckout.php */
