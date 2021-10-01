<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('template');
        $this->load->model('m_main');
        $this->load->library('session');
        // $this->load->library('curl');
        $this->load->library('pagination');
        // $this->load->library('template');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    public function index()
    {
        
        $this->load->view('dashboard');
    }
    function cek_id()
    {
        $data = array();
        $id_reg = $this->input->post("id_reg");
        $table = "register";
        
        $where = array(
            'ID_REG' => $id_reg,
        );

        $data['cari'] = $this->m_main->get1data($table, $where);
        // var_dump($data);
        // exit;
        $this->load->view('register/cari_id', $data);
    }
    
}
