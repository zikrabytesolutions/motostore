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
			border-radius: 0px 20px 20px 0px;
			border:none;
		}
		.select2-container .select2-choice .select2-arrow b{
			display: none;
		}
		#s2id_place{
			text-align: left;
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
							<?php echo form_open('motoexprience/searchpost')?>
								<div class="input-group">
									<select class="form-control select-tab" name="placetype" onChange="getplace(this.value);" required>
										<option>Select</option>
										<option value="2">Domestic</option>
										<option value="1">International</option>
									</select>
									<!-- <input type="text" class="form-control search-input" name="search" placeholder="Search"> -->
									<select class="form-control search-input" name="place" id="place" required>
										
									</select>
									<div class="input-group-append">
										<button type="submit" class="input-group-text"><i class="fa fa-search" aria-hidden="true"></i></button>
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

		<?php if($place==''):?>
		<section class="domestic-sec">
			<div class="container">
				<div class="row">
					<div class="col-lg-10">
						<h3 class="side-title">Domestic : Limited period offer</h3>
					</div>
					<div class="col-lg-2 text-right eventbtn">
						<a href="<?= base_url();?>motoexprience/domestic">View All </a>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="owl-carousel owl-theme owl-loaded domestic-carousel">
							<div class="owl-stage-outer">
								<div class="owl-stage">
                <?php if($ridedomestic): foreach($ridedomestic as $dom):?>
					<div class="owl-item">
					<a href="<?= base_url('motoexprience/ridedetail/'.$dom->id);?>">
							<div class="col-content">
								<img src="<?= base_url('admin/assets/eventimages/'.$dom->images);?>" class="img-fluid" alt="alt_text" style="width:350px; height:220px">
								<div class="pb-content">
									<div class="pb-left">
										<h6 class="pb-title txt-h-up" >Package</h6>
										<h5 class="pb-place" title="<?= $dom->title?>">
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
</div>
</section>
<?php endif?>
<!-- section domestic end -->

<!-- section international start -->
<?php if($place==''):?>
<section class="international-sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-md-10 col-sm-12">
				<h3 class="side-title">International : Limited period offer</h3>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-12 text-right eventbtn">
				<a href="<?= base_url();?>motoexprience/international">View All </a>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="owl-carousel owl-theme owl-loaded international-carousel">
					<div class="owl-stage-outer">
						<div class="owl-stage">
                           <?php if($rideinternational): foreach($rideinternational as $int):?>
							<div class="owl-item">
							<a href="<?= base_url('motoexprience/ridedetail/'.$int->id);?>">
							<div class="col-content">
								<img src="<?= base_url('admin/assets/eventimages/'.$int->images);?>" class="img-fluid" alt="alt_text" style="width:350px; height:220px">
								<div class="pb-content">
									<div class="pb-left">
										<h6 class="pb-title txt-h-up">Package</h6>
										<h5 class="pb-place" title="<?= $int->title?>">
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
<?php endif?>
<?php if(isset($result)): if($result):?>
<!-- section searchexp start -->
<section class="searchexp-sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-10">
				<h3 class="side-title">Search result</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="owl-carousel owl-theme owl-loaded searchexp-carousel">
					<div class="owl-stage-outer">
						<div class="owl-stage">
						<?php foreach ($result as $res):?>
							<div class="owl-item">
						<a href="<?= base_url('motoexprience/ridedetail/'.$res->id);?>">
							<div class="col-content">
								<img src="<?= base_url('admin/assets/eventimages/'.$res->images);?>" class="img-fluid" alt="alt_text" style="width:350px; height:220px">
								<div class="pb-content">
									<div class="pb-left">
										<h6 class="pb-title txt-h-up">Package</h6>
										<h5 class="pb-place" title="<?= $res->title?>">
										<?php
                                                    if(strlen($res->title)>20)
                                                    {
                                                     echo  $stringCut = substr($res->title, 0, 20).' ...';
                                                    }
                                                    else{
                                                   echo  $stringCut = substr($res->title, 0, 20);
                                                    }
                                                    ?></h5>
									<!-- <p class="pb-icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
										<i class="fa fa-shopping-cart" aria-hidden="true"></i></p> -->
										<p class="pb-price"><span><?= number_format($res->price)?></span> / person</p>
									</div>
									<div class="pb-right">
										<p><span class="lbl"><i class="fa fa-map-marker" aria-hidden="true">&nbsp; </i> <?= $res->placename?></span></p>
										<a href="" class="btn">Get Quote</a>
									</div>
								</div>
							</div>
						</a>
					</div>
				
						<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</section>
<!-- section searchexp end -->

<?php endif?><?php endif?>

<?php include 'expfooter.php'; ?>
</div>

<?php include 'js.php'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
<script type="text/javascript" src="<?= base_url('assets/css/select2-3.5.2/select2.min.js') ?>"></script>
<script type="text/javascript">
	$('.search-input').select2();

</script>
</script>
<script>
  function getplace(val)
  {
    $.ajax({
	type: "POST",
	url: "<?= base_url('motoexprience/getplace')?>",
	data:'type='+val,
	success: function(data){
		$("#place").html(data);
	}
	}); 
  }
</script>
</body>
</html>
