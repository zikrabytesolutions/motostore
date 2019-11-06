
<!DOCTYPE html>
<html lang="en">
<head>
<title>Moto store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/font-awesome.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/owl.theme.default.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/animate.css') ?>">

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/responsive.css') ?>">
	<!--fontello-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/slick/slick.css')?>"/>

<link rel="stylesheet" type="text/css" href="<?= base_url('assets/slick/slick-theme.css')?>"/>
    <link rel="stylesheet" href="<?= base_url('assets/svg/css/fontello.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/fancybox\dist\jquery.fancybox.min.css') ?>" />
    <!--styles -->

</head>
<body>
<?php $CI = &get_instance(); ?>
<div class="products-page">
    
     <!-- header start -->
     <header>
            <div class="container">
                <div class="row d-none d-md-block d-lg-block ">
                    <div class="mid-logo-block">
                        <!-- Brand -->
                        <a class="mid-logo" href="<?= base_url('') ?>"><img class="mx-auto d-block" src="<?= base_url('assets/images/page-logo.jpg') ?>"></a>
                    </div>

                </div>
            </div>
            <nav class="navbar navbar-expand-md">
                <div class="container">
                    <!-- Brand -->
                    <a class="navbar-brand d-block d-md-none d-lg-none" href="#"><img src="<?= base_url('assets/images/page-logo.jpg') ?>"></a>
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
        <br>
	<div class="container product-single">
		<section class="product-header">
            <?php if($productdetail): foreach($productdetail as $pd): ?>
			<div class="row">
				<div class="col-md-4">
					<div class="product-view">
						<div class="item-nav">
							<div class="easyzoom">
						    <a href="<?= base_url('admin/assets/productimage/' . $pd->photo) ?>">
						        <img src="<?= base_url('admin/assets/productimage/' . $pd->photo) ?>" alt="" draggable="false" />
						    </a>
						</div>
						<div class="easyzoom">
						    <a href="<?= base_url('admin/assets/productimage/' . $pd->photo) ?>">
						        <img src="<?= base_url('admin/assets/productimage/' . $pd->photo) ?>" alt="" draggable="false" />
						    </a>
						</div>
						<div class="easyzoom">
						    <a href="<?= base_url('admin/assets/productimage/' . $pd->photo) ?>">
						        <img src="<?= base_url('admin/assets/productimage/' . $pd->photo) ?>" alt="" draggable="false" />
						    </a>
						</div>
						<div class="easyzoom">
						    <a href="<?= base_url('admin/assets/productimage/' . $pd->photo) ?>">
						        <img src="<?= base_url('admin/assets/productimage/' . $pd->photo) ?>" alt="" draggable="false" />
						    </a>
						</div>
					</div>

<div class="items-nav">
  <div><img src="<?= base_url('admin/assets/productimage/' . $pd->photo) ?>" class="sim-thumb" alt="" draggable="false" width="100px"; height:100px></div>
  <div><img src="<?= base_url('admin/assets/productimage/' . $pd->photo) ?>" class="sim-thumb" alt="" draggable="false" width="100px"; height:100px></div>
  <div><img src="<?= base_url('admin/assets/productimage/' . $pd->photo) ?>" class="sim-thumb" alt="" draggable="false" width="100px"; height:100px></div>
  <div><img src="<?= base_url('admin/assets/productimage/' . $pd->photo) ?>" class="sim-thumb" alt="" draggable="false" width="100px"; height:100px></div>
