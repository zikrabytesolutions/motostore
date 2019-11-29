<div class="row">
<?php $ci =& get_instance(); date_default_timezone_set('Asia/Kolkata');?>
<div class="col-lg-12">
        <div class="hpanel">
            <div class="panel-heading hbuilt">
                <div class="panel-tools">
                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                 
                </div>
                Stock Management
            </div>
            <div class="panel-body">
            <div class="table-responsive">
                <table cellpadding="1" cellspacing="1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Product</th>
                        <th>Opning stock</th>
                        <th>In Stock</th>
                        <th>Status</th>
                        <th>Set</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if($stock): foreach($stock as $st):?>
                     <?php $first= $ci->firstattribute($st->first);?>
                     <?php $second= $ci->secondattribute($st->second);?>
                    <tr>
                        <td><?= $st->product?> (<?=$first ?> - <?=$second ?>)</td>
                        <td><?= $st->opening?></td>
                        <td><?= $st->productquantity?></td>
                        <td>
                           <?php if($st->stockstatus=='1'):?>
                            <a href="<?= base_url('stock/out/'.$st->id)?>" class="label label-success pull-right">In Stock</a>
                           <?php else:?>
                             <?php if($st->productquantity>0):?>
                              <a href="<?= base_url('stock/ins/'.$st->id)?>" class="label label-danger pull-right">Out Of Stock</a>
                             <?php else: ?>
                                <span class="label label-danger pull-right">Out Of Stock</span>
                             <?php endif; endif?>
                        </td>
                        <td>
                        <a href="<?= base_url('product/productedit/'.$st->pro_id)?>" class="btn btn-primary btn-xs">  Set</a>
                        </td>
                    </tr>
                    <?php endforeach; endif?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>