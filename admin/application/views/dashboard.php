<div class="row">
<div class="col-lg-3">
                <div class="hpanel">
                    <div class="panel-body text-center">
                    <h1 class="m-xs"><b><?= $productcount?></b></h1>
                    <h3 class="font-extra-bold no-margins text-success">
                            All Product
                        </h3>
                    </div>
                    <div class="panel-footer">
                        This is standard panel footer
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="hpanel">
                    <div class="panel-body text-center">
                    <h1 class="m-xs"><b><?= $stock?></b></h1>
                    <h3 class="font-extra-bold no-margins text-success">
                            Out Of Stock
                        </h3>
                    </div>
                    <div class="panel-footer">
                        This is standard panel footer
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="hpanel">
                    <div class="panel-body text-center">
                    <h1 class="m-xs"><b>0</b></h1>
                    <h3 class="font-extra-bold no-margins text-success">
                            Monthly Order
                        </h3>
                    </div>
                    <div class="panel-footer">
                        This is standard panel footer
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="hpanel">
                    <div class="panel-body text-center">
                    <h1 class="m-xs"><b>0</b></h1>
                    <h3 class="font-extra-bold no-margins text-success">
                            Today Order
                        </h3>
                    </div>
                    <div class="panel-footer">
                        This is standard panel footer
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
<div class="col-lg-3">
                <div class="hpanel">
                    <div class="panel-body text-center">
                    <h1 class="m-xs"><b><?= $alluser?></b></h1>
                    <h3 class="font-extra-bold no-margins text-success">
                            All User
                        </h3>
                    </div>
                    <div class="panel-footer">
                        This is standard panel footer
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="hpanel">
                    <div class="panel-body text-center">
                    <h1 class="m-xs"><b><?= $stock?></b></h1>
                    <h3 class="font-extra-bold no-margins text-success">
                            Out Of Stock
                        </h3>
                    </div>
                    <div class="panel-footer">
                        This is standard panel footer
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="hpanel">
                    <div class="panel-body text-center">
                    <h1 class="m-xs"><b>0</b></h1>
                    <h3 class="font-extra-bold no-margins text-success">
                    Monthly Order
                        </h3>
                    </div>
                    <div class="panel-footer">
                        This is standard panel footer
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="hpanel">
                    <div class="panel-body text-center">
                    <h1 class="m-xs"><b>0</b></h1>
                    <h3 class="font-extra-bold no-margins text-success">
                            Today Order
                        </h3>
                    </div>
                    <div class="panel-footer">
                        This is standard panel footer
                    </div>
                </div>
            </div>
        </div>

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
                <table cellpadding="1" cellspacing="1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                    <th>#</th>
                        <th>Order Id</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Iteam</th>
                        <th>Grand</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i=0; if($recentorder): foreach($recentorder as $rst): $i++?>
                    <tr>
                    <td><?= $i;?></td>
                        <td><?= $rst->orderdid?></td>
                        <td><?= $rst->name?></td>
                        <td><?= $rst->mobile?></td>
                        <td><?= $rst->iteam?></td>
                        <td><?= $rst->grand?></td>
                        <td><span class="label label-warning">Pending</span></td>
                        <td><a href="#" class="btn btn-primary btn-xs">  Set</a></td>
                    </tr>
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
        </div>