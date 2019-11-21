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
                        <td>
                          
                            <span class="label label-warning">Pending</span>
                        </td>
                        <td><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal<?=$i;?>">  View</a></td>
                    </tr>

                    <div class="modal fade" id="myModal<?=$i;?>" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="color-line"></div>
                                <div class="modal-header text-center">
                                    <h4 class="modal-title">Product Status</h4>
                                    <small class="font-bold"></small>
                                </div>
                                <?php form_open('stock/status')?>
                                <div class="modal-body">
                                   <div class="row">
                                       <div class="col-md-12">
                                       <div class="form-group">
                                            <label class="control-label">Product Status</label>
                                            <select class="form-control" name="status">
                                                <option value="0">Pending</option>
                                                <option value="1">Accept</option>
                                                <option value="2">Shipped</option>
                                                <option value="3">Deliverd</option>
                                            </select>
                                         </div>
                                       </div>
                                   </div>
                                </div>
                                <div class="modal-footer">
                                <input type="hidden" name="orderid" value="<?= $rst->id?>">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
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
        </div>