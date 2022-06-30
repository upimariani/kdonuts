<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLaporan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mLaporan');
    }


    public function transaksi()
    {
        $this->load->view('Pemilik/Layouts/head');
        $this->load->view('Pemilik/Layouts/sidebar');
        $this->load->view('Pemilik/laporan_transaksi');
        $this->load->view('Pemilik/Layouts/footer');
    }
    public function produk()
    {
        $this->load->view('Pemilik/Layouts/head');
        $this->load->view('Pemilik/Layouts/sidebar');
        $this->load->view('Pemilik/laporan_produk');
        $this->load->view('Pemilik/Layouts/footer');
    }

    public function transaksi_tahunan()
    {
        $this->load->view('Pemilik/Layouts/head');
        $this->load->view('Pemilik/Layouts/sidebar');
        $this->load->view('Pemilik/transaksi/tahunan');
        $this->load->view('Pemilik/Layouts/footer');
    }

    //laporan transaksi
    public function lap_harian_transaksi()
    {
        $tanggal = $this->input->post('tanggal');
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');

        $data = array(
            'tanggal' => $tanggal,
            'bulan' => $bulan,
            'tahun' => $tahun,
            'laporan' => $this->mLaporan->lap_harian_transaksi($tanggal, $bulan, $tahun)
        );
        $this->load->view('Pemilik/Layouts/head');
        $this->load->view('Pemilik/Layouts/sidebar');
        $this->load->view('Pemilik/transaksi/harian', $data);
        $this->load->view('Pemilik/Layouts/footer');
    }
    public function lap_bulanan_transaksi()
    {
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');

        $data = array(
            'bulan' => $bulan,
            'tahun' => $tahun,
            'laporan' => $this->mLaporan->lap_bulanan_transaksi($bulan, $tahun)
        );
        $this->load->view('Pemilik/Layouts/head');
        $this->load->view('Pemilik/Layouts/sidebar');
        $this->load->view('Pemilik/transaksi/bulanan', $data);
        $this->load->view('Pemilik/Layouts/footer');
    }
    public function lap_tahunan_transaksi()
    {
        $tahun = $this->input->post('tahun');

        $data = array(
            'tahun' => $tahun,
            'laporan' => $this->mLaporan->lap_tahunan_transaksi($tahun)
        );
        $this->load->view('Pemilik/Layouts/head');
        $this->load->view('Pemilik/Layouts/sidebar');
        $this->load->view('Pemilik/transaksi/tahunan', $data);
        $this->load->view('Pemilik/Layouts/footer');
    }

    //laporan produk
    public function lap_harian_produk()
    {
        $tanggal = $this->input->post('tanggal');
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');

        $data = array(
            'tanggal' => $tanggal,
            'bulan' => $bulan,
            'tahun' => $tahun,
            'laporan' => $this->mLaporan->lap_harian_produk($tanggal, $bulan, $tahun)
        );
        $this->load->view('Pemilik/Layouts/head');
        $this->load->view('Pemilik/Layouts/sidebar');
        $this->load->view('Pemilik/produk/harian', $data);
        $this->load->view('Pemilik/Layouts/footer');
    }
    public function lap_bulanan_produk()
    {
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');

        $data = array(
            'bulan' => $bulan,
            'tahun' => $tahun,
            'laporan' => $this->mLaporan->lap_bulanan_produk($bulan, $tahun)
        );
        $this->load->view('Pemilik/Layouts/head');
        $this->load->view('Pemilik/Layouts/sidebar');
        $this->load->view('Pemilik/produk/bulanan', $data);
        $this->load->view('Pemilik/Layouts/footer');
    }
    public function lap_tahunan_produk()
    {
        $tahun = $this->input->post('tahun');
        $data = array(
            'tahun' => $tahun,
            'laporan' => $this->mLaporan->lap_tahunan_produk($tahun)
        );
        $this->load->view('Pemilik/Layouts/head');
        $this->load->view('Pemilik/Layouts/sidebar');
        $this->load->view('Pemilik/produk/tahunan', $data);
        $this->load->view('Pemilik/Layouts/footer');
    }
}

/* End of file cLaporan.php */
