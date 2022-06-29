<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mProduk extends CI_Model
{
    public function insert($data)
    {
        $this->db->insert('produk', $data);
    }

    public function select()
    {
        $this->db->select('*');
        $this->db->from('produk');
        return $this->db->get()->result();
    }
    public function edit($id)
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->where('id_barang', $id);
        return $this->db->get()->row();
    }
    public function update($id, $data)
    {
        $this->db->where('id_barang', $id);
        $this->db->update('produk', $data);
    }
    public function delete_produk($id)
    {
        $this->db->where('id_barang', $id);
        $this->db->delete('produk');
    }
    public function delete_diskon($id)
    {
        $this->db->where('id_barang', $id);
        $this->db->delete('diskon');
    }

    public function insert_diskon($data)
    {
        $this->db->insert('diskon', $data);
    }

    public function produk()
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->join('diskon', 'produk.id_barang = diskon.id_barang', 'left');
        $this->db->where('nama_diskon=0');
        return $this->db->get()->result();
    }
    public function select_diskon()
    {
        $this->db->select('*');
        $this->db->from('diskon');
        $this->db->join('produk', 'diskon.id_barang = produk.id_barang', 'left');
        $this->db->where('diskon != 0');
        return $this->db->get()->result();
    }
    public function update_diskon($id, $data)
    {
        $this->db->where('id_barang', $id);
        $this->db->update('diskon', $data);
    }
    public function edit_diskon($id)
    {
        $this->db->select('*');
        $this->db->from('diskon');
        $this->db->where('id_diskon', $id);
        return $this->db->get()->row();
    }
    
}

/* End of file mProduk.php */
