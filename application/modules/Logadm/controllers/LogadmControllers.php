<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LogadmControllers extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        if ($this->session->userdata('Admintoken')) {
            redirect('Admin');
        } else {
            $this->load->view('Logadm/LogadmViews');
        }
    }

    function ceklogin()
    {
        $data['user_id'] = $this->input->post('username');
        $data['password'] = $this->input->post('password');
        $respon = $this->SERVER_API->_postAPI('user/login-user', $data);

        if ($respon->status == 'error') {
            $this->session->set_flashdata('alert', '<div class="alert alert-danger no-border">
            <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
            <span class="text-semibold">User Name atau Password belum terdaftar <a href="#" class="alert-link"></a>.
        </div>');
            redirect('');
        } else {

            foreach ($respon->data as $user) {
                $nama_customer = $user->nama_customer;
                $kode_customer = $user->kode_customer;
                $level = $user->level;
                $token = $user->token;
            }
            $data = [
                'nama_customer' => $nama_customer,
                'kode_customer' => $kode_customer,
                'level' => $level,
                'Admintoken' => $token
            ];
            $this->session->set_userdata($data);
            redirect('Admin');
        }
    }

    function logout()
    {
        session_destroy();
        redirect('');
    }
}
