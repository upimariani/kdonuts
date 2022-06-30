<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mLaporan');
    }


    public function index()
    {
        $data = array(
            'transaksi' => $this->mLaporan->grafik_transaksi()
        );
        $this->load->view('Pemilik/Layouts/head');
        $this->load->view('Pemilik/Layouts/sidebar');
        $this->load->view('Pemilik/dashboard', $data);
        $this->load->view('Pemilik/Layouts/footer');
    }
}

/* End of file cDashboard.php */
