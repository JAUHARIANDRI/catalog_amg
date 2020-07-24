<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Materialtype_controllers extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in_admin();
    }

    function index()
    {

        // echo "INI KATEGORy";
        $this->session->set_userdata('title', 'Material Type');
        $this->template->display('Materialtype_views');
    }
}
