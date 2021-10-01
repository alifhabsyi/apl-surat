<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
        $nama1 = $this->session->userdata("NAMA");
        
        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        // $telegram_id = "660355026";
        // $message_text = "HERE";
        // $secret_token = '1918414694:AAFVMykQGTgsScgs3xSIRiGQoPTfr37gE9Y';
        // $url = "https://api.telegram.org/bot" . $secret_token . "/sendMessage?parse_mode=markdown&chat_id=" . $telegram_id;
        // $url = $url . "&text=" . urlencode($message_text);
        // $ch = curl_init();
        // $optArray = array(
        //         CURLOPT_URL => $url,
        //         CURLOPT_RETURNTRANSFER => true
        // );
        // curl_setopt_array($ch, $optArray);
        // $result = curl_exec($ch);
        // $err = curl_error($ch);
        // curl_close($ch);
    
        // if ($err) {
        //    echo 'Pesan gagal terkirim, error :' . $err;
        // }else{
        //     echo 'Pesan terkirim';
        // }
        $data=array();
        $data['list'] = $this->m_main->joinskterima();
      
        // var_dump($data['list']);exit;
        $this->template->halaman('dashboard',$data);
    }
    function ikm(){
        $data=array();
        $sk=$this->input->get('n');
        $where=array(
            'NO_SK' => $sk,
        );
        $data['sk']=$this->m_main->getwhere('sk',$where);
        $this->load->view('ikm',$data);
    }
    function sendmessage() {
        $telegram_id=$this->input->get("id");
        $message_text=$this->input->get("text");
        $secret_token = '1930967629:AAHpWKC9tvoUize0QRUu0hrVplz9N06MUio';
        $url = "https://api.telegram.org/bot" . $secret_token . "/sendMessage?chat_id=" . $telegram_id;
        $url = $url . "&text=" . urlencode($message_text);
        $ch = curl_init();
        $optArray = array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true
        );
        curl_setopt_array($ch, $optArray);
        $result = curl_exec($ch);
        $err = curl_error($ch);
        curl_close($ch);
    
        if ($err) {
            echo 'Pesan gagal terkirim, error :' . $err;
         }else{
           
            redirect('admin');
         }
    }
    function sendmessagenotif() {
        $telegram_id=$this->input->get("id");
        $message_text=$this->input->get("text");
        $NO_SK=$this->input->get("n");

        $secret_token = '1930967629:AAHpWKC9tvoUize0QRUu0hrVplz9N06MUio';
        $url = "https://api.telegram.org/bot" . $secret_token . "/sendMessage?chat_id=" . $telegram_id;
        $url = $url . "&text=" . urlencode($message_text);
        $ch = curl_init();
        $optArray = array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true
        );
        
        curl_setopt_array($ch, $optArray);
        $result = curl_exec($ch);
        $err = curl_error($ch);
        curl_close($ch);
        $where=array(
          'NO_SK'=>$NO_SK  ,
          
        );
        $dataup=array(
            'NO_SK'=>$NO_SK  ,
            'NOTIF'=> date('Y-m-d'),
          );
        $this->m_main->update($where,$dataup,'sk');
    
        if ($err) {
            echo 'Pesan gagal terkirim, error :' . $err;
         }else{
           
            redirect('sk/sk_expired');
         }
    }
    function sk_input()
    {
        $nama1 = $this->session->userdata("NAMA");
        
        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        $data = array();
       
        // var_dump($data['list']);exit;
        $this->template->halaman('sk/sk_input', $data);
    }
    
}
