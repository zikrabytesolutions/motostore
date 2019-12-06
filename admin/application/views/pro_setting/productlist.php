<link rel="stylesheet" href="<?= base_url('assets/vendor/select2-3.5.2/select2.css')?>" />
<div class="row">

<?php $ci =& get_instance();?>
<div class="col-lg-12">
        <div class="hpanel">
            <div class="panel-heading hbuilt">
                <div class="panel-tools">
                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                   
                </div>
                Product List
            </div>
            <div class="panel-body">

            <div class="row">
            <?php echo form_open('product/filterproduct')?>
            <div class="col-md-2">
                             <select name="brand"  id="brand" class="js-source-states form-control" required>
                                <option value="">Select Brand</option>
                                <?php if($brandlist): foreach($brandlist as $brand):?>
                                          <option value="<?= $brand->id ?>" <?php if($brand->id==$sbrand){echo "selected";}?>><?= $brand->brand?></option>
                                <?php endforeach; endif;?>
                             </select>
                         </div>

                       <div class="col-md-2">
                            <select name="category" id="category" class="js-source-states form-control" required onChange="getsubcategory(this.value);">>
                                <option value="">Select Product Category</option>
                                <?php if($category): foreach($category as $cate):?>
                                    <option value="<?= $cate->id?>" <?php if($cate->id==$scategory){echo "selected";}?>><?= $cate->cat_name?></option> 
                                 <?php endforeach; endif?>
                            </select>
                       </div>

                         <div class="col-md-2">
                          <?php if($subcategory): ?>
                          <select name="subcategory"  id="subcate" class="form-control" required>
                          <?php  foreach($subcategory as $sucat):?> 
                                 <option value="<?= $sucat->id?>" <?php if($sucat->id==$ssubcategory){echo "selected";}?>><?= $sucat->sub_category_name;?></option>
                          <?php endforeach;?>
                          </select>
                          <?php else:?>
                          <select name="subcategory"  id="subcate" class="form-control" required>
                             </select>
                          <?php endif?>
                             
                         </div>
                         <div class="col-md-2">
                            <button class="btn btn-success" > Search</button>
                         </div>
                         <?php echo form_close();?>
            </div>
            <br>
               
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                   <?php $i=0; if($product): foreach($product as $pro): $i++;?>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne<?= $i?>" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                   <b> 
                                   <?php
                                                    if(strlen($pro->product)>30)
                                                    {
                                                     echo  $stringCut = substr($pro->product, 0, 30).' ...';
                                                    }
                                                    else{
                                                   echo  $stringCut = substr($pro->product, 0, 30);
                                                    }
                                                    ?>

                                    </b>   <b style="float:right"><?= $pro->brand?> > <?= $pro->cat_name?> > <?= $pro->sub_category_name?></b>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne<?= $i?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body">
                              <div class="row">
                                   <div class="col-md-3"><p><b>Brand Name :</b> <?= $pro->brand?></p></div>
                                   <div class="col-md-3"><p><b>Category : </b><?= $pro->cat_name?></p></div>
                                   <div class="col-md-3"><p><b>Sub Category :</b> <?= $pro->sub_category_name?></p></div>
                                   
                              </div><br>
                               <div class="row">
                               <?php  $attribute= $ci->findproductattribute($pro->id)?>
                               <div class="col-md-3">
                                     <?php $f=0; $s=0; if($attribute): foreach($attribute as $att):?>
                                         
                                          <?php $attibutevalue = $ci->findattributevalue($att->attribute_id, $att->product_id);?>
                                              <?php if(strtolower($att->atname)=='color'): ?>
                                              <?= ucfirst($att->atname);?> :
                                              <?php  if ($attibutevalue) : foreach ($attibutevalue as $attv) : $f++;?>                               
                                                <button class="btn-circle" type="button" style="background-color:<?= $attv->codes ?>;"></button>
                                               <?php endforeach; endif; ?>

                                              <?php else: ?>
                                                <?= $att->atname;?> :
                                              <?php  if ($attibutevalue) : foreach ($attibutevalue as $attv) : $s++;?>                               
                                                <button class="btn btn-default" type="button" ><?= $attv->value_name ?></button>
                                               <?php endforeach; endif; ?>
                                              <?php endif?>
                                          
                                     <?php endforeach; else:?>
                                        <p><b>Attribute :</b> NA</p>
                                     <?php endif?>
                                     </div>
                                     <div class="col-md-3">
                                       <b>  Total Variation :</b> <?php  if(($f*$s)=='0'){echo "1";} else { echo $f*$s;}?>
                                     </div>
                                    
                                     <div class="col-md-3">
                                         <a href="<?= base_url('product/productedit/'.$pro->id)?>" class="btn btn-primary"> View & Edit</a>
                                         <a href="#" class="btn btn-danger"  data-toggle="modal" data-target="#myModal2<?=$pro->id?>"> Delete</a>
                                     </div>

                               </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade hmodal-warning" id="myModal2<?=$pro->id?>" tabindex="-1" role="dialog"  aria-hidden="true">
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
                                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                <a href="<?= base_url('product/prodelete/'.$pro->id)?>" class="btn btn-primary" >Yes</a>
                            </div>
                        </div>
                    </div>
                </div> 

                 <?php endforeach; else:?>
                   <h4>No result found.</h4>
                 <?php endif?>
                </div>
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