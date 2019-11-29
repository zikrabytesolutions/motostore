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

	<!-- Account details section start -->

	 <div class="container-fluid products-body">
            <div class="row mt-50 mb-35 mr-2 ml-2">
                <aside class="col-md-3">
                    <?php include "detail_sidebar.php";?>
                </aside>
                <main class="col-md-9">
                   <section class="frmsec">
				   <?php if($profile): foreach ($profile as $pro):?>
                   		<div class="account-form">
						   <?php echo form_open('account/updateaccount')?>
                            <form id="accountForm" action="#" method="post" data-url="">
                                <h5>Account Details</h5>
								<?php if($this->session->flashdata('msg_error')):?>
                                          <span class="text-danger"><?= $this->session->flashdata('msg_error')?></span>
                                     <?php endif;?>
                                <div class="form-row">
                                    <div class="form-group col-sm-6">
                                        <label for="firstname">Full Name *</label>
                                        <input type="text" class="form-control" value="<?= $pro->name?>" name="name" placeholder="First name" onkeypress="return ((event.charCode >=97 && event.charCode <=122) || (event.charCode >=65 && event.charCode <=90) || (event.charCode >=0 && event.charCode <=32) )" required>
                                    </div>
								  

								  <div class="form-group col-sm-6">
                                        <label for="streetaddress">Phone *</label>
                                        <input type="text" class="form-control" value="<?= $pro->mobile?>" name="mobile" placeholder="Mobile" readonly>
                                    </div>
                                </div>



                                <p>This will be how your name will be displayed in the account section.</p>
                                <div class="form-group">
                                    <label for="email">Email address *</label>
                                    <input type="email" class="form-control" value="<?= $pro->email?>" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-z]+\.[a-z]{2,3}$" placeholder="Email Address" readonly/>
								</div>
								<p>This will be used as your billing address.</p>
								<div class="row">
								<div class="form-group col-sm-6">
                                    <label for="pwd">Street Address</label>
                                    <input type="text" class="form-control"  name="streetaddress" value="<?= $pro->streetaddress?>" required>
								</div>

								<div class="form-group col-sm-6">
                                    <label for="pwd">Street Address-2</label>
                                    <input type="text" class="form-control"  name="streetaddress1" value="<?= $pro->streetaddress1?>" required>
								</div>
								<div class="form-group col-sm-6">
                                    <label for="pwd">City Name</label>
                                    <input type="text" class="form-control"  name="city" value="<?= $pro->city?>">
								</div>
								<div class="form-group col-sm-6">
                                    <label for="pwd">Pin Code*</label>
                                    <input type="text" class="form-control"  name="postcode" value="<?= $pro->postcode?>" maxlength="6" onkeypress="return ((event.charCode >=48 && event.charCode <=57) || (event.charCode >=0 && event.charCode <=31) )" required>
                                </div>
								</div>

                                <input type="submit" class="btn-default bg-red my-4" value="Save Changes">

                            </form>
                        </div>
				   <?php endforeach; endif;?>
                   </section>
                </main>
            </div>
        </div>

	<!-- Account details section end -->
<!-- footer start -->
<?php include 'footer.php';?>
<!-- footer end -->

	</div>

	<!-- <script type="text/javascript" src="<?= base_url('assets/js/jquery.js')?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/owl.carousel.min.js')?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/zoom/dist/easyzoom.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/datepicker.min.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/custom.js')?>"></script>
	 -->
	 <?php include 'js.php'; ?>
</body>
</html>
