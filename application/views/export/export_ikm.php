<?php
// var_dump($list);
header("Content-type: application/vnd-ms-excel");
$tahun = date('Y');
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=Data-IKM-$tahun.xls");
?>
<h1>Data Indeks Kepuasan Masyarakat</h1>
<table class="table table-striped" width=100% border=1>
    <tr align="center">
        <th rowspan=2>
            No
        </th>
        <th rowspan=2>
            Unsur Pelayanan
        </th>
        <th colspan=13 align="center" style="text-align:center">
            Bulan
        </th>

    </tr>
    <tr>
        <td>
            Jan
        </td>
        <td>
            Feb
        </td>
        <td>
            Mar
        </td>
        <td>
            Apr
        </td>
        <td>
            Mei
        </td>
        <td>
            Juni
        </td>
        <td>
            Juli
        </td>
        <td>
            Agust
        </td>
        <td>
            Sept
        </td>
        <td>
            Okt
        </td>
        <td>
            Nov
        </td>
        <td>
            Des
        </td>
        <td>
            Rata-rata
        </td>
    </tr>
    <tr>
        <td>
            1
        </td>
        <td>
            Persyaratan Pelayanan
        </td>
        <td>
            <?php echo $jan1 ?>
        </td>
        <td>
            <?php echo $feb1 ?>
        </td>
        <td>
            <?php echo $mar1 ?>
        </td>
        <td>
            <?php echo $apr1 ?>
        </td>
        <td>
            <?php echo $mei1 ?>
        </td>
        <td>
            <?php echo $jun1 ?>
        </td>

        <td>
            <?php echo $jul1 ?>
        </td>
        <td>
            <?php echo $agust1 ?>
        </td>
        <td>
            <?php echo $sept1 ?>
        </td>
        <td>
            <?php echo $okt1 ?>
        </td>
        <td>
            <?php echo $nov1 ?>
        </td>
        <td>
            <?php echo $des1 ?>
        </td>
        <td>
            <?php echo $rata1 ?>
        </td>
    </tr>
    <tr>
        <td>
            2
        </td>
        <td>
            Prosedur Pelayanan
        </td>
        <td>
            <?php echo $jan2 ?>
        </td>
        <td>
            <?php echo $feb2 ?>
        </td>
        <td>
            <?php echo $mar2 ?>
        </td>
        <td>
            <?php echo $apr2 ?>
        </td>
        <td>
            <?php echo $mei2 ?>
        </td>
        <td>
            <?php echo $jun2 ?>
        </td>

        <td>
            <?php echo $jul2 ?>
        </td>
        <td>
            <?php echo $agust2 ?>
        </td>
        <td>
            <?php echo $sept2 ?>
        </td>
        <td>
            <?php echo $okt2 ?>
        </td>
        <td>
            <?php echo $nov2 ?>
        </td>
        <td>
            <?php echo $des2 ?>
        </td>
        <td>
            <?php echo $rata2 ?>
        </td>
    </tr>
    <tr>
        <td>
            3
        </td>
        <td>
            Waktu Pelayanan
        </td>
        <td>
            <?php echo $jan3 ?>
        </td>
        <td>
            <?php echo $feb3 ?>
        </td>
        <td>
            <?php echo $mar3 ?>
        </td>
        <td>
            <?php echo $apr3 ?>
        </td>
        <td>
            <?php echo $mei3 ?>
        </td>
        <td>
            <?php echo $jun3 ?>
        </td>

        <td>
            <?php echo $jul3 ?>
        </td>
        <td>
            <?php echo $agust3 ?>
        </td>
        <td>
            <?php echo $sept3 ?>
        </td>
        <td>
            <?php echo $okt3 ?>
        </td>
        <td>
            <?php echo $nov3 ?>
        </td>
        <td>
            <?php echo $des3 ?>
        </td>
        <td>
            <?php echo $rata3 ?>
        </td>
    </tr>
    <tr>
        <td>
            4
        </td>
        <td>
            Biaya / Tarif Pelayanan
        </td>
        <td>
            <?php echo $jan4 ?>
        </td>
        <td>
            <?php echo $feb4 ?>
        </td>
        <td>
            <?php echo $mar4 ?>
        </td>
        <td>
            <?php echo $apr4 ?>
        </td>
        <td>
            <?php echo $mei4 ?>
        </td>
        <td>
            <?php echo $jun4 ?>
        </td>

        <td>
            <?php echo $jul4 ?>
        </td>
        <td>
            <?php echo $agust4 ?>
        </td>
        <td>
            <?php echo $sept4 ?>
        </td>
        <td>
            <?php echo $okt4 ?>
        </td>
        <td>
            <?php echo $nov4 ?>
        </td>
        <td>
            <?php echo $des4 ?>
        </td>
        <td>
            <?php echo $rata4 ?>
        </td>
    </tr>
    <tr>
        <td>
            5
        </td>
        <td>
            Produk Pelayanan
        </td>
        <td>
            <?php echo $jan5 ?>
        </td>
        <td>
            <?php echo $feb5 ?>
        </td>
        <td>
            <?php echo $mar5 ?>
        </td>
        <td>
            <?php echo $apr5 ?>
        </td>
        <td>
            <?php echo $mei5 ?>
        </td>
        <td>
            <?php echo $jun5 ?>
        </td>

        <td>
            <?php echo $jul5 ?>
        </td>
        <td>
            <?php echo $agust5 ?>
        </td>
        <td>
            <?php echo $sept5 ?>
        </td>
        <td>
            <?php echo $okt5 ?>
        </td>
        <td>
            <?php echo $nov5 ?>
        </td>
        <td>
            <?php echo $des5 ?>
        </td>
        <td>
            <?php echo $rata5 ?>
        </td>
    </tr>
    <tr>
        <td>
            6
        </td>
        <td>
            Kompensasi Pelayanan
        </td>
        <td>
            <?php echo $jan6 ?>
        </td>
        <td>
            <?php echo $feb6 ?>
        </td>
        <td>
            <?php echo $mar6 ?>
        </td>
        <td>
            <?php echo $apr6 ?>
        </td>
        <td>
            <?php echo $mei6 ?>
        </td>
        <td>
            <?php echo $jun6 ?>
        </td>

        <td>
            <?php echo $jul6 ?>
        </td>
        <td>
            <?php echo $agust6 ?>
        </td>
        <td>
            <?php echo $sept6 ?>
        </td>
        <td>
            <?php echo $okt6 ?>
        </td>
        <td>
            <?php echo $nov6 ?>
        </td>
        <td>
            <?php echo $des6 ?>
        </td>
        <td>
            <?php echo $rata6 ?>
        </td>
    </tr>
    <tr>
        <td>
            7
        </td>
        <td>
            Perilaku Sikap Petugas
        </td>
        <td>
            <?php echo $jan7 ?>
        </td>
        <td>
            <?php echo $feb7 ?>
        </td>
        <td>
            <?php echo $mar7 ?>
        </td>
        <td>
            <?php echo $apr7 ?>
        </td>
        <td>
            <?php echo $mei7 ?>
        </td>
        <td>
            <?php echo $jun7 ?>
        </td>

        <td>
            <?php echo $jul7 ?>
        </td>
        <td>
            <?php echo $agust7 ?>
        </td>
        <td>
            <?php echo $sept7 ?>
        </td>
        <td>
            <?php echo $okt7 ?>
        </td>
        <td>
            <?php echo $nov7 ?>
        </td>
        <td>
            <?php echo $des7 ?>
        </td>
        <td>
            <?php echo $rata7 ?>
        </td>
    </tr>
    <tr>
        <td>
            8
        </td>
        <td>
            Kualitas Sarana dan Prasarana
        </td>
        <td>
            <?php echo $jan8 ?>
        </td>
        <td>
            <?php echo $feb8 ?>
        </td>
        <td>
            <?php echo $mar8 ?>
        </td>
        <td>
            <?php echo $apr8 ?>
        </td>
        <td>
            <?php echo $mei8 ?>
        </td>
        <td>
            <?php echo $jun8 ?>
        </td>

        <td>
            <?php echo $jul8 ?>
        </td>
        <td>
            <?php echo $agust8 ?>
        </td>
        <td>
            <?php echo $sept8 ?>
        </td>
        <td>
            <?php echo $okt8 ?>
        </td>
        <td>
            <?php echo $nov8 ?>
        </td>
        <td>
            <?php echo $des8 ?>
        </td>
        <td>
            <?php echo $rata8 ?>
        </td>
    </tr>
    <tr>
        <td>
            9
        </td>
        <td>
            Ketersedian Sarana Pengaduan
        </td>
        <td>
            <?php echo $jan9 ?>
        </td>
        <td>
            <?php echo $feb9 ?>
        </td>
        <td>
            <?php echo $mar9 ?>
        </td>
        <td>
            <?php echo $apr9 ?>
        </td>
        <td>
            <?php echo $mei9 ?>
        </td>
        <td>
            <?php echo $jun9 ?>
        </td>

        <td>
            <?php echo $jul9 ?>
        </td>
        <td>
            <?php echo $agust9 ?>
        </td>
        <td>
            <?php echo $sept9 ?>
        </td>
        <td>
            <?php echo $okt9 ?>
        </td>
        <td>
            <?php echo $nov9 ?>
        </td>
        <td>
            <?php echo $des9 ?>
        </td>
        <td>
            <?php echo $rata9 ?>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            Nilai Indeks Unit Pelayanan
        </td>
        <td>
            <?php echo $jan10 ?>
        </td>
        <td>
            <?php echo $feb10 ?>
        </td>
        <td>
            <?php echo $mar10 ?>
        </td>
        <td>
            <?php echo $apr10 ?>
        </td>
        <td>
            <?php echo $mei10 ?>
        </td>
        <td>
            <?php echo $jun10 ?>
        </td>

        <td>
            <?php echo $jul10 ?>
        </td>
        <td>
            <?php echo $agust10 ?>
        </td>
        <td>
            <?php echo $sept10 ?>
        </td>
        <td>
            <?php echo $okt10 ?>
        </td>
        <td>
            <?php echo $nov10 ?>
        </td>
        <td>
            <?php echo $des10 ?>
        </td>
        <td>

        </td>
    </tr>
    <tr>
        <td colspan="2">
            Nilai SKM
        </td>
        <td>
            <?php echo $jan11 ?>
        </td>
        <td>
            <?php echo $feb11 ?>
        </td>
        <td>
            <?php echo $mar11 ?>
        </td>
        <td>
            <?php echo $apr11 ?>
        </td>
        <td>
            <?php echo $mei11 ?>
        </td>
        <td>
            <?php echo $jun11 ?>
        </td>

        <td>
            <?php echo $jul11 ?>
        </td>
        <td>
            <?php echo $agust11 ?>
        </td>
        <td>
            <?php echo $sept11 ?>
        </td>
        <td>
            <?php echo $okt11 ?>
        </td>
        <td>
            <?php echo $nov11 ?>
        </td>
        <td>
            <?php echo $des11 ?>
        </td>
        <td>

        </td>
    </tr>
    <tr>
        <td colspan="2">
            Nilai Indeks Unit Pelayanan
        </td>
        <td>
            <?php echo $jan12 ?>
        </td>
        <td>
            <?php echo $feb12 ?>
        </td>
        <td>
            <?php echo $mar12 ?>
        </td>
        <td>
            <?php echo $apr12 ?>
        </td>
        <td>
            <?php echo $mei12 ?>
        </td>
        <td>
            <?php echo $jun12 ?>
        </td>

        <td>
            <?php echo $jul12 ?>
        </td>
        <td>
            <?php echo $agust12 ?>
        </td>
        <td>
            <?php echo $sept12 ?>
        </td>
        <td>
            <?php echo $okt12 ?>
        </td>
        <td>
            <?php echo $nov12 ?>
        </td>
        <td>
            <?php echo $des12 ?>
        </td>
        <td>

        </td>
    </tr>
</table>