<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cCart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mKatalog');
    }

    public function index()
    {
        $data = array(
            'produk' => $this->mKatalog->produk()
        );
        $this->load->view('Pelanggan/Layouts/head');
        $this->load->view('Pelanggan/Layouts/header');
        $this->load->view('Pelanggan/Layouts/section', $data);
        $this->load->view('Pelanggan/cart');
        $this->load->view('Pelanggan/Layouts/footer');
    }
    public function add()
    {
        $this->protect->protect();
        $data = array(
            'id' => $this->input->post('id'),
            'name' => $this->input->post('name'),
            'price' => $this->input->post('price'),
            'qty' => $this->input->post('qty'),
            'picture' => $this->input->post('picture'),
            'stok' => $this->input->post('stok')
        );
        $this->cart->insert($data);
        redirect('pelanggan/ckatalog');
    }
    public function update_cart($rowid, $qty)
    {
        $data = array(
            'rowid'  => $rowid,
            'qty'    => $qty
        );
        $this->cart->update($data);
        redirect('Pelanggan/cCart');
    }
    public function delete($rowid)
    {
        $this->cart->remove($rowid);
        redirect('Pelanggan/cCart');
    }
}

/* End of file cCart.php */
