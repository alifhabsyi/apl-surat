<?php
$id_kurir="";
$no_kurir="";
$nama_kurir="";
foreach ($list as $a) :
    $id_kurir = $a->ID_KURIR;
    $nama_kurir = $a->NAMA_KURIR;
    $no_kurir = $a->NO_KURIR;
endforeach;
?>
<?php if($this->input->get('n')){ ?>
<form class='form-horizontal' id='submit' action="<?php echo base_url() ?>pos/edit_kurir" method='post' enctype='multipart/form-data'>
<?php } else{ ?>
<form class='form-horizontal' id='submit' action="<?php echo base_url() ?>pos/kurir_add" method='post' enctype='multipart/form-data'>
<?php }?>
    <div class="card-body">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2">
                    Id Kurir
                </div>
                <div class="col-md-10">
                    <input type="text" name="id_kurir" class="form-control" id="id_kurir" value="<?php echo $id_kurir ?>" readonly placeholder="Auto Generate">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    Nama Kurir
                </div>
                <div class="col-md-10">
                    <input type="text" name="nama_kurir" class="form-control" id="nama_kurir" value="<?php echo $nama_kurir ?>" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    No Kurir
                </div>
                <div class="col-md-10">
                    <input type="text" name="no_kurir" class="form-control" id="no_kurir" value="<?php echo $no_kurir ?>" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <a href="<?php echo base_url()?>pos/master_kurir" class="btn btn-danger">Cancel</a>
                </div>
                <div class="col-md-6">
                    <button type=submit class="btn btn-info">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</form>