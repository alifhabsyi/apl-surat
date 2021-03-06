<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
  
    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/icon_fonts/css/all_icons_min.css" rel="stylesheet">
    <link href="css/skins/square/grey.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

    <script src="js/modernizr.js"></script>
    <!-- Modernizr -->

</head>
<?php
$nama = "";
$no_sk = "";
$no_telp="";
foreach ($sk as $a) :
    $no_sk = $a->NO_SK;
    $nama = $a->PENANGGUNG_JAWAB;
    $no_telp = $a->NO_TELP;
endforeach;
?>

<body>

    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div><!-- /Preload -->

    <div id="loader_form">
        <div data-loader="circle-side-2"></div>
    </div><!-- /loader_form -->



    <main>
        <div id="form_container">
            <div class="row">
                <div class="col-lg-5">
                    <div id="left_form">
                        <figure><img src="img/registration_bg.svg" alt=""></figure>
                        <h2>Survey Indeks Kepuasan Masyarakat</h2>
                        <p>
                            Survey ini dimaksudkan untuk menilai instansi agar dapat melayani dan membantu masyarakat agar lebih cepat dalam pengurusan dibidang instansi terkait.
                        </p>
                        
                    </div>
                </div>
                <div class="col-lg-7">

                    <div id="wizard_container">
                        <div id="top-wizard">
                            <div id="progressbar"></div>
                        </div>
                        <!-- /top-wizard -->
                        <form class='form-horizontal' id='submit' action="<?php echo base_url() ?>ikm/add_ikm" method='post' enctype='multipart/form-data'>
                            <input id="website" name="website" type="text" value="">
                            <!-- Leave for security protection, read docs for details -->
                            <div id="middle-wizard">

                                <div class="step">
                                    <h3 class="main_question"><strong>1/6</strong>Data Diri</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="nama" class="form-control required" placeholder="Full name" value="<?php echo $nama ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control required" placeholder="Your Email">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="no_sk" class="form-control required" placeholder="No SK" value="<?php echo $no_sk ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="no_telp" class="form-control" placeholder="Your Telephone" value="<?php echo $no_telp ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->

                                    <div class="row">
                                        <div class="col-md-6">
                                            Pendidikan
                                            <div class="form-group radio_input">
                                                <label><input type="radio" value="SD" name="pendidikan" class="icheck">SD</label>
                                                <label><input type="radio" value="SMP" name="pendidikan" class="icheck">SMP</label>
                                                <label><input type="radio" value="SMA" checked name="pendidikan" class="icheck">SMA</label>
                                                <label><input type="radio" value="D3" name="pendidikan" class="icheck">D3</label>
                                                <label><input type="radio" value="S1" name="pendidikan" class="icheck">S1</label>
                                                <label><input type="radio" value="S2" name="pendidikan" class="icheck">S2</label>
                                                <label><input type="radio" value="S3" name="pendidikan" class="icheck">S3</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            Jenis Kelamin
                                            <div class="form-group radio_input">
                                                <label><input type="radio" value="Laki-laki" checked name="gender" class="icheck">Laki-laki</label>
                                                <label><input type="radio" value="Perempuan" name="gender" class="icheck">Perempuan</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->
                                </div>
                                <!-- /step-->

                                <div class="step">
                                    <h3 class="main_question"><strong>2/6</strong>Data Diri</h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="alamat" class="form-control required" placeholder="Address">
                                            </div>
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="kota" class="form-control required" placeholder="City">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            Pekerjaan
                                            <div class="form-group radio_input">
                                                <label><input type="radio" value="PNS" name="pekerjaan" class="icheck">PNS</label>
                                                <label><input type="radio" value="TNI" name="pekerjaan" class="icheck">TNI</label>
                                                <label><input type="radio" value="POLRI" name="pekerjaan" class="icheck">POLRI</label>
                                                <label><input type="radio" value="SWASTA" checked name="pekerjaan" class="icheck">SWASTA</label>
                                                <label><input type="radio" value="WIRAUSAHA" name="pekerjaan" class="icheck">WIRAUSAHA</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            Responden
                                            <div class="form-group radio_input">
                                                <label><input type="radio" value="PEMILIK" name="pemilik" checked class="icheck">PEMILIK</label>
                                                <label><input type="radio" value="KUASA" name="pemilik" class="icheck">KUASA</label>

                                            </div>
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            Jenis Layanan
                                            <div class="form-group radio_input">
                                                <label><input type="radio" value="Izin Operasional Laboratoium" name="jenis" checked class="icheck">Izin Operasional Laboratoium</label>
                                                <label><input type="radio" value="Izin Operasional Pendidikan" name="jenis" class="icheck">Izin Operasional Pendidikan</label>
                                                <label><input type="radio" value="Izin Operasional Pendidikan" name="jenis" class="icheck">Izin Apotek</label>
                                                <label><input type="radio" value="Izin Operasional Pendidikan" name="jenis" class="icheck">Izin Klinik</label>
                                                <label><input type="radio" value="Izin Operasional Pendidikan" name="jenis" class="icheck">Izin Persetujuan Bangunan Gedung</label>
                                                <label><input type="radio" value="Izin Operasional Pendidikan" name="jenis" class="icheck">Izin Pariwisata</label>
                                                <label><input type="radio" value="Izin Operasional Pendidikan" name="jenis" class="icheck">Izin Reklame</label>
                                                <label><input type="radio" value="Izin Operasional Pendidikan" name="jenis" class="icheck">Izin Angkutan Umum</label>
                                                <label><input type="radio" value="Izin Operasional Pendidikan" name="jenis" class="icheck">Izin Gudang</label>
                                                
                                                <label><input type="radio" value="Izin Jasa Konstruksi" name="jenis" class="icheck">Izin Jasa Konstruksi</label>

                                            </div>
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                    <!-- /row -->
                                </div>
                                <!-- /step-->
                                <div class="step">
                                    <h3 class="main_question"><strong>3/6</strong>Jawab Sesuai Kepuasan Anda</h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                            1. Bagaimana pendapat Saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanannya.
                                            <div class="form-group radio_input">
                                                <label><input type="radio" value="1" name="p1" class="icheck">Tidak Sesuai</label>
                                                <label><input type="radio" value="2" name="p1" class="icheck">Kurang Sesuai</label>
                                                <label><input type="radio" value="3" name="p1" class="icheck">Sesuai</label>
                                                <label><input type="radio" value="4" checked name="p1" class="icheck">Sangat Sesuai</label>
                                            </div>
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                        2.	Bagaimana pemahaman Saudara tentang kemudahan prosedur pelayanan di unit ini.
                                        <div class="form-group radio_input">
                                                <label><input type="radio" value="1" name="p2" class="icheck">Tidak Sesuai</label>
                                                <label><input type="radio" value="2" name="p2" class="icheck">Kurang Sesuai</label>
                                                <label><input type="radio" value="3" name="p2" class="icheck">Sesuai</label>
                                                <label><input type="radio" value="4" checked name="p2" class="icheck">Sangat Sesuai</label>
                                            </div>
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                        3.	Bagaimana pendapat Saudara tentang kecepatan waktu dalam memberikan pelayanan.
                                         <div class="form-group radio_input">
                                                <label><input type="radio" value="1" name="p3" class="icheck">Tidak Sesuai</label>
                                                <label><input type="radio" value="2" name="p3" class="icheck">Kurang Sesuai</label>
                                                <label><input type="radio" value="3" name="p3" class="icheck">Sesuai</label>
                                                <label><input type="radio" value="4" checked name="p3" class="icheck">Sangat Sesuai</label>
                                            </div>
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                
                                </div>
                                <!-- /step-->
                                <div class="step">
                                    <h3 class="main_question"><strong>4/6</strong>Jawab Sesuai Kepuasan Anda</h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                        4.	Bagaimana pendapat Saudara tentang kewajaran biaya/tariff dalam pelayanan.<div class="form-group radio_input">
                                                <label><input type="radio" value="1" name="p4" class="icheck">Tidak Sesuai</label>
                                                <label><input type="radio" value="2" name="p4" class="icheck">Kurang Sesuai</label>
                                                <label><input type="radio" value="3" name="p4" class="icheck">Sesuai</label>
                                                <label><input type="radio" value="4" checked name="p4" class="icheck">Sangat Sesuai</label>
                                            </div>
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                        5.	Bagaimana pendapat Saudara tentang kesesuaian produk pelayanan antara yang tercantum dalam standar pelayanan dengan hasil yang dib
                                        <div class="form-group radio_input">
                                                <label><input type="radio" value="1" name="p5" class="icheck">Tidak Sesuai</label>
                                                <label><input type="radio" value="2" name="p5" class="icheck">Kurang Sesuai</label>
                                                <label><input type="radio" value="3" name="p5" class="icheck">Sesuai</label>
                                                <label><input type="radio" value="4" checked name="p5" class="icheck">Sangat Sesuai</label>
                                            </div>
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                        6.	Bagaimana pendapat Saudara tentang kompetensi/kemampuan petugas dalam pelayanan.
                                         <div class="form-group radio_input">
                                                <label><input type="radio" value="1" name="p6" class="icheck">Tidak Sesuai</label>
                                                <label><input type="radio" value="2" name="p6" class="icheck">Kurang Sesuai</label>
                                                <label><input type="radio" value="3" name="p6" class="icheck">Sesuai</label>
                                                <label><input type="radio" value="4" checked name="p6" class="icheck">Sangat Sesuai</label>
                                            </div>
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                
                                </div>
                                <div class="step">
                                    <h3 class="main_question"><strong>5/6</strong>Jawab Sesuai Kepuasan Anda</h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                        7.	Bagaimana pendapat Saudara perilaku petugas dalam pelayanan terkait kesopanan dan keramahan.
                                        <div class="form-group radio_input">
                                                <label><input type="radio" value="1" name="p7" class="icheck">Tidak Sesuai</label>
                                                <label><input type="radio" value="2" name="p7" class="icheck">Kurang Sesuai</label>
                                                <label><input type="radio" value="3" name="p7" class="icheck">Sesuai</label>
                                                <label><input type="radio" value="4" checked name="p7" class="icheck">Sangat Sesuai</label>
                                            </div>
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                        8.	Bagaimana pendapat Saudara tentang kualitas sarana dan prasarana.
                                        <div class="form-group radio_input">
                                                <label><input type="radio" value="1" name="p8" class="icheck">Tidak Sesuai</label>
                                                <label><input type="radio" value="2" name="p8" class="icheck">Kurang Sesuai</label>
                                                <label><input type="radio" value="3" name="p8" class="icheck">Sesuai</label>
                                                <label><input type="radio" value="4" checked name="p8" class="icheck">Sangat Sesuai</label>
                                            </div>
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                        9.	Bagaimana pendapat Saudara tentang penanganan pengaduan pengguna layanan.
                                        <div class="form-group radio_input">
                                                <label><input type="radio" value="1" name="p9" class="icheck">Tidak Sesuai</label>
                                                <label><input type="radio" value="2" name="p9" class="icheck">Kurang Sesuai</label>
                                                <label><input type="radio" value="3" name="p9" class="icheck">Sesuai</label>
                                                <label><input type="radio" value="4" checked name="p9" class="icheck">Sangat Sesuai</label>
                                            </div>
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                
                                </div>
                                <div class="submit step">
                                    <h3 class="main_question"><strong>6/6</strong>Saran Anda</h3>
                                    <div class="form-group">
                                        <textarea name="saran" class="form-control" style="height:150px;" placeholder="Write your messagere here!"></textarea>
                                    </div>
                                    <div class="form-group terms">
                                        <input name="terms" type="checkbox" class="icheck required" value="yes">
                                        <label> <a href="#" data-toggle="modal" data-target="#terms-txt">Setuju</a> ?</label>
                                    </div>
                                </div>
                                <!-- /step-->
                            </div>
                            <!-- /middle-wizard -->
                            <div id="bottom-wizard">
                                <button type="button" name="backward" class="backward">Backward </button>
                                <button type="button" name="forward" class="forward">Forward</button>
                                <button type="submit" name="process" class="submit">Submit</button>
                            </div>
                            <!-- /bottom-wizard -->
                        </form>
                    </div>
                    <!-- /Wizard container -->
                </div>
            </div><!-- /Row -->
        </div><!-- /Form_container -->
    </main>


    <!-- end footer-->



    <!-- Modal terms -->
    <div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="termsLabel">Setuju</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn_1" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- Modal info -->
    
    <!-- /.modal -->

    <!-- SCRIPTS -->
    <!-- Jquery-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Common script -->
    <script src="js/common_scripts_min.js"></script>
    <!-- Wizard script -->
    <script src="js/registration_wizard_func.js"></script>
    <!-- Menu script -->
    <script src="js/velocity.min.js"></script>
    <script src="js/main.js"></script>
    <!-- Theme script -->
    <script src="js/functions.js"></script>

</body>

</html>