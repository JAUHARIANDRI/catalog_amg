<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ForgotPassAdmControllers extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        // echo "INI KATEGORy";
        // $this->session->set_userdata('title', 'Material Type');
        $this->load->view('ForgotPassAdmViews');
    }
}
