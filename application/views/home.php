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
		<?php include('header.php');?>
		<!-- header end -->
		<!-- slider start -->
<!-- 		<section class="slider-sec">
			<div id="main-slider" class="carousel slide" data-ride="carousel">


				<ul class="carousel-indicators">
					<li data-target="#main-slider" data-slide-to="0" class="active"></li>
					<li data-target="#main-slider" data-slide-to="1"></li>
					<li data-target="#main-slider" data-slide-to="2"></li>
				</ul>

				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="images/s2.png" alt="">
					</div>
					<div class="carousel-item">
						<img src="images/s2.png" alt="">
					</div>

				</div>

				<a class="carousel-control-prev" href="#main-slider" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a class="carousel-control-next" href="#main-slider" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>

			</div>
		</section> -->
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
		<!-- product slider start -->
		<section class="product-sec">
			<div class="container">
				<div class="product-grid flex-container">
				<?php if($category):
					foreach($category as $cat):

						$cid= strtr(base64_encode($cat->catid), '+/', '-_');
						$cid=  strtr(base64_encode($cid), '+/', '-_');
						$cid=  strtr(base64_encode($cid), '+/', '-_');
					?>
					<div class="product-item">
						<a href="<?= base_url('product/lists/'.$cid.'/'.$cat->tiles_name)?>" style="background-image:url('<?= base_url('admin/assets/productimage/'.$cat->image) ?>');">
							<div class="item-info">
								<span class="item-name"><?= $stringCut = substr($cat->tiles_name, 0, 30);?>...</span>
								
							</div>
						</a>
					</div>

					<?php endforeach; endif; ?>

				</div>
			</div>

		</section>

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
<?php include('footer.php')?>
