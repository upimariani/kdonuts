<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mLoginPelanggan extends CI_Model
{
    public function register($data)
    {
        $this->db->insert('user', $data);
    }
    public function login($username, $password)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where(
            array(
                'username' => $username,
                'password' => $password,
                'level_user' => '3'
            )
        );
        return $this->db->get()->row();
    }
}

/* End of file mLoginPelanggan.php */
