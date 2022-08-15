<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDiskon extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mProduk');
        $this->load->model('mTransaksi');
    }


    public function index()
    {
        $data = array(
            'diskon' => $this->mProduk->select_diskon(),
            'notif' => $this->mTransaksi->notif()
        );
        $this->load->view('Admin/Layouts/head');
        $this->load->view('Admin/Layouts/sidebar', $data);
        $this->load->view('Admin/diskon', $data);
        $this->load->view('Admin/Layouts/footer');
    }
    public function createDiskon()
    {
        $this->form_validation->set_rules('produk', 'Produk', 'required');
        $this->form_validation->set_rules('harga', 'Harga Produk', 'required');
        $this->form_validation->set_rules('nama_diskon', 'Nama Diskon', 'required');
        $this->form_validation->set_rules('besar', 'Besar Diskon', 'required');


        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'produk' => $this->mProduk->produk(),
                'notif' => $this->mTransaksi->notif()
            );
            $this->load->view('Admin/Layouts/head');
            $this->load->view('Admin/Layouts/sidebar', $data);
            $this->load->view('Admin/creatediskon', $data);
            $this->load->view('Admin/Layouts/footer');
        } else {
            $data = array(
                'id_barang' => $this->input->post('produk'),
                'nama_diskon' => $this->input->post('nama_diskon'),
                'diskon' => $this->input->post('besar')
            );
            $this->mProduk->update_diskon($data['id_barang'], $data);
            $this->session->set_flashdata('success', 'Data Diskon Berhasil Ditambahkan!');
            redirect('admin/cdiskon', 'refresh');
        }
    }
    public function edit($id_diskon)
    {
        $this->form_validation->set_rules('nama_diskon', 'Nama Diskon', 'required');
        $this->form_validation->set_rules('besar', 'Besar Diskon', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'produk' => $this->mProduk->produk(),
                'diskon' => $this->mProduk->edit_diskon($id_diskon),
                'notif' => $this->mTransaksi->notif()
            );
            $this->load->view('Admin/Layouts/head');
            $this->load->view('Admin/Layouts/sidebar', $data);
            $this->load->view('Admin/updateDiskon', $data);
            $this->load->view('Admin/Layouts/footer');
        } else {
            $data = array(
                'nama_diskon' => $this->input->post('nama_diskon'),
                'diskon' => $this->input->post('besar')
            );
            $this->db->where('id_diskon', $id_diskon);
            $this->db->update('diskon', $data);
            $this->session->set_flashdata('success', 'Data Diskon Berhasil Diperbaharui!');
            redirect('admin/cdiskon', 'refresh');
        }
    }
    public function delete($id_diskon)
    {
        $data = array(
            'nama_diskon' => '0',
            'diskon' => '0'
        );
        $this->db->where('id_diskon', $id_diskon);
        $this->db->update('diskon', $data);
        $this->session->set_flashdata('success', 'Data Diskon Berhasil Dihapus!');
        redirect('admin/cdiskon', 'refresh');
    }

    // public function hitung()
    // {
    //     $loan = $this->input->post('loan');
    //     $type = $this->input->post('type');

    //     if ($type == '1') {
    //         $bunga = array(0.15, 0.50, 0.99, 0.99);
    //         $bulan = array(3, 6, 12, 24);
    //         for ($j = 0; $j < sizeof($bunga); $j++) {
    //             // echo $bulan[$j] . '<br>';
    //             // echo $bunga[$j] . '<br>';
    //             $bunga_loan = ($bunga[$j] / 100) * $loan;
    //             $tenor = $bunga_loan + $loan;
    //             $per = $tenor / $bulan[$j];

    //             echo '----Bulan Ke-' . $bulan[$j] . '----';
    //             echo round($per) . '<br>';
    //         }
    //     } else if ($type == '2') {
    //         $bunga = 1;
    //         $bulan_awal = 2;
    //         $bulan_akhir = 12;
    //         $range = 2;
    //     } else if ($type == '3') {
    //         $bunga = 0.5;
    //         $bulan_awal = 5;
    //         $bulan_akhir = 24;
    //         $range = 4;
    //     }
    // }
}

/* End of file cDiskon.php */
