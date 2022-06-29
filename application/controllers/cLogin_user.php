<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLogin_user extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('mLoginUser');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Username', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login_user');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $data = $this->mLoginUser->login_admin($username, $password);
            if ($data) {
                $id = $data->id_user;
                $array = array(
                    'id' => $id
                );
                $this->session->set_userdata($array);
                redirect('Admin/cDashboard');
            } else {
                $this->session->set_flashdata('error', 'Username dan Password Salah');
                redirect('clogin_user');
            }
        }
    }
}

/* End of file cLogin_user.php */
