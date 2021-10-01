<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form class='form-horizontal' id='submit' action="<?php echo base_url() ?>pos/pos_hasil" method='post' enctype='multipart/form-data'>

                    <div class="row">

                        <div class="col-md-3">
                            <select class="form-control" name="bulan" id="bulan">
                                <?php
                                if ($this->input->post("bulan")) {
                                    $bulan = $this->input->post("bulan");

                                    if ($this->input->post("bulan") == 1) {
                                        echo "<option value=$bulan>Januari</option>";
                                    } else if ($this->input->post("bulan") == 2) {
                                        echo "<option value=$bulan>Februari</option>";
                                    } else if ($this->input->post("bulan") == 3) {
                                        echo "<option value=$bulan>Maret</option>";
                                    } else if ($this->input->post("bulan") == 4) {
                                        echo "<option value=$bulan>April</option>";
                                    } else if ($this->input->post("bulan") == 5) {
                                        echo "<option value=$bulan>Mei</option>";
                                    } else if ($this->input->post("bulan") == 6) {
                                        echo "<option value=$bulan>Juni</option>";
                                    } else if ($this->input->post("bulan") == 7) {
                                        echo "<option value=$bulan>Juli</option>";
                                    } else if ($this->input->post("bulan") == 8) {
                                        echo "<option value=$bulan>Agustus</option>";
                                    } else if ($this->input->post("bulan") == 9) {
                                        echo "<option value=$bulan>September</option>";
                                    } else if ($this->input->post("bulan") == 10) {
                                        echo "<option value=$bulan>Oktober</option>";
                                    } else if ($this->input->post("bulan") == 11) {
                                        echo "<option value=$bulan>November</option>";
                                    } else if ($this->input->post("bulan") == 12) {
                                        echo "<option value=$bulan>Desember</option>";
                                    }
                                }
                                if (!$this->input->post("bulan")) {

                                    $bulan = date('m');
                                    // var_dump($bulan);
                                    if ($bulan == 1) {
                                        echo "<option value=$bulan>Januari</option>";
                                    } else if ($bulan == 2) {
                                        echo "<option value=$bulan>Februari</option>";
                                    } else if ($bulan == 3) {
                                        echo "<option value=$bulan>Maret</option>";
                                    } else if ($bulan == 4) {
                                        echo "<option value=$bulan>April</option>";
                                    } else if ($bulan == 5) {
                                        echo "<option value=$bulan>Mei</option>";
                                    } else if ($bulan == 6) {
                                        echo "<option value=$bulan>Juni</option>";
                                    } else if ($bulan == 7) {
                                        echo "<option value=$bulan>Juli</option>";
                                    } else if ($bulan == 8) {
                                        echo "<option value=$bulan>Agustus</option>";
                                    } else if ($bulan == 9) {
                                        echo "<option value=$bulan>September</option>";
                                    } else if ($bulan == 10) {
                                        echo "<option value=$bulan>Oktober</option>";
                                    } else if ($bulan == 11) {
                                        echo "<option value=$bulan>November</option>";
                                    } else if ($bulan == 12) {
                                        echo "<option value=$bulan>Desember</option>";
                                    }
                                } ?>
                                <option value=1>Januari</option>
                                <option value=2>Februari</option>
                                <option value=3>Maret</option>
                                <option value=4>April</option>
                                <option value=5>Mei</option>
                                <option value=6>Juni</option>
                                <option value=7>Juli</option>
                                <option value=8>Agustus</option>
                                <option value=9>September</option>
                                <option value=10>Oktober</option>
                                <option value=11>November</option>
                                <option value=12>Desember</option>
                            </select>
                        </div>
                        
                        <div class="col-md-3">
                            <select class="form-control" name="tahun" id="tahun">
                                <?php if ($this->input->post("tahun")) {
                                    $tahun = $this->input->post("tahun");
                                    echo "<option value='$tahun'>$tahun</option>";
                                }
                                if (!$this->input->post("tahun")) {

                                    $tahun = date('Y');
                                    echo "<option value='$tahun'>$tahun</option>";
                                } ?>
                                <option value=2019>2019</option>
                                <option value=2020>2020</option>
                                <option value=2021>2021</option>
                                <option value=2022>2022</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select class="form-control" name="status" id="status" required>
                            <?php 
                          
                            if ($this->input->post("status")) {
                                    echo "<option value='$status'>$status</option>";
                                }
                            ?>    
                                <option value='TERKIRIM'>TERKIRIM</option>
                                <option value='PENDING'>PENDING</option>
                               
                                
                            </select>
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-info">Cari</button>
                            <?php
                            if ($this->input->post("tahun")) {
                                $tahun = $this->input->post("tahun");
                                $bulan = $this->input->post("bulan");

                                $url = base_url() . "pos/export_sk_hasil?t=$tahun&b=$bulan";
                            } else if (!$this->input->post("tahun")) {
                                $tahun = date("Y");
                                $bulan = date("m");
                                $url = base_url() . "pos/export_sk_hasil?t=$tahun&b=$bulan";
                            }
                            ?>
                            <a href="<?php echo $url ?>" class="btn btn-info">Export Data</a>
                        </div>

                    </div>
                </form>
                <div class="card data-tables">
                    <div class="card-body table-striped table-no-bordered table-hover dataTable dtr-inline table-full-width">
                        <div class="toolbar">
                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                        </div>
                        <div class="fresh-datatables">
                            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Action</th>
                                        <th>NO RESI</th>
                                        <th>NO KIRIM</th>
                                        <th>NO SK</th>
                                        <th>ID KURIR</th>
                                        <th>TANGGAL KIRIM</th>

                                        <th>STATUS</th>


                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($list as $a) :

                                    ?>
                                        <tr>
                                            <td>
                                                <?php
                                                if ($a->STATUS == "TERKIRIM") {
                                                    echo "TERKIRIM";
                                                ?>

                                                <?php
                                                } else if ($a->STATUS == "PENDING") {
                                                    echo "PENDING ";
                                                ?>

                                                <?php
                                                } else {


                                                ?>
                                                    <a href="<?php echo base_url() ?>pos/sk_hasil?n=<?php echo $a->NO_RESI ?>" class="btn btn-link btn-warning edit"><i class="fa fa-edit"></i></a>
                                                <?php
                                                }
                                                ?>
                                            </td>
                                            <td><?php echo $a->NO_RESI ?></td>
                                            <td><?php echo $a->NO_KIRIM ?></td>
                                            <td><?php echo $a->NO_SK ?></td>
                                            <td><?php echo $a->ID_KURIR ?></td>
                                            <td><?php echo $a->TANGGAL_KIRIM ?></td>

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
    function checkDelete() {
        return confirm('Yakin Ingin Menghapus data?');
    }
</script>