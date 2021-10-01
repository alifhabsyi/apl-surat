<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pos extends CI_Controller
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

    public function sk_kirimpos()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        //$array = array('name !=' => $name, 'id <' => $id, 'date >' => $date);

        $data = array();
        $where = array(
            'STATUS' => "KIRIM",
        );

        $data['list'] = $this->m_main->getpos('sk');
        $this->template->halaman('pos/sk_kirimpos', $data);
    }
    public function sk_kirimposgo()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        //$array = array('name !=' => $name, 'id <' => $id, 'date >' => $date);

        $data = array();
        $where = array(
            'STATUS' => "RESI",
        );

        $data['list'] = $this->m_main->getwhere('sk', $where);
        $this->template->halaman('sk/sk_kirimpos', $data);
    }
    function sk_pos()
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

        $data['kurir'] = $this->m_main->getlist('kurir');

        // var_dump($data['list']);exit;
        $this->template->halaman('pos/sk_pos', $data);
    }
    function sk_hasil()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        $data = array();

        $dataup = array(
            "NO_RESI" => $this->input->get("n"),
        );


        $data['list_sk_kirim'] = $this->m_main->getwhere('sk_kirim', $dataup);

        $data['kurir'] = $this->m_main->getlist('kurir');

        // var_dump($data['list']);exit;
        $this->template->halaman('pos/hasil', $data);
    }
    function sk_posulang()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        $data = array();

        $dataup = array(
            "NO_SK" => $this->input->get("n"),
        );
        $data['sk'] = $this->m_main->getwhere('sk_kirim', $dataup);
        $data['list'] = $this->m_main->getwhere('sk', $dataup);

        $data['kurir'] = $this->m_main->getlist('kurir');

        // var_dump($data['list']);exit;
        $this->template->halaman('pos/sk_posulang', $data);
    }


    function add_pos()
    {

        $no_kirim = $this->input->post('no_kirim');
        $no_sk = $this->input->post('no_sk');
        $tanggal_sk = $this->input->post('tanggal_sk');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $jenis = $this->input->post('jenis');
        $no_telp = $this->input->post('no_telp');
        $penanggung_jawab = $this->input->post('penanggung_jawab');
        $ID_KURIR = $this->input->post('kurir');



        $permitted_chars = '0123456789';

        $bulan = date('m');
        $tahun = date('Y');
        $hari = date('d');
        $no_resi = 'RES/' . $tahun . $bulan . substr(str_shuffle($permitted_chars), 0, 3);
        $no_kirim =  $tahun . $bulan . '/' . $hari;
        $tanggal_kirim = date('y-m-d');

        $where            = array(
            'NO_SK' => $no_sk,
            'NO_KIRIM' => $no_kirim,

        );
        $cek              = $this->m_main->cekada("sk_kirim", $where)->num_rows();
        //
        if ($cek == 0) {

            $table = "sk_kirim";
            $dataup = array(
                'NO_SK' => $no_sk,
                'NO_KIRIM' => $no_kirim,
                'TANGGAL_KIRIM' => $tanggal_kirim,
                // 'NAMA_PETUGAS' => $N,
                'NO_RESI' => $no_resi,
                'ID_KURIR' => $ID_KURIR,




            );
            // var_dump($dataup);


            $where = array(
                'STATUS' => "RESI",
            );
            $dataup2 = array(
                'NO_SK' => $no_sk,
            );
            // var_dump($dataup2);exit;
            $this->m_main->update($dataup2, $where, "sk");
            $this->m_main->insert($table, $dataup);
            redirect('pos/sk_kirimpos');
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
    function add_posulang()
    {

        $no_kirim = $this->input->post('no_kirim');
        $no_resi1 = $this->input->post('no_resi');
        $no_sk = $this->input->post('no_sk');
        $tanggal_sk = $this->input->post('tanggal_sk');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $jenis = $this->input->post('jenis');
        $no_telp = $this->input->post('no_telp');
        $penanggung_jawab = $this->input->post('penanggung_jawab');
        $ID_KURIR = $this->input->post('kurir');



        $permitted_chars = '0123456789';

        $bulan = date('m');
        $tahun = date('Y');
        $hari = date('d');
        $no_resi = 'URES/' . $tahun . $bulan . substr(str_shuffle($permitted_chars), 0, 3);
        $tanggal_kirim = date('y-m-d');

        $where            = array(

            'NO_SK' => $no_sk,
            'STATUS' => "TERKIRIM",

        );
        $cek              = $this->m_main->cekada("sk_kirim", $where)->num_rows();
        $where2            = array(

            'NO_SK' => $no_sk,

        );
        $cekresiulang              = $this->m_main->cekada("sk_kirim", $where2)->num_rows();
        //
        if ($cekresiulang >= 3) {
            $where = array(
                'STATUS' => "PENGAMBILAN_SENDIRI",
            );
            $dataup2 = array(
                'NO_SK' => $no_sk,
            );
            $dataup3 = array(
                'NO_RESIBARU' => "PENGAMBILAN_SENDIRI",
            );
            $where3 = array(
                'NO_RESI' => $no_resi1,
            );
            // var_dump($dataup2);exit;
            //    var_dump($no_resi1);exit;
            $this->m_main->update($where3, $dataup3, "sk_terima");
            $this->m_main->update($dataup2, $where, "sk");
            redirect('pos/sk_pending');
        } else if ($cekresiulang <= 2) {
            if ($cek == 0) {
                $no_kirim =  $tahun . $bulan . '/' . $hari;
                $table = "sk_kirim";
                $dataup = array(
                    'NO_SK' => $no_sk,
                    'NO_KIRIM' => $no_kirim,
                    'TANGGAL_KIRIM' => $tanggal_kirim,
                    // 'NAMA_PETUGAS' => $N,
                    'NO_RESI' => $no_resi,
                    'ID_KURIR' => $ID_KURIR,




                );
                // var_dump($dataup);


                $where = array(
                    'STATUS' => "RESI",
                );
                $dataup2 = array(
                    'NO_SK' => $no_sk,
                );
                $dataup3 = array(
                    'NO_RESIBARU' => $no_resi,
                );
                $where3 = array(
                    'NO_RESI' => $no_resi1,
                );
                // var_dump($dataup2);exit;
                $this->m_main->update($where3, $dataup3, "sk_terima");
                $this->m_main->update($dataup2, $where, "sk");
                $this->m_main->insert($table, $dataup);
                redirect('pos/pos_hasil');
                // var_dump($dataup);exit;
            } else {
            ?>
                <script languange='javascript'>
                    window.alert('No Resi Sudah Terkirim');
                    window.history.back();
                </script>
            <?php
            }
        }
    }
    function add_hasil()
    {

        $NO_RESI = $this->input->post('no_resi');
        $no_sk = $this->input->post('no_sk');
        $ID_KURIR = $this->input->post('id_kurir');
        $no_kirim = $this->input->post('no_kirim');
        $keterangan = $this->input->post('keterangan');
        $tanggal_kirim = $this->input->post('tanggal_kirim');

        $NAMA_PENERIMA = $this->input->post('penerima');
        $HASIL = $this->input->post('hasil');
        $tanggal_terima = date('y-m-d');
        $where            = array(
            'NO_RESI' => $NO_RESI,
            'NO_SK' => $no_sk,

        );
        $cek              = $this->m_main->cekada("sk_terima", $where)->num_rows();
        // var_dump($cek);var_dump($where);exit;
        if ($cek == 0) {

            $dataup2 = array(
                'NO_RESI' => $NO_RESI,
                'ID_KURIR' => $ID_KURIR,
                'NO_SK' => $no_sk,
                'NAMA_PENERIMA' => $NAMA_PENERIMA,
                'STATUS' => $HASIL,
                'TANGGAL_TERIMA' => $tanggal_terima,
                'TANGGAL_KIRIM' => $tanggal_kirim,
                'NO_KIRIM' => $no_kirim,
                'KETERANGAN' => $keterangan,



            );
            // var_dump($dataup2);exit;


            $dataup = array(
                'STATUS' => $HASIL,
            );
            $where = array(
                'NO_SK' => $no_sk,
            );
            // var_dump($dataup2);exit;
            $this->m_main->update($where, $dataup, "sk_kirim");
            $this->m_main->update($where, $dataup, "sk");
            $this->m_main->insert("sk_terima", $dataup2);
            redirect('pos/pos_hasil');
        } else {
            ?>
            <script languange='javascript'>
                window.alert('Data sudah Pernah ada');
                window.history.back();
            </script>
        <?php
        }
        // var_dump($dataup);exit;

    }

    public function sk_kirimresi()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        //$array = array('name !=' => $name, 'id <' => $id, 'date >' => $date);

        $data = array();
        // $where= array(
        //     'STATUS' => "KIRIM",
        // );

        $data['list'] = $this->m_main->getlist('sk_kirim');
        // var_dump($data['list']);exit;
        $this->template->halaman('pos/sk_kirimresi', $data);
    }
    public function pos_hasil()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        //$array = array('name !=' => $name, 'id <' => $id, 'date >' => $date);

        $data = array();
        // $where= array(
        //     'STATUS' => "KIRIM",
        // );
        if ($this->input->post("tahun")) {
            $where = array(
                "YEAR(TANGGAL_KIRIM)" => $this->input->post("tahun"),
                "MONTH(TANGGAL_KIRIM)" => $this->input->post("bulan"),
                "STATUS" => $this->input->post("status"),



            );
        } else {
            $where = array(
                "YEAR(TANGGAL_KIRIM)" => date('Y'),
                "MONTH(TANGGAL_KIRIM)" => date('m'),
                



            );
        }
        $data['list'] = $this->m_main->getwhere('sk_kirim', $where);
        // var_dump($data['list']);exit;
        $this->template->halaman('pos/pos_hasil', $data);
    }
    public function export_sk_hasil()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        //$array = array('name !=' => $name, 'id <' => $id, 'date >' => $date);

        $data = array();
        // $where= array(
        //     'STATUS' => "KIRIM",
        // );

        $where = array(
            "YEAR(TANGGAL_KIRIM)" => $this->input->get("t"),
            "MONTH(TANGGAL_KIRIM)" => $this->input->get("b"),



        );

        $data['list'] = $this->m_main->getwhere('sk_kirim', $where);
        // var_dump($data['list']);exit;
        $this->load->view('export/export_sk_hasil', $data);
    }
    public function sk_pending()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        //$array = array('name !=' => $name, 'id <' => $id, 'date >' => $date);

        $data = array();
        if ($this->input->post("tahun")) {
            $where = array(
                "YEAR(TANGGAL_KIRIM)" => $this->input->post("tahun"),
                "MONTH(TANGGAL_KIRIM)" => $this->input->post("bulan"),
                'STATUS' => "PENDING",

            );
        } else {
            $where = array(
                "YEAR(TANGGAL_KIRIM)" => date('Y'),
                "MONTH(TANGGAL_KIRIM)" => date('m'),
                'STATUS' => "PENDING",


            );
        }
        $data['list'] = $this->m_main->getwhere('sk_terima', $where);
        // var_dump($data['list']);exit;
        $this->template->halaman('pos/pos_pending', $data);
    }
    public function sk_pending_ket()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        //$array = array('name !=' => $name, 'id <' => $id, 'date >' => $date);

        $data = array();
        if ($this->input->post("tahun")) {
            $where = array(
                "YEAR(TANGGAL_KIRIM)" => $this->input->post("tahun"),
                "MONTH(TANGGAL_KIRIM)" => $this->input->post("bulan"),
                'STATUS' => "PENDING",

            );
        } else {
            $where = array(
                "YEAR(TANGGAL_KIRIM)" => date('Y'),
                "MONTH(TANGGAL_KIRIM)" => date('m'),
                'STATUS' => "PENDING",


            );
        }
        $data['list'] = $this->m_main->joinkurir('sk_terima', $where);
        // var_dump($data['list']);exit;
        $this->template->halaman('pos/pos_pending_ket', $data);
    }
    public function master_kurir()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        //$array = array('name !=' => $name, 'id <' => $id, 'date >' => $date);

        $data = array();

        $data['list'] = $this->m_main->getlist('kurir',);
        // var_dump($data['list']);exit;
        $this->template->halaman('pos/master_kurir', $data);
    }
    public function master_user()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        //$array = array('name !=' => $name, 'id <' => $id, 'date >' => $date);

        $data = array();

        $data['list'] = $this->m_main->getlist('user',);
        // var_dump($data['list']);exit;
        $this->template->halaman('pos/master_user', $data);
    }
    public function master_contoh()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        //$array = array('name !=' => $name, 'id <' => $id, 'date >' => $date);

        $data = array();

        $data['list'] = $this->m_main->getlist('user',);
        $data['list2'] = $this->m_main->getlist('user',);
        // var_dump($data['list']);exit;
        $this->template->halaman('pos/master_contoh', $data);
    }
    public function kurir_edit()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        //$array = array('name !=' => $name, 'id <' => $id, 'date >' => $date);

        $data = array();
        $where = array(
            'ID_KURIR' => $this->input->get("n"),
        );

        $data['list'] = $this->m_main->getwhere('kurir', $where);
        // var_dump($data['list']);exit;
        $this->template->halaman('pos/edit_kurir', $data);
    }
    public function user_edit()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        //$array = array('name !=' => $name, 'id <' => $id, 'date >' => $date);

        $data = array();
        $where = array(
            'USERNAME' => $this->input->get("n"),
        );

        $data['list'] = $this->m_main->getwhere('user', $where);
        // var_dump($data['list']);exit;
        $this->template->halaman('pos/edit_user', $data);
    }
    public function add_kurir()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        //$array = array('name !=' => $name, 'id <' => $id, 'date >' => $date);

        $data = array();
        $where = array(
            'ID_KURIR' => $this->input->get("n"),
        );

        $data['list'] = $this->m_main->getwhere('kurir', $where);
        // var_dump($data['list']);exit;
        $this->template->halaman('pos/edit_kurir', $data);
    }
    public function add_user()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        //$array = array('name !=' => $name, 'id <' => $id, 'date >' => $date);

        $data = array();
        $where = array(
            'USERNAME' => $this->input->get("n"),
        );

        $data['list'] = $this->m_main->getwhere('user', $where);
        // var_dump($data['list']);exit;
        $this->template->halaman('pos/edit_user', $data);
    }
    public function kurir_add()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        //$array = array('name !=' => $name, 'id <' => $id, 'date >' => $date);
        $where            = array(
            'NAMA_KURIR' => $this->input->post("nama_kurir"),
            'NO_KURIR' => $this->input->post("no_kurir"),

        );
        $cek              = $this->m_main->cekada("kurir", $where)->num_rows();
        if ($cek == 0) {
            $data = array();
            $dataup = array(
                'NAMA_KURIR' => $this->input->post("nama_kurir"),
                'NO_KURIR' => $this->input->post("no_kurir"),
            );

            $data['list'] = $this->m_main->insert('kurir', $dataup);
            // var_dump($data['list']);exit;
            redirect('pos/master_kurir');
        } else {
        ?>
            <script languange='javascript'>
                window.alert('Data sudah Pernah ada');
                window.history.back();
            </script>
        <?php
        }
    }
    public function edit_kurir()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        //$array = array('name !=' => $name, 'id <' => $id, 'date >' => $date);

        $data = array();
        $id_kurir = $this->input->post('id_kurir');
        $nama_kurir = $this->input->post('nama_kurir');
        $no_kurir = $this->input->post('no_kurir');
        $where = array(
            'ID_KURIR' => $id_kurir,
        );
        $dataup = array(
            'ID_KURIR' => $id_kurir,
            'NAMA_KURIR' => $nama_kurir,
            'NO_KURIR' => $no_kurir,
        );

        $data['list'] = $this->m_main->update($where, $dataup, 'kurir');
        // var_dump($data['list']);exit;
        redirect('pos/master_kurir');
    }
    public function edit_user()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        //$array = array('name !=' => $name, 'id <' => $id, 'date >' => $date);

        $data = array();
        $username = $this->input->post('username');
        $nama = $this->input->post('nama');
        $jabatan = $this->input->post('jabatan');
        $level = $this->input->post('level');
        $password = $this->input->post('password');
        $where = array(
            'USERNAME' => $username,
        );
        $dataup = array(
            'USERNAME' => $username,
            'NAMA' => $nama,
            'JABATAN' => $jabatan,
            'LEVEL' => $level,
            'PASSWORD' => md5($password),

        );

        $data['list'] = $this->m_main->update($where, $dataup, 'user');
        // var_dump($data['list']);exit;
        redirect('pos/master_user');
    }
    public function user_add()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        //$array = array('name !=' => $name, 'id <' => $id, 'date >' => $date);

        $data = array();
        $username = $this->input->post('username');
        $nama = $this->input->post('nama');
        $jabatan = $this->input->post('jabatan');
        $level = $this->input->post('level');
        $password = $this->input->post('password');
        $where            = array(
            'USERNAME' => $username,


        );
        $cek              = $this->m_main->cekada("user", $where)->num_rows();
        if ($cek == 0) {
            $dataup = array(
                'USERNAME' => $username,
                'NAMA' => $nama,
                'JABATAN' => $jabatan,
                'LEVEL' => $level,
                'PASSWORD' => md5($password),

            );

            $data['list'] = $this->m_main->insert('user', $dataup);
            // var_dump($data['list']);exit;
            redirect('pos/master_user');
        } else {
        ?>
            <script languange='javascript'>
                window.alert('Data sudah Pernah ada');
                window.history.back();
            </script>
<?php
        }
    }
    public function delete_kurir()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        //$array = array('name !=' => $name, 'id <' => $id, 'date >' => $date);

        $data = array();
        $id_kurir = $this->input->get('n');

        $where = array(
            'ID_KURIR' => $id_kurir,
        );


        $data['list'] = $this->m_main->delete('kurir', $where);
        // var_dump($data['list']);exit;
        redirect('pos/master_kurir');
    }
    public function delete_user()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        //$array = array('name !=' => $name, 'id <' => $id, 'date >' => $date);

        $data = array();
        $username = $this->input->get('n');

        $where = array(
            'USERNAME' => $username,
        );


        $data['list'] = $this->m_main->delete('kurir', $where);
        // var_dump($data['list']);exit;
        redirect('pos/master_kurir');
    }
    public function sk_terima()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        //$array = array('name !=' => $name, 'id <' => $id, 'date >' => $date);
        $data = array();
        if ($this->input->post("tahun")) {
            $where = array(
                "YEAR(TANGGAL_KIRIM)" => $this->input->post("tahun"),
                "MONTH(TANGGAL_KIRIM)" => $this->input->post("bulan"),
                'STATUS' => "TERKIRIM",

            );
        } else {
            $where = array(
                "YEAR(TANGGAL_KIRIM)" => date('Y'),
                "MONTH(TANGGAL_KIRIM)" => date('m'),
                'STATUS' => "TERKIRIM",


            );
        }



        $data['list'] = $this->m_main->getwhere('sk_terima', $where);
        // var_dump($data['list']);exit;
        $this->template->halaman('pos/pos_terima', $data);
    }
    public function export_sk_terima()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        //$array = array('name !=' => $name, 'id <' => $id, 'date >' => $date);
        $data = array();

        $where = array(
            "YEAR(TANGGAL_KIRIM)" => $this->input->get("t"),
            "MONTH(TANGGAL_KIRIM)" => $this->input->get("b"),
            'STATUS' => "TERKIRIM",


        );



        $data['list'] = $this->m_main->getwhere('sk_terima', $where);
        // var_dump($data['list']);exit;
        $this->load->view('export/export_sk_terima', $data);
    }
    public function export_sk_pending()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        //$array = array('name !=' => $name, 'id <' => $id, 'date >' => $date);
        $data = array();

        $where = array(
            "YEAR(TANGGAL_KIRIM)" => $this->input->get("t"),
            "MONTH(TANGGAL_KIRIM)" => $this->input->get("b"),
            'STATUS' => "PENDING",


        );



        $data['list'] = $this->m_main->getwhere('sk_terima', $where);
        // var_dump($data['list']);exit;
        $this->load->view('export/export_sk_pending', $data);
    }
    public function export_sk_pending_ket()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        //$array = array('name !=' => $name, 'id <' => $id, 'date >' => $date);
        $data = array();

        $where = array(
            "YEAR(TANGGAL_KIRIM)" => $this->input->get("t"),
            "MONTH(TANGGAL_KIRIM)" => $this->input->get("b"),
            'STATUS' => "PENDING",


        );



        $data['list'] = $this->m_main->joinkurir('sk_terima', $where);
        // var_dump($data['list']);exit;
        $this->load->view('export/export_sk_pending_ket', $data);
    }
}
