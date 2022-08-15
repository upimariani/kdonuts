<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mLaporan');
        $this->load->model('mTransaksi');
    }

    public function index()
    {
        $data = array(
            'transaksi' => $this->mLaporan->grafik_transaksi(),
            'notif' => $this->mTransaksi->notif()
        );
        $this->load->view('Admin/Layouts/head');
        $this->load->view('Admin/Layouts/sidebar', $data);
        $this->load->view('Admin/dashboard', $data);
        $this->load->view('Admin/Layouts/footer');
    }
}

/* End of file cDashboard.php */
