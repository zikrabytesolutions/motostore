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

<?php include 'footer.php'; ?>




	</div>

	<?php include 'js.php';?>


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
