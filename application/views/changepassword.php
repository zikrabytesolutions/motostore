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
                <main class="col-md-6">
                   <section class="frmsec">
                   <div class="account-form">
                        <h5>Change Password</h5>
                        <hr>
                        <?php echo form_open('users/update');?>
                          <!-- <div class="row"> -->
                          <?php if($this->session->flashdata('msg_error')):?>
                                          <span class="text-danger"><?= $this->session->flashdata('msg_error')?></span>
                                     <?php endif;?>
                            <!-- <div class="form-group col-sm-12">
                                <label for="pwd">Current password </label>
                                <input type="password" class="form-control" id="pwd" name="password">
                                <small style="color:red"><?php echo form_error('password'); ?></small> 
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="cpwd">New password </label>
                                <input type="password" class="form-control" id="npwd" name="npwd">
                               
                                <small style="color:red"><?php echo form_error('npwd'); ?></small> 
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="npwd">Confirm new password </label>
                                <input type="password" class="form-control" id="cpwd" name="cpwd">
                                <small style="color:red"><?php echo form_error('cpwd'); ?></small>
                            </div> 
                          </div>-->
                       

                            <div class="form-group row">
                  <label for="pwd" class="col-sm-4 col-form-label">Current password</label>
                  <div class="col-sm-8">  
                        <div class="input-group">
                        <input type="password" class="form-control" id="pwd" name="password">
                        <div class="input-group-append">
                          <span class="input-group-text" id="showpwd"><i class="fa fa-eye" aria-hidden="true"></i></span>
                          <span class="input-group-text" id="hidepwd"><i class="fa fa-eye-slash" aria-hidden="true"></i></span>
                         
                        </div>
                      </div>
                      <small style="color:red"><?php echo form_error('password'); ?></small> 
                  </div>
                </div>
                <div class="form-group row">
                  <label for="npwd" class="col-sm-4 col-form-label">Current password</label>
                  <div class="col-sm-8">  
                        <div class="input-group">
                         <input type="password" class="form-control" id="npwd" name="npwd">
                        <div class="input-group-append">
                          <span class="input-group-text" id="shownpwd"><i class="fa fa-eye" aria-hidden="true"></i></span>
                          <span class="input-group-text" id="hidenpwd"><i class="fa fa-eye-slash" aria-hidden="true"></i></span>
                         
                        </div>
                      </div>
                      <small style="color:red"><?php echo form_error('npwd'); ?></small> 
                  </div>
                </div>
                <div class="form-group row">
                  <label for="cpwd" class="col-sm-4 col-form-label">Confirm new password</label>
                  <div class="col-sm-8">  
                        <div class="input-group">
                         <input type="password" class="form-control" id="cpwd" name="cpwd">
                        <div class="input-group-append">
                          <span class="input-group-text" id="showcpwd"><i class="fa fa-eye" aria-hidden="true"></i></span>
                          <span class="input-group-text" id="hidecpwd"><i class="fa fa-eye-slash" aria-hidden="true"></i></span>
                         
                        </div>
                      </div>
                       <small style="color:red"><?php echo form_error('cpwd'); ?></small>
                  </div>
                </div>
     




                            <input type="submit" class="btn-default bg-red my-4" value="Save Changes">

                            </form>
                        
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




	</div>

	<script type="text/javascript" src="<?= base_url('assets/js/jquery.js')?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/owl.carousel.min.js')?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/zoom/dist/easyzoom.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/datepicker.min.js') ?>"></script>
	<script type="text/javascript" src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/custom.js')?>"></script>


 <script type="text/javascript">
    $(document).ready(function(){
$('#hidepwd').hide();
$('#hidenpwd').hide();
$('#hidecpwd').hide();
});

// current password
var showPwd = document.getElementById('showpwd');
if(showPwd){
showPwd.addEventListener('click', showPassword);
function showPassword() {
  $('#showpwd').hide();
  $('#hidepwd').show();

$('#showpwd').toggleClass('shw');     
  var x = document.getElementById("pwd");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

}

var hidePwd = document.getElementById('hidepwd');

if(hidePwd){

hidePwd.addEventListener('click', hidePassword);
function hidePassword() {
  $('#showpwd').show();
  $('#hidepwd').hide();

$('#hidepwd').toggleClass('shw');     
  var x = document.getElementById("pwd");
  if (x.type === "text") {
    x.type = "password";
  } else {
    x.type = "text";
  }
}

}

// new password
var shownPwd = document.getElementById('shownpwd');
if(shownPwd){
shownPwd.addEventListener('click', showPasswordn);
function showPasswordn() {
  $('#shownpwd').hide();
  $('#hidenpwd').show();

$('#shownpwd').toggleClass('shw');     
  var x = document.getElementById("npwd");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

}

var hidenPwd = document.getElementById('hidenpwd');

if(hidenPwd){

hidenPwd.addEventListener('click', hidePasswordn);
function hidePasswordn() {
  $('#shownpwd').show();
  $('#hidenpwd').hide();

$('#hidenpwd').toggleClass('shw');     
  var x = document.getElementById("npwd");
  if (x.type === "text") {
    x.type = "password";
  } else {
    x.type = "text";
  }
}

}




// confirm password
var showcPwd = document.getElementById('showcpwd');
if(showcPwd){
showcPwd.addEventListener('click', showPasswordc);
function showPasswordc() {
  $('#showcpwd').hide();
  $('#hidecpwd').show();

$('#showcpwd').toggleClass('shw');     
  var x = document.getElementById("cpwd");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

}

var hidecPwd = document.getElementById('hidecpwd');

if(hidecPwd){

hidecPwd.addEventListener('click', hidePasswordc);
function hidePasswordc() {
  $('#showcpwd').show();
  $('#hidecpwd').hide();

$('#hidecpwd').toggleClass('shw');     
  var x = document.getElementById("cpwd");
  if (x.type === "text") {
    x.type = "password";
  } else {
    x.type = "text";
  }
}

}





 </script>

</body>
</html>
