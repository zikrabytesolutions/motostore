<?php 

class Product extends MY_Controller
{
    
    function __construct() 
    {
        parent::__construct();
        $this->load->model('productSetting');
        date_default_timezone_set('Asia/Kolkata');
       
    }

     function index()
     {
         $data['category']= $this->productSetting->categorylist();
         $data['brandlist']= $this->productSetting->brandlist();
         $data['attribute']= $this->productSetting->attributelist();
         $data['productdetails']= $this->productSetting->allproductdetails();
        
        //  print_r($data);
         $this->load->view('header');
         $this->load->view('pro_setting/product',$data);
         $this->load->view('footer');
     }

     function getsubcategory()
     {
            $id=$this->input->post('cateid');
             $data=$this->productSetting->subcategorylist($id);
             echo '<option value="">Select Sub Category</option>';
             foreach($data as $ds)
             {
                 echo '<option value="'.$ds->id.'">'.$ds->sub_category_name.'</option>';	
             }
     }

     function create()
     {
        if (!$this->form_validation->run('product'))
        {
            $msg =  validation_errors();
            $array = array('status' => 'fail', 'error' => $msg, 'message' => '');
        }
        else
        {
            $id= $this->session->userdata('motoadsid');
            $data= $this->input->post();
                $now = date("Y-m-d H:i:s");
                $data= $this->input->post();
                $data['created']= $now;
                $data['updated']=$now;
                $data['update_by']=  $id;
                unset($data['submit']);
               $success=$this->productSetting->createproduct($data);
               if($success>0)
               {
                   $activity= Array('activity_by'=>$id,'title'=>'Add Product','codes'=>'3','activity_id'=>$success,'created'=>$now);
                   $done = $this->productSetting->categoryactivity($activity);
                   if($done)
                   {
                     $array = array('status' => 'success', 'error' => '', 'message' => 'Product Saved Successfully.');
                   }
                   else
                   {
                    $array = array('status' => 'fail', 'error' => 'Log Not Create Please Contact.', 'message' => '');
                   }
               }
               else
               {
                $array = array('status' => 'fail', 'error' => 'data Not Saved', 'message' => '');                
               }
        }
       
         echo json_encode($array);
           
     }


     function details($id)
     {
        $this->load->view('header');
        $this->load->view('pro_setting/productdetails');
        $this->load->view('footer');
     }

     function getattributevalue()
     {
         $attid= $this->input->post('attid');
         $commonid= $this->input->post('commonid');
         $check_value= $this->productSetting->checkproductattribute($attid,$commonid);
         if(!$check_value)
         {
            $attribute_value= $this->productSetting->insertproductattribute($attid,$commonid);
            if($attribute_value)
            {
            
               foreach($attribute_value as $val)
               {
                   $att_id= $val->attribute_id;
                   $attribute= $val->attribute;
                  $attributevalue=  $this->productSetting->findattributevalue($att_id);
                   echo '
                          <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                            <div class="panel-tools">
                                  <a class="closebox" style="color:red"> <i class="fa fa-times"> </i></a>
                            </div>
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne'.$att_id.'" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                      Configure <b>" '.$attribute.' " </b>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne'.$att_id.'" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body" style="margin-left:0px">
                                
                                ';
                                
                                if($attributevalue)
                               {
                                   foreach($attributevalue as $atvalue)
                                   { $a='hg';
                                             $avl=$this->productSetting->findattrvalueforcheck($atvalue->id,$commonid);
                                             if($avl==$atvalue->id)
                                             {
                                                echo '
                                                <div class="col-md-6">
                                                    <label> <input checked type="checkbox" class="i-checks"  onclick=valueinsert("'.$atvalue->id.'","'.$commonid.'",this);> '.$atvalue->value_name.' </label>
                                                </div>
                                               
                                                ';
                                             }
                                             else
                                             {
                                                echo '
                                                <div class="col-md-6">
                                                    <label> <input  type="checkbox" class="i-checks"  onclick=valueinsert("'.$atvalue->id.'","'.$commonid.'",this);> '.$atvalue->value_name.' </label>
                                                </div>
                                               
                                                ';
                                             }
                                      
                                   }
                               }
                               echo ' </div>
                            </div>
                        </div>
                   ';
               }
         }
        }
        else
        {
           echo "";
        }
     }

