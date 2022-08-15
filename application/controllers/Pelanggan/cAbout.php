<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cAbout extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mKatalog');
    }
    public function index()
    {
        $data = array(
            'produk' => $this->mKatalog->produk()
        );
        $this->load->view('Pelanggan/Layouts/head');
        $this->load->view('Pelanggan/Layouts/header', $data);
        $this->load->view('Pelanggan/Layouts/section');
        $this->load->view('Pelanggan/about', $data);
        $this->load->view('Pelanggan/Layouts/footer');
    }
}

/* End of file cAbout.php */
