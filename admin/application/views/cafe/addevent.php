<div class="row">
<div class="col-lg-4">
        <div class="hpanel hblue">
            <div class="panel-heading hbuilt">
                <div class="panel-tools">
                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                   
                </div>
                Add Event
            </div>
            <div class="panel-body">
            <?php echo form_open_multipart('event/save');?>
            <div class="form-group">
                    <label class="control-label" for="username">Event Name</label>
                    <input type="text" placeholder="Event name/title"  required=""  name="name" class="form-control">
            </div>
            <div class="form-group">
                    <label class="control-label" for="username">Event Place</label>
                    <input type="text" placeholder="Event Place"  required=""  name="place" class="form-control">
            </div>

            <div class="form-group">
                    <label class="control-label" for="username">Event date</label>
                    <input type="datetime-local"  required=""  name="eventdate" class="form-control">
            </div>
            <div class="form-group">
                    <label class="control-label" for="username">Choose Image</label>
                    <input type="file" name="userfile" required="" class="form-control" accept="image/*">
            </div>
            <div class="form-group">
                    <label class="control-label" for="username">Event Description</label>
                    <textarea class="form-control" rows="5" id="comment" name="description"></textarea>
            </div>

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
                Event List
            </div>
            <div class="panel-body">
            <table id="example2" class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>imgage</th>
                    <th>Title</th>
                    <th>Place</th>
                    <th>Date</th>
                    <th>Action</th>
                    
                </tr>
                </thead>
                <tbody>
                <?php $i=0; if($event): foreach($event as $ev): $i++;?>
                <tr>
                    <td><?= $i;?></td>
                    <td><img src="<?= base_url('assets/eventimages/'.$ev->images)?>" width="50px"></td>
                    <td><p aria-pressed="true" data-toggle="tooltip" data-placement="top" title="<?= $ev->name?>"><?php if(strlen($ev->name)>20)
                                                        {
                                                           echo  $stringCut = substr($ev->name, 0, 20).' ...';
                                                       }
                                                       else{
                                                         echo  $stringCut = substr($ev->name, 0, 20);
                                                     }?></p>
                                                     </td>
                    <td><?= $ev->place;?></td>
                    <td><?= date("d-m-Y", strtotime($ev->eventdate));?></td>
                    <td>
                        <button class="btn btn-primary btn-xs" type="button" data-toggle="modal" data-target="#myModal<?= $i?>"><i class="fa fa-search" aria-hidden="true"></i></button>
                         <?php if($ev->status==0):?>
                                <a  href="<?= base_url('event/on/'.$ev->id)?>"  class="btn btn-warning btn-xs"  aria-pressed="true" data-toggle="tooltip" data-placement="top" title="Click For active"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                         <?php else:?>
                                <a  href="<?= base_url('event/off/'.$ev->id)?>" class="btn btn-success btn-xs"  aria-pressed="true" data-toggle="tooltip" data-placement="top" title="Click For In active"><i class="fa fa-eye" aria-hidden="true"></i></a>
                         <?php endif?>
                        <button class="btn btn-danger btn-xs"  data-toggle="modal" data-target="#myModalsm<?= $i?>"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </td>
                </tr>
<!-- delete-->
                <div class="modal fade" id="myModalsm<?=$i?>" tabindex="-1" role="dialog"  aria-hidden="true">
                        <div class="modal-dialog modal-xs">
                            <div class="modal-content">
                                <div class="color-line"></div>
                                <div class="modal-header">
                                    <h4 class="modal-title">Delete Event</h4>
                                   
                                </div>
                                <div class="modal-body">
                                    <h3 style="color:red"><b> Are you sure you want to Delete? </b></h3>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                    <a href="<?= base_url('event/delete/'.$ev->id)?>" class="btn btn-primary">Yes</a>
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
                                    <h4 class="modal-title">Event Details</h4>
                                 
                                </div>
                                <div class="modal-body">
                                <div class="row">
                                   <div class="col-md-3"><p> Event Name</p></div> 
                                   <div class="col-md-9"><strong><?= $ev->name?></strong></div>
                                </div>
                                <div class="row">
                                   <div class="col-md-3"><p> Event Place</p></div> 
                                   <div class="col-md-9"><p><strong><?= $ev->place?></strong></p></div>
                                </div>

                                <div class="row">
                                   <div class="col-md-3"><p> Event Date</div> 
                                   <div class="col-md-9"><p><strong><?= date("d M, Y, h:i", strtotime($ev->eventdate));?></strong></p></div>
                                </div>

                                <div class="row">
                                   <div class="col-md-3"><p> Description</div> 
                                   <div class="col-md-9"><p><strong><?= $ev->description?></strong></p></div>
                                </div>

                                <div class="row">
                                  
                                   <div class="col-md-12"><img src="<?= base_url('assets/eventimages/'.$ev->images)?>" width="300px"></div>
                                </div>
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
<!--edit-->
                    <div class="modal fade" id="myModaledit<?= $i?>" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="color-line"></div>
                                <div class="modal-header text-center">
                                    <h4 class="modal-title">Event Details</h4>
                                 
                                </div>
                                <div class="modal-body">
                                <div class="row">
                                   <div class="col-md-3"><p> Event Name</p></div> 
                                   <div class="col-md-9"><strong><?= $ev->name?></strong></div>
                                </div>
                                <div class="row">
                                   <div class="col-md-3"><p> Event Place</p></div> 
                                   <div class="col-md-9"><p><strong><?= $ev->place?></strong></p></div>
                                </div>

                                <div class="row">
                                   <div class="col-md-3"><p> Event Date</div> 
                                   <div class="col-md-9"><p><strong><?= date("d M, Y, h:i", strtotime($ev->eventdate));?></strong></p></div>
                                </div>

                                <div class="row">
                                   <div class="col-md-3"><p> Description</div> 
                                   <div class="col-md-9"><p><strong><?= $ev->description?></strong></p></div>
                                </div>

                                <div class="row">
                                  
                                   <div class="col-md-12"><img src="<?= base_url('assets/eventimages/'.$ev->images)?>" width="300px"></div>
                                </div>
                                    
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

