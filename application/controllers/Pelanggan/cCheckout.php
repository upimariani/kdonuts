<?php

use function PHPSTORM_META\map;

defined('BASEPATH') or exit('No direct script access allowed');

class cCheckout extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mOngkir');
        $this->load->model('mCheckout');
        $this->load->model('mKatalog');
    }

    public function index()
    {
        $this->protect->protect();
        $data = array(
            'produk' => $this->mKatalog->produk(),
            'ongkir' => $this->mOngkir->select(),
            'kecamatan' => $this->mOngkir->select_kecamatan(),
            'pelanggan' => $this->mCheckout->pelanggan()
        );
        $this->load->view('Pelanggan/Layouts/head');
        $this->load->view('Pelanggan/Layouts/header');
        $this->load->view('Pelanggan/Layouts/section', $data);
        $this->load->view('Pelanggan/checkout', $data);
    }
    public function get_desa()
    {
        $id = $this->input->post('id', TRUE);
        $data = $this->mOngkir->get_desa($id);
        echo json_encode($data);
    }
    public function checkout()
    {
        $this->form_validation->set_rules('rt', 'RT', 'required');
        $this->form_validation->set_rules('rw', 'RW', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('desa_kel', 'Desa/Kelurahan', 'required');


        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'ongkir' => $this->mOngkir->select(),
                'produk' => $this->mKatalog->produk(),
                'kecamatan' => $this->mOngkir->select_kecamatan(),
                'pelanggan' => $this->mCheckout->pelanggan()
            );
            $this->load->view('Pelanggan/Layouts/head');
            $this->load->view('Pelanggan/Layouts/header');
            $this->load->view('Pelanggan/Layouts/section', $data);
            $this->load->view('Pelanggan/checkout', $data);
        } else {
            $data = array(
                'id_transaksi' => $this->input->post('id_transaksi'),
                'id_user' => $this->session->userdata('id'),
                'total_order' => $this->input->post('total'),
                'tanggal_order' => date('Y-m-d')
            );
            $this->mCheckout->transaksi($data);

            $rt = $this->input->post('rt');
            $rw = $this->input->post('rw');
            $alamat = $this->input->post('alamat');

            //pengiriman
            $pengiriman = array(
                'id_transaksi' => $this->input->post('id_transaksi'),
                'id_ongkir' => $this->input->post('desa_kel'),
                'alamat' => 'RT. ' . $rt . ' RW. ' . $rw . ' Desa/Kel. ' . $alamat,
                'status_pengiriman' => '0'
            );
            $this->mCheckout->pengiriman($pengiriman);


            //menyimpan pesanan ke detail transaksi
            $i = 1;
            $j = 1;
            foreach ($this->cart->contents() as $item) {
                $data_rinci = array(
                    'id_pemesanan' => $this->input->post('id_pemesanan' . $j++),
                    'id_transaksi' => $this->input->post('id_transaksi'),
                    'id_barang' => $item['id'],
                    'quantity' => $this->input->post('qty' . $i++)
                );
                $this->mCheckout->detail_transaksi($data_rinci);
            }

            //menyimpan data ke penilaian pelanggan
            $j = 1;
            foreach ($this->cart->contents() as $key => $value) {
                $penilaian = array(
                    'id_pemesanan' => $this->input->post('id_pemesanan' . $j++),
                    'info_penilaian' => '0',
                    'tanggal' => '0'
                );
                $this->mCheckout->penilaian($penilaian);
            }

            //mengurangi jumlah stok
            $kstok = 0;
            foreach ($this->cart->contents() as $key => $value) {
                $id = $value['id'];
                $kstok = $value['stok'] - $value['qty'];
                $data = array(
                    'qty_barang' => $kstok
                );
                $this->mCheckout->stok($id, $data);
            }
            $this->cart->destroy();
            redirect('pelanggan/cStatusOrder');
        }
    }
}

/* End of file cCheckout.php */
