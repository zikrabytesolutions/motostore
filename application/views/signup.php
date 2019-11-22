<!DOCTYPE html>
<html lang="en">

<head>
    <title>Moto store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/font-awesome.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/owl.theme.default.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/animate.css') ?>">

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/responsive.css') ?>">
    <!--fontello-->
    <link rel="stylesheet" href="<?= base_url('assets/svg/css/fontello.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/fancybox/dist/jquery.fancybox.min.css') ?>" />
    <!--styles -->

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="https://jqueryui.com/resources/demos/style.css">

</head>

<body>
    <?php $CI = &get_instance(); ?>
    <div class="register">

    <?php include('header.php');?>
    <div class="register-page py-5">
        <div class="col-md-6 offset-md-3">
						<h4 class="title-border clr-black">Create an Account</h4>
						<div class="register-form">
							
                            <?php echo form_open('signup/register',['id'=>'motostoreRegisterForm'])?>
								<div class="form-group row">
									<label for="firstname" class="col-sm-4 col-form-label">Full Name</label>
									<div class="col-sm-8">	
										<input type="text" class="form-control" id="firstname" name="name" value="<?php echo set_value('name'); ?>">
                                        <small style="color:red; font-size:10px"><?php echo form_error('name'); ?></small> 
                                    </div>
								</div>

								<div class="form-group row">
									<label for="phone" class="col-sm-4 col-form-label">Phone Number</label>
									<div class="col-sm-8">	
										<input type="number" class="form-control" id="mobile" name="mobile" value="<?php echo set_value('mobile'); ?>">
                                        <small style="color:red"><?php echo form_error('mobile'); ?></small> 
                                    </div>
								</div>	
								

								<div class="form-group row">
									<label for="email" class="col-sm-4 col-form-label">Email</label>
									<div class="col-sm-8">	
										<input type="email" class="form-control" id="email" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-z]+\.[a-z]{2,3}$" value="<?php echo set_value('email'); ?>">
                                        <small style="color:red"><?php echo form_error('email'); ?></small> 
                                    </div>
								</div>
								<div class="form-group row">
									<label for="password" class="col-sm-4 col-form-label">Password</label>
									<div class="col-sm-8">	
								        <div class="input-group">
								        <input type="password" class="form-control" id="password" name="password" >
								         <div class="input-group-append">
								          <span class="input-group-text" id="showPw"><i class="fa fa-eye" aria-hidden="true"></i></span>
								          <span class="input-group-text" id="hidePw"><i class="fa fa-eye-slash" aria-hidden="true"></i></span>
								         
								        </div>
                                      </div>
                                      <small style="color:red"><?php echo form_error('password'); ?></small>
									</div>
								</div>

                                <div class="form-group row">
									<label for="password" class="col-sm-4 col-form-label">Confirm Password</label>
									<div class="col-sm-8">	
								       
								        <input type="password" class="form-control"  name="conpassword" >
                                        <small style="color:red"><?php echo form_error('conpassword'); ?></small> 
                                        <?php if($this->session->flashdata('password')):?>
                                          <span class="text-danger"><?= $this->session->flashdata('password')?></span>
                                        <?php endif;?>
                                    
									</div>
								</div>
								<!-- <div class="form-group text-center">
									<label><input type="checkbox" name="subscribe" value="subscribe" class="mr-2"><div><i class="fa fa-check"></i></div>Sign Up for our Newsletter
									</label>
									<p>You may Unsubscribe at any Moment</p>
								</div> -->
								<button type="submit" class="btn btn-default d-block mx-auto">sign up</button>
							</form>
							<hr/>
							<div class="text-center">
								Already have an Account? <a href="#">Login</a>
							</div>
						</div>
					</div>    	
    </div>

        </div>
		<?php include('footer.php');?>