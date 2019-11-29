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
                    <?php include ('detail_sidebar.php');?>
                </aside>
                <main class="col-md-9">
                   <section class="frmsec">
                   		<div class="account-form">
                            <h5>Details</h5>
                            <table id="myTable" class="display">
							    <thead>
							        <tr>
							            <th>Name</th>
							            <th>Email</th>
							            <th>Address</th>
							            <th>phone</th>
							        </tr>
							    </thead>
							    <tbody>
							        <tr>
							            <td>aaa</td>
							            <td>aaa@gmail.com</td>
							            <td>Bangalore</td>
							            <td>9933399339</td>
							        </tr>
							        <tr>
							            <td>aaa</td>
							            <td>aaa@gmail.com</td>
							            <td>Bangalore</td>
							            <td>9933399339</td>
							        </tr>
							        <tr>
							            <td>aaa</td>
							            <td>aaa@gmail.com</td>
							            <td>Bangalore</td>
							            <td>9933399339</td>
							        </tr>
							        <tr>
							            <td>aaa</td>
							            <td>aaa@gmail.com</td>
							            <td>Bangalore</td>
							            <td>9933399339</td>
							        </tr>
							        <tr>
							            <td>aaa</td>
							            <td>aaa@gmail.com</td>
							            <td>Bangalore</td>
							            <td>9933399339</td>
							        </tr>
							    </tbody>
							</table>
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
	<script type="text/javascript" src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/custom.js')?>"></script>



	<script type="text/javascript">
		$(document).ready( function () {
    $('#myTable').DataTable();
} );
	</script>
</body>
</html>