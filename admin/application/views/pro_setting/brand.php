<div class="row">
<div class="col-lg-5">
        <div class="hpanel hblue">
            <div class="panel-heading hbuilt">
                <div class="panel-tools">
                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                   
                </div>
                Add Brand
            </div>
            <?php echo form_open('brand/add')?>
            <div class="panel-body">
            <div class="form-group">
                 <label>Brand Name</label>
                  <input type="text"  class="form-control" name="brand" placeholder="Brand Name">
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
                Add List
            </div>
            <div class="panel-body">
            <div class="table-responsive">
                <table cellpadding="1" cellspacing="1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Brand</th>
                        <th>Status</th>
                        <th>Action</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                      <?php $i=0; if($brand): foreach($brand as $bnd): $i++;?>
                        <tr>
                            <td><?= $i?></td>
                            <td><?= $bnd->brand?></td>
                            <td>
                              <?php if($bnd->status=='1'):?>
                                 <a  href="<?= base_url('brand/inactive/'.$bnd->id)?>" class="btn btn-xs btn-success active"  aria-pressed="true" data-toggle="tooltip" data-placement="top" title="Click For In active">Active</a>
                              <?php else:?>
                                  <a href="<?= base_url('brand/active/'.$bnd->id)?>" class="btn btn-xs btn-danger active"  aria-pressed="true" data-toggle="tooltip" data-placement="top" title="Click For Active">In Active</a>
                               <?php endif;?>
                              </td>

                            <td>
                                 <button class="btn btn-warning btn-xs" type="button" data-toggle="modal" data-target="#myModal<?=$bnd->id?>"><i class="fa fa-pencil"></i></button>
                                 <button class="btn btn-danger btn-xs" type="button" data-toggle="modal" data-target="#myModal1<?=$bnd->id?>"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                  <div class="modal fade hmodal-warning" id="myModal<?=$bnd->id?>" tabindex="-1" role="dialog"  aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="color-line"></div>
                            <div class="modal-header">
                                <h5 class="modal-title">Edit- <strong><?= $bnd->brand?></strong> </h5>
                                <small class="font-bold"></small>
                            </div>
                            <?php echo form_open('brand/update');?>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Brand Name</label>
                                    <input type="text"  class="form-control" value="<?= $bnd->brand?>" name="brand" placeholder="Brand Name">
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
                              <input type="hidden" value="<?= $bnd->id?>" name="brandid">
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