<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url() . '/maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css' ?>" />
    <!-- CSS Files -->
    <link href="<?php echo base_url() . '/assets/css/bootstrap.min.css' ?>" rel="stylesheet" />
    <link href="<?php echo base_url() . '/assets/css/light-bootstrap-dashboard790f.css?v=2.0.1' ?>" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?php echo base_url() . '/assets/css/demo.css' ?>" rel="stylesheet" />

</head>

<body>

    <div class="wrapper wrapper-full-page">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute">
            <div class="container">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="#pablo"></a>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            
                        </li>

                        <li class="nav-item ">
                            <a href="<?php echo base_url() ?>/login" class="nav-link">
                                <i class="nc-icon nc-mobile"></i> Login
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="<?php echo base_url() ?>ikm/ikmsk" class="nav-link">
                                <i class="nc-icon nc-mobile"></i> Survei
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="full-page  section-image" data-color="rose" data-image="../../assets/img/full-screen-image-2.jpg" ;>
            <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
            <div class="content">
                <div class="container">

                    <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                        <form action="<?php echo base_url('ikm'); ?>" method="get">

                            <div class="card card-login ">
                                <div class="card-header ">
                                    <h3 class="header text-center">Survei</h3>
                                </div>
                                <div class="card-body ">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>NO SK</label>
                                            <input type="text" placeholder="Enter SK" name="n" id="n" class="form-control">
                                        </div>


                                    </div>
                                </div>
                                <div class="card-footer ml-auto mr-auto">
                                    <button type="submit" class="btn btn-warning btn-wd">Survei</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-12">
                                    <h3 align=center>
                                        <b align=center>
                                            Indeks Kepuasan Masyarakat Bulan <?php echo date('F'); ?> Tahun <?php echo date('Y'); ?>

                                        </b>
                                        <hr>
                                    </h3>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <h3 align=center>
                                        <b align=center>

                                            Nilai Indeks
                                            <hr>

                                        </b>
                                    </h3>
                                    <h1 align=center>
                                        <?php
                                        foreach ($ikm as $a) :
                                            echo $a->hsl;
                                        endforeach;
                                        ?>
                                    </h1>
                                </div>
                                <div class="col-md-6">
                                    <h3 align=center>
                                        <b align=center>

                                            Responden

                                        </b>
                                        <hr>
                                    </h3>
                                    <table>
                                        <tr>
                                            <td>Jumlah</td>
                                            <td> : <?php echo $responden ?> Orang</td>
                                        </tr>
                                        <tr>
                                            <td>Laki-Laki : <?php echo $laki ?> Orang</td>
                                            <td>&nbsp;&nbsp;&nbsp; Perempuan : <?php echo $perempuan ?> Orang</td>
                                        </tr>
                                        <tr>
                                            <td>SD</td>
                                            <td> : <?php echo $sd ?> Orang</td>
                                        </tr>
                                        <tr>
                                            <td>SMP</td>
                                            <td> : <?php echo $smp ?> Orang</td>
                                        </tr>
                                        <tr>
                                            <td>SMA</td>
                                            <td> : <?php echo $sma ?> Orang</td>
                                        </tr>
                                        <tr>
                                            <td>D3</td>
                                            <td> : <?php echo $d3 ?> Orang</td>
                                        </tr>
                                        <tr>
                                            <td>S1</td>
                                            <td> : <?php echo $s1 ?> Orang</td>
                                        </tr>
                                        <tr>
                                            <td>S2</td>
                                            <td> : <?php echo $s2 ?> Orang</td>
                                        </tr>
                                        <tr>
                                            <td>S3</td>
                                            <td> : <?php echo $s3 ?> Orang</td>
                                        </tr>
                                    </table>



                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-12">
                                    <h3 align=center>
                                        <b align=center>
                                            Indeks Kepuasan Masyarakat Tahun <?php echo date('Y'); ?>

                                        </b>
                                        <hr>
                                    </h3>
                                </div>
                            </div>
                            <div class="row">
                                
                                <div class="col-md-12">
                                    <a href="<?php echo base_url()?>ikm/export">Export IKM</a>
                                    <table class="table table-striped" width=100% border=1>
                                        <tr align="center">
                                            <th rowspan=2>
                                                No
                                            </th>
                                            <th rowspan=2>
                                                Unsur Pelayanan
                                            </th>
                                            <th colspan=13 align="center" style="text-align:center">
                                                Bulan
                                            </th>

                                        </tr>
                                        <tr>
                                            <td>
                                                Jan
                                            </td>
                                            <td>
                                                Feb
                                            </td>
                                            <td>
                                                Mar
                                            </td>
                                            <td>
                                                Apr
                                            </td>
                                            <td>
                                                Mei
                                            </td>
                                            <td>
                                                Juni
                                            </td>
                                            <td>
                                                Juli
                                            </td>
                                            <td>
                                                Agust
                                            </td>
                                            <td>
                                                Sept
                                            </td>
                                            <td>
                                                Okt
                                            </td>
                                            <td>
                                                Nov
                                            </td>
                                            <td>
                                                Des
                                            </td>
                                            <td>
                                                Rata-rata
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                Persyaratan Pelayanan
                                            </td>
                                            <td>
                                                <?php echo $jan1 ?>
                                            </td>
                                            <td>
                                                <?php echo $feb1 ?>
                                            </td>
                                            <td>
                                                <?php echo $mar1 ?>
                                            </td>
                                            <td>
                                                <?php echo $apr1 ?>
                                            </td>
                                            <td>
                                                <?php echo $mei1 ?>
                                            </td>
                                            <td>
                                                <?php echo $jun1 ?>
                                            </td>

                                            <td>
                                                <?php echo $jul1 ?>
                                            </td>
                                            <td>
                                                <?php echo $agust1 ?>
                                            </td>
                                            <td>
                                                <?php echo $sept1 ?>
                                            </td>
                                            <td>
                                                <?php echo $okt1 ?>
                                            </td>
                                            <td>
                                                <?php echo $nov1 ?>
                                            </td>
                                            <td>
                                                <?php echo $des1 ?>
                                            </td>
                                            <td>
                                                <?php echo $rata1 ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                2
                                            </td>
                                            <td>
                                                Prosedur Pelayanan
                                            </td>
                                            <td>
                                                <?php echo $jan2 ?>
                                            </td>
                                            <td>
                                                <?php echo $feb2 ?>
                                            </td>
                                            <td>
                                                <?php echo $mar2 ?>
                                            </td>
                                            <td>
                                                <?php echo $apr2 ?>
                                            </td>
                                            <td>
                                                <?php echo $mei2 ?>
                                            </td>
                                            <td>
                                                <?php echo $jun2 ?>
                                            </td>

                                            <td>
                                                <?php echo $jul2 ?>
                                            </td>
                                            <td>
                                                <?php echo $agust2 ?>
                                            </td>
                                            <td>
                                                <?php echo $sept2 ?>
                                            </td>
                                            <td>
                                                <?php echo $okt2 ?>
                                            </td>
                                            <td>
                                                <?php echo $nov2 ?>
                                            </td>
                                            <td>
                                                <?php echo $des2 ?>
                                            </td>
                                            <td>
                                                <?php echo $rata2 ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                3
                                            </td>
                                            <td>
                                                Waktu Pelayanan
                                            </td>
                                            <td>
                                                <?php echo $jan3 ?>
                                            </td>
                                            <td>
                                                <?php echo $feb3 ?>
                                            </td>
                                            <td>
                                                <?php echo $mar3 ?>
                                            </td>
                                            <td>
                                                <?php echo $apr3 ?>
                                            </td>
                                            <td>
                                                <?php echo $mei3 ?>
                                            </td>
                                            <td>
                                                <?php echo $jun3 ?>
                                            </td>

                                            <td>
                                                <?php echo $jul3 ?>
                                            </td>
                                            <td>
                                                <?php echo $agust3 ?>
                                            </td>
                                            <td>
                                                <?php echo $sept3 ?>
                                            </td>
                                            <td>
                                                <?php echo $okt3 ?>
                                            </td>
                                            <td>
                                                <?php echo $nov3 ?>
                                            </td>
                                            <td>
                                                <?php echo $des3 ?>
                                            </td>
                                            <td>
                                                <?php echo $rata3 ?>
                                            </td>
                                        </tr>
                                        <tr>
                                           <td>
                                               4
                                           </td>
                                           <td>
                                               Biaya / Tarif Pelayanan
                                           </td>
                                           <td>
                                               <?php echo $jan4 ?>
                                           </td>
                                           <td>
                                               <?php echo $feb4 ?>
                                           </td>
                                           <td>
                                               <?php echo $mar4 ?>
                                           </td>
                                           <td>
                                               <?php echo $apr4 ?>
                                           </td>
                                           <td>
                                               <?php echo $mei4 ?>
                                           </td>
                                           <td>
                                               <?php echo $jun4 ?>
                                           </td>
                                           
                                           <td>
                                               <?php echo $jul4 ?>
                                           </td>
                                           <td>
                                               <?php echo $agust4 ?>
                                           </td>
                                           <td>
                                               <?php echo $sept4 ?>
                                           </td>
                                           <td>
                                               <?php echo $okt4 ?>
                                           </td>
                                           <td>
                                               <?php echo $nov4 ?>
                                           </td>
                                           <td>
                                               <?php echo $des4 ?>
                                           </td>
                                           <td>
                                               <?php echo $rata4 ?>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>
                                               5
                                           </td>
                                           <td>
                                               Produk Pelayanan
                                           </td>
                                           <td>
                                               <?php echo $jan5 ?>
                                           </td>
                                           <td>
                                               <?php echo $feb5 ?>
                                           </td>
                                           <td>
                                               <?php echo $mar5 ?>
                                           </td>
                                           <td>
                                               <?php echo $apr5 ?>
                                           </td>
                                           <td>
                                               <?php echo $mei5 ?>
                                           </td>
                                           <td>
                                               <?php echo $jun5 ?>
                                           </td>
                                           
                                           <td>
                                               <?php echo $jul5 ?>
                                           </td>
                                           <td>
                                               <?php echo $agust5 ?>
                                           </td>
                                           <td>
                                               <?php echo $sept5 ?>
                                           </td>
                                           <td>
                                               <?php echo $okt5 ?>
                                           </td>
                                           <td>
                                               <?php echo $nov5 ?>
                                           </td>
                                           <td>
                                               <?php echo $des5 ?>
                                           </td>
                                           <td>
                                               <?php echo $rata5 ?>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>
                                               6
                                           </td>
                                           <td>
                                               Kompensasi Pelayanan
                                           </td>
                                           <td>
                                               <?php echo $jan6 ?>
                                           </td>
                                           <td>
                                               <?php echo $feb6 ?>
                                           </td>
                                           <td>
                                               <?php echo $mar6 ?>
                                           </td>
                                           <td>
                                               <?php echo $apr6 ?>
                                           </td>
                                           <td>
                                               <?php echo $mei6 ?>
                                           </td>
                                           <td>
                                               <?php echo $jun6 ?>
                                           </td>
                                           
                                           <td>
                                               <?php echo $jul6 ?>
                                           </td>
                                           <td>
                                               <?php echo $agust6 ?>
                                           </td>
                                           <td>
                                               <?php echo $sept6 ?>
                                           </td>
                                           <td>
                                               <?php echo $okt6 ?>
                                           </td>
                                           <td>
                                               <?php echo $nov6 ?>
                                           </td>
                                           <td>
                                               <?php echo $des6 ?>
                                           </td>
                                           <td>
                                               <?php echo $rata6 ?>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>
                                               7
                                           </td>
                                           <td>
                                               Perilaku Sikap Petugas
                                           </td>
                                           <td>
                                               <?php echo $jan7 ?>
                                           </td>
                                           <td>
                                               <?php echo $feb7 ?>
                                           </td>
                                           <td>
                                               <?php echo $mar7 ?>
                                           </td>
                                           <td>
                                               <?php echo $apr7 ?>
                                           </td>
                                           <td>
                                               <?php echo $mei7 ?>
                                           </td>
                                           <td>
                                               <?php echo $jun7 ?>
                                           </td>
                                           
                                           <td>
                                               <?php echo $jul7 ?>
                                           </td>
                                           <td>
                                               <?php echo $agust7 ?>
                                           </td>
                                           <td>
                                               <?php echo $sept7 ?>
                                           </td>
                                           <td>
                                               <?php echo $okt7 ?>
                                           </td>
                                           <td>
                                               <?php echo $nov7 ?>
                                           </td>
                                           <td>
                                               <?php echo $des7 ?>
                                           </td>
                                           <td>
                                               <?php echo $rata7 ?>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>
                                               8
                                           </td>
                                           <td>
                                               Kualitas Sarana dan Prasarana
                                           </td>
                                           <td>
                                               <?php echo $jan8 ?>
                                           </td>
                                           <td>
                                               <?php echo $feb8 ?>
                                           </td>
                                           <td>
                                               <?php echo $mar8 ?>
                                           </td>
                                           <td>
                                               <?php echo $apr8 ?>
                                           </td>
                                           <td>
                                               <?php echo $mei8 ?>
                                           </td>
                                           <td>
                                               <?php echo $jun8 ?>
                                           </td>
                                           
                                           <td>
                                               <?php echo $jul8 ?>
                                           </td>
                                           <td>
                                               <?php echo $agust8 ?>
                                           </td>
                                           <td>
                                               <?php echo $sept8 ?>
                                           </td>
                                           <td>
                                               <?php echo $okt8 ?>
                                           </td>
                                           <td>
                                               <?php echo $nov8 ?>
                                           </td>
                                           <td>
                                               <?php echo $des8 ?>
                                           </td>
                                           <td>
                                               <?php echo $rata8 ?>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>
                                               9
                                           </td>
                                           <td>
                                               Ketersedian Sarana Pengaduan
                                           </td>
                                           <td>
                                               <?php echo $jan9 ?>
                                           </td>
                                           <td>
                                               <?php echo $feb9 ?>
                                           </td>
                                           <td>
                                               <?php echo $mar9 ?>
                                           </td>
                                           <td>
                                               <?php echo $apr9 ?>
                                           </td>
                                           <td>
                                               <?php echo $mei9 ?>
                                           </td>
                                           <td>
                                               <?php echo $jun9 ?>
                                           </td>
                                           
                                           <td>
                                               <?php echo $jul9 ?>
                                           </td>
                                           <td>
                                               <?php echo $agust9 ?>
                                           </td>
                                           <td>
                                               <?php echo $sept9 ?>
                                           </td>
                                           <td>
                                               <?php echo $okt9 ?>
                                           </td>
                                           <td>
                                               <?php echo $nov9 ?>
                                           </td>
                                           <td>
                                               <?php echo $des9 ?>
                                           </td>
                                           <td>
                                               <?php echo $rata9 ?>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td colspan="2">
                                                Nilai Indeks Unit Pelayanan
                                           </td>
                                           <td>
                                               <?php echo $jan10 ?>
                                           </td>
                                           <td>
                                               <?php echo $feb10 ?>
                                           </td>
                                           <td>
                                               <?php echo $mar10 ?>
                                           </td>
                                           <td>
                                               <?php echo $apr10 ?>
                                           </td>
                                           <td>
                                               <?php echo $mei10 ?>
                                           </td>
                                           <td>
                                               <?php echo $jun10 ?>
                                           </td>
                                           
                                           <td>
                                               <?php echo $jul10 ?>
                                           </td>
                                           <td>
                                               <?php echo $agust10 ?>
                                           </td>
                                           <td>
                                               <?php echo $sept10 ?>
                                           </td>
                                           <td>
                                               <?php echo $okt10 ?>
                                           </td>
                                           <td>
                                               <?php echo $nov10 ?>
                                           </td>
                                           <td>
                                               <?php echo $des10 ?>
                                           </td>
                                           <td>
                                               
                                           </td>
                                       </tr>
                                       <tr>
                                           <td colspan="2">
                                                Nilai SKM
                                           </td>
                                           <td>
                                               <?php echo $jan11 ?>
                                           </td>
                                           <td>
                                               <?php echo $feb11 ?>
                                           </td>
                                           <td>
                                               <?php echo $mar11 ?>
                                           </td>
                                           <td>
                                               <?php echo $apr11 ?>
                                           </td>
                                           <td>
                                               <?php echo $mei11 ?>
                                           </td>
                                           <td>
                                               <?php echo $jun11 ?>
                                           </td>
                                           
                                           <td>
                                               <?php echo $jul11 ?>
                                           </td>
                                           <td>
                                               <?php echo $agust11 ?>
                                           </td>
                                           <td>
                                               <?php echo $sept11 ?>
                                           </td>
                                           <td>
                                               <?php echo $okt11 ?>
                                           </td>
                                           <td>
                                               <?php echo $nov11 ?>
                                           </td>
                                           <td>
                                               <?php echo $des11 ?>
                                           </td>
                                           <td>
                                               
                                           </td>
                                       </tr>
                                       <tr>
                                           <td colspan="2">
                                                Jumlah Rata-rata Responden
                                           </td>
                                           <td>
                                               <?php echo $jan12 ?>
                                           </td>
                                           <td>
                                               <?php echo $feb12 ?>
                                           </td>
                                           <td>
                                               <?php echo $mar12 ?>
                                           </td>
                                           <td>
                                               <?php echo $apr12 ?>
                                           </td>
                                           <td>
                                               <?php echo $mei12 ?>
                                           </td>
                                           <td>
                                               <?php echo $jun12 ?>
                                           </td>
                                           
                                           <td>
                                               <?php echo $jul12 ?>
                                           </td>
                                           <td>
                                               <?php echo $agust12 ?>
                                           </td>
                                           <td>
                                               <?php echo $sept12 ?>
                                           </td>
                                           <td>
                                               <?php echo $okt12 ?>
                                           </td>
                                           <td>
                                               <?php echo $nov12 ?>
                                           </td>
                                           <td>
                                               <?php echo $des12 ?>
                                           </td>
                                           <td>
                                               
                                           </td>
                                       </tr>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <footer class="footer">
            <div class="container">
                <nav>
                    <ul class="footer-menu">
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Blog
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-center">
                        ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="https://www.creative-tim.com/">Creative Tim</a>, made with love for a better web
                    </p>
                </nav>
            </div>
        </footer>
    </div>
    <!--






