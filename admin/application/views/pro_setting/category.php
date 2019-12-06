<div class="row">
<div class="col-lg-5">
        <div class="hpanel hblue">
            <div class="panel-heading hbuilt">
                <div class="panel-tools">
                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                   
                </div>
                Add Category
            </div>
            <?php echo form_open('category/add')?>
            <div class="panel-body">
            <div class="form-group">
                 <label>Category Name</label>
                  <input type="text"  class="form-control" name="cat_name" placeholder="Category Name">
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


<div class="col-lg-7">
        <div class="hpanel hblue">
            <div class="panel-heading hbuilt">
                <div class="panel-tools">
                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                   
                </div>
                Category List
            </div>
            <div class="panel-body">
            <div class="table-responsive">
                <table cellpadding="1" cellspacing="1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Action</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                      <?php $i=0; if($category): foreach($category as $cat): $i++;?>
                        <tr>
                            <td><?= $i?></td>
                            <td>
                            <a  href="<?= base_url('subcategory/add/'.$cat->id)?>" data-toggle="tooltip" data-placement="top" title="Add Sub Category" style="color:#8173ff">
                             <u> <?= $cat->cat_name?> </u>
                            </td>
                            </a>
                            <td>
                              <?php if($cat->status=='1'):?>
                                 <a  href="<?= base_url('category/inactive/'.$cat->id)?>" class="btn btn-xs btn-success active"  aria-pressed="true" data-toggle="tooltip" data-placement="top" title="Click For In active">Active</a>
                              <?php else:?>
                                  <a href="<?= base_url('category/active/'.$cat->id)?>" class="btn btn-xs btn-danger active"  aria-pressed="true" data-toggle="tooltip" data-placement="top" title="Click For Active">In Active</a>
                               <?php endif;?>
                              </td>

                            <td>
                                 <button class="btn btn-warning btn-xs" type="button" data-toggle="modal" data-target="#myModal<?=$cat->id?>" rel="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></button>
                                 <button class="btn btn-danger btn-xs" type="button" data-toggle="modal" data-target="#myModal1<?=$cat->id?>" rel="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                  <div class="modal fade hmodal-warning" id="myModal<?=$cat->id?>" tabindex="-1" role="dialog"  aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="color-line"></div>
                            <div class="modal-header">
                                <h5 class="modal-title">Edit- <strong><?= $cat->cat_name?></strong> </h5>
                                <small class="font-bold"></small>
                            </div>
                            <?php echo form_open('category/update');?>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Brand Name</label>
                                    <input type="text"  class="form-control" value="<?= $cat->cat_name?>" name="cat_name" placeholder="Brand Name">
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
                              <input type="hidden" value="<?= $cat->id?>" name="cat_id">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                          </form>
                        </div>
                    </div>
                </div>

                <div class="modal fade hmodal-warning" id="myModal1<?=$cat->id?>" tabindex="-1" role="dialog"  aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content  animated bounceIn">
                            <div class="color-line"></div>
                            <div class="modal-header">
                                <h5 class="modal-title">Alert ! </h5>
                                <small class="font-bold"></small>
                            </div>
                            <?php echo form_open('category/update');?>
                            <div class="modal-body">
                               <h4>Are you sure you want to delete?</h4>
                            </div>
                            <div class="modal-footer">
                             
                                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                <a href="<?= base_url('category/delete/'.$cat->id)?>" class="btn btn-primary">Yes</a>
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