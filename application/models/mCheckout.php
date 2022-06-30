<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mCheckout extends CI_Model
{
    public function pelanggan()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id_user', $this->session->userdata('id'));
        return $this->db->get()->row();
    }
    public function transaksi($data)
    {
        $this->db->insert('transaksi', $data);
    }
    public function detail_transaksi($data)
    {
        $this->db->insert('pemesanan', $data);
    }
    public function stok($id, $data)
    {
        $this->db->where('id_barang', $id);
        $this->db->update('produk', $data);
    }
    public function pengiriman($data)
    {
        $this->db->insert('pengiriman', $data);
    }
    public function penilaian($data)
    {
        $this->db->insert('penilaian_pelanggan', $data);
    }
}

/* End of file mCheckout.php */
