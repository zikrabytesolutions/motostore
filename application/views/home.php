<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Moto store</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!--styles -->
	<?php include 'css.php';  ?>
</head>
<body>

	<div class="main-wrapper">
		<!-- header start -->
		<?php include('header.php');?>
		<!-- header end -->

<div id="slider_main" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
  <?php $i=0; if($slider): foreach( $slider as $sd):?>
    <li data-target="#slider_main" data-slide-to="<?= $i?>" class="<?php if($i==0){echo "active";}?> icon-wheel"></li>
	
     <?php  $i++; endforeach; endif?>
  </ol>
  <div class="carousel-inner">

   <?php $i=0; if($slider): foreach( $slider as $sd): $i++;?>
    <div class="carousel-item <?php if($i==1){echo "active";}?>">
      <img class="d-block w-100" src="<?= base_url('admin/assets/slider/'.$sd->images)?>" alt="First slide">
    </div>
   <?php endforeach; endif?>
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
				<?php if($category): foreach($category as $cat):

						$cid= strtr(base64_encode($cat->url), '+/', '-_');
						$cid=  strtr(base64_encode($cid), '+/', '-_');
						$cid=  strtr(base64_encode($cid), '+/', '-_');
					?>
					<div class="product-item">
						<a href="<?= $cat->url?>" style="background-image:url('<?= base_url('admin/assets/productimage/'.$cat->image) ?>');">
							<div class="item-info">
								<span class="item-name">
								<?php
								  if(strlen($cat->tiles_name)>12)
								  {
                                       echo  $stringCut = substr($cat->tiles_name, 0, 12).' ...';
								  }
								  else{
                                         echo  $stringCut = substr($cat->tiles_name, 0, 12);
								  }
								  ?>   
								 </span>
								<span class="item-name">Starting from Rs. <?= $cat->price;?></span>
								<!-- <span class="item-name">Starting Price Rs:  &#8377;<?= $cat->price;?></span> -->
								
							</div>
						</a>
					</div>

					<?php endforeach; else: ?>

					<h4>No tiles found </h4>

					<?php endif; ?>

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
									<?php echo form_open('home/emailsave',['id'=>'subscribe-form','class'=>'validate' ]);?>
                                            <div id="mc_embed_signup_scroll" class="mc-form">
                                                <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                                                <?php if($this->session->flashdata('msg_error')):?>
													<div style="color:yellow"><?= $this->session->flashdata('msg_error')?></div>
												<?php endif;?>
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


<?php include('footer.php'); ?>
</div>
<?php include('js.php'); ?>


</body>
</html>