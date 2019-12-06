<div class="row">
<div class="col-lg-4">
        <div class="hpanel hblue">
            <div class="panel-heading hbuilt">
                <div class="panel-tools">
                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                   
                </div>
                Add Attribute
            </div>
            <?php echo form_open('attribute/add')?>
            <div class="panel-body">
            <div class="form-group">
                 <label>Attribute Name</label>
                  <input type="text"  class="form-control" name="attribute" placeholder="Attribute Name">
                  <?php if($this->session->flashdata('item')):?>
                     <?php $info= $this->session->flashdata('item');?>
                          <span class="text-<?= $info['class']?>"><b><?= $info['message']?> </b></span>
                      <?php endif;?>
            </div>
           
             <div class="form-group" style="float:right">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-check"></i> Submit</button>
             </div>
        </div>
     </form>
    </div>
</div>

<div class="col-lg-8">
        <div class="hpanel hblue">
            <div class="panel-heading hbuilt">
                <div class="panel-tools">
                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                   
                </div>
                Attribute List
            </div>
            <div class="panel-body">
            <div class="table-responsive">
                <table cellpadding="1" cellspacing="1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Attribute</th>
                        <!-- <th>Status</th> -->
                        
                        <!-- <th>Configuration</th> -->
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php $i=0; if($attribute): foreach($attribute as $at): $i++;?>
                        <tr>
                            <td><?= $i?></td>
                            <td>
                            <a  href="<?= base_url('attribute/config/'.$at->id)?>" data-toggle="tooltip" data-placement="top" title="Click To Configure" style="color:#8173ff">
                             <u> <?= $at->attribute?> </u>
                            </td>
                            </a>
                            <!-- <td>
                              <?php if($at->status=='1'):?>
                                 <a  href="<?= base_url('attribute/inactive/'.$at->id)?>" class="btn btn-xs btn-success active"  aria-pressed="true" data-toggle="tooltip" data-placement="top" title="Click For In active">Active</a>
                              <?php else:?>
                                  <a href="<?= base_url('attribute/active/'.$at->id)?>" class="btn btn-xs btn-danger active"  aria-pressed="true" data-toggle="tooltip" data-placement="top" title="Click For Active">In Active</a>
                               <?php endif;?>
                              </td> -->
                               <!-- <td>
                                     
                               </td> -->
                            <td>
                                 <button class="btn btn-warning btn-xs" type="button" data-toggle="modal" data-target="#myModal<?=$at->id?>" rel="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></button>
                                 <button class="btn btn-danger btn-xs" type="button" data-toggle="modal" data-target="#myModal2<?=$at->id?>" rel="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>


                    <div class="modal fade hmodal-warning" id="myModal2<?=$at->id?>" tabindex="-1" role="dialog"  aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content animated bounceIn">
                            <div class="color-line"></div>
                            <div class="modal-header">
                                <h5 class="modal-title">Delete</strong> </h5>
                                <small class="font-bold"></small>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                     <h4 style="color:red"><b>Are you sure you want to delete?</b></h4>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                <a href="<?= base_url('attribute/delete/'.$at->id);?>" class="btn btn-primary" >Yes</a>
                            </div>
                        </div>
                    </div>
                </div> 

                  <div class="modal fade hmodal-warning" id="myModal<?=$at->id?>" tabindex="-1" role="dialog"  aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="color-line"></div>
                            <div class="modal-header">
                                <h5 class="modal-title">Edit- <strong><?= $at->attribute?></strong> </h5>
                                <small class="font-bold"></small>
                            </div>
                            <?php echo form_open('attribute/update');?>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Brand Name</label>
                                    <input type="text"  class="form-control" value="<?= $at->attribute?>" name="attribute" placeholder="Brand Name">
                                </div>
                            </div>
                            <div class="modal-footer">
                              <input type="hidden" value="<?= $at->id?>" name="atid">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                          </form>
                        </div>
                    </div>
                </div>


                    <?php endforeach; endif?>
                    </tbody>
                </table>
                </div>
        </div>
    </div>
</div>

</div>