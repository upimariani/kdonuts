<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mTransaksi extends CI_Model
{
	public function transaksi()
	{
		$data['pesanan_masuk'] = $this->db->query("SELECT * FROM transaksi JOIN user ON transaksi.id_user=user.id_user JOIN pengiriman ON transaksi.id_transaksi=pengiriman.id_transaksi JOIN ongkir ON pengiriman.id_ongkir=ongkir.id_ongkir WHERE status_pengiriman='0';")->result();
		$data['konfirmasi'] = $this->db->query("SELECT * FROM `transaksi` JOIN user ON transaksi.id_user=user.id_user JOIN pengiriman ON transaksi.id_transaksi=pengiriman.id_transaksi JOIN ongkir ON pengiriman.id_ongkir=ongkir.id_ongkir WHERE status_pengiriman='1'")->result();
		$data['diproses'] = $this->db->query("SELECT * FROM `transaksi` JOIN user ON transaksi.id_user=user.id_user JOIN pengiriman ON transaksi.id_transaksi=pengiriman.id_transaksi JOIN ongkir ON pengiriman.id_ongkir=ongkir.id_ongkir WHERE status_pengiriman='2'")->result();
		$data['kirim'] = $this->db->query("SELECT * FROM `transaksi` JOIN user ON transaksi.id_user=user.id_user JOIN pengiriman ON transaksi.id_transaksi=pengiriman.id_transaksi JOIN ongkir ON pengiriman.id_ongkir=ongkir.id_ongkir WHERE status_pengiriman='3'")->result();
		$data['selesai'] = $this->db->query("SELECT * FROM `transaksi` JOIN user ON transaksi.id_user=user.id_user JOIN pengiriman ON transaksi.id_transaksi=pengiriman.id_transaksi JOIN ongkir ON pengiriman.id_ongkir=ongkir.id_ongkir WHERE status_pengiriman='4'")->result();
		return $data;
	}

	public function notif()
	{
		$data['pesanan_masuk'] = $this->db->query("SELECT COUNT(tanggal_order) as jml FROM `transaksi` JOIN pengiriman ON transaksi.id_transaksi=pengiriman.id_transaksi WHERE status_pengiriman='0'")->row();
		$data['konfirmasi'] = $this->db->query("SELECT COUNT(tanggal_order) as jml FROM `transaksi` JOIN pengiriman ON transaksi.id_transaksi=pengiriman.id_transaksi WHERE status_pengiriman='1'")->row();
		$data['diproses'] = $this->db->query("SELECT COUNT(tanggal_order) as jml FROM `transaksi` JOIN pengiriman ON transaksi.id_transaksi=pengiriman.id_transaksi WHERE status_pengiriman='2'")->row();
		$data['kirim'] = $this->db->query("SELECT COUNT(tanggal_order) as jml FROM `transaksi` JOIN pengiriman ON transaksi.id_transaksi=pengiriman.id_transaksi WHERE status_pengiriman='3'")->row();
		return $data;
	}
	//status order pelanggan
	public function status_order()
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('user', 'transaksi.id_user = user.id_user', 'left');
		$this->db->where('user.id_user', $this->session->userdata('id'));
		return $this->db->get()->result();
	}
	public function detail_pesanan($id)
	{
		$data['transaksi'] = $this->db->query("SELECT * FROM transaksi JOIN user ON transaksi.id_user=user.id_user JOIN pengiriman ON transaksi.id_transaksi=pengiriman.id_transaksi JOIN ongkir ON ongkir.id_ongkir=pengiriman.id_ongkir JOIN kecamatan ON kecamatan.id_kecamatan = ongkir.id_kecamatan WHERE transaksi.id_transaksi='" . $id . "'")->row();
		$data['pesanan'] = $this->db->query("SELECT * FROM pemesanan JOIN transaksi ON pemesanan.id_transaksi=transaksi.id_transaksi JOIN produk ON produk.id_barang=pemesanan.id_barang JOIN diskon ON produk.id_barang=diskon.id_barang JOIN penilaian_pelanggan ON pemesanan.id_pemesanan = penilaian_pelanggan.id_pemesanan WHERE transaksi.id_transaksi='" . $id . "'")->result();
		return $data;
	}
	public function bayar($id, $data)
	{
		$this->db->where('id_transaksi', $id);
		$this->db->update('transaksi', $data);
	}
	public function status($id, $status)
	{
		$this->db->where('id_transaksi', $id);
		$this->db->update('pengiriman', $status);
	}
}

/* End of file mTransaksi.php */
