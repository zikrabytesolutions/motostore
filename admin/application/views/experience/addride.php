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
                Add Place
            </div>
            <div class="panel-body">
            <?php echo form_open_multipart('motoexperience/saveplace');?>
            <div class="row">
            
            <small style="color:red; text-align:center"> <b><?php echo form_error('type'); ?></b></small>
                <div class="col-md-3">
                   <label for="inter"> Type </label>
                   <select name="type" id="type" class="js-source-states form-control" onChange="getplace(this.value);">
                          <option value="1"> International</option>
                          <option value="2"> Domestic</option>
                   </select>
                </div>

                <div class="col-md-3">
                    <label for="inter"> Place </label>
                     <select name="subcategory"  id="place" class="js-source-states form-control">
                    </select>
                </div>

                <div class="col-md-3">
                    <label for="inter"> Date </label>
                     <input type="date" name="ridedate" class="form-control">
                    </select>
                </div>
                          
             
            </div>
            <div class="form-group">
            <button type="submit" class="btn btn-primary btn-sm" style="float:right">Save Place</button>
            </div>
            </form>
            </div>
           
        </div>
    </div>


    <div class="col-lg-8">
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
                    <th>Tyep</th>
                    <th>Title</th>
                    <th>Action</th>
                    
                </tr>
                </thead>
                <tbody>
                <?php $i=0; if($place): foreach($place as $pl): $i++;?>
                <tr>
                    <td><?= $i;?></td>
                    <td><?php if($pl->type==1){ echo "International";} else{echo "Domestic";}?></td>
                    <td><p aria-pressed="true" data-toggle="tooltip" data-placement="top" title="<?= $pl->placename?>"><?php if(strlen($pl->placename)>20)
                                                        {
                                                           echo  $stringCut = substr($pl->placename, 0, 20).' ...';
                                                       }
                                                       else{
                                                         echo  $stringCut = substr($pl->placename, 0, 20);
                                                     }?></p>
                                                     </td>
        
                    <td>
                        <button class="btn btn-primary btn-xs" type="button" data-toggle="modal" data-target="#myModal<?= $i?>"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                         
                        <button class="btn btn-danger btn-xs"  data-toggle="modal" data-target="#myModalsm<?= $i?>"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </td>
                </tr>
<!-- delete-->
                <div class="modal fade" id="myModalsm<?=$i?>" tabindex="-1" role="dialog"  aria-hidden="true">
                        <div class="modal-dialog modal-xs">
                            <div class="modal-content">
                                <div class="color-line"></div>
                                <div class="modal-header">
                                    <h4 class="modal-title">Place Event</h4>
                                   
                                </div>
                                <div class="modal-body">
                                    <h3 style="color:red"><b> Are you sure you want to Delete? </b></h3>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                    <a href="<?= base_url('motoexperience/delete/'.$pl->id)?>" class="btn btn-primary">Yes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="modal fade" id="myModal<?= $i?>" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="color-line"></div>
                                <div class="modal-header text-center">
                                    <h4 class="modal-title">Place Edit</h4>
                                </div>
                                <?php echo form_open('motoexperience/update');?>
                                <div class="modal-body">
                                   <div class="row">
                                   <div class="col-md-6">
                   <label for="inter"> 
                   <input type="radio" name="type" id="inter" value="1" <?php if($pl->type=='1'){ echo "checked";}?>> International</label>
                </div>
                <div class="col-md-6">
                <label for="domestic">
                   <input type="radio" name="type" id="domestic" value="2" <?php if($pl->type=='2'){ echo "checked";}?>> Domestic</label>
                </div>
            
           
             <div class="col-md-12"><br>
                <div class="form-group">
                    <label class="control-label" for="username">Place Name</label>
                    <input type="text" name="placename" required="" class="form-control"  value="<?= $pl->placename?>">
                    <small style="color:red"> <b><?php echo form_error('placename'); ?></b></small>
                 </div>
            </div>
                                   </div>
                                </div>
                                <div class="modal-footer">
                                     <input type="hidden" name="id" value="<?= $pl->id?>">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save Change</button>
                                </div>
                                </form>
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
