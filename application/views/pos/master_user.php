<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a href="<?php echo base_url()?>pos/add_user" class="btn btn-info">Add user</a>
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


                                        <th>USERNAME</th>
                                        <th>NAMA </th>
                                        <th>JABATAN</th>
                                        <th>LEVEL</th>


                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($list as $a) :
                                        if($a->LEVEL=="1"){
                                            $level="Super Admin";
                                        }else if($a->LEVEL=="2"){
                                            $level="Admin";
                                        }else if($a->LEVEL=="3"){
                                            $level="POS";
                                        }
                                    ?>
                                        <tr>
                                            <td>


                                                <a href="<?php echo base_url() ?>pos/delete_user?n=<?php echo $a->USERNAME ?>" onclick="return checkDeleter()" class="btn btn-link btn-warning edit"><i class="fa fa-trash"></i></a>
                                                <a href="<?php echo base_url() ?>pos/user_edit?n=<?php echo $a->USERNAME ?>" class="btn btn-link btn-warning edit"><i class="fa fa-edit"></i></a>

                                            </td>
                                            <td><?php echo $a->USERNAME ?></td>
                                            <td><?php echo $a->NAMA ?></td>
                                            <td><?php echo $a->JABATAN ?></td>
                                            <td><?php echo $level ?></td>
                                          

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