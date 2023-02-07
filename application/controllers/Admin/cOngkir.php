<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cOngkir extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('mOngkir');
        $this->load->model('mTransaksi');
    }

    public function index()
    {
        $data = array(
            'ongkir' => $this->mOngkir->select(),
            'kecamatan' => $this->mOngkir->select_kecamatan(),
            'notif' => $this->mTransaksi->notif()
        );
        $this->load->view('Admin/Layouts/head');
        $this->load->view('Admin/Layouts/sidebar', $data);
        $this->load->view('Admin/ongkir', $data);
        $this->load->view('Admin/Layouts/footer');
    }
    public function create()
    {
        $data = array(
            'id_kecamatan' => $this->input->post('kecamatan'),
            'desa_kel' => $this->input->post('kel'),
            'ongkir' => $this->input->post('harga')
        );
        $this->mOngkir->insert($data);
        $this->session->set_flashdata('success', 'Data Ongkir Berhasil Ditambahkan!');
        redirect('Admin/congkir');
    }
    public function update($id)
    {
        $data = array(
            'id_kecamatan' => $this->input->post('kecamatan'),
            'desa_kel' => $this->input->post('kel'),
            'ongkir' => $this->input->post('harga')
        );
        $this->mOngkir->update($id, $data);
        $this->session->set_flashdata('success', 'Data Ongkir Berhasil Diperbaharui!');
        redirect('Admin/congkir');
    }
    public function delete($id)
    {
        $this->mOngkir->delete($id);
        $this->session->set_flashdata('success', 'Data Ongkir Berhasil Dihapus!');
        redirect('Admin/congkir');
    }

    //kecamatan'
    public function insertkecamatan()
    {
        $data = array(
            'nama_kecamatan' => $this->input->post('kecamatan'),
            'kode_pos' => $this->input->post('kode_pos')
        );
        $this->mOngkir->insert_kecamatan($data);
        $this->session->set_flashdata('success', 'Data Kecamatan Berhasil Ditambahkan!');
        redirect('Admin/congkir');
    }
    public function updatekecamatan($id)
    {
        $data = array(
            'nama_kecamatan' => $this->input->post('kecamatan'),
            'kode_pos' => $this->input->post('kode_pos')
        );
        $this->mOngkir->updatekecamatan($id, $data);
        $this->session->set_flashdata('success', 'Data Kecamatan Berhasil Diperbaharui!');
        redirect('Admin/congkir');
    }
    public function delete_kec($id)
    {
        $this->db->where('id_kecamatan', $id);
        $this->db->delete('kecamatan');

        $this->db->where('id_kecamatan', $id);
        $this->db->delete('ongkir');

        $this->session->set_flashdata('success', 'Data Kecamatan Berhasil Dihapus!');
        redirect('Admin/congkir');
    }
}

/* End of file cOngkir.php */
