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
                             <select name="producttype"  id="producttype" class="form-control" required>
                                <option value="1">Off Road</option>
                                <option value="2">On Road</option>
                               
                             </select>
                         </div>


                         <div class="col-md-2">
                             <select name="gender"  id="gender" class="form-control" required>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Boath">Boath</option>
                                <option value="nomatter">No Matter</option>
                             </select>
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
                                   <b> <?= $pro->product?> </b>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne<?= $i?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body">
                              <div class="row">
                                   <div class="col-md-3"><p>Brand Name : <?= $pro->brand?></p></div>
                                   <div class="col-md-3"><p>Category : <?= $pro->cat_name?></p></div>
                                   <div class="col-md-3"><p>Sub Category : <?= $pro->sub_category_name?></p></div>
                                   
                              </div><br>
                               <div class="row">
                               <?php  $attribute= $ci->findproductattribute($pro->id)?>
                                     <?php if($attribute): foreach($attribute as $att):?>
                                          <div class="col-md-3">
                                          <?php $attibutevalue = $ci->findattributevalue($att->attribute_id, $att->product_id);?>
                                              <?php if(strtolower($att->atname)=='color'): ?>
                                              <?= ucfirst($att->atname);?> :
                                              <?php $f=0; if ($attibutevalue) : foreach ($attibutevalue as $attv) : $f++;?>                               
                                                <button class="btn-circle" type="button" style="background-color:<?= $attv->codes ?>;"></button>
                                               <?php endforeach; endif; ?>

                                              <?php else: ?>
                                                <?= $att->atname;?> :
                                              <?php $s=0; if ($attibutevalue) : foreach ($attibutevalue as $attv) : $s++;?>                               
                                                <button class="btn btn-default" type="button" ><?= $attv->value_name ?></button>
                                               <?php endforeach; endif; ?>
                                              <?php endif?>
                                           </div>
                                     <?php endforeach; endif;?>
                                     <div class="col-md-3">
                                         Total Variation : <?php echo $f*$s;?>
                                     </div>
                                     
                                     <div class="col-md-3">
                                         <a href="<?= base_url('product/productedit/'.$pro->id)?>" class="btn btn-primary"> View & Edit</a>
                                     </div>

                               </div>
                            </div>
                        </div>
                    </div>
                 <?php endforeach; endif;?>
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