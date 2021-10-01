<?php
// var_dump($list);
header("Content-type: application/vnd-ms-excel");
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=Data-SK.xls");
?>
<b>
    <h2>Laporan Data SK </h2>
</b>
<table border="2">
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
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($list as $a) :
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
                                            <td><?php echo $JENIS ?></td>
                                            <td><?php echo $a->NAMA ?></td>
                                            <td><?php echo $a->ALAMAT ?></td>
                                            <td><?php echo $a->PENANGGUNG_JAWAB ?></td>
                                            <td><?php echo $a->NO_TELP ?></td>
                                            <td><?php echo $a->STATUS ?></td>
                                            <td><?php echo $a->TELEGRAM_ID ?></td>
            </tr>

        <?php
        endforeach;
        ?>
        </tfoot>
</table>