<div class="row">
<div class="col-lg-4">
        <div class="hpanel hblue">
            <div class="panel-heading hbuilt">
                <div class="panel-tools">
                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                   
                </div>
                Add Value For " <b><?= $attribute;?></b> "
            </div>
            <?php echo form_open('attribute/configpost')?>
            <div class="panel-body">
            <div class="form-group">
                 <label>Enter <?= $attribute;?></label>
                  <input type="text"  class="form-control" name="value_name" placeholder="Enter <?= $attribute;?>" onkeypress="return ((event.charCode >=97 && event.charCode <=122) || (event.charCode >=65 && event.charCode <=90) || (event.charCode >=0 && event.charCode <=32) )">
                  <?php if($this->session->flashdata('item')):?>
                     <?php $info= $this->session->flashdata('item');?>
                          <span class="text-<?= $info['class']?>"><b><?= $info['message']?> </b></span>
                      <?php endif;?>
            </div>
            <?php if($attribute=='Color'):?>
            <div class="form-group">
                 <label>Select Color</label>&nbsp;&nbsp;
                 <input type="color" id="head" name="codes" value="#e66465" required>
            </div>
           <?php endif?>
           
            <div class="form-group">
                 <label>Enter Description</label>
                  <textarea rows="4" class="form-control" name="description"> </textarea>
            </div>

               <input type="hidden" name="attribute_id" value="<?= $this->uri->segment(3); ?>">
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
                Add List
            </div>
            <div class="panel-body">
            <div class="table-responsive">
                <table cellpadding="1" cellspacing="1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Value</th>
                       
                        <th>Description</th>
                        <!-- <th>Status</th> -->
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php $i=0; if($attribute_value): foreach($attribute_value as $at): $i++;?>
                        <tr>
                            <td><?= $i?></td>
                            <td> <?= $at->value_name?>  </td>
                            <td> <?= $at->description?>  </td>
                            <!-- <td>
                              <?php if($at->status=='1'):?>
                                 <a  href="<?= base_url('attribute/inactivevalue/'.$at->id.'/'.$this->uri->segment(3))?>" class="btn btn-xs btn-success active"  aria-pressed="true" data-toggle="tooltip" data-placement="top" title="Click For In active">Active</a>
                              <?php else:?>
                                  <a href="<?= base_url('attribute/activevalue/'.$at->id.'/'.$this->uri->segment(3))?>" class="btn btn-xs btn-danger active"  aria-pressed="true" data-toggle="tooltip" data-placement="top" title="Click For Active">In Active</a>
                               <?php endif;?>
                              </td> -->
                               
                            <td>
                                 <button class="btn btn-warning btn-xs" type="button" data-toggle="modal" data-target="#myModal<?=$at->id?>"><i class="fa fa-pencil"></i></button>
                                 <button class="btn btn-danger btn-xs" type="button" data-toggle="modal" data-target="#myModal2<?=$at->id?>"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                       
                        <div class="modal fade hmodal-warning" id="myModal2<?=$at->id?>" tabindex="-1" role="dialog"  aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content animated bounceIn">
                            <div class="color-line"></div>
                            <div class="modal-header">
                                <h5 class="modal-title">Alert ! </strong> </h5>
                                <small class="font-bold"></small>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                     <h4 >Are you sure you want to delete?</h4>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                <a href="<?= base_url('attribute/configdelete/'.$at->id.'/'.$at->attribute_id);?>" class="btn btn-primary" >Yes</a>
                            </div>
                        </div>
                    </div>
                </div> 

                  
                  <div class="modal fade hmodal-warning" id="myModal<?=$at->id?>" tabindex="-1" role="dialog"  aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="color-line"></div>
                            <div class="modal-header">
                                <h5 class="modal-title">Edit- <strong><?= $at->value_name?></strong> </h5>
                                <small class="font-bold"></small>
                            </div>
                            <?php echo form_open('attribute/configupdate');?>
                            <div class="modal-body">
                            <div class="form-group">
                                <label>Enter <?= $attribute;?></label>
                                <input type="text" value="<?= $at->value_name?>" class="form-control" name="value_name" placeholder="Enter <?= $attribute;?>">
                                <?php if($this->session->flashdata('item')):?>
                                    <?php $info= $this->session->flashdata('item');?>
                                        <span class="text-<?= $info['class']?>"><b><?= $info['message']?> </b></span>
                                    <?php endif;?>
                               </div>

                                    <!-- <div class="form-group">
                                        <label>Slug</label>
                                        <input type="text" value="<?= $at->slug?>" class="form-control" name="slug" placeholder="Enter Slug">
                                    </div> -->

                                    <div class="form-group">
                                        <label>Enter Description</label>
                                        <textarea rows="4" class="form-control" name="description"> <?= $at->description?> </textarea>
                                    </div>
                                <div class="form-group">
                                <label>Brand Status</label>
                                 <select name="status" id="" class="form-control">
                                    <option value="1">Active</option>
                                    <option value="0">In Active</option>
                                 </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                              <input type="hidden" value="<?= $this->uri->segment(3) ?>" name="atid">
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