<div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>

        <ul class="dropdown-menu">
			<li class="header-title"> Sidebar Style</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Background Image</p>
                    <label class="switch-image">
                        <input type="checkbox" data-toggle="switch" checked="" data-on-color="info" data-off-color="info"><span class="toggle"></span>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Sidebar Mini</p>
                    <label class="switch-mini">
                        <input type="checkbox" data-toggle="switch" data-on-color="info" data-off-color="info">
                        <span class="toggle"></span>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Fixed Navbar</p>
                    <label class="switch-nav">
                        <input type="checkbox" data-toggle="switch" data-on-color="info" data-off-color="info">
                        <span class="toggle"></span>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <p>Filters</p>
                    <div class="pull-right">
                        <span class="badge filter badge-black" data-color="black"></span>
                        <span class="badge filter badge-azure" data-color="azure"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-orange active" data-color="orange"></span>
                        <span class="badge filter badge-red" data-color="red"></span>
                        <span class="badge filter badge-purple" data-color="purple"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Sidebar Images</li>

            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../../assets/img/sidebar-1.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../../assets/img/sidebar-3.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../../assets/img/sidebar-4.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../../assets/img/sidebar-5.jpg" alt="" />
                </a>
            </li>

            <li class="button-container">
                <div>
                    <a href="https://www.creative-tim.com/product/light-bootstrap-dashboard" target="_blank" class="btn btn-info btn-block">Get free demo!</a>
                </div>
            </li>

            <li class="button-container">
                <div>
                    <a href="https://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank" class="btn btn-warning btn-block">Buy now!</a>
                </div>
            </li>

            <li class="button-container">
                <div>
                    <a href="https://demos.creative-tim.com/light-bootstrap-dashboard-pro/documentation/tutorial-components.html" target="_blank" class="btn btn-danger btn-block">Documention</a>
                </div>
            </li>


            <li class="header-title" id="sharrreTitle">Thank you for sharing!</li>

            <li class="button-container">
				<button id="twitter" class="btn btn-social btn-twitter btn-round twitter-sharrre"><i class="fa fa-twitter"></i> · 256</button>
                <button id="facebook" class="btn btn-social btn-facebook btn-round facebook-sharrre"><i class="fa fa-facebook-square"></i> · 426</button>
            </li>
        </ul>
    </div>
