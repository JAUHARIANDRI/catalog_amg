<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Models_home extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    // public $_tbl_mster;
    public function brg_mster($data)
    {
        // echo 'masuk';
        // die;
        // return $this->db->get($this->_tbl_mster)->result();
    }
}
// <!-- $this->db->select('*');
//         $this->db->from('tm_barang_master');
//         $this->db->join('tm_jenis', 'tm_jenis.kode_jenis = tm_barang_master.kode_jenis');
//         $this->db->join('tm_barang_master_detail', 'tm_barang_master_detail.kode_barang = tm_barang_master.kode_barang');
//         return $query = $this->db->limit(12)->get()->result(); -->