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
    <link rel="stylesheet" href="<?= base_url('assets/fancybox\dist\jquery.fancybox.min.css') ?>" />
    <!--styles -->

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="https://jqueryui.com/resources/demos/style.css">

</head>

<body>
    <?php $CI = &get_instance(); ?>
    <div class="products-page">

        <!-- header start -->
        <?php include('header.php');?>
        <div class="col-md-6 offset-md-3">
						<h4 class="title-border clr-black">Login</h4>
						<div class="login-form">
							
                               <?php echo form_open('login/auth',['id'=>'motostoreRegisterForm']);?>
							   
								<div class="form-group row">
									<label for="phone" class="col-sm-4 col-form-label">Phone Number</label>
									<div class="col-sm-8">	
									<?php if($this->session->flashdata('msg_error')):?>
                                          <span class="text-danger"><?= $this->session->flashdata('msg_error')?></span>
                                        <?php endif;?>
										<input type="tel" class="form-control" id="phone" name="userid" >
									</div>
								</div>	
									
								<div class="form-group row">
									<label for="password" class="col-sm-4 col-form-label">Password</label>
									<div class="col-sm-8">	
								        <div class="input-group">
								        <input type="password" class="form-control" id="password" name="password" >
								        <div class="input-group-append">
								          <span class="input-group-text" id="showPw">show</span>
								        </div>
								      </div>
									</div>
								</div>
								
								<button type="submit" class="btn btn-default d-block mx-auto">Login</button>
							</form>
							<hr/>
							<div class="text-center">
								<a href="<?= base_url('signup')?>">Already have an Account? Login instead!</a>
							</div>
						</div>
					</div>
        </div>
		<?php include('footer.php');?>