<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mLaporan extends CI_Model
{
    // public function laporan()
    // {
    //     $this->db->select('SUM(total_bayar) as total, tgl_transaksi');
    //     $this->db->from('transaksi');
    //     $this->db->where('transaksi.status_order=4');
    //     $this->db->group_by('tgl_transaksi');
    //     $this->db->order_by('total', 'desc');

    //     return $this->db->get()->result();
    // }
    //---------laporan transaksi------------
    public function lap_harian_transaksi($tanggal, $bulan, $tahun)
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('user', 'transaksi.id_user = user.id_user', 'left');
        $this->db->join('pengiriman', 'transaksi.id_transaksi = pengiriman.id_transaksi', 'left');
        $this->db->where('pengiriman.status_pengiriman=4');
        $this->db->where('DAY(transaksi.tanggal_order)', $tanggal);
        $this->db->where('MONTH(transaksi.tanggal_order)', $bulan);
        $this->db->where('YEAR(transaksi.tanggal_order)', $tahun);
        return $this->db->get()->result();
    }
    public function lap_bulanan_transaksi($bulan, $tahun)
    {

        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('user', 'transaksi.id_user = user.id_user', 'left');
        $this->db->join('pengiriman', 'transaksi.id_transaksi = pengiriman.id_transaksi', 'left');
        $this->db->where('pengiriman.status_pengiriman=4');
        $this->db->where('MONTH(transaksi.tanggal_order)', $bulan);
        $this->db->where('YEAR(transaksi.tanggal_order)', $tahun);
        return $this->db->get()->result();
    }
    public function lap_tahunan_transaksi($tahun)
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('user', 'transaksi.id_user = user.id_user', 'left');
        $this->db->join('pengiriman', 'transaksi.id_transaksi = pengiriman.id_transaksi', 'left');
        $this->db->where('pengiriman.status_pengiriman=4');
        $this->db->where('YEAR(transaksi.tanggal_order)', $tahun);
        return $this->db->get()->result();
    }


    //------------------------laporan produk-------------------------------
    public function lap_harian_produk($tanggal, $bulan, $tahun)
    {
        $this->db->select('*');
        $this->db->from('pemesanan');
        $this->db->join('transaksi', 'pemesanan.id_transaksi = transaksi.id_transaksi', 'left');
        $this->db->join('produk', 'pemesanan.id_barang = produk.id_barang', 'left');
        $this->db->join('pengiriman', 'pengiriman.id_transaksi = transaksi.id_transaksi', 'left');
        $this->db->join('diskon', 'diskon.id_barang = produk.id_barang', 'left');

        $this->db->where('status_pengiriman=4');
        $this->db->where('DAY(transaksi.tanggal_order)', $tanggal);
        $this->db->where('MONTH(transaksi.tanggal_order)', $bulan);
        $this->db->where('YEAR(transaksi.tanggal_order)', $tahun);
        return $this->db->get()->result();
    }
    public function lap_bulanan_produk($bulan, $tahun)
    {
        $this->db->select('*');
        $this->db->from('pemesanan');
        $this->db->join('transaksi', 'pemesanan.id_transaksi = transaksi.id_transaksi', 'left');
        $this->db->join('produk', 'pemesanan.id_barang = produk.id_barang', 'left');
        $this->db->join('pengiriman', 'pengiriman.id_transaksi = transaksi.id_transaksi', 'left');
        $this->db->join('diskon', 'diskon.id_barang = produk.id_barang', 'left');
        $this->db->where('status_pengiriman=4');
        $this->db->where('MONTH(transaksi.tanggal_order)', $bulan);
        $this->db->where('YEAR(transaksi.tanggal_order)', $tahun);
        return $this->db->get()->result();
    }
    public function lap_tahunan_produk($tahun)
    {
        $this->db->select('*');
        $this->db->from('pemesanan');
        $this->db->join('transaksi', 'pemesanan.id_transaksi = transaksi.id_transaksi', 'left');
        $this->db->join('produk', 'pemesanan.id_barang = produk.id_barang', 'left');
        $this->db->join('pengiriman', 'pengiriman.id_transaksi = transaksi.id_transaksi', 'left');
        $this->db->join('diskon', 'diskon.id_barang = produk.id_barang', 'left');
        $this->db->where('status_pengiriman=4');
        $this->db->where('YEAR(transaksi.tanggal_order)', $tahun);
        return $this->db->get()->result();
    }


    //grafik 
    public function grafik_transaksi()
    {
        return $this->db->query("SELECT SUM(total_order) as total, tanggal_order FROM `transaksi` GROUP BY tanggal_order")->result();
    }
    public function grafik_produk_terjual()
    {
        return $this->db->query("SELECT SUM(quantity) as jml, nama_barang FROM `pemesanan` JOIN produk ON pemesanan.id_barang=produk.id_barang GROUP BY pemesanan.id_barang ORDER BY jml DESC")->result();
    }
    public function lap_penilaian_pelanggan()
    {
        return $this->db->query("SELECT * FROM `penilaian_pelanggan` JOIN pemesanan ON penilaian_pelanggan.id_pemesanan=pemesanan.id_pemesanan JOIN produk ON produk.id_barang = pemesanan.id_barang JOIN transaksi ON transaksi.id_transaksi=pemesanan.id_transaksi JOIN user ON transaksi.id_user=user.id_user WHERE info_penilaian != '0'")->result();
    }
    public function produk_tidak_laku()
    {
        return $this->db->query("SELECT produk.id_barang, nama_barang, quantity FROM pemesanan RIGHT JOIN produk ON pemesanan.id_barang = produk.id_barang;")->result();
    }
}


/* End of file mLaporan.php */
