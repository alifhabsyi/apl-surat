<?php
$no_sk = "";
$tanggal_sk = "";
$nama = "";
$alamat = "";
$jenis = "";
$no_telp = "";
$id_tele = "";
$penanggung_jawab = "";
foreach ($list as $a) :
    $no_sk = $a->NO_SK;
    $tanggal_sk = $a->TANGGAL_SK;
    $nama = $a->NAMA;
    $alamat = $a->ALAMAT;
    $jenis = $a->JENIS;
    $no_telp = $a->NO_TELP;
    $penanggung_jawab = $a->PENANGGUNG_JAWAB;
    $status = $a->STATUS;
    $telegram_id = $a->TELEGRAM_ID;

endforeach;
?>

<body>

    <div class="card-body">
        <h1 align=center>Add Telegram ID</h1>
        <form class='form-horizontal' id='submit' action="add_id" method='post' enctype='multipart/form-data'>
            <div class="row">
                <div class="col-md-2">
                    No SK
                </div>
                <div class="col-md-10">
                    <input type="text" name="no_sk" id="no_sk" class="form-control" value="<?php echo $no_sk ?>" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    Telegram ID
                </div>
                <div class="col-md-10">
                    <input type="text" name="telegram_id" id="telegram_id" class="form-control" value="<?php echo $telegram_id ?>" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    Pesan
                </div>
                <div class="col-md-10">
                    <textarea name="message" id="message" class="form-control" required>
                        Yang Terhormat,  <?php echo $penanggung_jawab;
                                echo " " . $no_telp; ?> Status pengiriman SK anda adalah <?php echo  $status; ?> Terimakasih  
                    </textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <a class="btn btn-danger" href="<?php echo base_url() ?>sk/sk_list">Cancel</a>
                </div>
                <div class="col-md-6">
                    <button type=submit class="btn btn-info">Update</button>
                </div>
            </div>
        </form>

    </div>
    </div>
</body>