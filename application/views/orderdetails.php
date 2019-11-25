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
	<?php $ci =& get_instance();?>
	 <div class="container-fluid products-body">
            <div class="row mt-50 mb-35 mr-2 ml-2">
                <aside class="col-md-3">
                    <?php include ('detail_sidebar.php');?>
                </aside>
                <main class="col-md-9">
                   <section class="frmsec">
                   		<div class="account-form">
                           <h5>Shipping Address</h5>
                           <div class="panel panel-default">
                            <div class="panel-heading">
							 
                            	<div class="row">
                            		<div class="col-md-8">
                            			<?php if($address): foreach($address as $add):?>
                            <span> <b>Name: </b><?= $add->name;?><br> <b>Mobile :</b> <?= $add->mobile?></span><br>
                            <span> <b>Address: </b> <?= $add->streetaddress;?>, <?= $add->streetaddress1;?>, <?= $add->city;?>- <?= $add->postcode;?></span>
                           <?php endforeach; endif;?>
                            		</div>
                            	

                            	
                            		<div class="col-md-4">

							<span >
							    <?php if($summery): foreach($summery as $sumr):?>
									 <b>Order date : </b><?= date("d M, Y", strtotime($sumr->created))?><br>
								 <b>Total  Item :</b> <?= $sumr->iteam?><br>  <b> Grand Total :</b> Rs.<?= $sumr->grand?>
									<?php endforeach; endif;?>
							   </span>
							</div>
				</div>
							
                              
						   </div>
                            <div class="panel-body">
							
                                <table>
								<?php if($orderlist): foreach($orderlist as $ds):?>
									<?php $result= $ci->findcartvalue($ds->productid,$ds->variationid);?>
								
                                       <?php if($result): foreach($result as $rs): ?>
                                       	<hr>
										<tr>
                                            <td class="column_product_img">
                                                <a href="#">
                                                    <img class="cart__image img-fluid" src="<?= base_url('admin/assets/productimage/'.$rs->photo)?>" width="100px">
                                                </a>
                                            </td>

                                            <td class="column_product_info">
                                                <p>
                                                    <a href="#" style="color:black"><?= $rs->product?></a>
                                                </p>

                                                <div class="cart_item__details">
                                                    <p class="c_item_price"><b>Rs. </b> 
                                                    	<span class="p-prc mr-2"><?= $ds->price?>,</span> <b>Quantity : </b> <span class="p-prc mr-2"><?= $ds->quantity?></span></p>

                                                    <?php  $attribute= $ci->findattributecart($rs->second);?>
                                                       <?php if($attribute): foreach($attribute as $att):?>
                                                        <?php if(strtolower( $att->attribute)!='color'):?>
                                                            <p class="c_item_size">
                                                            	<span class=""><b><?= $att->attribute?> :</b> <?= $att->value_name?></span></p>
                                                    <?php endif; endforeach; endif?>


                                                     <?php  $attribute= $ci->findattributecart($rs->first);?>
                                                       <?php if($attribute): foreach($attribute as $att):?>
                                                        <?php if(strtolower( $att->attribute)=='color'):?>
                                                                <div class="color-choose">
                                                                <input data-image="red" type="radio" value="red">
                                                                <label for="red"><b style="font-weight: 700"><?= $att->attribute?> :</b>
                                                                <span style="background-color:<?= $att->codes?>"> </span></label>
                                                                </div>
                                                        <?php endif; endforeach; endif?>
                                                </div>

                                            </td>

                                            <td class="column_total">
                                                <span class="money" data-currency-usd="$15.00"><b>Rs.<?php echo $ds->total ?></b></span>
                                            </td>

                                        </tr>
									 <?php endforeach; endif;?>
								<?php endforeach; endif;?>
                                </table>





                            </div>
                            </div>
							
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
					<img class="f-logo" src="<?= base_url('assets/images/motologo.png')?>">	
				
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
					
					<li><a href="">Helmets</a></li>
					<li><a href="">Riding Gear</a></li>
					<li><a href="">Luggage</a></li>
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
					<h6 class="txt-h-up">motostore social</h6>
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