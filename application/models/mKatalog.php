<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mKatalog extends CI_Model
{
    public function produk()
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->join('diskon', 'produk.id_barang = diskon.id_barang', 'left');
        return $this->db->get()->result();
    }

    public function produk_terlaris()
    {
        return $this->db->query("SELECT SUM(quantity) as qty, pemesanan.id_barang, nama_barang, harga_barang, diskon, gambar, qty_barang FROM `pemesanan` JOIN produk ON produk.id_barang=pemesanan.id_barang JOIN diskon ON produk.id_barang=diskon.id_barang GROUP BY pemesanan.id_barang ORDER BY qty DESC")->result();
    }
    public function produk_rating()
    {
        return $this->db->query("SELECT SUM(info_penilaian) / COUNT(info_penilaian) as jml , pemesanan.id_pemesanan, produk.id_barang, gambar, nama_barang, harga_barang, diskon, qty_barang FROM penilaian_pelanggan JOIN pemesanan ON pemesanan.id_pemesanan=penilaian_pelanggan.id_pemesanan JOIN produk ON produk.id_barang=pemesanan.id_barang JOIN diskon ON produk.id_barang=diskon.id_barang WHERE info_penilaian !='0'  GROUP BY pemesanan.id_barang ORDER BY jml DESC")->result();
    }
}

/* End of file mkatalog.php */
