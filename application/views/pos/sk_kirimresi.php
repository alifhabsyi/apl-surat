<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-info" href="<?php echo base_url() ?>pos/sk_kirimpos">SK Kirim POS </a>
                <a class="btn btn-info" href="<?php echo base_url() ?>pos/sk_kirimresi">SK RESI POS</a>
                <div class="card data-tables">
                    <div class="card-body table-striped table-no-bordered table-hover dataTable dtr-inline table-full-width">
                        <div class="toolbar">
                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                        </div>
                        <div class="fresh-datatables">
                            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                    <tr>
                                        
                                        <th>NO RESI</th>
                                        <th>NO KIRIM</th>
                                        <th>NO SK</th>
                                        <th>ID KURIR</th>
                                        <th>TANGGAL KIRIM</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($list as $a) :
                                       
                                    ?>
                                        <tr>
                                            
                                               
                                            <td><?php echo $a->NO_RESI ?></td>
                                            <td><?php echo $a->NO_KIRIM ?></td>
                                            <td><?php echo $a->NO_SK ?></td>
                                            <td><?php echo $a->ID_KURIR ?></td>
                                            <td><?php echo $a->TANGGAL_KIRIM ?></td>

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