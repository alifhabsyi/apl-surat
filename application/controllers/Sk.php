<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sk extends CI_Controller
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
        $data = array();

        // var_dump($data['list']);exit;
        $this->template->halaman('dashboard', $data);
    }
    function sk_input()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        $data = array();

        $dataup = array(
            "NO_SK" => $this->input->get("n"),
        );

        $data['list'] = $this->m_main->getwhere('sk', $dataup);



        // var_dump($data['list']);exit;
        $this->template->halaman('sk/sk_input', $data);
    }
    function sk_telegram()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        $data = array();

        $dataup = array(
            "NO_SK" => $this->input->get("n"),
        );

        $data['list'] = $this->m_main->getwhere('sk', $dataup);



        // var_dump($data['list']);exit;
        $this->template->halaman('sk/add_id', $data);
    }
    function add_sk()
    {


        $no_sk = $this->input->post('no_sk');
        $tanggal_sk = $this->input->post('tanggal_sk');
        $tanggal_akhir_sk = $this->input->post('tanggal_akhir_sk');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $jenis = $this->input->post('jenis');
        $no_telp = $this->input->post('no_telp');
        $id_tele = $this->input->post('id_tele');
        $penanggung_jawab = $this->input->post('penanggung_jawab');




        $where            = array(
            'no_sk' => $no_sk,

        );
        $cek              = $this->m_main->cekada("sk", $where)->num_rows();
        //
        if ($cek == 0) {

            $table = "sk";
            $dataup = array(
                'NO_SK' => $no_sk,
                'TANGGAL_SK' => $tanggal_sk,
                'TANGGAL_AKHIR_SK' => $tanggal_akhir_sk,
                'NAMA' => $nama,
                'ALAMAT' => $alamat,
                'JENIS' => $jenis,
                'NO_TELP' => $no_telp,
                'TELEGRAM_ID' => $id_tele,
                'PENANGGUNG_JAWAB' => $penanggung_jawab,
                'STATUS' => "SK",



            );
            // var_dump($dataup);
            $this->m_main->insert('sk', $dataup);
            redirect('sk/sk_list');
            // var_dump($dataup);exit;
        } else {
?>
            <script languange='javascript'>
                window.alert('Data sudah Pernah ada');
                window.history.back();
            </script>
<?php
        }
    }
    public function sk_list()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        //$array = array('name !=' => $name, 'id <' => $id, 'date >' => $date);

        $data = array();
        if ($this->input->post("jenis")){
            $where=array(
               
                'JENIS' => $this->input->post("jenis"),
                'STATUS' => $this->input->post("status"),
               
            );
            $data['list'] = $this->m_main->getwhere('sk',$where);
        }else{
            $data['list'] = $this->m_main->getlist('sk');
        }

       
        $this->template->halaman('sk/sk_list', $data);
    }
    public function sk_expired()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        //$array = array('name !=' => $name, 'id <' => $id, 'date >' => $date);

        $data = array();
        if ($this->input->post("jenis")){
            $where= $this->input->post("jenis");
               
        
            $data['list'] = $this->m_main->getnotifn($where);
        }else{
           
            $data['list'] = $this->m_main->getnotif();
        }

    //    var_dump($data['list']);var_dump($where);exit;
        $this->template->halaman('sk/sk_expired', $data);
    }
    public function export_sk()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        //$array = array('name !=' => $name, 'id <' => $id, 'date >' => $date);

        $data = array();
        if ($this->input->get("j")){
            $where=array(
               
                'JENIS' => $this->input->get("j"),
               
            );
            $data['list'] = $this->m_main->getwhere('sk',$where);
        }else{
            $data['list'] = $this->m_main->getlist('sk');
        }
        $this->load->view('export/export_sk', $data);
    }
    public function delete_sk()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        //$array = array('name !=' => $name, 'id <' => $id, 'date >' => $date);

        $data = array();

        $table = "sk";
        $dataup = array(
            'NO_SK' => $this->input->get("n"),
        );
        // var_dump($dataup);
        $this->m_main->delete($table, $dataup);
        redirect('sk/sk_list');
    }
    public function update_kirim()
    {
        $nama1 = $this->session->userdata("NAMA");
        $username = $this->session->userdata("USERNAME");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        //$array = array('name !=' => $name, 'id <' => $id, 'date >' => $date);

        $data = array();

        $table = "sk";
        $dataup = array(
            'STATUS' => "KIRIM",
            'USERNAME' => $username,
        );
        $where = array(
            'NO_SK' => $this->input->get("n"),
        );
        // var_dump($dataup);
        $this->m_main->update($where, $dataup,$table);
        $table = "sk";

       
       
        redirect('sk/sk_kirim');
    }
    public function update_kirim1()
    {
        $nama1 = $this->session->userdata("NAMA");
        $username = $this->session->userdata("USERNAME");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        //$array = array('name !=' => $name, 'id <' => $id, 'date >' => $date);

        $data = array();

        $table = "sk";
        $where = array(
            'STATUS' => "SK",
            'USERNAME' => $username,
        );
        $dataup = array(
            'NO_SK' => $this->input->get("n"),
        );
        // var_dump($dataup);
        $this->m_main->update($dataup, $where,$table);
        redirect('sk/sk_kirim1');
    }
    function edit_sk()
    {


        $no_sk = $this->input->post('no_sk');
        $tanggal_sk = $this->input->post('tanggal_sk');
        $tanggal_akhir_sk = $this->input->post('tanggal_akhir_sk');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $jenis = $this->input->post('jenis');
        $no_telp = $this->input->post('no_telp');
        $id_tele = $this->input->post('id_tele');
        $penanggung_jawab = $this->input->post('penanggung_jawab');

        $where = array(
            'NO_SK' => $no_sk,
        );
        $dataup = array(
            'NO_SK' => $no_sk,
            'TANGGAL_SK' => $tanggal_sk,
            'TANGGAL_AKHIR_SK' => $tanggal_akhir_sk,
            'NAMA' => $nama,
            'ALAMAT' => $alamat,
            'JENIS' => $jenis,
            'NO_TELP' => $no_telp,
            'TELEGRAM_ID' => $id_tele,
            'PENANGGUNG_JAWAB' => $penanggung_jawab,
            // 'STATUS' => "SK",



        );
        // var_dump($dataup);
        $this->m_main->update($where, $dataup, 'sk');
        redirect('sk/sk_list');
        // var_dump($dataup);exit;

    }
    function add_id()
    {


        $no_sk = $this->input->post('no_sk');
        $telegram_id = $this->input->post('telegram_id');
        $message_text = $this->input->post('message');
        $where = array(
            'NO_SK' => $no_sk,
        );
        $dataup = array(
            'TELEGRAM_ID' => $telegram_id,
        );
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
            $this->m_main->update($where, $dataup, 'sk');
            redirect('sk/sk_list');
         }

        // var_dump($dataup);
       
        // var_dump($dataup);exit;

    }
    public function sk_kirim()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        //$array = array('name !=' => $name, 'id <' => $id, 'date >' => $date);

        $data = array();
        $where= array(
            'STATUS' => "SK",
        );

        $data['list'] = $this->m_main->getwhere('sk',$where);
        $this->template->halaman('sk/sk_kirim', $data);
    }
    public function sk_kirim1()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        //$array = array('name !=' => $name, 'id <' => $id, 'date >' => $date);

        $data = array();
        $where= array(
            'STATUS !=' => "SK",
            
        );
        // var_dump($where);exit;
        $data['list'] = $this->m_main->getwhere('sk',$where);
        $this->template->halaman('sk/sk_kirim1', $data);
    }
   
    
}
