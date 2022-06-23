<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cCart extends CI_Controller
{

    public function index()
    {
        $this->load->view('Pelanggan/Layouts/head');
        $this->load->view('Pelanggan/Layouts/header');
        $this->load->view('Pelanggan/Layouts/section');
        $this->load->view('Pelanggan/cart');
        $this->load->view('Pelanggan/Layouts/footer');
    }
}

/* End of file cCart.php */
