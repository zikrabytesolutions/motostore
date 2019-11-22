<div class="row">

<div class="col-lg-12">
        <div class="hpanel">
            <div class="panel-heading hbuilt">
                <div class="panel-tools">
                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                 
                </div>
               Create Home Tiles
            </div>
            <div class="panel-body">
            <?php echo form_open_multipart('tiles/save');?>
                <div class="row">
                   <div class="col-md-4">
                       <div class="form-group">
                        <label class=" control-label">Tiles Name</label>
                        <input type="text" class="form-control" name="tiles_name">
                       </div>
                   </div>
                   <div class="col-md-8">
                       <div class="form-group">
                        <label class=" control-label">Enter Url</label>
                        <input type="text" class="form-control" name="url">
                       </div>
                   </div>

                   <div class="col-md-5">
                   <label class=" control-label">Tiles Image</label>
                      <input type="file" class="form-control" name="userfile">
                   </div>
                   <div class="col-md-3">
                   <label class=" control-label">Starting Price</label>
                      <input type="text" class="form-control" name="price">
                   </div>

                   <div class="col-md-2"><br>
                     <button type="submit" class="btn btn-primary">Save</button>
                   </div>
                </div>
                </form>

                <div class="row"><br><br><br>
                <?php if($tiles): foreach($tiles as $ts):?>
                  <div class="col-md-3">
                     <img src="<?= base_url('assets/productimage/'.$ts->image)?>" width="200px"> 
                     <p style="text-align:center"> <b><?= $ts->tiles_name?></b></p>
                  </div>
                <?php endforeach; endif?>
                </div>
            </div>
        </div>
    </div>
</div>