<link rel="stylesheet" href="<?= base_url('assets/')?>vendor/datatables.net-bs/css/dataTables.bootstrap.min.css" />
<div class="row">
    <div class="col-lg-12">
        <div class="hpanel hblue">
            <div class="panel-heading hbuilt">
                <div class="panel-tools">
                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                   
                </div>
                Recent Registerd User List
            </div>
            <div class="panel-body" style="display: block;">
                <div class="table-responsive">
               

                    <table id="example2" class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                    <th>#</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Date of Registration</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i=0; if($userlist): foreach($userlist as $user): $i++;?>
                    <tr>
                    <td><?= $i;?></td>
                        <td><?= $user->name?></td>
                        <td><?= $user->mobile?></td>
                        <td><?= $user->email?></td>
                        <td><?= date("d M, Y h:i", strtotime($user->created))?></td>
                        <td></td>
                       
                    </tr>
                    <?php endforeach; endif?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6">
                            <a href="<?= base_url('user/exports_data')?>"> <u>Export All Data </u> </a>
                            </td>
                        </tr>
                    </tfoot>
                </table>
                </div>

            </div>
           
        </div>
    </div>
</div>

