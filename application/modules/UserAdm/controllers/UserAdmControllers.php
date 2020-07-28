<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserAdmControllers extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in_admin();
    }

    function index()
    {
        $this->session->set_userdata('title', 'User Data');
        $this->template->display('UserAdmViews');
    }

    function AddUser()
    {
        $this->template->display('UserAdmAddViews');
    }
}
