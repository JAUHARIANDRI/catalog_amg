<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
        // $this->load->model("Models_home", 'aku');
    }
    // Kelola Data Barang
    public function index()
    {
        $data1['email'] = 'samsul026@gmail.com';
        $data1['password'] = 'ap';
        $respon = $this->SERVER_API->post('customer/login-customer', $data1);
        // var_dump($respon->status);
        var_dump($respon);

        // $this->load->model("Models_home");
        // $this->template->display('Views_home');
    }
}
