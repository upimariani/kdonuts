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
}

/* End of file mkatalog.php */
