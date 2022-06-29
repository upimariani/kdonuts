<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mLoginUser extends CI_Model
{
    public function login_admin($username, $password)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where(array(
            'username' => $username,
            'password' => $password
        ));
        return $this->db->get()->row();
    }
}

/* End of file mLoginUser.php */
