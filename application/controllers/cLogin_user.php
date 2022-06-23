<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLogin_user extends CI_Controller
{

    public function index()
    {
        $this->load->view('login_user');
    }
}

/* End of file cLogin_user.php */
