<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cOngkir extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('mOngkir');
    }

    public function index()
    {
        $data = array(
            'ongkir' => $this->mOngkir->select()
        );
        $this->load->view('Admin/Layouts/head');
        $this->load->view('Admin/Layouts/sidebar');
        $this->load->view('Admin/ongkir', $data);
        $this->load->view('Admin/Layouts/footer');
    }
    public function create()
    {
        $data = array(
            'desa_kel' => $this->input->post('kel'),
            'ongkir' => $this->input->post('harga')
        );
        $this->mOngkir->insert($data);
        $this->session->set_flashdata('success', 'Data Diskon Berhasil Ditambahkan!');
        redirect('Admin/congkir');
    }
    public function update($id)
    {
        $data = array(
            'desa_kel' => $this->input->post('kel'),
            'ongkir' => $this->input->post('harga')
        );
        $this->mOngkir->update($id, $data);
        $this->session->set_flashdata('success', 'Data Diskon Berhasil Diperbaharui!');
        redirect('Admin/congkir');
    }
    public function delete($id)
    {
        $this->mOngkir->delete($id);
        $this->session->set_flashdata('success', 'Data Diskon Berhasil Dihapus!');
        redirect('Admin/congkir');
    }
}

/* End of file cOngkir.php */
