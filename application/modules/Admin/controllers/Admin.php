<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in_admin();
    }

    public function index()
    {
        // $this->session->set_userdata('nama_customer');

        // $this->load->view("Views_admin");
        $this->session->set_userdata('title', 'Dasboard', 'nama_customer');
        $this->template->display('Views_admin');
    }

    function detailadmin()
    {
        echo 'Dera';
    }
}
