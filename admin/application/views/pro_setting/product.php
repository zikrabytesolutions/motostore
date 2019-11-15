    <link rel="stylesheet" href="<?= base_url('assets/vendor/select2-3.5.2/select2.css')?>" />
    <link rel="stylesheet" href="<?= base_url('assets/vendor/select2-bootstrap/select2-bootstrap.css')?>" />
    <link rel="stylesheet" href="<?= base_url('assets/vendor/toastr/build/toastr.min.css')?>" />
    <link rel="stylesheet" href="<?= base_url('assets/styles/static_custom.css')?>">
    <style>
     #file-upload {
    display: none;
}
.custom-file-upload {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
}
#loder
{
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 30%;
  display: none;
}

#cover {
  margin-left: auto;
  margin-right: auto;
  width: 25%;
  display: none;
}
#attri {
  margin-left: auto;
  margin-right: auto;
  width: 25%;
  display: none;
}
#delbtn
{
    display: none; 
}
    </style>

<?php echo form_open_multipart('product/save',['id'=>'save'])?>
<?php $common= uniqid(); ?>
<input type="hidden" name="commonid" id="commonid" value="<?= $common ?>">
<div class="row"> 
<div class="col-lg-8">
        <div class="hpanel hblue">
            <div class="panel-heading hbuilt">
                <div class="panel-tools">
                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                   
                </div>
                Add Product
            </div>
            <div class="panel-body">
                <!-- ================================Product =============================   -->
                
                     <div class="row">
                       <div class="col-md-12">
                      
                          <div class="form-group">
                           <label>Product Name</label>
                             <input type="text" id="product" class="form-control" name="product" placeholder="Full Product Name">
                           </div>

                           <div class="row">
                               <div class="col-md-4">
                                    <div class="form-group">
                                     <label>Product Code</label>
                                     <input type="text" id="productcode" class="form-control" name="productcode" placeholder="Product Code">
                                    </div>
                               </div>

                               <div class="col-md-4">
                                    <div class="form-group">
                                     <label>Product Type</label>
                                     
                                     <select class="form-control" name="producttype" id="producttype">
                                           <option value="1"> Off Road </option>
                                           <option value="2"> On Road </option>
                                           <option value="3"> Both </option>
                                           <option value="4"> No Matter </option>
                                        </select>
                                    </div>
                               </div>
                               <div class="col-md-4">
                                    <div class="form-group">
                                     <label>Gender</label>
                                        <select class="form-control" name="gender" id="gender">
                                           <option value="Male"> Male </option>
                                           <option value="Female"> Female </option>
                                           <option value="Both"> Both </option>
                                           <option value="nomatter"> No Matter </option>
                                        </select>
                                    </div>
                               </div>
                            </div>


                           <div class="form-group">
                           <label>Short Description</label>
                               <textarea name="description" id="description" rows="4" class="form-control"></textarea>
                           </div>   
                       </div>

                       <div class="col-md-4">
                             <select name="brand"  id="brand" class="js-source-states form-control">
                                <option value="">Select Brand</option>
                                <?php if($brandlist): foreach($brandlist as $brand):?>
                                          <option value="<?= $brand->id ?>"><?= $brand->brand?></option>
                                <?php endforeach; endif;?>
                               
                             </select>
                         </div>

                       <div class="col-md-4">
                            <select name="category" id="category" class="js-source-states form-control" onChange="getsubcategory(this.value);">>
                                <option value="">Select Product Category</option>
                                <?php if($category): foreach($category as $cate):?>
                                    <option value="<?= $cate->id?>"><?= $cate->cat_name?></option> 
                                 <?php endforeach; endif?>
                            </select>
                       </div>

                         <div class="col-md-4">
                             <select name="subcategory"  id="subcate" class="form-control">
                             </select>
                         </div>

                         <br>
                        <div class="hr-line-dashed"></div>

<!-- ==================================================add Product============================== -->
<div class="col-md-12" >
<br>
      <div class="panel-body">
        <div class="hpanel">

<div class="tabs-left">
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#tab-4" aria-expanded="true"> Infomation</a></li>
    <li class=""><a data-toggle="tab" href="#tab-6" aria-expanded="true"> Attribute</a></li>
    <li class="" id="rowvariant"><a data-toggle="tab" href="#tab-7" aria-expanded="false">Variation</a></li>
