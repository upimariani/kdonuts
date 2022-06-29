<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mOngkir extends CI_Model
{
    public function insert($data)
    {
        $this->db->insert('ongkir', $data);
    }
    public function select()
    {
        $this->db->select('*');
        $this->db->from('ongkir');
        return $this->db->get()->result();
    }
    public function update($id, $data)
    {
        $this->db->where('id_ongkir', $id);
        $this->db->update('ongkir', $data);
    }
    public function delete($id)
    {
        $this->db->where('id_ongkir', $id);
        $this->db->delete('ongkir');
    }
}

/* End of file mOngkir.php */
