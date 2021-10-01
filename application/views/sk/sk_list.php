<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form class='form-horizontal' id='submit' action="<?php echo base_url() ?>sk/sk_list" method='post' enctype='multipart/form-data'>

                    <div class="row">

                        <div class="col-md-4">
                            <select class="form-control" name="jenis" id="jenis">
                            <?php 
                            $jenis="";
                            if ($this->input->post("jenis")) {
                                    $jenis = $this->input->post("jenis");
                                    if ($jenis == "lab") {
                                        $jen = "Izin Operasional Laboraturium";
                                    } else if ($jenis == "pend") {
                                        $jen = "Izin Operasional Pendidikan";
                                    }else if ($jenis=="apot"){
                                        $jen="Izin Apotek"; 
                                    }else if ($jenis=="klin"){
                                        $jen="Izin Klinik"; 
                                    }else if ($jenis=="bang"){
                                        $jen="Izin Persetujuan Bangunan Gedung"; 
                                    }else if ($jenis=="pari"){
                                        $jen="Izin Pariwisata"; 
                                    }else if ($jenis=="rekla"){
                                        $jen="Izin Reklame"; 
                                    }else if ($jenis=="ang"){
                                        $jen="Izin Angkutan Umum"; 
                                    }else if ($jenis=="guda"){
                                        $jen="Izin Gudang";     
                                    } else if ($jenis == "kons") {
                                        $jen = "Izin Jasa Konstruksi";
                                    }
                                    echo "<option value='$jenis'>$jen</option>";
                                }
                            ?>    
                                <option value='lab'>Izin Operasional Laboraturium</option>
                                <option value='pend'>Izin Operasional Pendidikan</option>
                                <option value='apot'>Izin Apotek</option>
                                <option value='klin'>Izin Klinik</option>
                                <option value='banG'>Izin Persetujuan Bangunan Gedung</option>
                                <option value='pari'>Izin Pariwisata</option>
                                <option value='rekla'>Izin Reklame</option>
                                <option value='ang'>Izin Angkutan Umum</option>
                                <option value='guda'>Izin Gudang</option>
                                <option value='kons'>Izin Jasa Konstruksi</option>
                                
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select class="form-control" name="status" id="status" required>
                            <?php 
                            $jenis="";
                            if ($this->input->post("status")) {
                                    echo "<option value='$status'>$status</option>";
                                }
                            ?>    
                                <option value='TERKIRIM'>TERKIRIM</option>
                                <option value='PENDING'>PENDING</option>
                                <option value='PENGAMBILAN_SENDIRI'>PENGAMBILAN SENDIRI</option>
                                
                            </select>
                        </div>

                  
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-info">Cari</button>
                            <?php
                            if ($this->input->post("jenis")) {
                                

                                $url = base_url() . "sk/export_sk?j=$jenis";
                            } else if (!$this->input->post("jenis")) {
                               
                                $url = base_url() . "sk/export_sk?j=$jenis";
                            }
                            ?>
                            <a href="<?php echo $url ?>" class="btn btn-info">Export Data</a>
                        </div>

                    </div>
                </form>
                <a class="btn btn-info" href="<?php echo base_url() ?>sk/sk_input">Add SK</a>
                <div class="card data-tables">
                    <div class="card-body table-striped table-no-bordered table-hover dataTable dtr-inline table-full-width">
                        <div class="toolbar">
                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                        </div>
                        <div class="fresh-datatables">
                            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>NO SK</th>
                                        <th>JENIS</th>
                                        <th>NAMA</th>
                                        <th>ALAMAT</th>
                                        <th>PIC</th>
                                        <th>NO TELP</th>
                                        <th>STATUS</th>
                                        <th>TELEGRAM ID</th>
                                        <th class="disabled-sorting text-right">Actions</th>
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
                                            <td><?php echo $a->NO_SK ?></td>
                                            <td><?php echo $a->JENIS ?></td>
                                            <td><?php echo $a->NAMA ?></td>
                                            <td><?php echo $a->ALAMAT ?></td>
                                            <td><?php echo $a->PENANGGUNG_JAWAB ?></td>
                                            <td><?php echo $a->NO_TELP ?></td>
                                            <td><?php echo $a->TELEGRAM_ID ?></td>
                                            <td><?php echo $a->STATUS ?></td>
                                            
                                            <td class="text-right">
                                                <a href="<?php echo base_url() ?>sk/sk_telegram?n=<?php echo $a->NO_SK ?>" class="btn btn-link btn-warning edit"><i class="fa fa-send"></i></a>

                                                <?php
                                                if ($a->STATUS == "TERKIRIM" || $a->STATUS == "PENDING" || $a->STATUS == "RESI" || $a->STATUS == "PENGAMBILAN_SENDIRI") {
                                                } else {


                                                ?>
                                                    <a href="<?php echo base_url() ?>sk/sk_input?n=<?php echo $a->NO_SK ?>" class="btn btn-link btn-warning edit"><i class="fa fa-edit"></i></a>
                                                    <a href="<?php echo base_url() ?>sk/delete_sk?n=<?php echo $a->NO_SK ?>" onclick="return checkDelete()" class="btn btn-link btn-warning edit"><i class="fa fa-trash"></i></a>
                                                <?php
                                                }
                                                ?>

                                            </td>
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
    function checkDelete() {
        return confirm('Yakin Ingin Menghapus data?');
    }
</script>