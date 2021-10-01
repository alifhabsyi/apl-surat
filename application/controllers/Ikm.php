<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ikm extends CI_Controller
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
        $data = array();
        $sk = $this->input->get('n');
        $where = array(
            'NO_SK' => $sk,
        );
        $data['sk'] = $this->m_main->getwhere('sk', $where);
        $this->load->view('ikm', $data);
    }
    function ikm()
    {
        $data = array();
        $sk = $this->input->get('n');
        $where = array(
            'NO_SK' => $sk,
        );
        $data['sk'] = $this->m_main->getwhere('sk', $where);
        $this->load->view('ikm', $data);
    }
    function add_ikm()
    {
        $where = array(
            'NO_SK' => $this->input->post('no_sk'),
        );
        $cek              = $this->m_main->cekada("survei", $where)->num_rows();
        //
        if ($cek == 0) {

            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $no_sk = $this->input->post('no_sk');
            $no_telp = $this->input->post('no_telp');
            $pendidikan = $this->input->post('pendidikan');
            $jenis_kelamin = $this->input->post('gender');
            $pekerjaan = $this->input->post('pekerjaan');
            $pemilik = $this->input->post('pemilik');
            $alamat = $this->input->post('alamat');
            $kota = $this->input->post('kota');
            $jenis = $this->input->post('jenis');
            $P1 = $this->input->post('p1');
            $P2 = $this->input->post('p2');
            $P3 = $this->input->post('p3');
            $P4 = $this->input->post('p4');
            $P5 = $this->input->post('p5');
            $P6 = $this->input->post('p6');
            $P7 = $this->input->post('p7');
            $P8 = $this->input->post('p8');
            $P9 = $this->input->post('p9');
            $saran = $this->input->post('saran');
            $tanggal = date('Y-m-d');
            $dataup=array(
                'NAMA' => $nama,
                'EMAIL' => $email,
                'NO_SK' => $no_sk,
                'NO_TELP' => $no_telp,
                'PENDIDIKAN' => $pendidikan,
                'JENIS_KELAMIN' => $jenis_kelamin,
                'PEKERJAAN' => $pekerjaan,
                'PEMILIK' => $pemilik,
                'ALAMAT' => $alamat,
                'KOTA' => $kota,
                'JENIS' => $jenis,
                'P1' => $P1,
                'P2' => $P2,
                'P3' => $P3,
                'P4' => $P4,
                'P5' => $P5,
                'P6' => $P6,
                'P7' => $P7,
                'P8' => $P8,
                'P9' => $P9,
                'SARAN' => $saran,
                'TANGGAL_SURVEI' => $tanggal,
            );
            $this->m_main->insert('survei',$dataup);
            redirect('ikm/ikmsk');
        }else {
            ?>
                        <script languange='javascript'>
                            window.alert('Data sudah Pernah ada');
                            window.history.back();
                        </script>
            <?php
                    }
    }
    function ikmsk(){
        $data=array();
        $data['responden']=$this->m_main->getres();
        $data['laki']=$this->m_main->getj('Laki-laki');
        $data['perempuan']=$this->m_main->getj('Perempuan');
        $data['sd']=$this->m_main->getp('SD');
        $data['smp']=$this->m_main->getp('SMP');
        $data['sma']=$this->m_main->getp('SMA');
        $data['d3']=$this->m_main->getp('D3');
        $data['s1']=$this->m_main->getp('S1');
        $data['s2']=$this->m_main->getp('S2');
        $data['s3']=$this->m_main->getp('S3');
        $data['ikm']=$this->m_main->getikm();

        $data['jan1']=$this->m_main->getindb("P1","1");
        $data['jan2']=$this->m_main->getindb("P2","1");
        $data['jan3']=$this->m_main->getindb("P3","1");
        $data['jan4']=$this->m_main->getindb("P4","1");
        $data['jan5']=$this->m_main->getindb("P5","1");
        $data['jan6']=$this->m_main->getindb("P6","1");
        $data['jan7']=$this->m_main->getindb("P7","1");
        $data['jan8']=$this->m_main->getindb("P8","1");
        $data['jan9']=$this->m_main->getindb("P9","1");
        $data['jan10']=$this->m_main->getinrb("1");
        $data['jan11']=$this->m_main->getskmb("1");
        $data['jan12']=$this->m_main->getrespb("1");
        $data['rata1']=$this->m_main->getrata("P1");

        $data['feb1']=$this->m_main->getindb("P1","2");
        $data['feb2']=$this->m_main->getindb("P2","2");
        $data['feb3']=$this->m_main->getindb("P3","2");
        $data['feb4']=$this->m_main->getindb("P4","2");
        $data['feb5']=$this->m_main->getindb("P5","2");
        $data['feb6']=$this->m_main->getindb("P6","2");
        $data['feb7']=$this->m_main->getindb("P7","2");
        $data['feb8']=$this->m_main->getindb("P8","2");
        $data['feb9']=$this->m_main->getindb("P9","2");
        $data['feb10']=$this->m_main->getinrb("2");
        $data['feb11']=$this->m_main->getskmb("2");
        $data['feb12']=$this->m_main->getrespb("2");
        $data['rata2']=$this->m_main->getrata("P2");

        $data['mar1']=$this->m_main->getindb("P1","3");
        $data['mar2']=$this->m_main->getindb("P2","3");
        $data['mar3']=$this->m_main->getindb("P3","3");
        $data['mar4']=$this->m_main->getindb("P4","3");
        $data['mar5']=$this->m_main->getindb("P5","3");
        $data['mar6']=$this->m_main->getindb("P6","3");
        $data['mar7']=$this->m_main->getindb("P7","3");
        $data['mar8']=$this->m_main->getindb("P8","3");
        $data['mar9']=$this->m_main->getindb("P9","3");
        $data['mar10']=$this->m_main->getinrb("3");
        $data['mar11']=$this->m_main->getskmb("3");
        $data['mar12']=$this->m_main->getrespb("3");
        $data['rata3']=$this->m_main->getrata("P3");

        $data['apr1']=$this->m_main->getindb("P1","4");
        $data['apr2']=$this->m_main->getindb("P2","4");
        $data['apr3']=$this->m_main->getindb("P3","4");
        $data['apr4']=$this->m_main->getindb("P4","4");
        $data['apr5']=$this->m_main->getindb("P5","4");
        $data['apr6']=$this->m_main->getindb("P6","4");
        $data['apr7']=$this->m_main->getindb("P7","4");
        $data['apr8']=$this->m_main->getindb("P8","4");
        $data['apr9']=$this->m_main->getindb("P9","4");
        $data['apr10']=$this->m_main->getinrb("4");
        $data['apr11']=$this->m_main->getskmb("4");
        $data['apr12']=$this->m_main->getrespb("4");
        $data['rata4']=$this->m_main->getrata("P4");

        $data['mei1']=$this->m_main->getindb("P1","5");
        $data['mei2']=$this->m_main->getindb("P2","5");
        $data['mei3']=$this->m_main->getindb("P3","5");
        $data['mei4']=$this->m_main->getindb("P4","5");
        $data['mei5']=$this->m_main->getindb("P5","5");
        $data['mei6']=$this->m_main->getindb("P6","5");
        $data['mei7']=$this->m_main->getindb("P7","5");
        $data['mei8']=$this->m_main->getindb("P8","5");
        $data['mei9']=$this->m_main->getindb("P9","5");
        $data['mei10']=$this->m_main->getinrb("5");
        $data['mei11']=$this->m_main->getskmb("5");
        $data['mei12']=$this->m_main->getrespb("5");
        $data['rata5']=$this->m_main->getrata("P5");

        $data['jun1']=$this->m_main->getindb("P1","6");
        $data['jun2']=$this->m_main->getindb("P2","6");
        $data['jun3']=$this->m_main->getindb("P3","6");
        $data['jun4']=$this->m_main->getindb("P4","6");
        $data['jun5']=$this->m_main->getindb("P5","6");
        $data['jun6']=$this->m_main->getindb("P6","6");
        $data['jun7']=$this->m_main->getindb("P7","6");
        $data['jun8']=$this->m_main->getindb("P8","6");
        $data['jun9']=$this->m_main->getindb("P9","6");
        $data['jun10']=$this->m_main->getinrb("6");
        $data['jun11']=$this->m_main->getskmb("6");
        $data['jun12']=$this->m_main->getrespb("6");
        $data['rata6']=$this->m_main->getrata("P6");

        $data['jul1']=$this->m_main->getindb("P1","7");
        $data['jul2']=$this->m_main->getindb("P2","7");
        $data['jul3']=$this->m_main->getindb("P3","7");
        $data['jul4']=$this->m_main->getindb("P4","7");
        $data['jul5']=$this->m_main->getindb("P5","7");
        $data['jul6']=$this->m_main->getindb("P6","7");
        $data['jul7']=$this->m_main->getindb("P7","7");
        $data['jul8']=$this->m_main->getindb("P8","7");
        $data['jul9']=$this->m_main->getindb("P9","7");
        $data['jul10']=$this->m_main->getinrb("7");
        $data['jul11']=$this->m_main->getskmb("7");
        $data['jul12']=$this->m_main->getrespb("7");
        $data['rata7']=$this->m_main->getrata("P7");

        $data['agust1']=$this->m_main->getindb("P1","8");
        $data['agust2']=$this->m_main->getindb("P2","8");
        $data['agust3']=$this->m_main->getindb("P3","8");
        $data['agust4']=$this->m_main->getindb("P4","8");
        $data['agust5']=$this->m_main->getindb("P5","8");
        $data['agust6']=$this->m_main->getindb("P6","8");
        $data['agust7']=$this->m_main->getindb("P7","8");
        $data['agust8']=$this->m_main->getindb("P8","8");
        $data['agust9']=$this->m_main->getindb("P9","8");
        $data['agust10']=$this->m_main->getinrb("8");
        $data['agust11']=$this->m_main->getskmb("8");
        $data['agust12']=$this->m_main->getrespb("8");
        $data['rata8']=$this->m_main->getrata("P8");

        $data['sept1']=$this->m_main->getindb("P1","9");
        $data['sept2']=$this->m_main->getindb("P2","9");
        $data['sept3']=$this->m_main->getindb("P3","9");
        $data['sept4']=$this->m_main->getindb("P4","9");
        $data['sept5']=$this->m_main->getindb("P5","9");
        $data['sept6']=$this->m_main->getindb("P6","9");
        $data['sept7']=$this->m_main->getindb("P7","9");
        $data['sept8']=$this->m_main->getindb("P8","9");
        $data['sept9']=$this->m_main->getindb("P9","9");
        $data['sept10']=$this->m_main->getinrb("9");
        $data['sept11']=$this->m_main->getskmb("9");
        $data['sept12']=$this->m_main->getrespb("9");
        $data['rata9']=$this->m_main->getrata("P9");

        $data['okt1']=$this->m_main->getindb("P1","10");
        $data['okt2']=$this->m_main->getindb("P2","10");
        $data['okt3']=$this->m_main->getindb("P3","10");
        $data['okt4']=$this->m_main->getindb("P4","10");
        $data['okt5']=$this->m_main->getindb("P5","10");
        $data['okt6']=$this->m_main->getindb("P6","10");
        $data['okt7']=$this->m_main->getindb("P7","10");
        $data['okt8']=$this->m_main->getindb("P8","10");
        $data['okt9']=$this->m_main->getindb("P9","10");
        $data['okt10']=$this->m_main->getinrb("10");
        $data['okt11']=$this->m_main->getskmb("10");
        $data['okt12']=$this->m_main->getrespb("10");
        // $data['rata10']=$this->m_main->getrata("P10");

        $data['nov1']=$this->m_main->getindb("P1","11");
        $data['nov2']=$this->m_main->getindb("P2","11");
        $data['nov3']=$this->m_main->getindb("P3","11");
        $data['nov4']=$this->m_main->getindb("P4","11");
        $data['nov5']=$this->m_main->getindb("P5","11");
        $data['nov6']=$this->m_main->getindb("P6","11");
        $data['nov7']=$this->m_main->getindb("P7","11");
        $data['nov8']=$this->m_main->getindb("P8","11");
        $data['nov9']=$this->m_main->getindb("P9","11");
        $data['nov10']=$this->m_main->getinrb("11");
        $data['nov11']=$this->m_main->getskmb("11");
        $data['nov12']=$this->m_main->getrespb("11");
        // $data['rata11']=$this->m_main->getrata("P11");

        $data['des1']=$this->m_main->getindb("P1","12");
        $data['des2']=$this->m_main->getindb("P2","12");
        $data['des3']=$this->m_main->getindb("P3","12");
        $data['des4']=$this->m_main->getindb("P4","12");
        $data['des5']=$this->m_main->getindb("P5","12");
        $data['des6']=$this->m_main->getindb("P6","12");
        $data['des7']=$this->m_main->getindb("P7","12");
        $data['des8']=$this->m_main->getindb("P8","12");
        $data['des9']=$this->m_main->getindb("P9","12");
        $data['des10']=$this->m_main->getinrb("12");
        $data['des11']=$this->m_main->getskmb("12");
        $data['des12']=$this->m_main->getrespb("12");
        // $data['rata12']=$this->m_main->getrata("P12");
        $this->load->view('ikmsk',$data);
    }
    function export(){
        $data=array();
        $data['responden']=$this->m_main->getres();
        $data['laki']=$this->m_main->getj('Laki-laki');
        $data['perempuan']=$this->m_main->getj('Perempuan');
        $data['sd']=$this->m_main->getp('SD');
        $data['smp']=$this->m_main->getp('SMP');
        $data['sma']=$this->m_main->getp('SMA');
        $data['d3']=$this->m_main->getp('D3');
        $data['s1']=$this->m_main->getp('S1');
        $data['s2']=$this->m_main->getp('S2');
        $data['s3']=$this->m_main->getp('S3');
        $data['ikm']=$this->m_main->getikm();

        $data['jan1']=$this->m_main->getindb("P1","1");
        $data['jan2']=$this->m_main->getindb("P2","1");
        $data['jan3']=$this->m_main->getindb("P3","1");
        $data['jan4']=$this->m_main->getindb("P4","1");
        $data['jan5']=$this->m_main->getindb("P5","1");
        $data['jan6']=$this->m_main->getindb("P6","1");
        $data['jan7']=$this->m_main->getindb("P7","1");
        $data['jan8']=$this->m_main->getindb("P8","1");
        $data['jan9']=$this->m_main->getindb("P9","1");
        $data['jan10']=$this->m_main->getinrb("1");
        $data['jan11']=$this->m_main->getskmb("1");
        $data['jan12']=$this->m_main->getrespb("1");
        $data['rata1']=$this->m_main->getrata("P1");

        $data['feb1']=$this->m_main->getindb("P1","2");
        $data['feb2']=$this->m_main->getindb("P2","2");
        $data['feb3']=$this->m_main->getindb("P3","2");
        $data['feb4']=$this->m_main->getindb("P4","2");
        $data['feb5']=$this->m_main->getindb("P5","2");
        $data['feb6']=$this->m_main->getindb("P6","2");
        $data['feb7']=$this->m_main->getindb("P7","2");
        $data['feb8']=$this->m_main->getindb("P8","2");
        $data['feb9']=$this->m_main->getindb("P9","2");
        $data['feb10']=$this->m_main->getinrb("2");
        $data['feb11']=$this->m_main->getskmb("2");
        $data['feb12']=$this->m_main->getrespb("2");
        $data['rata2']=$this->m_main->getrata("P2");

        $data['mar1']=$this->m_main->getindb("P1","3");
        $data['mar2']=$this->m_main->getindb("P2","3");
        $data['mar3']=$this->m_main->getindb("P3","3");
        $data['mar4']=$this->m_main->getindb("P4","3");
        $data['mar5']=$this->m_main->getindb("P5","3");
        $data['mar6']=$this->m_main->getindb("P6","3");
        $data['mar7']=$this->m_main->getindb("P7","3");
        $data['mar8']=$this->m_main->getindb("P8","3");
        $data['mar9']=$this->m_main->getindb("P9","3");
        $data['mar10']=$this->m_main->getinrb("3");
        $data['mar11']=$this->m_main->getskmb("3");
        $data['mar12']=$this->m_main->getrespb("3");
        $data['rata3']=$this->m_main->getrata("P3");

        $data['apr1']=$this->m_main->getindb("P1","4");
        $data['apr2']=$this->m_main->getindb("P2","4");
        $data['apr3']=$this->m_main->getindb("P3","4");
        $data['apr4']=$this->m_main->getindb("P4","4");
        $data['apr5']=$this->m_main->getindb("P5","4");
        $data['apr6']=$this->m_main->getindb("P6","4");
        $data['apr7']=$this->m_main->getindb("P7","4");
        $data['apr8']=$this->m_main->getindb("P8","4");
        $data['apr9']=$this->m_main->getindb("P9","4");
        $data['apr10']=$this->m_main->getinrb("4");
        $data['apr11']=$this->m_main->getskmb("4");
        $data['apr12']=$this->m_main->getrespb("4");
        $data['rata4']=$this->m_main->getrata("P4");

        $data['mei1']=$this->m_main->getindb("P1","5");
        $data['mei2']=$this->m_main->getindb("P2","5");
        $data['mei3']=$this->m_main->getindb("P3","5");
        $data['mei4']=$this->m_main->getindb("P4","5");
        $data['mei5']=$this->m_main->getindb("P5","5");
        $data['mei6']=$this->m_main->getindb("P6","5");
        $data['mei7']=$this->m_main->getindb("P7","5");
        $data['mei8']=$this->m_main->getindb("P8","5");
        $data['mei9']=$this->m_main->getindb("P9","5");
        $data['mei10']=$this->m_main->getinrb("5");
        $data['mei11']=$this->m_main->getskmb("5");
        $data['mei12']=$this->m_main->getrespb("5");
        $data['rata5']=$this->m_main->getrata("P5");

        $data['jun1']=$this->m_main->getindb("P1","6");
        $data['jun2']=$this->m_main->getindb("P2","6");
        $data['jun3']=$this->m_main->getindb("P3","6");
        $data['jun4']=$this->m_main->getindb("P4","6");
        $data['jun5']=$this->m_main->getindb("P5","6");
        $data['jun6']=$this->m_main->getindb("P6","6");
        $data['jun7']=$this->m_main->getindb("P7","6");
        $data['jun8']=$this->m_main->getindb("P8","6");
        $data['jun9']=$this->m_main->getindb("P9","6");
        $data['jun10']=$this->m_main->getinrb("6");
        $data['jun11']=$this->m_main->getskmb("6");
        $data['jun12']=$this->m_main->getrespb("6");
        $data['rata6']=$this->m_main->getrata("P6");

        $data['jul1']=$this->m_main->getindb("P1","7");
        $data['jul2']=$this->m_main->getindb("P2","7");
        $data['jul3']=$this->m_main->getindb("P3","7");
        $data['jul4']=$this->m_main->getindb("P4","7");
        $data['jul5']=$this->m_main->getindb("P5","7");
        $data['jul6']=$this->m_main->getindb("P6","7");
        $data['jul7']=$this->m_main->getindb("P7","7");
        $data['jul8']=$this->m_main->getindb("P8","7");
        $data['jul9']=$this->m_main->getindb("P9","7");
        $data['jul10']=$this->m_main->getinrb("7");
        $data['jul11']=$this->m_main->getskmb("7");
        $data['jul12']=$this->m_main->getrespb("7");
        $data['rata7']=$this->m_main->getrata("P7");

        $data['agust1']=$this->m_main->getindb("P1","8");
        $data['agust2']=$this->m_main->getindb("P2","8");
        $data['agust3']=$this->m_main->getindb("P3","8");
        $data['agust4']=$this->m_main->getindb("P4","8");
        $data['agust5']=$this->m_main->getindb("P5","8");
        $data['agust6']=$this->m_main->getindb("P6","8");
        $data['agust7']=$this->m_main->getindb("P7","8");
        $data['agust8']=$this->m_main->getindb("P8","8");
        $data['agust9']=$this->m_main->getindb("P9","8");
        $data['agust10']=$this->m_main->getinrb("8");
        $data['agust11']=$this->m_main->getskmb("8");
        $data['agust12']=$this->m_main->getrespb("8");
        $data['rata8']=$this->m_main->getrata("P8");

        $data['sept1']=$this->m_main->getindb("P1","9");
        $data['sept2']=$this->m_main->getindb("P2","9");
        $data['sept3']=$this->m_main->getindb("P3","9");
        $data['sept4']=$this->m_main->getindb("P4","9");
        $data['sept5']=$this->m_main->getindb("P5","9");
        $data['sept6']=$this->m_main->getindb("P6","9");
        $data['sept7']=$this->m_main->getindb("P7","9");
        $data['sept8']=$this->m_main->getindb("P8","9");
        $data['sept9']=$this->m_main->getindb("P9","9");
        $data['sept10']=$this->m_main->getinrb("9");
        $data['sept11']=$this->m_main->getskmb("9");
        $data['sept12']=$this->m_main->getrespb("9");
        $data['rata9']=$this->m_main->getrata("P9");

        $data['okt1']=$this->m_main->getindb("P1","10");
        $data['okt2']=$this->m_main->getindb("P2","10");
        $data['okt3']=$this->m_main->getindb("P3","10");
        $data['okt4']=$this->m_main->getindb("P4","10");
        $data['okt5']=$this->m_main->getindb("P5","10");
        $data['okt6']=$this->m_main->getindb("P6","10");
        $data['okt7']=$this->m_main->getindb("P7","10");
        $data['okt8']=$this->m_main->getindb("P8","10");
        $data['okt9']=$this->m_main->getindb("P9","10");
        $data['okt10']=$this->m_main->getinrb("10");
        $data['okt11']=$this->m_main->getskmb("10");
        $data['okt12']=$this->m_main->getrespb("10");
        // $data['rata10']=$this->m_main->getrata("P10");

        $data['nov1']=$this->m_main->getindb("P1","11");
        $data['nov2']=$this->m_main->getindb("P2","11");
        $data['nov3']=$this->m_main->getindb("P3","11");
        $data['nov4']=$this->m_main->getindb("P4","11");
        $data['nov5']=$this->m_main->getindb("P5","11");
        $data['nov6']=$this->m_main->getindb("P6","11");
        $data['nov7']=$this->m_main->getindb("P7","11");
        $data['nov8']=$this->m_main->getindb("P8","11");
        $data['nov9']=$this->m_main->getindb("P9","11");
        $data['nov10']=$this->m_main->getinrb("11");
        $data['nov11']=$this->m_main->getskmb("11");
        $data['nov12']=$this->m_main->getrespb("11");
        // $data['rata11']=$this->m_main->getrata("P11");

        $data['des1']=$this->m_main->getindb("P1","12");
        $data['des2']=$this->m_main->getindb("P2","12");
        $data['des3']=$this->m_main->getindb("P3","12");
        $data['des4']=$this->m_main->getindb("P4","12");
        $data['des5']=$this->m_main->getindb("P5","12");
        $data['des6']=$this->m_main->getindb("P6","12");
        $data['des7']=$this->m_main->getindb("P7","12");
        $data['des8']=$this->m_main->getindb("P8","12");
        $data['des9']=$this->m_main->getindb("P9","12");
        $data['des10']=$this->m_main->getinrb("12");
        $data['des11']=$this->m_main->getskmb("12");
        $data['des12']=$this->m_main->getrespb("12");
        // $data['rata12']=$this->m_main->getrata("P12");
        $this->load->view('export/export_ikm',$data);
    }
}
