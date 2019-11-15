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
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css')?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/responsive.css')?>">
	
</head>
<body>

	<div class="detail">
		<!-- header start -->
		<header>
			<div class="container">
				<div class="row d-none d-md-block d-lg-block ">
					<div class="mid-logo-block">
						<!-- Brand -->
						<a class="mid-logo" href="<?= base_url('')?>"><img class="mx-auto d-block" src="<?= base_url('assets/images/page-logo.jpg')?>"></a>	
					</div>
					
				</div>
			</div>
			<nav class="navbar navbar-expand-md">
				<div class="container">
					<!-- Brand -->
					<a class="navbar-brand d-block d-md-none d-lg-none" href="#"><img src="<?= base_url('assets/images/page-logo.jpg')?>"></a>
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
		<!-- header end -->

	<!-- Account details section start -->

	 <div class="container-fluid products-body">
            <div class="row mt-50 mb-35 mr-2 ml-2">
                <aside class="col-md-3">
                    <?php include "detail_sidebar.php";?>
                </aside>
                <main class="col-md-9">
                   <section class="frmsec">
                   		<div class="account-form">
                            <form id="accountForm" action="#" method="post" data-url="">
                                <h5>Account Details</h5>

                                <div class="form-row">
                                    <div class="form-group col-sm-6">
                                        <label for="firstname">First name *</label>
                                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First name">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="lastname">Last name *</label>
                                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last name">
                                    </div>
                                </div>
                                <div class="form-row align-items-end">
                                    <div class="form-group col-sm-12">
                                        <label for="streetaddress">Display name *</label>
                                        <input type="text" class="form-control" id="displayname" name="streetaddress" placeholder="Display name">
                                    </div>
                                </div>
                                <p>This will be how your name will be displayed in the account section and in reviews</p>
                                <div class="form-group">
                                    <label for="email">Email address *</label>
                                    <input type="email" class="form-control" id="email" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-z]+\.[a-z]{2,3}$" placeholder="Email Address">
                                </div>
                                <h6>Password Change</h6>
                                <div class="form-group">
                                    <label for="pwd">Current password (leave blank to leave unchanged)</label>
                                    <input type="text" class="form-control" id="pwd" name="pwd">
                                </div>
                                <div class="form-group">
                                    <label for="cpwd">New password (leave blank to leave unchanged)</label>
                                    <input type="text" class="form-control" id="cpwd" name="cpwd">
                                </div>
                                <div class="form-group">
                                    <label for="npwd">Confirm new password</label>
                                    <input type="text" class="form-control" id="npwd" name="npwd">
                                </div>
                                <input type="submit" class="btn-default bg-red my-4" value="Save Changes">
                      
                            </form>
                        </div>
                   </section>
                </main>
            </div>
        </div>

	<!-- Account details section end -->


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




	</div>

	<script type="text/javascript" src="<?= base_url('assets/js/jquery.js')?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/owl.carousel.min.js')?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/zoom/dist/easyzoom.js') ?>"></script>	
	<script type="text/javascript" src="<?= base_url('assets/js/datepicker.min.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/custom.js')?>"></script>
	<script type="text/javascript">
		
	</script>
</body>
</html>