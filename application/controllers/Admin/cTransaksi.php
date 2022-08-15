<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cTransaksi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mTransaksi');
    }

    public function index()
    {
        $data = array(
            'transaksi' => $this->mTransaksi->transaksi(),
            'notif' => $this->mTransaksi->notif()
        );
        $this->load->view('Admin/Layouts/head');
        $this->load->view('Admin/Layouts/sidebar', $data);
        $this->load->view('Admin/pesanan_masuk', $data);
        $this->load->view('Admin/Layouts/footer');
    }
    public function konfirmasi()
    {
        $data = array(
            'transaksi' => $this->mTransaksi->transaksi(),
            'notif' => $this->mTransaksi->notif()
        );
        $this->load->view('Admin/Layouts/head');
        $this->load->view('Admin/Layouts/sidebar', $data);
        $this->load->view('Admin/konfirmasi_pembayaran', $data);
        $this->load->view('Admin/Layouts/footer');
    }
    public function diproses()
    {
        $data = array(
            'transaksi' => $this->mTransaksi->transaksi(),
            'notif' => $this->mTransaksi->notif()
        );
        $this->load->view('Admin/Layouts/head');
        $this->load->view('Admin/Layouts/sidebar', $data);
        $this->load->view('Admin/pesanan_diproses', $data);
        $this->load->view('Admin/Layouts/footer');
    }
    public function dikirim()
    {
        $data = array(
            'transaksi' => $this->mTransaksi->transaksi(),
            'notif' => $this->mTransaksi->notif()
        );
        $this->load->view('Admin/Layouts/head');
        $this->load->view('Admin/Layouts/sidebar', $data);
        $this->load->view('Admin/pesanan_dikirim', $data);
        $this->load->view('Admin/Layouts/footer');
    }
    public function selesai()
    {
        $data = array(
            'transaksi' => $this->mTransaksi->transaksi(),
            'notif' => $this->mTransaksi->notif()
        );
        $this->load->view('Admin/Layouts/head');
        $this->load->view('Admin/Layouts/sidebar', $data);
        $this->load->view('Admin/pesanan_selesai', $data);
        $this->load->view('Admin/Layouts/footer');
    }
    public function detail_pesanan($id)
    {
        $data = array(
            'detail' => $this->mTransaksi->detail_pesanan($id),
            'notif' => $this->mTransaksi->notif()
        );
        $this->load->view('Admin/Layouts/head');
        $this->load->view('Admin/Layouts/sidebar', $data);
        $this->load->view('Admin/detail_pesanan', $data);
        $this->load->view('Admin/Layouts/footer');
    }
    public function konfirmasi_pembayaran($id)
    {
        $data = array(
            'status_pengiriman' => '2'
        );
        $this->db->where('id_transaksi', $id);
        $this->db->update('pengiriman', $data);
        $this->session->set_flashdata('success', 'Pembayaran Pesanan Berhasil Dikonfirmasi!');
        redirect('admin/ctransaksi/konfirmasi', 'refresh');
    }
    public function proses_kirim($id)
    {
        $data = array(
            'status_pengiriman' => '3'
        );
        $this->db->where('id_transaksi', $id);
        $this->db->update('pengiriman', $data);
        $this->session->set_flashdata('success', 'Pembayaran Pesanan Berhasil Dikirim!');
        redirect('admin/ctransaksi/konfirmasi', 'refresh');
    }
}

/* End of file cTransaksi.php */
