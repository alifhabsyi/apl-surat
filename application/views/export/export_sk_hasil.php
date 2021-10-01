<?php
// var_dump($list);
header("Content-type: application/vnd-ms-excel");
$tahun = $this->input->get('t');
$bulan = $this->input->get('b');
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=Data-SK-RESI-$tahun$bulan.xls");
?>
<b>
    <h2>Laporan SK Resi</h2>
</b>
<table border="2">
    <thead>

        <tr>

            <th>NO RESI</th>
            <th>NO KIRIM</th>
            <th>NO SK</th>
            <th>ID KURIR</th>
            <th>TANGGAL KIRIM</th>

            <th>STATUS</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($list as $a) :
        ?><tr>
                <td><?php echo $a->NO_RESI ?></td>
                <td><?php echo $a->NO_KIRIM ?></td>
                <td><?php echo $a->NO_SK ?></td>
                <td><?php echo $a->ID_KURIR ?></td>
                <td><?php echo $a->TANGGAL_KIRIM ?></td>

                <td><?php echo $a->STATUS ?></td>
            </tr>
        <?php
        endforeach;
        ?>
        </tfoot>
</table>