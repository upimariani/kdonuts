<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cKatalog extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('mKatalog');
    }

    public function index()
    {
        $data = array(
            'produk' => $this->mKatalog->produk(),
            'terlaris' => $this->mKatalog->produk_terlaris(),
            'rating' => $this->mKatalog->produk_rating()
        );
        $this->load->view('Pelanggan/Layouts/head');
        $this->load->view('Pelanggan/Layouts/header');
        $this->load->view('Pelanggan/katalog', $data);
        $this->load->view('Pelanggan/Layouts/footer');
    }
    public function shop_list()
    {
        $data = array(
            'produk' => $this->mKatalog->produk()
        );
        $this->load->view('Pelanggan/Layouts/head');
        $this->load->view('Pelanggan/Layouts/header');
        $this->load->view('Pelanggan/shop_list', $data);
        $this->load->view('Pelanggan/Layouts/footer');
    }
}

/* End of file cKatalog.php */
