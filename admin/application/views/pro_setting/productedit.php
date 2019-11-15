
<div class="row">
<div class="col-md-12">
<div class="hpanel">
<?php $ci =& get_instance(); date_default_timezone_set('Asia/Kolkata');?>
            <div class="panel-heading hbuilt">
                <div class="panel-tools">
                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                </div>
                Product Information
            </div>
            <div class="panel-body">
               <?php if($product): foreach($product as $pro): ?>
                <?php echo form_open('product/productupdate')?>
                <div class="row">
                
                   <div class="col-md-12">

                   <div class="form-group">
                       <label class="control-label">Product Name</label>
                        <input type="text" name="product" class="form-control" value="<?= $pro->product?>">
                   </div>

                   <textarea class="summernote" name="description">
                        <?= $pro->description?>
                    </textarea>

                   </div>

                   <div class="col-md-2">
                   <label class="control-label">Brand Name</label>
                      <select class="form-control" name="brand_id">
                             <?php if($brandlist): foreach($brandlist as $brand): ?>
                                <option value="<?= $brand->id?>" <?php if($brand->id==$pro->brandid){echo "selected";}?>> <?= $brand->brand ?></option>
                             <?php endforeach; endif?>
                      </select>
                   </div>


                   <div class="col-md-2">
                   <label class="control-label">Category Name</label>
                      <select name="cat_id" id="category" class="js-source-states form-control" required onChange="getsubcategory(this.value);">>
                             <?php if($category): foreach($category as $cat): ?>
                                <option value="<?= $cat->id?>" <?php if($cat->id==$pro->catid){echo "selected";}?>> <?= $cat->cat_name ?></option>
                             <?php endforeach; endif?>
                      </select>
                   </div>

                   <div class="col-md-2">
                   <label class="control-label">Sub category Name</label>
                   <select name="subcat_id"  id="subcate" class="form-control" required>
                      <?php $subcategory= $ci->subcategoryfind($pro->catid)?>
                             <?php if($subcategory): foreach($subcategory as $subcat): ?>
                                <option value="<?= $subcat->id?>" <?php if($subcat->id==$pro->subcatid){echo "selected";}?>> <?= $subcat->sub_category_name ?></option>
                             <?php endforeach; endif?>
                      </select>
                   </div>

                   
                   <div class="col-md-2">
                   <label class="control-label">Product Type</label>
                      <select class="form-control" name="producttype">
                             <?php if($producttype): foreach($producttype as $type): ?>
                                <option value="<?= $type->id?>" <?php if($type->id==$pro->producttype){echo "selected";}?>> <?= $type->type ?></option>
                             <?php endforeach; endif?>
                      </select>
                   </div>

                   <div class="col-md-2">
                   <label class="control-label">Gender</label>
                      <select class="form-control" name="gender">
                            <option value="Male" <?php if($pro->gender=='Male'){echo "selected";}?>> Male </option>
                            <option value="Female" <?php if($pro->gender=='Female'){echo "selected";}?>> Female </option>
                      </select>
                   </div>

                   <div class="col-md-2">
                   <label class="control-label">Product Status</label>
                         <?php if($pro->status=='1'):?>
                              <a href="<?= base_url('product/productoff/'.$pro->id)?>" class="btn btn-success"> Active </a>
                         <?php elseif($pro->status=='0'):?>
                            <a href="<?= base_url('product/producton/'.$pro->id)?>" class="btn btn-danger"> In Active </a>
                         <?php endif;?>
                   </div>
                    <input type="hidden" name="productid" value="<?=$pro->id?>">
                   <div class="col-md-12" style="text-align:center"><br>
                      <button class="btn btn-primary" type="submit">Save Changes</button>
                   </div>
                   </div>
                </form>
                <div class="row">
                   <!-- =============================================Product Variation=========================== -->
                    <?php  $variation= $ci->productvration($pro->id); ?>
                    <div class="col-md-12">
                    <hr>
                    <h3 style="text-align:center; background-color:#38afff; color:white"><strong>Product Variation</strong></h3>
                       <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <?php $i=0; if($variation): foreach($variation as $vrt): $i++;?>
                       
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne<?= $i;?>" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                     <?php echo $first= $ci->firstattribute($vrt->id)?> - <?php echo $first= $ci->secondattribute($vrt->id)?>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne<?= $i;?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="true" style="height: 0px;">
                            <div class="panel-body">
                            <?php echo form_open_multipart('product/variationupdate');?>
                                <div class="row">

                                   <div class="col-md-2"> 
                                      <div class="form-group">
                                            <label class="control-label">Product Quantity</label>
                                            <input type="number" name="productquantity" class="form-control" value="<?= $vrt->productquantity?>">
                                        </div>
                                   </div>

                                   <div class="col-md-2"> 
                                      <div class="form-group">
                                            <label class="control-label">Status</label>
                                            <select name="stockstatus" id="stockstatus" class="form-control">
                                                <option value="1" <?php if($vrt->stockstatus=='1'){echo "selected";}?>>In Stock</option>
                                                <option value="0" <?php if($vrt->stockstatus=='0'){echo "selected";}?>>Out Of Stock</option>
                                            </select>
                                        </div>
                                   </div>

                                   <div class="form-group col-md-2">
                                    <label>Quantity Visible</label>
                                    <select name="visible" id="visible" class="form-control">
                                                <option value="1" <?php if($vrt->visible=='1'){echo "selected";}?>>Yes</option>
                                                <option value="0" <?php if($vrt->visible=='0'){echo "selected";}?>>No</option>
                                        </select>
                                    </div>

                                    <div class="col-md-2">
                                        <label>Regular Price</label>
                                        <input type="number"  id="regular_price" class="form-control" name="regular_price" value="<?= $vrt->regular_price;?>">
                                    </div>

                                    <div class="col-md-2">
                                        <label>In Offer Price</label>
                                        <input type="number"  id="price" class="form-control" name="offer_price" value="<?= $vrt->offer_price;?>">
                                    </div>

                                    <div class="col-md-2">
                                        <label>Offer %</label>
                                        <input type="number"  id="price" class="form-control" name="offer_per" value="<?= $vrt->offer_per;?>">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Offer Valid From- <?= date("d-m-Y", strtotime($vrt->validform));?></label>
                                        <input name="validform" type="date" class="form-control"/>
                                    </div>

                                    <div class="col-md-3">
                                        <label>Offer Valid Till- <?= date("d-m-Y", strtotime($vrt->validto));?></label>
                                        <input name="validto" type="date" class="form-control"/>
                                    </div>

                                    <div class="col-md-2"><br>
                                        <a class="btn btn-info" onclick="imgchange(<?= $vrt->id ?>,<?= $pro->id ?>)"> Change Image</a>
                                    </div>

                                   
                                     <?php $imglist= $ci->imageproductwise($pro->id,$vrt->id)?>
                                    <?php if($imglist): foreach($imglist as $img):?>
                                        <div class="col-md-1">
                                        
                                            <img src="<?= base_url('assets/productimage/'.$img->image);?>" width="50px" height="50px">
                                        </div>
                                    <?php endforeach; else:?>
                                        <div class="col-md-3 col-md-offset-2">
                                            Product Image Not Found
                                        </div>
                                    <?php endif;?>
                                    </div>
                                

                                <div class="row">
                                    <div class="col-md-12" ><br>
                                    <input type="hidden" name="detailsid" value="<?= $vrt->id?>">
                                    <input type="hidden" name="productid" value="<?= $pro->id?>">
                                           <button type="submit" class="btn btn-primary" style="float:right"> Update </button>
                                    </div>
                                </div>
                             </form>

                            </div>
                        </div>
                    </div>
                    
                     <?php endforeach; endif;?>
                     </div>
</div>
                </div>
               <?php endforeach; endif;?>
            </div>
        </div>
    </div>
 </div>

                      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="color-line"></div>
                                <div class="modal-header text-center">
                                    <h4 class="modal-title">Change Images</h4>
                                    <small class="font-bold">Product Gallery Images</small>
                                </div>
                                <?php echo form_open_multipart('product/imageupdate')?>
                                <div class="modal-body">
                                 <div class="row">
                                      <div class="col-md-12">
                                      <input type="hidden" name="vrtid" id="vrtid">
                                      <input type="hidden" name="proid" id="proid">
                                      <input type="file" name="files[]" class="form-control" multiple accept="image/*">
                                     </div>
                                </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                  

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
<script src="<?= base_url('assets/vendor/select2-3.5.2/select2.min.js')?>"></script>

<script>
  function getsubcategory(val)
  {
    $.ajax({
	type: "POST",
	url: "<?= base_url('product/getsubcategory')?>",
	data:'cateid='+val,
	success: function(data){
		$("#subcate").html(data);
	}
	}); 
  }
</script>

<script>
 function imgchange(vrtid,proid)
 {
     $("#vrtid").val(vrtid);
     $("#proid").val(proid);
     $('#myModal').modal('show');
 }
</script>