     function attributeinsert()
     {
        //  $now = date("Y-m-d H:i:s");
         $id= $this->session->userdata('motoadsid');
         $valueid= $this->input->post('valueid');
         $comonid= $this->input->post('comonid');
         $attributId=  $this->productSetting->findattributeid($valueid);
         $data= Array('commonid'=>$comonid,'attributeid'=>$attributId['attribute_id'],'valueid'=>$valueid,'createdby'=>$id);
         $success= $this->productSetting->insertattributevalute($data);
         if($success)
         {
            $array = array('status' => 'pass',  'message' =>'<b>'. $attributId['value_name'].'</b> Added Successfully.');
         }
         else{
            $array = array('status' => 'fail',  'message' => 'Somthing Went Wrong.');
         }
         echo json_encode($array);
     }

     function productattributedelete()
     {
         $valueid= $this->input->post('valueid');
         $comonid= $this->input->post('comonid');
         $attributId=  $this->productSetting->findattributeid($valueid);
         $success= $this->productSetting->deleteattributevalute($valueid,$comonid);
         if($success)
         {
            $array = array('status' => 'pass',  'message' =>'<B>'.$attributId['value_name']. '</b> Removed Successfully.');
         }
         else{
            $array = array('status' => 'fail',  'message' => 'Somthing Went Wrong.');
         }
         echo json_encode($array);
     }


 

    function save()
    {
        $adminid= $this->session->userdata('motoadsid'); 
        $now = date("Y-m-d H:i:s");
        $product= Array(
            'commonid' => $this->input->post('commonid'),
            'cat_id' => $this->input->post('category'),
            'subcat_id' => $this->input->post('subcategory'),
            'brand_id' => $this->input->post('brand'),
            'product' => $this->input->post('product'),
            'type' => $this->input->post('protype'), // simple or variation
            'status' => '1',
            'description' => $this->input->post('description'),
            'created' =>$now,
            'update_by' =>$adminid,
            'updated' =>$now,
        );
      
            $commonid= $this->input->post('commonid');
            $productid= $this->productSetting->insertproduct($product,$commonid);
            if($productid)
            {
              
                if(isset($_FILES['userfile']['tmp_name']))
                {
                  
                    $config =  array
                        (
                               'upload_path'     => 'assets/productimage/',
                               'upload_url'      => base_url().'assets/productimage/',
                               'allowed_types'   => 'jpeg|jpg|png|JPG|PNG',
                               'overwrite'       => TRUE,
                               'file_name'       => $productid      
                        );
             
                         $this->load->library('upload', $config);
                         $this->upload->do_upload();
                         $data['created']=date("Y-m-d H:i:s");
                         if($this->upload->data())
                         {
                            $filedata=$this->upload->data();
                             $filePath=$productid.$filedata['file_ext'];
                             $this->productSetting->updateproimage($productid,$filePath);
                         }
                       
                }


                // ===================================Tag=======================
               if($alltag= $this->input->post('tag'))
               {
                  $t=count($this->input->post('tag'));
                   for($i=0; $i<$t; $i++)
                   {
                     $data= Array('tag'=>$alltag[$i], 'product_id'=>$productid);
                     $this->productSetting->taginsert($data);
                   }
               }
            //    =========================================Product Details==================
            $product_details= Array(
                'productquantity' => $this->input->post('productquantity'),
                'stockstatus' => $this->input->post('stockstatus'),
                'visible' => $this->input->post('visible'),
                'regular_price' => $this->input->post('price'),
                'offer_price' => $this->input->post('periceoffer'),
                'offer_per' => $this->input->post('offerper'), 
                'validform' => $this->input->post('offerstart'),
                'validto' => $this->input->post('offerend'), 
                'pro_id' => $productid,
                'created'=>$now, 
            );
            $this->productSetting->insertproductdetails($product_details);
          
            // ========================Attribute Update product id=============
            $this->productSetting->updateattributepid($productid,$commonid);

            // ========================AttributeValue Update product id=============
            $this->productSetting->updateattributevaluepid($productid,$commonid);

            $vproduct_details= Array(
                'productquantity' => $this->input->post('vproductquantity'),
                'stockstatus' => $this->input->post('vstockstatus'),
                'visible' => $this->input->post('vvisible'),
                'regular_price' => $this->input->post('vprice'),
                'offer_price' => $this->input->post('vpericeoffer'),
                'offer_per' => $this->input->post('vofferper'), 
                'validform' => $this->input->post('vofferstart'),
                'validto' => $this->input->post('vofferend'), 
                'first' => $this->input->post('first'), 
                'second' => $this->input->post('second'), 
               
            );

           
             $var=0;
             if($vproduct_details['regular_price'][$var]>0)
             {
                    foreach($vproduct_details['regular_price'] as $varient)
                    {
                    
                            $vproduct= Array(
                                'productquantity' => $vproduct_details['productquantity'][$var],
                                'stockstatus' => $vproduct_details['stockstatus'][$var],
                                'visible' => $vproduct_details['visible'][$var],
                                'regular_price' => $vproduct_details['regular_price'][$var],
                                'offer_price' => $vproduct_details['offer_price'][$var],
                                'offer_per' => $vproduct_details['offer_per'][$var],
                                'validform' => $vproduct_details['validform'][$var],
                                'validto' => $vproduct_details['validto'][$var],
                                'first' => $vproduct_details['first'][$var],
                                'second' => $vproduct_details['second'][$var],
                                'pro_id' => $productid,
                                'sr_no'=>$var,
                                'variation'=>1,
                                'created'=>$now,  
                            );
                            $this->productSetting->insertproductvdetails($vproduct);
                            $var++;

                            // echo "<pre>";
                            //   print_r($vproduct);
                            // echo "</pre>";
                        }
                
            }
           
        }
    }
    
