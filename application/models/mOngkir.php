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
        $this->db->join('kecamatan', 'ongkir.id_kecamatan = kecamatan.id_kecamatan', 'left');
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


    //kecamatan
    public function select_kecamatan()
    {
        $this->db->select('*');
        $this->db->from('kecamatan');
        return $this->db->get()->result();
    }
    public function insert_kecamatan($data)
    {
        $this->db->insert('kecamatan', $data);
    }
    public function updatekecamatan($id, $data)
    {
        $this->db->where('id_kecamatan', $id);
        $this->db->update('kecamatan', $data);
    }

    public function get_desa($id)
    {
        $this->db->select('*');
        $this->db->from('ongkir');
        $this->db->where('id_kecamatan', $id);
        return $this->db->get()->result();
    }
}

/* End of file mOngkir.php */
