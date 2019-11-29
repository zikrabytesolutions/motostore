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
	<!-- <link rel="stylesheet" href="https://jqueryui.com/resources/demos/style.css"> -->

</head>

<body>
    <?php $CI = &get_instance(); ?>
    <div class="login">

        <!-- header start -->
        <?php include('header.php');?>
        <div class="login-page py-5">
        	        <div class="col-md-6 offset-md-3">
						<h4 class="title-border clr-black">Login</h4>
						<div class="login-form">	
								<div class="form-group row">
									<div class="col-sm-12">
										<?php if($this->session->flashdata('link')):?>
                                          <div class="alert alert-success"><?= $this->session->flashdata('link')?></div>
                                     <?php endif;?>
                                     <?php if($this->session->flashdata('msg_error')):?>
                                          <div class="alert alert-danger"><?= $this->session->flashdata('msg_error')?></div>
                                     <?php endif;?>
									</div>
								</div>
                               <?php echo form_open('login/forgotpost',['id'=>'motostoreRegisterForm']);?>
							   
								<div class="form-group row">
									<label for="phone" class="col-sm-4 col-form-label">Email/Phone number</label>
									<div class="col-sm-8">
										<input type="tel" class="form-control" id="phone" name="userid" >
                                        <small style="color:red"><?php echo form_error('userid'); ?></small> 
									</div>
								</div>		
								
								<div class="row">
								   <div class="col-sm-9">
								      <button style="float:right" type="submit" class="btn btn-default d-block mx-auto">Submit</button>
								   </div>
								  
								 </div>
							</form>
							<hr/>
							<div class="text-center">
							<a href="<?= base_url('login')?>">Login</a>
							</div>
						</div>
					</div>
        </div>

    </div>
		<?php include('footer.php');?>