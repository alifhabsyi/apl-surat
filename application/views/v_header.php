<?php
if ($this->session->userdata("NAMA" == "")) {
    redirect(base_url('login'));
}

?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demos.creative-tim.com/light-bootstrap-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Jul 2021 08:52:51 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url() . '/maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css' ?>" />
    <!-- CSS Files -->

    <link href="<?php echo base_url() . '/assets/css/bootstrap.min.css' ?>" rel="stylesheet" />
    <link href="<?php echo base_url() . '/assets/css/light-bootstrap-dashboard790f.css?v=2.0.1' ?>" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?php echo base_url() . '/assets/css/demo.css' ?>" rel="stylesheet" />


</head>
<style>
    .modal-backdrop {
        /* bug fix - no overlay */
        z-index: -1;
    }
</style>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="wrapper">
        <div class="sidebar" data-color="Blue">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="https://www.creative-tim.com/" class="simple-text logo-mini">
                        
                    </a>
                    <a href="https://www.creative-tim.com/" class="simple-text logo-normal">
                        Kelola Surat
                    </a>
                </div>
                <div class="user">

                    <div class="info ">
                        <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                            <span><?php $nama1 = $this->session->userdata("NAMA");
                                    echo $nama1;
                                    ?>
                                <b class="caret"></b>
                            </span>
                        </a>
                        <div class="collapse" id="collapseExample">
                            <ul class="nav">
                                <li>
                                    <a class="profile-dropdown" href="<?php echo base_url() ?>login/logout">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">LOG OUT</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav">
                    <?php if ($this->session->userdata("LEVEL" )== "1") {

                    ?>
                        <li class="nav-item ">
                            <a class="nav-link" href="<?php echo base_url() . 'admin'; ?>">
                                <i class="nc-icon nc-chart-pie-35"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="<?php echo base_url() . 'pos/master_user'; ?>">
                                <i class="nc-icon nc-tap-01"></i>
                                <p>Master User</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#componentsExamples">
                                <i class="nc-icon nc-app"></i>
                                <p>
                                    SK Terbit
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <div class="collapse " id="componentsExamples">
                                <ul class="nav">
                                    <li class="nav-item ">
                                        <a class="nav-link" href="<?php echo base_url() . 'sk/sk_list'; ?>">
                                            <span class="sidebar-mini"></span>
                                            <span class="sidebar-normal">SK Terbit</span>
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="<?php echo base_url() . 'sk/sk_kirim'; ?>">
                                            <span class="sidebar-mini"></span>
                                            <span class="sidebar-normal">SK Kirim</span>
                                        </a>
                                    </li>


                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#formsExamples">
                                <i class="nc-icon nc-notes"></i>
                                <p>
                                    SK KIRIM POS
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <div class="collapse " id="formsExamples">
                                <ul class="nav">
                                    <li class="nav-item ">
                                        <a class="nav-link" href="<?php echo base_url() . 'pos/sk_kirimpos'; ?>">
                                            <span class="sidebar-mini"></span>
                                            <span class="sidebar-normal">SK Kirim POS</span>
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="<?php echo base_url() . 'pos/pos_hasil'; ?>">
                                            <span class="sidebar-mini"></span>
                                            <span class="sidebar-normal">Hasil Pengiriman</span>
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="<?php echo base_url() . 'pos/master_kurir'; ?>">
                                            <span class="sidebar-mini"></span>
                                            <span class="sidebar-normal">Master Kurir</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#mapsExamples">
                                <i class="nc-icon nc-pin-3"></i>
                                <p>
                                    Laporan
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <div class="collapse " id="mapsExamples">
                                <ul class="nav">
                                    <li class="nav-item ">
                                        <a class="nav-link" href="<?php echo base_url() . 'sk/sk_list'; ?>">
                                            <span class="sidebar-mini"></span>
                                            <span class="sidebar-normal">SK Terbit</span>
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="<?php echo base_url() . 'pos/pos_hasil'; ?>">
                                            <span class="sidebar-mini"></span>
                                            <span class="sidebar-normal">SK RESI</span>
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="<?php echo base_url() . 'pos/sk_terima'; ?>">
                                            <span class="sidebar-mini"></span>
                                            <span class="sidebar-normal">SK Diterima</span>
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="<?php echo base_url() . 'pos/sk_pending'; ?>">
                                            <span class="sidebar-mini"></span>
                                            <span class="sidebar-normal">SK Pending/Kembali</span>
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="<?php echo base_url() . 'pos/sk_pending_ket'; ?>">
                                            <span class="sidebar-mini"></span>
                                            <span class="sidebar-normal">SK Pending Keterangan</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="<?php echo base_url() . 'sk/sk_expired'; ?>">
                                <i class="nc-icon nc-chart-pie-35"></i>
                                <p>Notifikas SK Expired</p>
                            </a>
                        </li>
                    <?php } else if ($this->session->userdata("LEVEL")== "2") {

                    ?>
                        <li class="nav-item ">
                            <a class="nav-link" href="<?php echo base_url() . 'admin'; ?>">
                                <i class="nc-icon nc-chart-pie-35"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#componentsExamples">
                                <i class="nc-icon nc-app"></i>
                                <p>
                                    SK Terbit
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <div class="collapse " id="componentsExamples">
                                <ul class="nav">
                                    <li class="nav-item ">
                                        <a class="nav-link" href="<?php echo base_url() . 'sk/sk_list'; ?>">
                                            <span class="sidebar-mini"></span>
                                            <span class="sidebar-normal">SK Terbit</span>
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="<?php echo base_url() . 'sk/sk_kirim'; ?>">
                                            <span class="sidebar-mini"></span>
                                            <span class="sidebar-normal">SK Kirim</span>
                                        </a>
                                    </li>


                                </ul>
                            </div>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#mapsExamples">
                                <i class="nc-icon nc-pin-3"></i>
                                <p>
                                    Laporan
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <div class="collapse " id="mapsExamples">
                                <ul class="nav">
                                    <li class="nav-item ">
                                        <a class="nav-link" href="<?php echo base_url() . 'sk/sk_list'; ?>">
                                            <span class="sidebar-mini"></span>
                                            <span class="sidebar-normal">SK Terbit</span>
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="<?php echo base_url() . 'pos/pos_hasil'; ?>">
                                            <span class="sidebar-mini"></span>
                                            <span class="sidebar-normal">SK RESI</span>
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="<?php echo base_url() . 'pos/sk_terima'; ?>">
                                            <span class="sidebar-mini"></span>
                                            <span class="sidebar-normal">SK Diterima</span>
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="<?php echo base_url() . 'pos/sk_pending'; ?>">
                                            <span class="sidebar-mini"></span>
                                            <span class="sidebar-normal">SK Pending/Kembali</span>
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="<?php echo base_url() . 'pos/sk_pending_ket'; ?>">
                                            <span class="sidebar-mini"></span>
                                            <span class="sidebar-normal">SK Pending Keterangan</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="<?php echo base_url() . 'sk/sk_expired'; ?>">
                                <i class="nc-icon nc-chart-pie-35"></i>
                                <p>Notifikasi SK Expired</p>
                            </a>
                        </li>
                    <?php } else if ($this->session->userdata("LEVEL")== "3") {

                    ?>


                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#formsExamples">
                                <i class="nc-icon nc-notes"></i>
                                <p>
                                    SK KIRIM POS
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <div class="collapse " id="formsExamples">
                                <ul class="nav">
                                    <li class="nav-item ">
                                        <a class="nav-link" href="<?php echo base_url() . 'pos/sk_kirimpos'; ?>">
                                            <span class="sidebar-mini"></span>
                                            <span class="sidebar-normal">SK Kirim POS</span>
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="<?php echo base_url() . 'pos/pos_hasil'; ?>">
                                            <span class="sidebar-mini"></span>
                                            <span class="sidebar-normal">Hasil Pengiriman</span>
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="<?php echo base_url() . 'pos/sk_pending'; ?>">
                                            <span class="sidebar-mini"></span>
                                            <span class="sidebar-normal">SK Pending/Kembali</span>
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="<?php echo base_url() . 'pos/master_kurir'; ?>">
                                            <span class="sidebar-mini"></span>
                                            <span class="sidebar-normal">Master Kurir</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>


                    <?php } ?>

                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-minimize">
                            <button id="minimizeSidebar" class="btn btn-warning btn-fill btn-round btn-icon d-none d-lg-block">
                                <i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
                                <i class="fa fa-navicon visible-on-sidebar-mini"></i>
                            </button>
                        </div>
                        <a class="navbar-brand" href="#pablo"> Dashboard Kelola Surat </a>
                    </div>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>

                </div>
            </nav>
            <!-- End Navbar -->