    function variant()
    { 
      $common =$this->input->post('commonid');

      $i=0; $one='0';$two='0';$three='0';$four='0';
      $att= $this->productSetting->getattribute($common);
      if(!$att)
      {
              echo '<p style="color:red"><b> Please Add Attribute First.</b>
             <a data-toggle="tab" href="#tab-6" aria-expanded="true"> Add </a>
              </p>';
      }
      else
      {
      foreach($att as $at)
      { $i++;
        if($i==1){$one= $at->attribute_id;}
        if($i==2){$two= $at->attribute_id;}
        if($i==3){$three= $at->attribute_id;}
        if($i==4){$four= $at->attribute_id;} 
      }
      $d=0;
      $firstatt= $this->productSetting->getattributevalue($one,$common);
      $secondatt= $this->productSetting->getattributevalue($two,$common);

      foreach($firstatt as $first)
      {
            foreach($secondatt as $second)
            { $d++;

                echo '
                          <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne0'.$d.'" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                      Configure <b>" '. $first->value_name.' - '.$second->value_name.' " </b>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne0'.$d.'" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body" style="margin-left:0px;margin-right:0px; width:100%">
            <input type="hidden" name="first[]" value="'.$first->pavid.'">
            <input type="hidden" name="second[]" value="'.$second->pavid.'">                         
        <div class="row">
            <div class="form-group col-md-4">
                <label>Product Quantity</label>
                <input type="number"  id="vproductquantity" class="form-control" name="vproductquantity[]" >
            </div>

            <div class="form-group col-md-4">
                <label>Status</label>
                <select name="vstockstatus[]" id="vstockstatus" class="form-control">
                    <option value="1">In Stock</option>
                    <option value="0">Out Of Stock</option>
                </select>
            </div>

            <div class="form-group col-md-4">
            <label>Quantity Visible</label>
            <select name="vvisible[]" id="vvisible" class="form-control">
                    <option value="1">Yes</option>
                    <option value="1">NO</option>
                </select>
            </div>

            </div>

            <div class="row">

            <div class="col-md-4">
            <label>Regular Price</label>
                <input type="number"  id="vprice" class="form-control" name="vprice[]" >
            </div>

            <div class="col-md-4">
            <label>Offer Price</label>
                <input type="number"  id="vpericeoffer" class="form-control change" name="vpericeoffer[]" >
            </div>


            <div class="col-md-4">
            <label>Offer %</label>
                <input type="text"  id="vofferper" class="form-control" name="vofferper[]" >
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne2'.$d.'" aria-expanded="true" aria-controls="collapseOne" style="color:blue"> <u>Schedule </u></a>
            </div>

            <!-- ----shedule----- -->
            <div class="col-md-12">
                <div id="collapseOne2'.$d.'" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                    <div class="row">
                        <!-- <div class="col-md-6"> -->
                        <div class="col-md-6">
                        <label>Date From</label>
                            <input type="date"  id="vofferstart" class="form-control" name="vofferstart[]" >
                        </div>

                        <div class="col-md-6">
                        <label>Date To</label>
                            <input type="date"  id="vofferend" class="form-control" name="vofferend[]" >
                        </div>
                    </div>
                </div>
            </div>
            <!-- -----------end shedule------- -->
            
    </div>
                      </div>
                </div>
            </div>';
            }
         
       }
       
     } 
    }

function productimagedelete()
{
    $commonid= $this->input->post('commonid');
   
    $success= $this->productSetting->deleteimage($commonid);
    if($success)
    {
       $array = array('status' => 'pass',  'message' =>'Image Removed Successfully.');
    }
    else{
       $array = array('status' => 'fail',  'message' => 'Somthing Went Wrong.');
    }
    echo json_encode($array);
}
    
}
?>