</ul>
<div class="tab-content ">

<div id="tab-4" class="tab-pane active">
    <div class="panel-body">
    What is Lorem Ipsum?
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
          when an unknown printer took a galley of type and scrambled it to make a type 
          specimen book. It has survived not only five centuries, but also the leap into
           electronic typesetting, remaining essentially unchanged. It was popularised in
            the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
             and more recently with desktop publishing software like Aldus PageMaker
              including versions of Lorem Ipsum.
    </div>
</div>
<div id="tab-6" class="tab-pane">
        <div class="panel-body">
         <div class="row">
             
         <div class="col-md-8">

          <div class="form-group">
             <label>Add Attribute for Product</label>
                <select name="attribute" id="attribute" class="form-control">
                    <option value="">Select Attribute</option>
                      <?php if($attribute): foreach($attribute as $att):?>
                          <option value="<?= $att->id?>"><?= $att->attribute?></option>
                       <?php endforeach; endif;?>
                </select>
            </div>
              
            <div class="form-group">
                 <button type="button" id="attsubmit" class="btn btn-primary btn-sm">Add</button>
                 <span> 
             <img src="<?= base_url('assets/images/loder.gif')?>" id="attri">
            </span>
            </div>

          </div>

         </div>

          <div class="row" id="respo">
         
         </div>

         <span id="respoerror" style="color:red">
         </span>
         <span id="attvalue"></span>
        </div>
    </div>

<!-- =======================================================Variation start============================== -->
    <div id="tab-7" class="tab-pane">
        <div class="panel-body">
        <button type="button" onclick="createvarient('<?= $common?>')" class="btn btn-primary btn-sm btn-block">Create Variation </button>
           <span  id="variation">
               <img src="<?= base_url('assets/images/loder.gif')?>" id="loder">
           </span>
             
        </div>
    </div>
<!-- =======================================================Variation end============================== -->

</div>

</div>

</div>
                                </div>
                            
                        </div>
                <!-- ================================================== end add Product============================== -->
                     </div>
        <!-- ===============================end product===================================== -->
                
            </div>
            <div class="panel-footer" id="savedat">
                This is standard panel footer
            </div>
        </div>
    </div>


<!-- ======================================================Sidebar start================================================= -->
    <div class="col-lg-4">
        <div class="hpanel hblue">
            <div class="panel-heading hbuilt">
                <div class="panel-tools">
                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                </div>
                 Setting
            </div>
            <div class="panel-body">
            <button type="submit" class="btn btn-primary">Publish Product</button>
             <span> 
             <img src="<?= base_url('assets/images/loder.gif')?>" id="cover">
            </span> <hr>
                <label for="">Select Tags</label>
                       <select class="js-source-states-2" multiple="multiple" style="width: 100%" name="tag[]">
                            <option value="Blue">Blue</option>
                            <option value="Red">Red</option>
                            <option value="Green">Green</option>
                            <option value="Maroon">Maroon</option>
                        </select>
                       
                        <hr>
                        <img id="outputImg" class="outputimgn" width="100%"/>
                      
                        <label for="file-upload" class="custom-file-upload">
                             <i class="fa fa-cloud-upload"></i> Product Thumbnail Image
                       </label>
                       <input type="file" id="file-upload" name="userfile" accept="image/*" onchange="loadimage(event)" >
                     <span> <button class="btn btn-danger btn-circle" type="button" id="delbtn" onclick="removeimage('<?=$common?>')"><i class="fa fa-times" ></i></button> </span>
                       <br>
                 <hr>
                       <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse" aria-expanded="true" aria-controls="collapseOne">
                                   Product Gallery
                                </a>
                            </h4>
                        </div>
                        <div id="collapse" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                 <input id="imagegallery" name="files[]" type="file" accept="image/*" multiple>
                            </div>
                        </div>
                    </div>

            </div>
            <div class="panel-footer">
                This is standard panel footer
            </div>
        </div>
    </div>
</div>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
<script src="<?= base_url('assets/vendor/select2-3.5.2/select2.min.js')?>"></script>	
<script src="<?= base_url('assets/vendor/toastr/build/toastr.min.js')?>"></script>		
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
$(document).ready(function(){
  $(".change").change(function(){
     
      var proprice = $("#price").val();
      var Saleprice = $("#periceoffer").val();
      var discount= (proprice-Saleprice)
      var c = ((discount/proprice) *100 );
      var persantage= c + '%';
      $("#offerper").val(persantage);
  
  });
});


