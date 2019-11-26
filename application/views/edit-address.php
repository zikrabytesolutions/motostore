<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Moto store</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php include 'css.php';?>

</head>
<body>

	<div class="accdetail">
		<!-- header start -->
		<?php include('header.php');?>
		<!-- header end -->

   <!-- details section start -->

   <div class="container-fluid products-body">
    <div class="row mt-50 mb-35 mr-2 ml-2">
      <aside class="col-md-3">
        <?php include "detail_sidebar.php";?>
      </aside>
      <main class="col-md-9">
       <section class="">
         <div class="">
          <span style="float:right"><button class="btn btn-addnew" data-toggle="modal" data-target="#myModal">Add new <i class="fa fa-plus-circle" aria-hidden="true"></i></button></span>

          <div class="row">
           <?php $i=0; if($address): foreach ($address as $ads): $i++;?>


           <div class="product-layout product-grid col-md-6 col-lg-6 mt-4">
            <div class="p-item">
             <h5 style="margin-bottom:-10px">
              <span data-toggle="tooltip" title="<?= $ads->name; ?>" >
                <?php
             if(strlen($ads->name)>8)
             {
               echo  $stringCut = substr($ads->name, 0, 8).' ...';
             }
             else{
               echo  $stringCut = substr($ads->name, 0, 8);
             }
             ?>
              </span>
              <span style="float: right;">
                 <button type="button" class="btn btn-edit btn-xs" data-toggle="modal" data-target="#myModal<?= $i?>"><i class="fa fa-pencil-square-o"></i></button>
                 <button type="button" class="btn btn-delete btn-xs" data-toggle="modal" data-target="#myModald<?= $i?>"><i class="fa fa-trash"></i></button>
               </span>
             </h5>
             <hr style="margin-top: 25px;">
             <p>Mobile : <?= $ads->mobile ?></p>
             <p>Street : <span data-toggle="tooltip" title="<?= $ads->streetaddress; ?>">
             <?php
             if(strlen($ads->streetaddress)>25)
             {
               echo  $stringCut = substr($ads->streetaddress, 0, 25).' ...';
             }
             else{
               echo  $stringCut = substr($ads->streetaddress, 0, 25);
             }
             ?> </span>
           </p>

             <p>House : <span data-toggle="tooltip" title="<?= $ads->streetaddress1; ?>">
             <?php
             if(strlen($ads->streetaddress1)>25)
             {
               echo  $stringCut = substr($ads->streetaddress1, 0, 25).' ...';
             }
             else{
               echo  $stringCut = substr($ads->streetaddress1, 0, 25);
             }
             ?> </span>
           </p>


             <p>City  : <?= $ads->city?></p>
             <p>Pin Code : <?= $ads->postcode?></p>

           </div>
         </div>



         <div class="modal fade" id="myModal<?= $i?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Edit Address</h4>
              </div>
              <?php echo form_open('checkout/updateshippingaddress');?>
              <div class="modal-body">

                <div class="form-row">
                  <div class="form-group col-sm-12">
                    <label for="firstname">Full name *</label>
                    <input type="text" class="form-control" id="firstname" name="name" value="<?= $ads->name?>" onkeypress="return ((event.charCode >=97 && event.charCode <=122) || (event.charCode >=65 && event.charCode <=90) || (event.charCode >=0 && event.charCode <=32) )" required>
                  </div>
                                        <!-- <div class="form-group col-sm-6">
                                            <label for="lastname">Last name *</label>
                                            <input type="text" class="form-control" id="lastname" name="lastname">
                                          </div> -->
                                        </div>
                                        <p>Country *</p>
                                        <p>India</p>
                                        <div class="form-row align-items-end">
                                         <div class="col-md-6">
                                          <div class="form-group">
                                            <label for="city">Town / City *</label>
                                            <input type="text" class="form-control" id="city" placeholder="1234 Main St" name="city" value="<?= $ads->city?>">
                                          </div>
                                        </div>
                                        <input type="hidden" name="ids" value="<?= $ads->id?>">
                                        <div class="col-md-6">
                                          <div class="form-group">
                                            <label for="city">Mobile *</label>
                                            <input type="text" class="form-control" id="dmobile" placeholder="Mobile" name="mobile" value="<?= $ads->mobile?>" maxlength="10" pattern="[6789][0-9]{9}" onkeypress="return ((event.charCode >=48 && event.charCode <=57) || (event.charCode >=0 && event.charCode <=31) )" required>
                                          </div>
                                        </div>

                                        <div class="form-group col-sm-6">
                                          <label for="streetaddress">Street address *</label>
                                          <input type="text" class="form-control" id="streetaddress" name="streetaddress" placeholder=" street name" value="<?= $ads->streetaddress?>">
                                        </div>
                                        <div class="form-group col-sm-6">
                                          <input type="text" class="form-control" id="streetaddress" name="streetaddress1" placeholder="Apartment, suite" value="<?= $ads->streetaddress1?>">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="postcode">Pin code / ZIP *</label>
                                        <input type="text" class="form-control" id="postcode" placeholder="1234 Main St" name="postcode" value="<?= $ads->postcode?>" maxlength="6" onkeypress="return ((event.charCode >=48 && event.charCode <=57) || (event.charCode >=0 && event.charCode <=31) )" required>
                                      </div>

                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                                      <button type="submit" class="btn btn-success">Save changes</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>



                            <div class="modal fade deletemodal" id="myModald<?= $i?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">

                                    <h4 class="modal-title" id="myModalLabel">Delete Address</h4>
                                  </div>
                                  <div class="modal-body">
                                   <p class="alt-txt"> Are you sure you want to delete?</p>
                                 </div>
                                 <div class="modal-footer">
                                  <a href="" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <a href="<?= base_url('checkout/delete/'.$ads->id)?>" class="btn btn-success" >Delete</a>
                                  </div>

                                </div>
                              </div>
                            </div>

                          <?php endforeach; else:?>
                            <tr><td colspan="6"><h4>No Data Found</h4></td></tr>
                        <?php endif?>
                      </div>
                    </div>
                  </section>
                </main>
              </div>
            </div>

            <!-- details section end -->

    <?php include 'footer.php';?>


 <!-- Modal -->
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">

                  <h4 class="modal-title" id="myModalLabel">Shipping Address</h4>
                </div>
                <?php echo form_open('checkout/addshippingaddressprofile');?>
                <div class="modal-body">

                  <div class="form-row">
                    <div class="form-group col-sm-12">
                      <label for="firstname">Full name *</label>
                      <input type="text" class="form-control" id="firstname" name="name" onkeypress="return ((event.charCode >=97 &amp;&amp; event.charCode <=122) || (event.charCode >=65 &amp;&amp; event.charCode <=90) || (event.charCode >=0 &amp;&amp; event.charCode <=32) )" required>
                    </div>
                  </div>
                  <p>Country *</p>
                  <p>India</p>
                  <div class="form-row align-items-end">
                   <div class="col-md-6">
                    <div class="form-group">
                      <label for="city">Town / City *</label>
                      <input type="text" class="form-control" id="city" placeholder="1234 Main St" name="city">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="city">Mobile *</label>
                      <input type="text" class="form-control" id="dmobile" placeholder="Mobile" name="mobile" maxlength="10" pattern="[6789][0-9]{9}" oninvalid="setCustomValidity('Number should start from 9/8/7/6')" onchange="try{setCustomValidity('')}catch(e){}" onkeypress="return ((event.charCode >=48 &amp;&amp; event.charCode <=57) || (event.charCode >=0 &amp;&amp; event.charCode <=31) )" required="">
                    </div>
                  </div>

                  <div class="form-group col-sm-6">
                    <label for="streetaddress">Street address *</label>
                    <input type="text" class="form-control" id="streetaddress" name="streetaddress" placeholder="House number and street name" required>
                  </div>
                  <div class="form-group col-sm-6">
                    <input type="text" class="form-control" id="streetaddress" name="streetaddress1" placeholder="Apartment, suite, unit etc. (optional)" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="postcode">Pin Code / ZIP *</label>
                  <input type="text" class="form-control" id="postcode" placeholder="1234 Main St" name="postcode" maxlength="6" onkeypress="return ((event.charCode >=48 &amp;&amp; event.charCode <=57) || (event.charCode >=0 &amp;&amp; event.charCode <=31) )" required="">
                </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Save changes</button>
              </div>
            </form>
          </div>
        </div>
      </div>


          </div>

         <?php include 'js.php'; ?>

    </body>
    </html>
