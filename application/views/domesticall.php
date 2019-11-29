<!DOCTYPE html>
<html lang="en">
<head>
	<title>Moto Experience</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php include 'css.php'; ?>
	<link rel="stylesheet" href="<?= base_url('assets/css/select2-3.5.2/select2.css') ?>" />
	<link rel="stylesheet" href="<?= base_url('assets/css/select2-bootstrap/select2-bootstrap.css') ?>" />
	<style type="text/css">
		.select2-container .select2-choice{
			height: 38px !important;
			border-radius: 20px;
			border:none; 
		}
		.select2-container .select2-choice .select2-arrow b{
			display: none;
		}
		#s2id_place{
			text-align: left;
		}
		.select2-container .select2-choice > .select2-chosen{
			line-height: 24px;
		}
	</style>
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
									<select class="form-control search-input" name="place" id="place">
										<option value="">All Places</option>
										<option value="" >Bangalore</option>	
									</select>
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
					
					<?php if($ridedomestic): foreach($ridedomestic as $dom):?>
						<div class="col-lg-4 col-md-4 col-sm-12">
						<a href="<?= base_url();?>motoexprience/ridedetail">
							<div class="col-content">
								<img src="<?= base_url('admin/assets/eventimages/'.$dom->images);?>" class="img-fluid" alt="alt_text" style="width:350px; height:220px">
								<div class="pb-content">
									<div class="pb-left">
										<h6 class="pb-title txt-h-up">Package</h6>
										<h5 class="pb-place" data-toggle="tooltip" title="<?= $dom->title ; ?>">
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
			</section>
			<!-- section domestic end -->
			<?php include 'expfooter.php'; ?>
		</div>

		<?php include 'js.php'; ?>
		<script type="text/javascript" src="<?= base_url('assets/css/select2-3.5.2/select2.min.js') ?>"></script>
<script type="text/javascript">
	$('.search-input').select2();

</script>
<script>
  $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
  });
  </script>
	</body>
	</html>