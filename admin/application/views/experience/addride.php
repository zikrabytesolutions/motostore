<link rel="stylesheet" href="<?= base_url('assets/')?>vendor/datatables.net-bs/css/dataTables.bootstrap.min.css" />
<link rel="stylesheet" href="<?= base_url('assets/vendor/select2-3.5.2/select2.css')?>" />
    <link rel="stylesheet" href="<?= base_url('assets/vendor/select2-bootstrap/select2-bootstrap.css')?>" />
    <link rel="stylesheet" href="<?= base_url('assets/styles/static_custom.css')?>">
<div class="row">
<div class="col-lg-12">
        <div class="hpanel hblue">
            <div class="panel-heading hbuilt">
                <div class="panel-tools">
                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                   
                </div>
                Add Ride Details
            </div>
            <div class="panel-body">
            <?php echo form_open_multipart('motoexperience/saveride');?>
            <div class="row">
            
            <small style="color:red; text-align:center"> <b><?php echo form_error('type'); ?></b></small>
                <div class="col-md-3">
                   <label for="inter"> Type </label>
                   <select name="placetype" id="placetype" class="js-source-states form-control" onChange="getplace(this.value);" required>
                          <option value="1"> International</option>
                          <option value="2"> Domestic</option>
                   </select>
                </div>

                <div class="col-md-3">
                    <label for="inter"> Place </label>
                     <select name="place"  id="place" class="js-source-states form-control" required>
                    </select>
                </div>

                <div class="col-md-3">
                    <label for="inter"> Date </label>
                     <input type="date" name="ridedate" class="form-control" required>
                    </select>
                </div>

                <div class="col-md-3">
                    <label for="inter"> Price </label>
                     <input type="number" name="price" class="form-control" required>
                    </select>
                </div>
                          
               <div class="col-md-8">
               <label for="inter"> Title </label>
                     <input type="text" name="title" class="form-control" required>
                    </select>
               </div>

               <div class="col-md-4"><br>
                   <input type="file" name="userfile"  class="form-control" accept="image/*">
               </div>

               <div class="col-md-12"><br>
                    <textarea class="summernote"  name="Itinerary" placeholder="Description Here" ></textarea>
               </div>

            </div>
            <div class="form-group">
            <button type="submit" class="btn btn-primary btn-sm" style="float:right">Save Place</button>
            </div>
            </form>
            </div>
           
        </div>
    </div>


    <div class="col-lg-12">
        <div class="hpanel hblue">
            <div class="panel-heading hbuilt">
                <div class="panel-tools">
                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                   
                </div>
                Place List
            </div>
            <div class="panel-body">
            <?php if($this->session->flashdata('update')):?>
                          <span class="text-success"><b><?= $this->session->flashdata('update')?> </b></span>
                      <?php endif;?>
            <table id="example2" class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Type</th>
                    <th>Title</th>
                    <th>Place</th>
                    <th>date</th>
                    <th>price</th>
                    <th>Action</th>
                    
                </tr>
                </thead>
                <tbody>
                <?php $i=0; date_default_timezone_set('Asia/Kolkata'); if($ridedetails): foreach($ridedetails as $ride): $i++;?>
                <tr>
                    <td><?= $i;?></td>
                    <td><?php if($ride->placetype==1){ echo "International";} else{echo "Domestic";}?></td>
                    <td><p aria-pressed="true" data-toggle="tooltip" data-placement="top" title="<?= $ride->title?>"><?php if(strlen($ride->title)>30)
                                                        {
                                                           echo  $stringCut = substr($ride->title, 0, 30).' ...';
                                                       }
                                                       else{
                                                         echo  $stringCut = substr($ride->title, 0, 30);
                                                     }?></p>
                                                     </td>
                    <td><?= $ride->placename?></td>
                    <td><?= date("d M,Y", strtotime($ride->ridedate))?></td>
                    <td><?= $ride->price?></td>
        
                    <td>
                    <button class="btn btn-info btn-xs" type="button" data-toggle="modal" data-target="#myModalview<?= $i?>" rel="tooltip" data-placement="top" title="View"><i class="fa fa-eye" aria-hidden="true"></i></button>
                        <a href="<?= base_url('motoexperience/editride/'.$ride->id)?>" class="btn btn-primary btn-xs" rel="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                         
                        <button class="btn btn-danger btn-xs"  data-toggle="modal" data-target="#myModalsm<?= $i?>" rel="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </td>
                </tr>
<!-- delete-->
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
                                    <a href="<?= base_url('motoexperience/deleteride/'.$ride->id)?>" class="btn btn-primary">Yes</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="myModalview<?=$i?>" tabindex="-1" role="dialog"  aria-hidden="true">
                        <div class="modal-dialog modal-xs">
                            <div class="modal-content">
                                <div class="color-line"></div>
                                <div class="modal-header">
                                    <h4 class="modal-title">View Details</h4>
                                   
                                </div>
                                <div class="modal-body">
                                   <p><?= $ride->Itinerary?></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    
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

<script>
  function getplaceedit(val)
  {
    $.ajax({
	type: "POST",
	url: "<?= base_url('motoexperience/getplace')?>",
	data:'type='+val,
	success: function(data){
		$("#placeedit").html(data);
	}
	}); 
  }
</script>
