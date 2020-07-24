<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Card extends MX_Controller
{
    public function __construct()
    {

        parent::__construct();
        // is_logged_in();

        // $this->load->model("models_card");
    }

    // Kelola Data Barang
    public function index()
    {
        $this->template->display('Views_card');
    }
}