</div>
			</div>					
				</div>
				<div class="col-md-5">
					<section class="product-details">
						<h3><?= $pd->product; ?></h3>
						
						<div class="product-price">
                        	<span class="slash">&#x20A8;: <?= $pd->offer_price?></span>  <span> <del> <?= $pd->regular_price?></del> </span>  
                    	</div>
                    	<div class="product-overview">
							<p>Availability: <b><span><?php if($pd->stockstatus=='0'){echo ' <span style="color:red"> Out Of Stock';}
							else{echo '<span style="color:green">In Stock';}?></span></b></p>
                    		<hr/>
                    		<p style="text-align:justify"></p>
                    		<ul class="product-overview-list">
                    			<li><i class="fa fa-check" aria-hidden="true"></i>Satisfaction 100% Guaranteed</li>
                    			<li><i class="fa fa-check" aria-hidden="true"></i>Free Shipping on Orders Above $100</li>
                    			<li><i class="fa fa-check" aria-hidden="true"></i>14 Day Easy Return</li>
                    		</ul>
							<hr/>
						
                    		
							<?php 
							 $prodetailsn=$CI->findprodetails($pd->id);
							 if($prodetailsn):
							 foreach($prodetailsn as $prodet):
								if(strtolower($prodet->attribute)=='color'):
							?>
							<div class="product-color">
                    			<p><?= $prodet->attribute?> : </p>
	    						<div class="color-choose">
								<?php
								 $proattributevalue= $CI->findattributevale($pd->id,$prodet->id);
								  if($proattributevalue):
									 foreach($proattributevalue as $pval):
								 ?>
									<div>
										<?php 
										  $pid= strtr(base64_encode($pd->id), '+/', '-_');
										  $pid=  strtr(base64_encode($pid), '+/', '-_');
										  $pid=  strtr(base64_encode($pid), '+/', '-_');
										  $first=  strtr(base64_encode($pval->first), '+/', '-_');
										  if($flag=='true')
										  {$second=$pval->second;}
										  elseif($rsecond!='') { $second=$rsecond;}
										  $second=  strtr(base64_encode($second), '+/', '-_');
										?>
										<a href="<?= base_url('product/details/'.$pid.'/'.$first.'/'.$second.'/'.$pd->product)?>">
								           <input data-image="red" type="radio" value="red" <?php if($rfirst==$pval->first){echo "checked";}?>>
									        <label for="red"><span style="background-color:<?= $pval->codes?>;"> </span></label>
										</a>
								  </div>
								  <?php  endforeach; endif;?>
					            </div>			
							</div>
								<?php endif; endforeach; endif;?>	


							<!-- --------------second------------>
					    	<?php 
							 $prodetails=$CI->findprodetailsnd($pd->id);
							 if($prodetails):
							 foreach($prodetails as $prdet):
								if(strtolower($prdet->attribute)=='size'):
						  ?>
							<div class="product-size">
							<p><?= $prdet->attribute?> : </p>
	    						<div class="size-choose flex-container">
								<?php
								  $proattributevalue= $CI->findattributevalend($pd->id,$prdet->id);
								  if($proattributevalue):
									 foreach($proattributevalue as $pvals):
								 ?>
					              <div>
								  <?php 
										  $pid= strtr(base64_encode($pd->id), '+/', '-_');
										  $pid=  strtr(base64_encode($pid), '+/', '-_');
										  $pid=  strtr(base64_encode($pid), '+/', '-_');
										  $second=  strtr(base64_encode($pvals->second), '+/', '-_');
										  if($flag=='true')
										  {$first=$pval->first;}
										  elseif($rfirst!='') { $first=$rfirst;}
										  $first=  strtr(base64_encode($first), '+/', '-_');
										 
										?>
										<a href="<?= base_url('product/details/'.$pid.'/'.$first.'/'.$second.'/'.$pd->product)?>">
					                       <input data-size="xs" type="radio" id="xs" name="size" value="xs" checked>
										  <p><?= $pvals->value_name?></p>
										</a>
								  </div>
								  <?php  endforeach; endif;?>
					            </div>	
							</div>

							<?php endif; endforeach; endif;?>	
							
				              <!-- <div class="product-qty">
				                <p>Quantity</p>
				                <div class="qty-choose flex-container">
				                <div class="product-quantity-subtract">
				                  <i class="fa fa-minus" aria-hidden="true"></i>
				                </div>
				                <div>
				                  <input type="text" id="product-quantity-input" placeholder="0" value="0" />
				                </div>
				                <div class="product-quantity-add">
				                  <i class="fa fa-plus" aria-hidden="true"></i>
				                </div>
				            </div>
				              </div> -->
							  <hr/>
							 
				              <div class="product-cta flex-container">
								  <?php 
								     $proid= strtr(base64_encode($pd->id), '+/', '-_');
									 $proid=  strtr(base64_encode($proid), '+/', '-_');
									 $pdetailsid=  strtr(base64_encode($pd->detailsid), '+/', '-_'); 
								  ?>
								  
                                
				              	<div>
								  <?php echo form_open('cart/cartlist')?>	  
								  <input type="hidden" name="proid" value="<?= $proid ?>">
								  <input type="hidden" name="prodetailsid" value="<?= $pdetailsid ?>">
								     <button type="submit" class="btn btn-danger">
									   <span  class="add-to-cart"><i class="icon-cart"></i>add to cart</span>
									 </button>
									 <php echo form_close()>
								</div>
								
								<div> <button class="btn btn-success">
									  <span  class="add-to-cart"><i class="icon-cart"></i>Buy Now</span>
									  </button>
								</div>
								<div href="#">										
									<span class="icon-like"></span>
								</div>				              	
								<div href="">										
									<span class="icon-share-bold"></span>
								</div>				              	
							  </div>
							
                    	</div>
					</section>
				</div>
				<div class="col-md-3">
					<div class="img-right">					
						<img src="<?=base_url('assets/images/item/img-right.png')?>">
					</div>
				</div>
			</div>
            <?php endforeach; endif;?>
		</section>
		<section class="product-desc mt-5">
			<h4 class="title-border">Description</h4>
			<p class="desc-content"><?= $pd->description?></p>
		</section>

		<section class="product-reviews mt-5">
			<h4 class="title-border">Reviews</h4>
			<div class="row">
				<div class="col-md-4"></div>
			</div>
			<div class="review-content">
				<div class="review-profile flex-container">
					<div class="review-profile-details">
						<span class="review-profile-name">anupam kumar</span><span class="review-rating">5<i class="fa fa-star reting-color"></i></span>
					</div>
					<div class="review-time">
						<span>4 months ago</span>
					</div>					
				</div>

				<div class="review-images">
					<img src="./images/item/item1.jpg">
					<img src="./images/item/item2.jpg">
					<img src="./images/item/item3.jpg">
					<img src="./images/item/item4.jpg">
				</div>
			<p class="review-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend, metus vulputate tincidunt bibendum, augue orci vehicula elit, ut vehicula risus orci et quam. Donec pellentesque est in aliquet laoreet. Maecenas lectus justo, venenatis ut nisl sed, ornare feugiat mauris. Quisque vel nulla fringilla, rutrum erat a, blandit orci.</p>			
			</div>

			<div class="review-content">
				<div class="review-profile flex-container">
					<div class="review-profile-details">
						<span class="review-profile-name">anupam kumar</span><span class="review-rating">5<i class="fa fa-star reting-color"></i></span>
					</div>
					<div class="review-time">
						<span>4 months ago</span>
					</div>					
				</div>

				<div class="review-images">
					<img src="./images/item/item1.jpg">
					<img src="./images/item/item2.jpg">
					<img src="./images/item/item3.jpg">
					<img src="./images/item/item4.jpg">
				</div>
			<p class="review-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend, metus vulputate tincidunt bibendum, augue orci vehicula elit, ut vehicula risus orci et quam. Donec pellentesque est in aliquet laoreet. Maecenas lectus justo, venenatis ut nisl sed, ornare feugiat mauris. Quisque vel nulla fringilla, rutrum erat a, blandit orci.</p>			
			</div>			
		</section>

		<section class="related-products mt-5">
			<div class="rel-prod-header">
				<h3 class="text-center">Related Products</h3>
				<p class="text-center"><span class="icon-motorcycle"></span></p>
			</div>
			<div class="rel-products-inner mt-4">
				<div class="row">
					
					<div class="col-md-10 offset-md-1">
						<div class="owl-carousel owl-theme owl-loaded related-products-carousel">
							<div class="owl-stage-outer">
								<div class="owl-stage">
									<div class="owl-item">
										<div class="p-item">
											<div class="item-title">
												<h6 class="txt-h-up">nexx.sx.100 superspeed helmet</h6>
											</div>
											<div class="item-img">
												<img src="images/p1.png">
											</div>
											<div class="item-dtl">
												<div class="p-left-txt">
													<p class="txt-p-up">color : red</p>
													<p class="txt-p-up">Size : red</p>
												</div>
												<div class="p-right-txt">
													<p class="txt-p-up">price: </p>
													<h4 class="p-prc">$ 1250</h4>
												</div>
												<div class="product-cta flex-container">
				              	<div><span class="add-to-cart"><i class="icon-cart"></i>add to cart</span></div>
								<div href="#">										
									<span class="icon-like"></span>
								</div>				              	
								<div href="">										
									<span class="icon-share-bold"></span>
								</div>				              	
				              </div>
											</div>
										</div>
									</div>
									<div class="owl-item">
										<div class="p-item">
											<div class="item-title">
												<h6 class="txt-h-up">nexx.sx.100 superspeed helmet</h6>
											</div>
											<div class="item-img">
												<img src="images/p2.png">
											</div>
											<div class="item-dtl">
												<div class="p-left-txt">
													<p class="txt-p-up">color : red</p>
													<p class="txt-p-up">Size : red</p>
												</div>
												<div class="p-right-txt">
													<p class="txt-p-up">price: </p>
													<h4 class="p-prc">$ 1250</h4>
												</div>
												<div class="product-cta flex-container">
				              	<div><span class="add-to-cart"><i class="icon-cart"></i>add to cart</span></div>
								<div href="#">										
									<span class="icon-like"></span>
								</div>				              	
								<div href="">										
									<span class="icon-share-bold"></span>
								</div>				              	
				              </div>
											</div>
										</div>
									</div>
									<div class="owl-item">
										<div class="p-item">
											<div class="item-title">
												<h6 class="txt-h-up">nexx.sx.100 superspeed helmet</h6>
											</div>
											<div class="item-img">
												<img src="images/p1.png">
											</div>
											<div class="item-dtl">
												<div class="p-left-txt">
													<p class="txt-p-up">color : red</p>
													<p class="txt-p-up">Size : red</p>
												</div>
												<div class="p-right-txt">
													<p class="txt-p-up">price: </p>
													<h4 class="p-prc">$ 1250</h4>
												</div>
												<div class="product-cta flex-container">
				              	<div><span class="add-to-cart"><i class="icon-cart"></i>add to cart</span></div>
								<div href="#">										
									<span class="icon-like"></span>
								</div>				              	
								<div href="">										
									<span class="icon-share-bold"></span>
								</div>				              	
				              </div>
											</div>
										</div>
									</div>
									<div class="owl-item">
										<div class="p-item">
											<div class="item-title">
												<h6 class="txt-h-up">nexx.sx.100 superspeed helmet</h6>
											</div>
											<div class="item-img">
												<img src="images/p1.png">
											</div>
											<div class="item-dtl">
												<div class="p-left-txt">
													<p class="txt-p-up">color : red</p>
													<p class="txt-p-up">Size : red</p>
												</div>
												<div class="p-right-txt">
													<p class="txt-p-up">price: </p>
													<h4 class="p-prc">$ 1250</h4>
												</div>
												<div class="product-cta flex-container">
				              	<div><span class="add-to-cart"><i class="icon-cart"></i>add to cart</span></div>
								<div href="#">										
									<span class="icon-like"></span>
								</div>				              	
								<div href="">										
									<span class="icon-share-bold"></span>
								</div>				              	
				              </div>
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

</div>	</div>

	<script type="text/javascript" src="<?= base_url('assets/js/jquery.js') ?>"></script>

    <script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/owl.carousel.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/custom.js') ?>"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- slick -->
    <script type="text/javascript" src="<?= base_url('assets/slick/slick.min.js') ?>"></script>
    <!-- slick -->
	<script type="text/javascript" src="<?= base_url('assets/zoom/dist/easyzoom.js') ?>"></script>	
	
</body>
</html>