$(".js-source-states-2").select2();
$(".js-source-states").select2();

</script> 

<script>
  $(document).ready(function() { 

    $('#attsubmit').click(function () {
        $('#attri').show();
   var attribute = $("#attribute").val();  var commonid = $("#commonid").val(); 
   var dataString = 'attid='+ attribute + '&commonid=' + commonid;
      $.ajax({
        type:"post",
        cache:false,
        url:"<?= base_url('product/getattributevalue')?>",
        data:dataString,  
        success: function (html) 
         {
             if(html.length==12)
             {
                 
                setTimeout(function()
               {
                 $('#cover').hide();
                 var msg='Attribute Aleady Added'
                     toastr.error(msg);
                     $('#attri').hide();
                     $('#respoerror').text("Attribute Already Inserted");
                    
                },1000);
               
             }
             else{

                setTimeout(function()
               {
                 $('#cover').hide();
                 var msg='Attribute Added'
                     toastr.success(msg);
                     $('#attri').hide();
                     $('#respoerror').text("");
                     $('#respo').html(html);
                },1000);
               
             }
        }
      });
      return false;
    });
  });
</script>

<script>
  var loadimage = function(event) {
    var reader = new FileReader();
    reader.onload = function()
    {
        $('.outputimgn').show();
        $('#delbtn').show();
      var outputImg = document.getElementById('outputImg');
      outputImg.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>

<script>
 $(document).ready(function (e) {
	$("#save").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
            url: "<?php echo site_url('product/save'); ?>",
			type: "POST",
			data:  new FormData(this),
			beforeSend: function(){$("#cover").show();},
			contentType: false,
    	    processData:false,
			success: function(data)
		    {
                $("#savedat").html(data);
                setTimeout(function() {$("#cover").hide(); },4000);
			},
		  	error: function() 
	    	{
                alert("Somthing Went Wrong");
	    	} 	        
	   });
	}));
});
</script>

<script type="text/javascript">
    function valueinsert(id,comonid,ststus) 
    {
        
     if (ststus.checked)
      {
            var dataString = 'valueid='+ id +'&comonid='+ comonid;
            $.ajax({
            type:"post",
            cache:false,
            url:"<?= base_url('product/attributeinsert')?>",
            data:dataString, 
            dataType: 'json',  
            success: function (data)
                {
                    if(data.status=='pass')
                    {
                        toastr.success(data.message);
                    }

                    else{
                        toastr.error(data.message);
                    }
                }
            });
            return false;         
   }
   else
     {         
        var dataString = 'valueid='+ id +'&comonid='+ comonid;
        $.ajax({
        type:"post",
        cache:false,
        url:"<?= base_url('product/productattributedelete')?>",
        data:dataString, 
        dataType: 'json',   
        success: function (data) 
        {
                    if(data.status=='pass')
                    {
                        toastr.error(data.message);
                    }

                    else{
                        toastr.error(data.message);
                    }
                    
                }
        });
        return false;         
    }
       

    }
 
</script>

<script>
 function createvarient(common)
 {
    $('#loder').show();
    $.ajax({
        type:"post",
        cache:false,
        url:"<?= base_url('product/variant')?>",
        data:'commonid='+common,
        dataType: 'html',  
        success: function (html) 
         { 
            
            setTimeout(function()
             {
                var msg="Variation Created."
                $('#loder').hide();
                toastr.success(msg);
                $('#variation').html(html); 
               
              },4000);
               
        }
      });
      return false;
 }

 function removeimage(common)
 {  
    
    var dataString = 'commonid='+common;
        $.ajax({
        type:"post",
        cache:false,
        url:"<?= base_url('product/productimagedelete')?>",
        data:dataString, 
        dataType: 'json',   
        success: function (data) 
        {
                    if(data.status=='pass')
                    {
                       
                        $('.outputimgn').hide();
                        $('#delbtn').hide();
                        toastr.error(data.message);
                    }

                    else{
                        $('.outputimgn').hide();
                        $('#delbtn').hide();
                        toastr.error(data.message);
                    }
                    
                }
        });
        return false;  
 }
</script>

