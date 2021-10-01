<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a href="<?php echo base_url()?>pos/add_kurir" class="btn btn-info">Add Kurir</a>
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


                                        <th>ID KURIR</th>
                                        <th>NAMA KURIR</th>
                                        <th>NO TELPON</th>


                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($list as $a) :

                                    ?>
                                        <tr>
                                            <td>


                                                <a href="<?php echo base_url() ?>pos/delete_kurir?n=<?php echo $a->ID_KURIR ?>" onclick="return checkDeleter()" class="btn btn-link btn-warning edit"><i class="fa fa-trash"></i></a>
                                                <a href="<?php echo base_url() ?>pos/kurir_edit?n=<?php echo $a->ID_KURIR ?>" class="btn btn-link btn-warning edit"><i class="fa fa-edit"></i></a>

                                            </td>
                                            <td><?php echo $a->ID_KURIR ?></td>
                                            <td><?php echo $a->NAMA_KURIR ?></td>
                                            <td><?php echo $a->NO_KURIR ?></td>
                                          

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