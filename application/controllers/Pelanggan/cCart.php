<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cCart extends CI_Controller
{

    public function index()
    {
        $this->load->view('Pelanggan/Layouts/head');
        $this->load->view('Pelanggan/Layouts/header');
        $this->load->view('Pelanggan/Layouts/section');
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
        redirect('pelanggan/ckatalog/shop_list');
    }
    public function update_cart()
    {
        $i = 1;
        foreach ($this->cart->contents() as $items) {
            $data = array(
                'rowid'  => $items['rowid'],
                'qty'    => $this->input->post($i . '[qty]')
            );
            $this->cart->update($data);
            $i++;
        }
        redirect('Pelanggan/cCart');
    }
    public function delete($rowid)
    {
        $this->cart->remove($rowid);
        redirect('Pelanggan/cCart');
    }
}

/* End of file cCart.php */