</div>
 -->
</body>
<!--   Core JS Files   -->
<script src="<?php echo base_url() . 'assets/js/core/jquery.3.2.1.min.js' ?>" type="text/javascript"></script>
<script src="<?php echo base_url() . 'assets/js/core/popper.min.js' ?>" type="text/javascript"></script>
<script src="<?php echo base_url() . 'assets/js/core/bootstrap.min.js' ?>" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: https://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="<?php echo base_url() . 'assets/js/plugins/bootstrap-switch.js' ?>"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
<!--  Chartist Plugin  -->
<script src="<?php echo base_url() . 'assets/js/plugins/chartist.min.js' ?>"></script>
<!--  Notifications Plugin    -->
<script src="<?php echo base_url() . 'assets/js/plugins/bootstrap-notify.js' ?>"></script>
<!--  Share Plugin -->
<script src="<?php echo base_url() . 'assets/js/plugins/jquery.sharrre.js' ?>"></script>
<!--  jVector Map  -->
<script src="<?php echo base_url() . 'assets/js/plugins/jquery-jvectormap.js' ?>" type="text/javascript"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="<?php echo base_url() . 'assets/js/plugins/moment.min.js' ?>"></script>
<!--  DatetimePicker   -->
<script src="<?php echo base_url() . 'assets/js/plugins/bootstrap-datetimepicker.js' ?>"></script>
<!--  Sweet Alert  -->
<script src="<?php echo base_url() . 'assets/js/plugins/sweetalert2.min.js' ?>" type="text/javascript"></script>
<!--  Tags Input  -->
<script src="<?php echo base_url() . 'assets/js/plugins/bootstrap-tagsinput.js' ?>" type="text/javascript"></script>
<!--  Sliders  -->
<script src="<?php echo base_url() . 'assets/js/plugins/nouislider.js' ?>" type="text/javascript"></script>
<!--  Bootstrap Select  -->
<script src="<?php echo base_url() . 'assets/js/plugins/bootstrap-selectpicker.js' ?>" type="text/javascript"></script>
<!--  jQueryValidate  -->
<script src="<?php echo base_url() . 'assets/js/plugins/jquery.validate.min.js' ?>" type="text/javascript"></script>
<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="<?php echo base_url() . 'assets/js/plugins/jquery.bootstrap-wizard.js' ?>"></script>
<!--  Bootstrap Table Plugin -->
<script src<?php echo base_url() . 'assets/js/plugins/bootstrap-table.js' ?>"></script>
<!--  DataTable Plugin -->
<script src="<?php echo base_url() . 'assets/js/plugins/jquery.dataTables.min.js' ?>"></script>
<!--  Full Calendar   -->
<script src="<?php echo base_url() . 'assets/js/plugins/fullcalendar.min.js' ?>"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?php echo base_url() . 'assets/js/light-bootstrap-dashboard790f.js?v=2.0.1' ?>" type="text/javascript"></script>
<!-- Light Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url() . 'assets/js/demo.js' ?>"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.showNotification();

        demo.initVectorMap();

    });
</script>
<!-- Facebook Pixel Code Don't Delete -->
<script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        }
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window,
        document, 'script', '../../../connect.facebook.net/en_US/fbevents.js');

    try {
        fbq('init', '111649226022273');
        fbq('track', "PageView");

    } catch (err) {
        console.log('Facebook Track Error:', err);
    }
</script>
<noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1" />
</noscript>
<!-- End Facebook Pixel Code -->


<!-- Mirrored from demos.creative-tim.com/light-bootstrap-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Jul 2021 08:52:51 GMT -->

</html>