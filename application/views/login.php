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
        <header>
            <div class="container">
                <div class="row d-none d-md-block d-lg-block ">
                    <div class="mid-logo-block">
                        <!-- Brand -->
                        <a class="mid-logo" href="<?= base_url('') ?>"><img class="mx-auto d-block" src="<?= base_url('assets/images/page-logo.jpg') ?>"></a>
                    </div>

                </div>
            </div>
            <nav class="navbar navbar-expand-md">
                <div class="container">
                    <!-- Brand -->
                    <a class="navbar-brand d-block d-md-none d-lg-none" href="#"><img src="<?= base_url('assets/images/page-logo.jpg') ?>"></a>
                    <ul class="nav dsk-hide">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                    <!-- Toggler/collapsibe Button -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation-menu">
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- Navbar links -->
                    <div class="collapse navbar-collapse justify-content-center" id="navigation-menu">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Riding Gears </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Accessories </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Brands </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Blog </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Design </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact </a>
                            </li>
                        </ul>

                    </div>
                    <ul class="nav mb-hide">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>

        </header>
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
								<a href="#">Already have an Account? Login instead!</a>
							</div>
						</div>
					</div>
        </div>
        <!-- footer start -->
<section class="footer-sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<div class="f-block">
					<img class="f-logo" src="<?= base_url('assets/images/page-logo.jpg')?>">	
				
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
					
					<li><a href="">privacy policy</a></li>
					<li><a href="">cookie</a></li>
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
					<h6 class="txt-h-up">motosotre social</h6>
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


    <script type="text/javascript" src="<?= base_url('assets/js/jquery.js') ?>"></script>

	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- slick -->
    <script type="text/javascript" src="<?= base_url('assets/slick/slick.min.js') ?>"></script>
    <!-- slick -->
    <script type="text/javascript" src="<?= base_url('assets/zoom/dist/easyzoom.js') ?>"></script>	
	<script type="text/javascript" src="<?= base_url('assets/js/datepicker.min.js') ?>"></script>
    <!-- price range slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/owl.carousel.min.js') ?>"></script>

    
<script type="text/javascript" src="<?= base_url('assets/js/custom.js') ?>"></script>
</body>

</html>