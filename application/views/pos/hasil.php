<?php

?>

<body>


    <div class="card">
        <h1 align=center>Input Hasil</h1>

        <form class='form-horizontal' id='submit' action="add_hasil" method='post' enctype='multipart/form-data'>
            <?php
            foreach ($list_sk_kirim as $a) :
                $no_resi = $a->NO_RESI;
                $no_sk = $a->NO_SK;
                $no_kirim = $a->NO_KIRIM;

                $tanggal_kirim = $a->TANGGAL_KIRIM;

            endforeach;
            ?>
                    <input type="hidden"  name="id_kurir" id="id_kurir" value="<?php echo $a->ID_KURIR; ?>">
                    <input type="hidden"  name="no_kirim" id="no_kirim" value="<?php echo $no_kirim; ?>">
                    <input type="hidden"  name="tanggal_kirim" id="tanggal_kirim" value="<?php echo $tanggal_kirim; ?>">

            <div class="row">
                <label class="col-sm-2 control-label">No Resi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="no_resi" id="no_resi" placeholder="Auto Generated Resi" value="<?php echo $no_resi; ?>" readonly>

                </div>
            </div>
            <div class="row">
                <label class="col-sm-2 control-label">No SK</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="no_sk" id="no_sk" placeholder="Auto Generated Resi" value="<?php echo $no_sk; ?>" readonly>

                </div>
            </div>
            <div class="row">
                <label class="col-sm-2 control-label">Penerima</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="penerima" id="penerima" placeholder="Penerima" required>

                </div>
            </div>
            <div class="row">
                <label class="col-sm-2 control-label">Hasil</label>
                <div class="col-sm-10">
                    <select class="form-control" name="hasil" id="hasil">
                        <option value="TERKIRIM">TERKIRIM</option>
                        <option value="PENDING">PENDING</option>
                    </select>

                </div>
            </div>
            <div class="row">
                <label class="col-sm-2 control-label">Keterangan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="keterangan" required>

                </div>
            </div>

            <div class="row">

                <div class="col-sm-6">
                    <a class="btn btn-danger" href="<?php echo base_url() ?>sk/sk_list">Cancel</a>


                </div>
                <div class="col-sm-6">
                    <button type=submit class="btn btn-info">ADD</button>


                </div>
            </div>



        </form>

    </div>
    </div>
</body>