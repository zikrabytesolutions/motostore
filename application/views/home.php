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

	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css')?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/responsive.css')?>">
	<!--fontello-->
	<link rel="stylesheet" href="<?= base_url('assets/svg/css/fontello.css')?>">	
	<link rel="stylesheet" href="<?= base_url('assets/fancybox\dist\jquery.fancybox.min.css')?>" />
	<!--styles -->
</head>
<body>

	<div class="main-wrapper">
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
		<!-- slider start -->

<div id="slider_main" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#slider_main" data-slide-to="0" class="active icon-wheel"></li>
    <li data-target="#slider_main" data-slide-to="1" class="icon-wheel"></li>
    <li data-target="#slider_main" data-slide-to="2" class="icon-wheel"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?= base_url('assets/images/home-slider.png')?>" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?= base_url('assets/images/home-slider.png')?>" alt="Second slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#slider_main" role="button" data-slide="prev">
    <span class="icon-slider-arrow" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#slider_main" role="button" data-slide="next">
    <span class="icon-slider-arrow" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>		
<!-- slider end -->
		<!-- product slider start -->
		<section class="product-sec">
			<div class="container">
				<div class="row clearfix">
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 p_left">
						<div class="p-side-block">
							<h2 class="txt-h-up">Helmets</h2>
							<p class="txt-p-up">Enter the acerbis world. Discover all the novelties! </p>
						</div>				
					</div>

					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
						<div class="owl-carousel owl-theme owl-loaded portfolio-carousel">
							<div class="owl-stage-outer">
								<div class="owl-stage">
								 <?php if($category):
								     
								
									foreach($category as $cat): 
										// $cid=$this->encrypt->encode($cat->cid);
										// $cid= $this->encryption->encrypt($cat->cid);
										 $cid= strtr(base64_encode($cat->cid), '+/', '-_');
										 $cid=  strtr(base64_encode($cid), '+/', '-_');
										 $cid=  strtr(base64_encode($cid), '+/', '-_');
									?>
									
									<div class="owl-item">
									<a href="<?= base_url('product/lists/'.$cid.'/'.$cat->product)?>" target="_blank">
										<div class="p-item">
											<div class="item-title">
												<h6 class="txt-h-up"><?= $stringCut = substr($cat->product, 0, 45);?>..</h6>
											</div>
											<div class="item-img">
												<img src="<?= base_url('admin/assets/productimage/'.$cat->photo) ?>" width="400px" height="200px">
											</div>
											<div class="item-dtl">
												<div style="text-align:center">
												     <?php $price= $this->db->select('regular_price,offer_price')->from('product_details')->where('pro_id',$cat->id)->get()->row_array();?>
													<p style="font-size:18px">price: <span class="p-prc"><del><?= $price['regular_price']?> </del><b><?= $price['offer_price']?></b></span> </p>
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
		<!-- product slider end -->
		<!-- Portfolio section start -->
		<section class="portfolio-sec">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<?php $imgurl= base_url('assets/images/g1.png')?>
						<div class="g-img" style="background-image: url(<?= $imgurl?>);">
							<div class="txt-block">
								<h2 class="txt-h-up">Helmets</h2>
								<p class="txt-p-up">Enter the acerbis world. Discover all the novelties! </p>
							</div>
						</div>

					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<?php $imgurl2= base_url('assets/images/g2.png')?>
						<div class="g-img" style="background-image: url(<?= $imgurl2?>);">
							<div class="txt-block">
								<h2 class="txt-h-up">Helmets</h2>
								<p class="txt-p-up">Enter the acerbis world. Discover all the novelties! </p>
							</div>
						</div>

					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<?php $imgurl3= base_url('assets/images/g3.png')?>
						<div class="g-img" style="background-image: url(<?= $imgurl3?>);">
							<div class="txt-block">
								<h2 class="txt-h-up">Helmets</h2>
								<p class="txt-p-up">Enter the acerbis world. Discover all the novelties! </p>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- Portfolio section end -->
		<!-- video section start -->
		<section class="video-sec">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="v-side-block">
							<h1 class="txt-h-up">Motostore</h1>
							<p class="txt-p-up">Just try it. you 'll love it.</p>
						</div>
					</div>
					<div class="col-lg-8">
						<div class="video-block">
							<video width="100%"  controls>
								<source src="<?= base_url('assets/images/winter_sport_small3.mp4')?>" type="video/mp4">
								</video>
							<!-- <iframe width="100%" height="308" src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1">
							</iframe> -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- video section end -->


		<!-- testimonial slider start -->
		<section class="testimonial-sec">
			<div class="container">
				<div class="testi-block">
					<div class="owl-carousel owl-theme owl-loaded testimonial-carousel">
						<div class="owl-stage-outer">
							<div class="owl-stage">
								<div class="owl-item">
									<div class="row clearfix">
										<div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-sm-12 col-xs-12 text-center">
											<?php $imgt1=base_url('assets/images/testi/t1.jpg')?>
											<div class="testi-item-block" style="background-image: url(<?= $imgt1?>);">
												<div class="testi-bdr"></div>
										</div>
											<div class="testi-title">
												<h6 class="txt-h-up">Quiche Hollandaise</h6>
												<p class="txt-p-up">Lorem Ipsum is simply </p>
											</div>
											<div class="testi-desc">
												<p class="txt-p-up">
													Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item">
									<div class="row clearfix">
										<div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-sm-12 col-xs-12 text-center">
										<?php $imgt2=base_url('assets/images/testi/t2.jpg')?>
											<div class="testi-item-block" style="background-image: url(<?= $imgt2?>);">
												<div class="testi-bdr"></div>
										</div>
											<div class="testi-title">
												<h6 class="txt-h-up">Quiche Hollandaise</h6>
												<p class="txt-p-up">Lorem Ipsum is simply </p>
											</div>
											<div class="testi-desc">
												<p class="txt-p-up">
													Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item">
									<div class="row clearfix">
										<div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-sm-12 col-xs-12 text-center">
										<?php $imgt3=base_url('assets/images/testi/t3.jpg')?>
											<div class="testi-item-block" style="background-image: url(<?= $imgt3?>);">
												<div class="testi-bdr"></div>
										</div>
											<div class="testi-title">
												<h6 class="txt-h-up">Quiche Hollandaise</h6>
												<p class="txt-p-up">Lorem Ipsum is simply </p>
											</div>
											<div class="testi-desc">
												<p class="txt-p-up">
													Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- testimonial slider end -->
		<!-- News section start -->
<section class="news-sec">
<div class="container">
	<div class="inner_news">
<div class="row">
                            <div class="col-lg-5 col-12 col-md-12">
							<?php $news=base_url('assets/images/testi/news2bg.png')?>
                                <div class="newsletter-img bg-img" style="background-image: url(<?= $news?>);">
                                    <img alt="image" src="<?= base_url('assets/images/news2.png')?>">
                                </div>
                            </div>
                            <div class="col-lg-7 col-12 col-md-12">
                                <div class="newsletter-wrapper text-center">
                                    <div class="newsletter-title">
                                        <p>LATEST NEWS FROM MOTOSTORE</p>
                                    </div>
                                    <div id="mc_embed_signup" class="subscribe-form">
                                        <form action="#" method="post" id="subscribe-form" name="subscribe-form" class="validate" target="_blank" novalidate="">
                                            <div id="mc_embed_signup_scroll" class="mc-form">
                                                <input type="email" class="form-control" name="email" placeholder="Enter Email">
                                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                                <div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                                <button type="submit" class="btn">Subscribe</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
  </div>                      
</div>	
</section>
<!-- News section end -->
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