<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CustomerControllers extends MX_Controller
{
    public function __construct()
    {

        parent::__construct();
        is_logged_in_admin();
    }

    // Kelola Data Barang
    public function index()
    {
        $this->template->display('CustomerViews');
    }
}
