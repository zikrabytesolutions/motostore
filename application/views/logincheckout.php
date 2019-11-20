<!DOCTYPE html>
<html lang="en">

<head>
    <title>Moto store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
<?php $Ci = &get_instance(); ?>
    <div class="checkout">
    <?php include('header.php');?>

        <section class="checkout-body py-5">
            <div class="container">
            <?php echo form_open('payment/orderplace');?>
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="title-border clr-black">Select Shipping Address  </h5>
                    </div>

                    <div class="col-md-7">
                        <div class="row">
                        <?php $i=0; if($delivery): foreach($delivery as $del): $i++;?>
                          <div class="product-layout product-grid col-md-6 col-lg-6 mt-4">
                            <div class="p-item">
                               <h5 style="margin-bottom:-10px"><?= $del->name?></h5>
                                
                               <hr>
                               <p>Mobile : <?= $del->mobile?></p>
                               <p><?= $del->streetaddress?>, <?= $del->streetaddress1?>, <?= $del->city?>, <?= $del->postcode?></p>
                            </div>
                            </div>
                        <?php endforeach; else:?>
                              <a href="#">Add Address</a>
                            <?php endif?>
                        </div>
                    </div>
                    
                    <div class="col-md-5">
                        <section class="orderInfo">
                            <h5>Your Order</h5>
                            <table class="table orderDetails">
                                <thead>
                                    <tr>
                                        <th class="column_product">PRODUCT</th>
                                        <th class="column_subtotal">SUBTOTAL</th>
                                    </tr>
                                </thead>

                                <tbody>
                                <?php if($proinfo): foreach($proinfo as $ds): ?>

                                       <?php $result= $Ci->findcartvalue($ds->proid,$ds->variationid)?>
                                       <?php if($result): foreach($result as $rs): ?>
                                    <tr>
                                        <td>
                                            <span class="item"><?= $rs->product?>- (
                                                   <?php  $attribute= $Ci->findattributecart($rs->first);?>
                                                       <?php if($attribute): foreach($attribute as $att):?>
                                                            <span class="c_item_size"><b><?= $att->value_name?></b></span>
                                                    <?php  endforeach; endif;?>,
                                                    <?php  $attribute= $Ci->findattributecart($rs->second);?>
                                                       <?php if($attribute): foreach($attribute as $att):?>
                                                            <span class="c_item_size"><b><?= $att->value_name?></b></span>
                                                    <?php  endforeach; endif;?> ) x <?= $ds->qty?>
                                            </span>
                                        </td>

                                        <td>
                                            <span title="Subtotal" href="#"><?php echo $ds->subtotal; ?></span>
                                        </td>
                                    </tr>
                                       <?php endforeach; endif;?>
                                       <?php endforeach; endif;?>

                                </tbody>
                             <?php if($cartdata): foreach($cartdata as $crd):?>
                                <tfoot>
                                    <tr>
                                        <td>
                                            <span>Subtotal</span>
                                        </td>

                                        <td class="column_remove">
                                            <span  href="#">Rs. <?php echo $crd->grandtotal; ?></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>Shipping</span>
                                        </td>

                                        <td>
                                            <span title="Delete" href="#">Free</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>Total</span>
                                        </td>

                                        <td>
                                            <span title="Total" href="#">Rs. <?php echo $crd->grandtotal; ?></span>
                                        </td>
                                    </tr>
                                </tfoot>
                                <?php endforeach; endif;?>
                            </table>
	                        <div id="orderPayment">
	                            <label class="mt-2">
	                                <input type="radio" name="payType" value="ccard" class="mr-2">
	                                <div><i class="fa fa-gear"></i></div>CCAvenue
	                                <img src="https://www.ccavenue.com/images_shoppingcart/ccavenue_pay_options.gif" class="img-fluid mt-2">
	                                <small class="d-block">Pay securely by Credit or Debit card or internet banking through Secure Servers.</small>
	                            </label>
	                            <label class="mt-2">
	                                <input type="radio" name="payType" value="paytm" class="mr-2">
	                                <div><i class="fa fa-gear"></i></div>Paytm Gateway
	                                <img src="https://www.customelements.in/wp-content/plugins/paytm/images/logo.gif" class="img-fluid mt-2">
	                                <small class="d-block">Pay via Paytm Wallet – Credit/Debit card, Netbanking, EMI & UPI.</small>
	                            </label>
	                            <label class="mt-2">
	                                <input type="radio" name="payType" value="cod" class="mr-2">
	                                <div><i class="fa fa-gear"></i></div>Cash on Delivery
	                            </label>
                                <label class="mt-2">
                                    <input type="checkbox" name="tnc" value="tnc" class="mr-2">
                                    <div><i class="fa fa-check"></i></div> I have read and agree to the terms and conditions *
                                </label>
                                <button class="add-to-cart btn-default bg-red my-4" type="submit"><i class="icon-cart"></i>Proceed to pay</button>
                                <p>View Our <a href="">Privacy Policy</a></p>
	                        </div>
                        </section>
                    </div>
                </div>
                </form>
            </div>
        </section>

    </div>
    <?php include('footer.php');?>
