<link rel="stylesheet" href="<?= base_url('assets/')?>vendor/datatables.net-bs/css/dataTables.bootstrap.min.css" />
<div class="row">
        <div class="col-lg-12">
        <div class="hpanel hblue">
            <div class="panel-heading hbuilt">
                <div class="panel-tools">
                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                    <a class="closebox"><i class="fa fa-times"></i></a>
                </div>
               Recent Order
            </div>
            <div class="panel-body">
            <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                    <th>#</th>
                        <th>Order Id</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Item</th>
                        <th>Grand</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i=0; if($deliveredorder): foreach($deliveredorder as $rst): $i++?>
                    <tr>
                    <td><?= $i;?></td>
                        <td><?= $rst->orderdid?></td>
                        <td><?= $rst->name?></td>
                        <td><?= $rst->mobile?></td>
                        <td><?= $rst->iteam?></td>
                        <td><?= $rst->grand?></td>
                        <td>
                          
                            <span class="label label-success" >Pending</span>
                        </td>
                        <td><a href="<?= base_url('order/details/'.$rst->orderdid)?>" class="btn btn-primary btn-xs" >  View</a></td>
                    </tr>
                </div>

                    <?php endforeach; endif;?>
                    </tbody>
                </table>
                </div>
            </div>
            <div class="panel-footer">
            Total Recent Order :   <?= $i ?>
            </div>
        </div>
    </div>