<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cStatusOrder extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mTransaksi');
    }


    public function index()
    {
        $this->protect->protect();
        $data = array(
            'transaksi' => $this->mTransaksi->status_order()
        );
        $this->load->view('Pelanggan/Layouts/head');
        $this->load->view('Pelanggan/Layouts/header');
        $this->load->view('Pelanggan/Layouts/section');
        $this->load->view('Pelanggan/status_order', $data);
        $this->load->view('Pelanggan/Layouts/footer');
    }
    public function detail_pesanan($id)
    {
        $data = array(
            'detail' => $this->mTransaksi->detail_pesanan($id)
        );
        $this->load->view('Pelanggan/Layouts/head');
        $this->load->view('Pelanggan/Layouts/header');
        $this->load->view('Pelanggan/Layouts/section');
        $this->load->view('Pelanggan/detail_pesanan', $data);
        $this->load->view('Pelanggan/Layouts/footer');
    }
    public function bayar($id)
    {
        $config['upload_path']          = './asset/pembayaran';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 5000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) {
            $data = array(
                'detail' => $this->mTransaksi->detail_pesanan($id),
                'error' => $this->upload->display_errors()
            );
            $this->load->view('Pelanggan/Layouts/head');
            $this->load->view('Pelanggan/Layouts/header');
            $this->load->view('Pelanggan/Layouts/section');
            $this->load->view('Pelanggan/detail_pesanan', $data);
            $this->load->view('Pelanggan/Layouts/footer');
        } else {
            $upload_data = $this->upload->data();
            $data = array(
                'pembayaran' => $upload_data['file_name']
            );
            $this->mTransaksi->bayar($id, $data);

            $status = array(
                'status_pengiriman' => '1'
            );
            $this->mTransaksi->status($id, $status);


            $this->session->set_flashdata('success', 'Data Bukti Pembayaran Berhasil Dikirim!');
            redirect('pelanggan/cstatusorder/detail_pesanan/' . $id);
        }
    }
    public function diterima($id)
    {
        $data = array(
            'status_pengiriman' => '4'
        );
        $this->mTransaksi->status($id, $data);
        $this->session->set_flashdata('success', 'Pesanan Sudah Diterima! Pesanan Selesai...');
        redirect('pelanggan/cstatusorder/detail_pesanan/' . $id);
    }
    public function rating($id)
    {
        $data = array(
            'id_penilaian' => $this->input->post('id'),
            'info_penilaian' => $this->input->post('rating')
        );
        $this->db->where('id_penilaian', $data['id_penilaian']);
        $this->db->update('penilaian_pelanggan', $data);
        redirect('pelanggan/cstatusorder/detail_pesanan/' . $id);
    }
}

/* End of file cStatusOrder.php */
