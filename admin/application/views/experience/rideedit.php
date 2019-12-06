<link rel="stylesheet" href="<?= base_url('assets/vendor/select2-3.5.2/select2.css')?>" />
    <link rel="stylesheet" href="<?= base_url('assets/vendor/select2-bootstrap/select2-bootstrap.css')?>" />
    <link rel="stylesheet" href="<?= base_url('assets/styles/static_custom.css')?>">
<div class="row">
<?php  $ci =& get_instance();?>
<?php if($ridedetails): foreach($ridedetails as $ride):?>
<div class="col-lg-12">
        <div class="hpanel hblue">
            <div class="panel-heading hbuilt">
                <div class="panel-tools">
                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                   
                </div>
                Add Ride Details
            </div>
            <div class="panel-body">
            <?php echo form_open_multipart('motoexperience/updateride');?>
            <div class="row">
            
            <small style="color:red; text-align:center"> <b><?php echo form_error('type'); ?></b></small>
                <div class="col-md-3">
                   <label for="inter"> Type </label>
                   <select name="placetype" id="placetype" class="js-source-states form-control" onChange="getplace(this.value);" required>
                          <option value="1" <?php if($ride->placetype=='1'){echo "selected";}?>> International</option>
                          <option value="2" <?php if($ride->placetype=='2'){echo "selected";}?>> Domestic</option>
                   </select>
                </div>

                <div class="col-md-3">
                   <?php $places= $ci->selectedplace($ride->placetype);?>
                    <label for="inter"> Place </label>
                     <select name="place"  id="place" class="js-source-states form-control" required>
                      <?php if($places): foreach($places as $pl):?>
                            <option value="<?= $pl->id?>"><?= $pl->placename?></option>
                      <?php endforeach; endif;?>
                    </select>
                </div>

                <div class="col-md-3">
                    <label for="inter"> Date </label>
                     <input type="date" name="ridedate" class="form-control" required>
                    </select>
                </div>

                <div class="col-md-3">
                    <label for="inter"> Price </label>
                     <input type="number" name="price" class="form-control" value="<?= $ride->price?>" required>
                    </select>
                </div>
                          
               <div class="col-md-12">
               <label for="inter"> Title </label>
                     <input type="text" name="title" class="form-control" value="<?= $ride->title?>" required onkeypress="return ((event.charCode >=97 && event.charCode <=122) || (event.charCode >=65 && event.charCode <=90) || (event.charCode >=0 && event.charCode <=32) )">
                    </select>
               </div>

              

               <div class="col-md-12"><br>
                    <textarea class="summernote "  name="Itinerary" placeholder="Description Here" ><?= $ride->Itinerary?></textarea>
               </div>
<!-- 
               <div class="col-md-4"><br>
                   <input type="file" name="userfile"  class="form-control" accept="image/*" >
               </div>

               <div class="col-md-3">
                   <img src="<?= base_url('assets/eventimages/'.$ride->images)?>" width="200px">
               </div> -->
            <input type="hidden" name="id" value="<?= $ride->id?>">
            </div>
            <div class="form-group">
            <button type="submit" class="btn btn-primary btn-sm" style="float:right">Save Place</button>
            </div>
            <div class="form-group">
            <a  class="btn btn-primary btn-sm"  href="<?= base_url('motoexperience/ride')?>">Go Back</a>
            </div>
            </form>
            </div>
           
        </div>
    </div>
<?php endforeach; endif;?>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
<script src="<?= base_url('assets/vendor/select2-3.5.2/select2.min.js')?>"></script>	
<script src="<?= base_url('assets/vendor/toastr/build/toastr.min.js')?>"></script>			
		
<script>
$(".js-source-states-2").select2();
$(".js-source-states").select2();
</script>
<script>
  function getplace(val)
  {
    $.ajax({
	type: "POST",
	url: "<?= base_url('motoexperience/getplace')?>",
	data:'type='+val,
	success: function(data){
		$("#place").html(data);
	}
	}); 
  }
</script>
