<div class="row">
<div class="col-lg-5">
        <div class="hpanel hblue">
            <div class="panel-heading hbuilt">
                <div class="panel-tools">
                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                   
                </div>
                Add Brand
            </div>
            <?php echo form_open('pin/add')?>
            <div class="panel-body">
            <div class="form-group">
                 <label>Pin Code</label>
                  <input type="text"  class="form-control" name="pin" placeholder="Pin Code">
                  <?php if($this->session->flashdata('item')):?>
                     <?php $info= $this->session->flashdata('item');?>
                          <span class="text-<?= $info['class']?>"><b><?= $info['message']?> </b></span>
                      <?php endif;?>      
            </div>

            <div class="form-group">
            <label>Place Name</label>
                  <input type="text"  class="form-control" name="place" placeholder="Place Name ">
            </div>

             <div class="form-group" style="float:right">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-check"></i> Submit</button>
             </div>
                  </form>
<br><br>
             <hr>
             <?php echo form_open_multipart('pin/upload')?>
             <div class="form-group">
                 <label>Upload With CSV File</label>
                 <input type="file" name="userfile" required>
                 <?php if($this->session->flashdata('udate')):?>
                     <?php $info= $this->session->flashdata('udate');?>
                          <span class="text-<?= $info['class']?>"><b><?= $info['message']?> </b></span>
                      <?php endif;?> 
             </div>
             <div class="form-group" style="float:right">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-upload"></i> Upload</button>
             </div>
                  </form><br><br>
                  <a href="<?= base_url('assets/pin.csv')?>"> <u>Download Sample File </u></a>
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
                Postel Code List
            </div>
            <div class="panel-body">
            <div class="table-responsive">
                <table cellpadding="1" cellspacing="1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Pin</th>
                        <th>Place</th>
                        <th>Status</th>
                        <th>Action</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                      <?php $i=0; if($pincode): foreach($pincode as $pin): $i++;?>
                        <tr>
                            <td><?= $i?></td>
                            <td><?= $pin->pin?></td>
                            <td><?= $pin->place?></td>
                            <td>
                              <?php if($pin->status=='1'):?>
                                 <a  href="<?= base_url('pin/inactive/'.$pin->id)?>" class="btn btn-xs btn-success active"  aria-pressed="true" data-toggle="tooltip" data-placement="top" title="Click For In active">Active</a>
                              <?php else:?>
                                  <a href="<?= base_url('pin/active/'.$pin->id)?>" class="btn btn-xs btn-danger active"  aria-pressed="true" data-toggle="tooltip" data-placement="top" title="Click For Active">In Active</a>
                               <?php endif;?>
                              </td>

                            <td>
                                 <button class="btn btn-warning btn-xs" type="button" data-toggle="modal" data-target="#myModal<?=$pin->id?>"><i class="fa fa-pencil"></i></button>
                                 <button class="btn btn-danger btn-xs" type="button" data-toggle="modal" data-target="#myModal1<?=$pin->id?>"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                  <div class="modal fade hmodal-warning" id="myModal<?=$pin->id?>" tabindex="-1" role="dialog"  aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="color-line"></div>
                            <div class="modal-header">
                                <h5 class="modal-title">Edit- <strong><?= $pin->pin?></strong> </h5>
                                <small class="font-bold"></small>
                            </div>
                            <?php echo form_open('pin/update');?>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Brand Name</label>
                                    <input type="text"  class="form-control" value="<?= $pin->pin?>" name="pin" placeholder="Pin Code">
                                </div>

                                <div class="form-group">
                                    <label>Brand Name</label>
                                    <input type="text"  class="form-control" value="<?= $pin->place?>" name="place" placeholder="Place Name">
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
                              <input type="hidden" value="<?= $pin->id?>" name="pinid">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                          </form>
                        </div>
                    </div>
                </div>


                    <?php endforeach; endif?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="5">
                            <a href="<?= base_url('pin/exports_data')?>"> <u>Export All Data </u> </a>
                            </td>
                        </tr>
                    </tfoot>
                   
                </table>
                </div>
        </div>
    </div>
</div>

</div>