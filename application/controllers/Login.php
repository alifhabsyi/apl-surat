<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('template');
        $this->load->model('m_main');
        $this->load->model('m_login');

        $this->load->library('session');
        // $this->load->library('curl');
        $this->load->library('pagination');
        // $this->load->library('template');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    public function index()
    {
        $nama1 = $this->session->userdata("NAMA");
        
        if (is_null($nama1)==false) {
            redirect(base_url('admin'));
        }
        $this->load->view('login');
    }
    function aksi_login()
    {
        $data             = array();
        $param            = array();
        $username         = $this->input->post('username');
        $password         = $this->input->post('password');
        $where            = array(
            'username' => $username,
            'password' => md5($password)
        );
        $cek              = $this->m_login->cek_login("user", $where)->num_rows();
        if ($cek > 0) {
            $this->db->select('USERNAME,NAMA,JABATAN,LEVEL');    //ngambil query
            $this->db->where('username=', $username);                     //ngambil query
            $data['user']    = $this->db->get('user');
            // var_dump($data['user']);exit;
            // $this->db->where('username',$username);
            foreach ($data['user']->result_array() as $row) {
                $username     = $row['USERNAME'];
                $nama         = $row['NAMA'];
               
                $jabatan      = $row['JABATAN'];
                $level        = $row['LEVEL'];
            }
            // var_dump($data['user']);exit;
            $data_session   = array(
                'USERNAME' => $username,
                'NAMA' => $nama,
               
                'JABATAN' => $jabatan,
                'LEVEL' => $level,


            );
            $this->session->set_userdata($data_session);
            // var_dump($this->session->userdata);exit;
            redirect(base_url('admin'));
        } else {
            redirect(base_url('login/salah'));
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
    function salah()
    {
        $this->load->view('v_access');
    }
}
