<?php
$no_sk = "";
$tanggal_sk = "";
$nama = "";
$alamat = "";
$jenis = "";
$no_telp = "";
$penanggung_jawab = "";
foreach ($list as $a) :
    $no_sk = $a->NO_SK;
    $tanggal_sk = $a->TANGGAL_SK;
    $nama = $a->NAMA;
    $alamat = $a->ALAMAT;
    $jenis = $a->JENIS;
    $no_telp = $a->NO_TELP;
    $penanggung_jawab = $a->PENANGGUNG_JAWAB;

endforeach;
?>

<body>

    <h1 align=center>Input Resi</h1>
    <div class="card-body">


        <form class='form-horizontal' id='submit' action="add_pos" method='post' enctype='multipart/form-data'>

            <div class="row">
                <div class="col-md-4">
                    <input type="text" class="form-control" name="no_resi" id="no_resi" placeholder="Auto Generated Resi" readonly>
                </div>
                <div class="col-md-4">

                    <input type="text" class="form-control" name="no_kirim" id="no_kirim" placeholder="Auto Generated No kirim" readonly>
                </div>
                <div class="col-md-4">
                    <select class="form-control" name="kurir" id="kurir">
                        <?php
                        foreach ($kurir as $a) :
                            $nakur = $a->NAMA_KURIR;
                            $id_kurir = $a->ID_KURIR;
                            $nokur = $a->NO_KURIR;
                            echo "<option value=$id_kurir>$nakur | $nokur</option>";
                        endforeach;
                        ?>
                    </select>
                </div>
            </div>

            <table style="width:100%" class="table table-hover table-striped">
                <tr>
                    <td>
                        NO SK
                    </td>
                    <td>
                        <input type="text" class="form-control" name="no_sk" id='no_sk' value="<?php echo $no_sk ?>" <?php if ($this->input->get("n")) {
                                                                                                                            echo "readonly";
                                                                                                                        } ?>>
                    </td>

                </tr>
                <tr>
                    <td>
                        Tanggal SK
                    </td>
                    <td>
                        <input type="date" class="form-control" name="tanggal_sk" id='tanggal_sk' value="<?php echo $tanggal_sk ?>" <?php if ($this->input->get("n")) {
                                                                                                                                        echo "readonly";
                                                                                                                                    } ?>>
                    </td>

                </tr>
                <tr>
                    <td>
                        Nama
                    </td>
                    <td>
                        <input type="text" class="form-control" name="nama" id='nama' value="<?php echo $nama ?>" <?php if ($this->input->get("n")) {
                                                                                                                        echo "readonly";
                                                                                                                    } ?>>
                    </td>

                </tr>
                <tr>
                    <td>
                        Alamat
                    </td>
                    <td>
                        <textarea class="form-control" name="alamat" id='alamat' <?php if ($this->input->get("n")) {
                                                                                        echo "readonly";
                                                                                    } ?>><?php echo $alamat ?></textarea>
                    </td>

                </tr>
                <tr>
                    <td>
                        Jenis
                    </td>
                    <td>
                        <select class="form-control" name="jenis" id="jenis" <?php if ($this->input->get("n")) {
                                                                                    echo "readonly";
                                                                                } ?>>
                            <?php
                            if ($jenis != "") {
                                if ($jenis == "lab") {
                                    $jen = "Izin Operasional Laboratorium";
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
                            <option value="lab">Izin Operasional Laboratorium</option>
                            <option value="pend">Izin Operasional Pendidikan</option>
                            <option value="apot">Izin Apotek</option>
                            <option value="klin">Izin Klinik</option>
                            <option value="bang">Izin Persetujuan Bangunan Gedung</option>
                            <option value="pari">Izin Pariwisata</option>
                            <option value="rekla">Izin Reklame</option>
                            <option value="ang">Izin Angkutan Umum</option>
                            <option value="guda">Izin Gudang</option>
                            <option value="kons">Izin Jasa Konstruksi</option>
                        </select>
                    </td>

                </tr>
                <tr>
                    <td>
                        No Telepon
                    </td>
                    <td>
                        <input type="text" class="form-control" name="no_telp" id='no_telp' value="<?php echo $no_telp ?>" <?php if ($this->input->get("n")) {
                                                                                                                                echo "readonly";
                                                                                                                            } ?>>
                    </td>

                </tr>
                <tr>
                    <td>
                        Penanggung Jawab
                    </td>
                    <td>
                        <input type="text" class="form-control" name="penanggung_jawab" id='penanggung_jawab' value="<?php echo $penanggung_jawab ?>" <?php if ($this->input->get("n")) {
                                                                                                                                                            echo "readonly";
                                                                                                                                                        } ?>>
                    </td>

                </tr>
                <tr>
                    <td align="center">
                        <a class="btn btn-danger" href="<?php echo base_url() ?>sk/sk_list">Cancel</a>

                    </td>
                    <td align="center">
                        <button type=submit class="btn btn-info">ADD</button>
                    </td>


                </tr>

            </table>
        </form>

    </div>
    </div>
</body>