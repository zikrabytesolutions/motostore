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
		<?php include 'expheader.php'; ?>
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
									<select class="form-control select-tab">
										<option disabled>Select</option>
										<option value="domestic">Domestic</option>
										<option value="international">International</option>
									</select>
									<input type="text" class="form-control search-input" name="search" placeholder="Search">
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
		<section class="domestic-sec">
			<div class="container">
				<div class="row">
					<div class="col-lg-10">
						<h3 class="side-title">Domestic : Limited period offer</h3>
					</div>
					<div class="col-lg-2 text-right eventbtn">
						<a href="<?= base_url();?>motoexp/domesticall">View All </a>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="owl-carousel owl-theme owl-loaded domestic-carousel">
							<div class="owl-stage-outer">
								<div class="owl-stage">
                <?php if($ridedomestic): foreach($ridedomestic as $dom):?>
					<div class="owl-item">
						<a href="<?= base_url();?>motoexp/ridedetail">
							<div class="col-content">
								<img src="<?= base_url('admin/assets/eventimages/'.$dom->images);?>" class="img-fluid" alt="alt_text" style="width:350px; height:220px">
								<div class="pb-content">
									<div class="pb-left">
										<h6 class="pb-title txt-h-up">Package</h6>
										<h5 class="pb-place">
										<?php
                                                    if(strlen($dom->title)>20)
                                                    {
                                                     echo  $stringCut = substr($dom->title, 0, 20).' ...';
                                                    }
                                                    else{
                                                   echo  $stringCut = substr($dom->title, 0, 20);
                                                    }
                                                    ?>
									
										</h5>
									<!-- <p class="pb-icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
										<i class="fa fa-shopping-cart" aria-hidden="true"></i></p> -->
										<p class="pb-price"><span><?= number_format($dom->price)?></span> / person</p>
									</div>
									<div class="pb-right">
									<p><span class="lbl"><i class="fa fa-map-marker" aria-hidden="true">&nbsp; </i> <?= $dom->placename?></span></p>
										<a href="" class="btn">Get Quote</a>
									</div>
								</div>
							</div>
						</a>
					</div>
				<?php endforeach; endif?>
					
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</section>
<!-- section domestic end -->

<!-- section international start -->
<section class="international-sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-md-10 col-sm-12">
				<h3 class="side-title">International : Limited period offer</h3>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-12 text-right eventbtn">
				<a href="<?= base_url();?>motoexp/internationalall">View All </a>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="owl-carousel owl-theme owl-loaded international-carousel">
					<div class="owl-stage-outer">
						<div class="owl-stage">
                           <?php if($rideinternational): foreach($rideinternational as $int):?>
							<div class="owl-item">
						<a href="<?= base_url();?>motoexp/ridedetail">
							<div class="col-content">
								<img src="<?= base_url('admin/assets/eventimages/'.$int->images);?>" class="img-fluid" alt="alt_text" style="width:350px; height:220px">
								<div class="pb-content">
									<div class="pb-left">
										<h6 class="pb-title txt-h-up">Package</h6>
										<h5 class="pb-place">
										<?php
                                                    if(strlen($int->title)>20)
                                                    {
                                                     echo  $stringCut = substr($int->title, 0, 20).' ...';
                                                    }
                                                    else{
                                                   echo  $stringCut = substr($int->title, 0, 20);
                                                    }
                                                    ?></h5>
									<!-- <p class="pb-icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
										<i class="fa fa-shopping-cart" aria-hidden="true"></i></p> -->
										<p class="pb-price"><span><?= number_format($int->price)?></span> / person</p>
									</div>
									<div class="pb-right">
										<p><span class="lbl"><i class="fa fa-map-marker" aria-hidden="true">&nbsp; </i> <?= $int->placename?></span></p>
										<a href="" class="btn">Get Quote</a>
									</div>
								</div>
							</div>
						</a>
					</div>
				<?php endforeach; endif?>

				</div>
			</div>
		</div>
	</div>
</div>
</div>
</section>
<!-- section international end -->


<!-- section searchexp start -->
<section class="searchexp-sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-10">
				<h3 class="side-title">searchexp : Limited period offer</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="owl-carousel owl-theme owl-loaded searchexp-carousel">
					<div class="owl-stage-outer">
						<div class="owl-stage">
							<div class="owl-item">
								<a href="<?= base_url();?>motoexp/ridedetail">
									<div class="col-content">
										<img src="<?= base_url();?>assets/images/blog/img1.png" class="img-fluid" alt="alt_text">
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
						</a>
					</div>
					<div class="owl-item">
						<a href="<?= base_url();?>motoexp/ridedetail">
							<div class="col-content">
								<img src="<?= base_url();?>assets/images/blog/img2.png" class="img-fluid" alt="alt_text">
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
						</a>
					</div>
					<div class="owl-item">
						<a href="<?= base_url();?>motoexp/ridedetail">
							<div class="col-content">
								<img src="<?= base_url();?>assets/images/blog/img3.png" class="img-fluid" alt="alt_text">
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
						</a>
					</div>
					<div class="owl-item">
						<a href="<?= base_url();?>motoexp/ridedetail">
							<div class="col-content">
								<img src="<?= base_url();?>assets/images/blog/img4.png" class="img-fluid" alt="alt_text">
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
						</a>
					</div>
					<div class="owl-item">
						<a href="<?= base_url();?>motoexp/ridedetail">
							<div class="col-content">
								<img src="<?= base_url();?>assets/images/blog/img1.png" class="img-fluid" alt="alt_text">
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
						</a>
					</div>
					<div class="owl-item">
						<a href="<?= base_url();?>motoexp/ridedetail">
							<div class="col-content">
								<img src="<?= base_url();?>assets/images/blog/img2.png" class="img-fluid" alt="alt_text">
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
						</a>
					</div>
					<div class="owl-item">
						<a href="<?= base_url();?>motoexp/ridedetail">
							<div class="col-content">
								<img src="<?= base_url();?>assets/images/blog/img3.png" class="img-fluid" alt="alt_text">
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
						</a>
					</div>
					<div class="owl-item">
						<a href="<?= base_url();?>motoexp/ridedetail">
							<div class="col-content">
								<img src="<?= base_url();?>assets/images/blog/img4.png" class="img-fluid" alt="alt_text">
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
						</a>
					</div> 
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</section>
<!-- section searchexp end -->



<?php include 'expfooter.php'; ?>
</div>
<script type="text/javascript" src="<?= base_url('assets/js/jquery.js') ?>"></script>

<?php include 'js.php'; ?>
</body>
</html>