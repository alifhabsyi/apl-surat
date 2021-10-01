<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-info" href="<?php echo base_url() ?>sk/sk_kirim">SK Kirim </a>
                <a class="btn btn-info" href="<?php echo base_url() ?>sk/sk_kirim1">SK Kirim POS</a>
                <div class="card data-tables">
                    <div class="card-body table-striped table-no-bordered table-hover dataTable dtr-inline table-full-width">
                        <div class="toolbar">
                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                        </div>
                        <div class="fresh-datatables">
                            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Kirim</th>
                                        <th>NO SK</th>
                                        <th>JENIS</th>
                                        <th>NAMA</th>
                                        <th>ALAMAT</th>
                                        
                                        <th>PIC</th>
                                        <th>STATUS</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($list as $a) :
                                        if ($a->JENIS == "lab") {
                                            $JENIS = "Izin Operasional Laboraturium";
                                        } else if ($a->JENIS == "pend") {
                                            $JENIS = "Izin Operasional Pendidikan";
                                        }else if ($a->JENIS=="apot"){
                                            $JENIS="Izin Apotek"; 
                                        }else if ($a->JENIS=="klin"){
                                            $JENIS="Izin Klinik"; 
                                        }else if ($a->JENIS=="bang"){
                                            $JENIS="Izin Persetujuan Bangunan Gedung"; 
                                        }else if ($a->JENIS=="pari"){
                                            $JENIS="Izin Pariwisata"; 
                                        }else if ($a->JENIS=="rekla"){
                                            $JENIS="Izin Reklame"; 
                                        }else if ($a->JENIS=="ang"){
                                            $JENIS="Izin Angkutan Umum"; 
                                        }else if ($a->JENIS=="guda"){
                                            $JENIS="Izin Gudang"; 
                                        } else if ($a->JENIS == "kons") {
                                            $JENIS = "Izin Jasa Konstruksi";
                                        }
                                    ?>
                                        <tr>
                                            <td> <a href="<?php echo base_url() ?>sk/update_kirim?n=<?php echo $a->NO_SK ?>" onclick="return checkDelete()" class="btn btn-link btn-warning edit"><i class="fa fa-check"></i></a>
                                            </td>
                                            <td><?php echo $a->NO_SK ?></td>
                                            <td><?php echo $JENIS ?></td>
                                            <td><?php echo $a->NAMA ?></td>
                                            <td><?php echo $a->ALAMAT ?></td>
                                            
                                            
                                            <td><?php echo $a->PENANGGUNG_JAWAB ?></td>
                                            <td><?php echo $a->STATUS ?></td>

                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script>


</script>