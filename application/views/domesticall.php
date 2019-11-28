<!DOCTYPE html>
<html lang="en">
<head>
	<title>Moto Experience</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php include 'css.php'; ?>
</head>
<body>
	<div class="main-wrapper">
		<!-- header start -->
		<header>
			<div class="cafe-logo">
				<a class="cafemid-logo" href="<?= base_url('')?>"><img class="mx-auto d-block" src="<?= base_url('assets/images/motocafe.png'); ?>" height="64px" width="164px"></a>
			</div>
		</header>
		<!-- header end -->
		<!-- banner section start -->
		<section class="banner-sec">
			<div class="container">
				<div class="row">
					<div class="col-md-6 offset-md-3 text-center">
						<div class="banner-title">
							<h4>Lorem Ipsum is simply dummy text</h4>
							<form method="POST" enctype="multipart/form-data">
								<div class="input-group">
									<input type="text" class="form-control" name="search" placeholder="Search">
									<div class="input-group-append">
										<span class="input-group-text"><i class="fa fa-search" aria-hidden="true"></i></span>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- banner section end  -->
		<!-- section domestic start -->
		<section class="domesticall-sec">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h3 class="side-title">Domestic : Limited period offer</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12">
						<div class="col-content">
							<img src="<?= base_url();?>assets/images/blog/img1.png" class="img-fluid dimg" alt="alt_text">
							<div class="pb-content">
								<div class="pb-left">
									<h6 class="pb-title txt-h-up">Package</h6>
									<h5 class="pb-place">Best of Kerala</h5>
									<!-- <p class="pb-icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
										<i class="fa fa-shopping-cart" aria-hidden="true"></i></p> -->
										<p class="pb-price"><span>7,500</span> / person</p>
									</div>
									<div class="pb-right">
										<p><span class="lbl">4D-3N</span></p>
										<a href="" class="btn">Get Quote</a>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</section>
			<!-- section domestic end -->
			<?php include 'footer.php'; ?>
		</div>
		<script type="text/javascript" src="<?= base_url('assets/js/jquery.js') ?>"></script>

		<?php include 'js.php'; ?>
	</body>
	</html>