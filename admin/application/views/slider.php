<link rel="stylesheet" href="<?= base_url('assets/')?>vendor/datatables.net-bs/css/dataTables.bootstrap.min.css" />
<div class="row">
<div class="col-lg-4">
        <div class="hpanel hblue">
            <div class="panel-heading hbuilt">
                <div class="panel-tools">
                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                   
                </div>
                Add Gallery
            </div>
            <div class="panel-body">
            <?php echo form_open_multipart('slider/add');?>
            <div class="form-group">
                    <label class="control-label" for="username">Caption</label>
                    <input type="text" placeholder="Caption"  required=""  name="title" class="form-control">
            </div>
            
            <div class="form-group">
                    <label class="control-label" for="username">Choose Image</label>
                    <input type="file" name="userfile" required="" class="form-control" accept="image/*" multiple>
            </div>
            <?php if($this->session->flashdata('msg_error')):?>
                   
                   <div class="alert alert-danger">
                        <i class="fa fa-bolt"></i>    <b><?= $this->session->flashdata('msg_error') ?> </b>
                  </div>
                       
                    <?php endif;?>

            <div class="form-group">
            <button type="submit" class="btn btn-primary btn-sm" style="float:right">Save Event</button>
            </div>
            </form>
            </div>
            <div class="panel-footer">
               Please Choose image dimentation 350*220
            </div>
        </div>
    </div>


    <div class="col-lg-8">
        <div class="hpanel hblue">
            <div class="panel-heading hbuilt">
                <div class="panel-tools">
                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                   
                </div>
               Slider Images
            </div>
            <div class="panel-body">
            <table id="example2" class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>imgage</th>
                    <th>Title</th>
                    <th>Action</th>
                    
                </tr>
                </thead>
                <tbody>
                <?php $i=0; if($event): foreach($event as $ev): $i++;?>
                <tr>
                    <td><?= $i;?></td>
                   
                    <td><img src="<?= base_url('assets/slider/'.$ev->images)?>" width="100px"></td>
                   
                    <td><?= $ev->title;?></td>
                    <td>
                        <button class="btn btn-danger btn-xs"  data-toggle="modal" data-target="#myModalsm<?= $i?>" rel="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </td>
                </tr>
<!-- delete-->
                
                </div>

                <div class="modal fade" id="myModalsm<?=$i?>" tabindex="-1" role="dialog"  aria-hidden="true">
                        <div class="modal-dialog modal-xs">
                            <div class="modal-content">
                                <div class="color-line"></div>
                                <div class="modal-header">
                                    <h4 class="modal-title">Alert ! </h4>
                                   
                                </div>
                                <div class="modal-body">
                                    <h4>Are you sure you want to Delete?</h4>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                    <a href="<?= base_url('slider/deleteimg/'.$ev->id)?>" class="btn btn-primary">Yes</a>
                                </div>
                            </div>
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

