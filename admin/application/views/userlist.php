<link rel="stylesheet" href="<?= base_url('assets/')?>vendor/datatables.net-bs/css/dataTables.bootstrap.min.css" />
<div class="row">
    <div class="col-lg-12">
        <div class="hpanel hblue">
            <div class="panel-heading hbuilt">
                <div class="panel-tools">
                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                   
                </div>
                 User list
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
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i=0; date_default_timezone_set('Asia/Kolkata'); if($userlist): foreach($userlist as $user): $i++;?>
                    <tr>
                    <td><?= $i;?></td>
                        <td><?= $user->name?></td>
                        <td><?= $user->mobile?></td>
                        <td><?= $user->email?></td>
                        <td><?= date("d M, Y, h:i A", strtotime($user->created))?></td>
                        <td>
                              <?php if($user->status=='1'):?>
                                 <a  href="#" class="btn btn-xs btn-success active"  aria-pressed="true" >Verified</a>
                              <?php else:?>
                                  <a href="#" class="btn btn-xs btn-danger active"  aria-pressed="true">Not verified</a>
                               <?php endif;?>
                         </td>         
                        <td>
                          <a href="<?= base_url('user/timeline/'.$user->id)?>" class="btn btn-xs btn-primary">View</a>
                        
                    </tr>

                    
                </div>

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

