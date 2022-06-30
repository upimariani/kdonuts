<?php
defined('BASEPATH') or exit('No direct script access allowed');

class protect
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
    }
    public function protect()
    {
        if ($this->ci->session->userdata('id') == '') {
            $this->ci->session->set_flashdata('error', 'Anda Belum Login! Silahkan Login Terlebih Dahulu...');
            redirect('pelanggan/clogin');
        }
    }
}

/* End of file LibraryName.php */
