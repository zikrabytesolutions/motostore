<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Moto store</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/font-awesome.css')?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/owl.carousel.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/owl.theme.default.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/animate.css')?>">

	<!--fontello-->
	<link rel="stylesheet" href="<?= base_url('assets/svg/css/fontello.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/fancybox\dist\jquery.fancybox.min.css')?>" />
	<!--styles -->
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">


	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css')?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/responsive.css')?>">

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

            <!-- footer start -->
            <section class="footer-sec">
              <div class="container">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="f-block">
                      <img class="f-logo" src="<?= base_url('assets/images/motologo.png')?>">

                      <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                      </p>
                    </div>

                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="f-block">
                      <h6 class="txt-h-up">services</h6>

                      <ul class="privacy-block">

                        <li><a href="">Helmets</a></li>
                        <li><a href="">Riding Gear</a></li>
                        <li><a href="">Luggage</a></li>
                      </ul>
                    </div>

                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="f-block">
                      <h6 class="txt-h-up">Contact</h6>
                      <ul class="contact-block">
                        <li><a href="">9, Lake Square, Kensington Road, Ulsoor, Bengaluru 560042</a></li>
                        <li>phone : +91 94-4973-4040</li>
                        <li>Email :<a href="mailto:info@motostore.com"> info@motostore.com</a></li>
                      </ul>
                    </div>

                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="f-block">
                      <h6 class="txt-h-up">motostore social</h6>
                      <ul class="social-block">
                        <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                      </ul>
                    </div>

                  </div>

                </div>
              </div>
            </section>
            <section class="cr-sec">
              <div class="container">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="cpr-text">
                      <h6>2019 &copy;Copyright Moto Store.</h6>
                      <p>Powered by <a href="">zikrabye Solutions</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- footer end -->


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

          <!-- <script type="text/javascript" src="<?= base_url('assets/js/jquery.js')?>"></script> -->
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
          <script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
          <script type="text/javascript" src="<?= base_url('assets/js/owl.carousel.min.js')?>"></script>
          <script type="text/javascript" src="<?= base_url('assets/zoom/dist/easyzoom.js') ?>"></script>
          <script type="text/javascript" src="<?= base_url('assets/js/datepicker.min.js') ?>"></script>
          <script type="text/javascript" src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
          <script type="text/javascript" src="<?= base_url('assets/js/custom.js')?>"></script>

         

    </body>
    </html>
