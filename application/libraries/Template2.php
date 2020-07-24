<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Template
{
    protected $_CI;

    function __construct()
    {
        $this->_CI = &get_instance();
    }
    function display($template = null)
    {

        $data['_header'] = $this->_CI->load->view('Themes/Header', true);
        $data['_navbar'] = $this->_CI->load->view('Themes/Navbar', true);
        $data['_content'] = $this->_CI->load->view($template);
        $data['_footer'] = $this->_CI->load->view('Themes/Footer');
        $this->_CI->load->view('Themes/Master', $data);
    }
}
