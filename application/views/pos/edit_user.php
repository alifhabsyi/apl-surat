<?php
$id_kurir="";
$no_kurir="";
$nama_kurir="";
$username="";
$nama="";
$jabatan="";
$level="";
$password="";
foreach ($list as $a) :
    $username = $a->USERNAME;
    $nama = $a->NAMA;
    $jabatan = $a->JABATAN;
    $level = $a->LEVEL;
    $password = $a->PASSWORD;
endforeach;
?>
<?php if($this->input->get('n')){ ?>
<form class='form-horizontal' id='submit' action="<?php echo base_url() ?>pos/edit_user" method='post' enctype='multipart/form-data'>
<?php } else{ ?>
<form class='form-horizontal' id='submit' action="<?php echo base_url() ?>pos/user_add" method='post' enctype='multipart/form-data'>
<?php }?>
    <div class="card-body">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2">
                    Username
                </div>
                <div class="col-md-10">
                    <input type="text" name="username" class="form-control" id="username" value="<?php echo $username ?>"  >
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    Nama
                </div>
                <div class="col-md-10">
                    <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $nama ?>" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    Jabatan
                </div>
                <div class="col-md-10">
                    <input type="text" name="jabatan" class="form-control" id="jabatan" value="<?php echo $jabatan ?>" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    Level
                </div>
                <div class="col-md-10">
                    <select class="form-control" name="level" id="level" required>
                        <?php 
                        if($level==1){
                            echo "<option value='1'>Super Admin</option>";
                        }else if($level==2){
                            echo "<option value='2'> Admin</option>";
                        } else if($level==3){
                            echo "<option value='3'> Pos</option>";
                        } 
                        ?>
                        <option value="1">Super Admin</option>
                        <option value="2">Admin</option>
                        <option value="3">POS</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    Password
                </div>
                <div class="col-md-10">
                    <input type="password" name="password" class="form-control" id="password"  required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <a href="<?php echo base_url()?>pos/master_user" class="btn btn-danger">Cancel</a>
                </div>
                <div class="col-md-6">
                    <button type=submit class="btn btn-info">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</form>