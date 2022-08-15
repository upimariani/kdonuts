<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLogin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mLoginPelanggan');
        $this->load->model('mOngkir');
    }


    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('pelanggan/login_pelanggan');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $data = $this->mLoginPelanggan->login($username, $password);
            if ($data) {

                $array = array(
                    'id' => $data->id_user,
                    'nama' => $data->nama_lengkap
                );
                $this->session->set_userdata($array);
                redirect('pelanggan/ckatalog', 'refresh');
            } else {
                $this->session->set_flashdata('error', 'Username dan Password Salah!');
                redirect('pelanggan/clogin');
            }
        }
    }
    public function registrasi()
    {
        $this->form_validation->set_rules('nama_depan', 'Nama Depan', 'required|alpha');
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required');
        $this->form_validation->set_rules('desa_kel', 'Desa/Kelurahan', 'required');
        $this->form_validation->set_rules('nama_belakang', 'Nama Belakang', 'required|alpha');
        $this->form_validation->set_rules('no_hp', 'No Telepon', 'required|min_length[11]|max_length[13]');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('kode_pos', 'Kode Pos', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('rt', 'RT', 'required');
        $this->form_validation->set_rules('rw', 'RW', 'required');


        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'kecamatan' => $this->mOngkir->select_kecamatan()
            );
            $this->load->view('pelanggan/registrasi', $data);
        } else {
            $data = array(
                'username' => $this->input->post('username'),
                'id_ongkir' => $this->input->post('desa_kel'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'nama_lengkap' => $this->input->post('nama_depan') . ' ' . $this->input->post('nama_belakang'),
                'alamat' => $this->input->post('alamat'),
                'no_hp' => $this->input->post('no_hp'),
                'kode_pos' => $this->input->post('kode_pos'),
                'level_user' => '3',
                'rt' => $this->input->post('rt'),
                'rw' => $this->input->post('rw')
            );
            $this->mLoginPelanggan->register($data);
            $this->session->set_flashdata('success', 'Anda Berhasil Registrasi! Silahkan Login!');
            redirect('pelanggan/clogin');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('id');
        $this->session->set_flashdata('success', 'Anda Berhasil Logout!');
        $this->cart->destroy();
        redirect('pelanggan/clogin');
    }
}

/* End of file cLogin.php */
