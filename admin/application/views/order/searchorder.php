<link rel="stylesheet" href="<?= base_url('assets/')?>vendor/datatables.net-bs/css/dataTables.bootstrap.min.css" />

<div class="row">
<?php echo form_open('order/filter')?>
  <div class="col-md-3"> <input type="date" name="start" class="form-control"></div>
  <div class="col-md-3"> <input type="date" name="end" class="form-control"></div>
  <div class="col-md-3">
      <select name="status" class="form-control">
        <option value="all" <?php if($selectstatus=='all'){echo "selected";}?>>All</option>
         <option value="0" <?php if($selectstatus=='0'){echo "selected";}?>>Pending</option>
         <option value="1" <?php if($selectstatus=='1'){echo "selected";}?>>Accepted</option>
         <option value="2" <?php if($selectstatus=='2'){echo "selected";}?>>Shipped</option>
         <option value="3" <?php if($selectstatus=='3'){echo "selected";}?>>Delivered</option>
         <option value="9" <?php if($selectstatus=='9'){echo "selected";}?>>Cancelled</option>
      </select>
  </div>
  <div class="col-md-3"> <button class="btn btn-primary" type="submit"> Search </button></div>
  </form>
</div>
<hr>
<div class="row">
        <div class="col-lg-12">
        <div class="hpanel hblue">
            <div class="panel-heading hbuilt">
                <div class="panel-tools">
                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                    <a class="closebox"><i class="fa fa-times"></i></a>
                </div>
                Order List
            </div>
            <div class="panel-body" style="display: block;">
                <div class="table-responsive">
               

                    <table id="example2" class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                    <th>#</th>
                        <th>Order Id</th>
                        <th>Date</th>
                        <th>Name</th>
                        
                        <th>Phone</th>
                        <th>Item</th>
                        <th>Grand</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i=0; if($acceptedorder): foreach($acceptedorder as $rst): $i++?>
                    <tr>
                    <td><?= $i;?></td>
                        <td><?= $rst->orderdid?></td>
                        <td><?= date("d M, Y", strtotime($rst->created))?></td>
                        <td><?= $rst->name?></td>
                        <td><?= $rst->mobile?></td>
                        <td><?= $rst->iteam?></td>
                        <td><?= $rst->grand?></td>
                        <td>
                        <?php if($rst->status=='0'){ echo ' <span class="label label-warning" >Pending</span>';}?>
                        <?php if($rst->status=='1'){ echo ' <span class="label label-primary" >Accepted</span>';}?>
                        <?php if($rst->status=='2'){ echo ' <span class="label label-info" >Delivered</span>';}?>
                        <?php if($rst->status=='3'){ echo ' <span class="label label-success" >Shipped</span>';}?>
                        <?php if($rst->status=='9'){ echo ' <span class="label label-danger" >Cancelled</span>';}?>
                           
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
            Total  Order :   <?= $i ?>
            </div>
        </div>
    </div>