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
                            <input type="text" class="form-control" name="tiles_name" required>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label class=" control-label">Enter Url</label>
                            <input type="text" class="form-control" name="url" required>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <label class=" control-label">Tiles Image</label>
                        <input type="file" class="form-control" name="userfile" required>
                    </div>
                    <div class="col-md-3">
                        <label class=" control-label">Starting price(Rs)</label>
                        <input type="text" class="form-control" name="price"  accept="image/png, image/jpeg" required>
                    </div>

                    <div class="col-md-2"><br>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
                </form>

                <div class="row"><br><br><br>
                    <tr class="table-responsive">
                        <table cellpadding="1" cellspacing="1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tiles Name</th>
                                    <th>Image</th>
                                    <th>Starting price</th>
                                    <th>link</th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=0; if($tiles): foreach($tiles as $ts): $i++;?>
                                <tr>
                                    <td><?= $i;?></td>
                                    <td><?= $ts->tiles_name;?></td>
                                    <td><img src="<?= base_url('assets/productimage/'.$ts->image)?>" width="100px">
                                    </td>
                                    <td><?= $ts->price;?></td>
                                    <td><?= $ts->url;?></td>
                                    <td>
                                        <button class="btn btn-warning btn-xs" type="button" data-toggle="modal"
                                            data-target="#myModal<?=$ts->id?>" rel="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></button>
                                        <button class="btn btn-danger btn-xs" type="button" data-toggle="modal"
                                            data-target="#myModal2<?=$ts->id?>" rel="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>

                                <div class="modal fade hmodal-warning" id="myModal<?=$ts->id?>" tabindex="-1"
                                    role="dialog" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="color-line"></div>
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit- <strong><?= $ts->tiles_name?></strong>
                                                </h5>
                                                <small class="font-bold"></small>
                                            </div>
                                            <?php echo form_open('tiles/update');?>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Tiles Name</label>
                                                            <input type="text" class="form-control"
                                                                value="<?= $ts->tiles_name?>" name="tiles_name"
                                                                placeholder="Tiles Name" required/>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Starting Price </label>
                                                            <input type="text" class="form-control"
                                                                value="<?= $ts->price?>" name="price"
                                                                placeholder="Starting Price" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Url</label>
                                                            <input type="text" class="form-control"
                                                                value="<?= $ts->url?>" name="url" placeholder="url" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="hidden" value="<?= $ts->id?>" name="id">
                                                <button type="button" class="btn btn-default"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade hmodal-warning" id="myModal2<?=$ts->id?>" tabindex="-1"
                                    role="dialog" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content animated bounceIn">
                                            <div class="color-line"></div>
                                            <div class="modal-header">
                                                <h5 class="modal-title">Delete</strong> </h5>
                                                <small class="font-bold"></small>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <h4 style="color:red"><b>Are you sure you want to delete?</b></h4>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default"
                                                    data-dismiss="modal">No</button>
                                                <a href="<?= base_url('tiles/delete/'.$ts->id);?>"
                                                    class="btn btn-primary">Yes</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; endif?>
                </div>
            </div>
        </div>
    </div>
</div>