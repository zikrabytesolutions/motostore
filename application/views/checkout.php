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
    <link rel="stylesheet" href="<?= base_url('assets/fancybox/dist/jquery.fancybox.min.css') ?>" />
    <!--styles -->

</head>
<body>
    <?php $Ci = &get_instance(); ?>
    <div class="checkout">
        <?php include('header.php');?>
        <section class="checkout-body py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="title-border clr-black">Checkout details</h4>
                    </div>
                    <div class="col-md-7">
                    <div class="form-group">
                                    <label class="ck-lgn-icon">
                                    <i class="fa fa-gear"></i>
                                   Already have an account ? <a  data-toggle="modal" data-target="#myModal" class="ck-lgn">Login here</a>
                                </div>
                                <!-- <div id="addmsg">
                                    <div class="accountmsg">
                                        <h6 class="text-danger">Please fill the below details*</h6>
                                    </div>
                                </div> -->
                         <!-- <div id="addPw">

                        </div> -->
                    </div>
                </div>
<?php echo form_open('payment/inititate',['id' => 'frmbill']);?>
                <div class="row">
                    <div class="col-md-7">
                        <div class="login-form">
                            <h5>Billing details</h5>
                            <div class="form-row">
                                <div class="form-group col-sm-12">
                                    <label for="firstname">Full Name *</label>
                                    <input type="text" class="form-control" id="name" name="name" value="<?php echo set_value('name'); ?>" onkeypress="return ((event.charCode >=97 &amp;&amp; event.charCode <=122) || (event.charCode >=65 &amp;&amp; event.charCode <=90) || (event.charCode >=0 &amp;&amp; event.charCode <=32) )" required="">
                                    <small style="color:red"><?php echo form_error('name'); ?></small>
                                </div>
                            </div>
                            <p><b>Country *</b></p>
                            <p>India</p>
                            <div class="form-row align-items-end">
                                <div class="form-group col-sm-12">
                                    <div class="form-group">
                                        <label for="city">Town / City *</label>
                                        <input type="text" class="form-control" id="city" name="city" value="<?php echo set_value('city'); ?>" onkeypress="return ((event.charCode >=97 &amp;&amp; event.charCode <=122) || (event.charCode >=65 &amp;&amp; event.charCode <=90) || (event.charCode >=0 &amp;&amp; event.charCode <=32) )" required="">
                                        <small style="color:red"><?php echo form_error('city'); ?></small>
                                    </div>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="streetaddress">Street address *</label>
                                    <input type="text" class="form-control" id="streetaddress" name="streetaddress" placeholder="House number and street name" value="<?php echo set_value('streetaddress'); ?>" required>
                                     <small style="color:red"><?php echo form_error('streetaddress'); ?></small>
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="text" class="form-control" id="streetaddress1" name="streetaddress1" placeholder="Apartment, suite, unit etc. (optional)" value="<?php echo set_value('streetaddress1'); ?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                    <label for="postcode">Postcode / ZIP *</label>
                                    <input type="text" class="form-control" id="postcode" name="postcode" value="<?php echo set_value('postcode'); ?>" maxlength="6" onchange="try{setCustomValidity('')}catch(e){}" onkeypress="return ((event.charCode >=48 &amp;&amp; event.charCode <=57) || (event.charCode >=0 &amp;&amp; event.charCode <=31) )" required="">
                                    <small style="color:red"><?php echo form_error('postcode'); ?></small>
                            </div>
                            <div class="form-group">
                                    <label for="phone">Phone Number *</label>
                                    <input type="tel" class="form-control" id="phone" name="mobile" value="<?php echo set_value('mobile'); ?>" maxlength="10" pattern="[6789][0-9]{9}" oninvalid="setCustomValidity('Number should start from 9/8/7/6')" onchange="try{setCustomValidity('')}catch(e){}" onkeypress="return ((event.charCode >=48 &amp;&amp; event.charCode <=57) || (event.charCode >=0 &amp;&amp; event.charCode <=31) )" required="">
                                    <small style="color:red"><?php echo form_error('mobile'); ?></small>
                            </div>
                            <div class="form-group">
                                    <label for="email">Email address *</label>
                                    <input type="email" class="form-control" id="email" name="email" value="<?php echo set_value('email'); ?>" pattern="[a-zA-Z0-9._%+-]+@[a-z]+\.[a-z]{2,3}$" required="">
                                    <small style="color:red"><?php echo form_error('email'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="password">Password *</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="password" name="password" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="showPw"><i class="fa fa-eye" aria-hidden="true"></i></span>
                                        <span class="input-group-text" id="hidePw"><i class="fa fa-eye-slash" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                                <small style="color:red"><?php echo form_error('password'); ?></small>
                            </div>
                            <div class="form-group">

                                <label>
                                        <input type="checkbox" name="createAcc" value="createAcc" class="mr-2" required>
                                        <div><i class="fa fa-check"></i></div>Create an account?
                                    </label>
                            </div>
                            <div class="form-group">

                                <label>
                                    <input type="checkbox" name="shipDiffAdd" value="2" class="mr-2">
                                    <div><i class="fa fa-check"></i></div>Ship to a different address
                                </label>
                            </div>
                            <div id="shipToDiffAdd">
                                <div class="form-row">
                                    <div class="form-group col-sm-12">
                                        <label for="firstname">Full name *</label>
                                        <input type="text" class="form-control" id="firstname" name="dname">
                                    </div>
                                </div>
                                <p>Country *</p>
                                <p>India</p>
                                <div class="form-row align-items-end">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="city">Town / City *</label>
                                            <input type="text" class="form-control" id="city" placeholder="1234 Main St" name="dcity">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="city">Mobile *</label>
                                            <input type="text" class="form-control" id="dmobile" placeholder="Mobile" name="dmobile">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="streetaddress">Street address *</label>
                                        <input type="text" class="form-control" id="streetaddress" name="dstreetaddress" placeholder="House number and street name">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <input type="text" class="form-control" id="streetaddress" name="dstreetaddress1" placeholder="Apartment, suite, unit etc. (optional)">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="postcode">Postcode / ZIP *</label>
                                    <input type="text" class="form-control" id="postcode" placeholder="1234 Main St" name="dpostcode">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Order notes (optional)</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Notes about your order, e.g. special notes for delivery." name="dnotes" style="min-height: 100px;max-height: 100px;"></textarea>
                            </div>
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
                                    <?php $result= $Ci->findcartvalue($ds['proid'],$ds['id'])?>
                                    <?php if($result): foreach($result as $rs): ?>
                                        <tr>
                                            <td>
                                                <span class="item">
                                                    <?php
                                                    if(strlen($rs->product)>25)
                                                    {
                                                     echo  $stringCut = substr($rs->product, 0, 25).' ...';
                                                    }
                                                    else{
                                                   echo  $stringCut = substr($rs->product, 0, 25);
                                                    }
                                                    ?> - (
                                                    <?php  $attribute= $Ci->findattributecart($rs->first);?>
                                                    <?php if($attribute): foreach($attribute as $att):?>
                                                    <span class="c_item_size"><b><?= $att->value_name?></b></span>
                                                    <?php  endforeach; endif;?>,
                                                     <?php  $attribute= $Ci->findattributecart($rs->second);?>
                                                    <?php if($attribute): foreach($attribute as $att):?>
                                                    <span class="c_item_size"><b><?= $att->value_name?></b></span>
                                                    <?php  endforeach; endif;?> ) x <?= $ds['qty']?>
                                                </span>
                                            </td>
                                            <td>
                                            <span title="Subtotal" href="#">Rs. <?php echo $this->cart->format_number($ds['subtotal']); ?></span>
                                            </td>
                                        </tr>
                                    <?php endforeach; endif;?>
                                    <?php endforeach; endif;?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td>
                                            <span>Subtotal</span>
                                        </td>
                                        <td class="column_remove">
                                            <span title="Delete" href="#">Rs. <?php echo $this->cart->format_number($this->cart->total()); ?></span>
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
                                            <span title="Total" href="#">Rs. <?php echo $this->cart->format_number($this->cart->total()); ?></span>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                            <div id="orderPayment">
                                <label class="mt-2">
                                    <input type="radio" name="payType" value="ccard" class="mr-2" required>
                                    <div><i class="fa fa-gear"></i></div>CCAvenue
                                    <img src="https://www.ccavenue.com/images_shoppingcart/ccavenue_pay_options.gif" class="img-fluid mt-2">
                                    <small class="d-block">Pay securely by Credit or Debit card or internet banking through Secure Servers.</small>
                                </label>
                                <label class="mt-2">
                                    <input type="radio" name="payType" value="paytm" class="mr-2" required>
                                    <div><i class="fa fa-gear"></i></div>Paytm Gateway
                                    <img src="https://www.customelements.in/wp-content/plugins/paytm/images/logo.gif" class="img-fluid mt-2">
                                    <small class="d-block">Pay via Paytm Wallet – Credit/Debit card, Netbanking, EMI & UPI.</small>
                                </label>
                                <label class="mt-2">
                                   <input type="radio" name="payType" value="cod" class="mr-2" checked required>
                                   <div><i class="fa fa-gear"></i></div>Cash on Delivery
                                </label>
                                <label class="mt-2">
                                <input type="checkbox" name="tnc" value="tnc" class="mr-2" required>
                                <div><i class="fa fa-check"></i></div> I have read and agree to the terms and conditions *
                                </label>
                                <button class="add-to-cart btn-default bg-red my-4 btnsub" type="submit"><i class="icon-cart"></i>Proceed to pay</button>
                                <p>View Our <a href="">Privacy Policy</a></p>
                            </div>
                        </section>
                    </div>
                </div>
                            </form>
             </div>
        </section>
    </div>


    <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h4 class="modal-title" id="myModalLabel">Account Login</h4>
      </div>
      <div class="modal-body">
      <div class="login-form">
                            <?php echo form_open('checkoutlogin/checkauth',['id'=>'motostoreRegisterForm']);?>
                                <div class="form-group row">
                                    <label for="phone" class="col-sm-4 col-form-label">Email/Phone number</label>
                                    <div class="col-sm-8">
                                        <?php if($this->session->flashdata('msg_error')):?>
                                        <span class="text-danger"><?= $this->session->flashdata('msg_error')?></span>
                                        <?php endif;?>
                                        <input type="tel" class="form-control" id="phone" name="userid" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-sm-4 col-form-label">Password</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="password2" name="password" >
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="showPw2"><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                <span class="input-group-text" id="hidePw2"><i class="fa fa-eye-slash" aria-hidden="true"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-default d-block mx-auto">Login</button>
                                </form>
                                <hr/>
							<div class="text-center">
							New to Motostore?<a href="<?= base_url('signup')?>"> Create an account</a>
							</div>
                            </div>
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>


<?php include('footer.php');?>

<?php if($this->session->flashdata('msg_error')):?>
    <script>
    $(document).ready(function(){
        $("#myModal").modal('show');
    });
</script>
<?php endif;?>


<script type="text/javascript">
    $(document).on('click','.btnsub', function(e){
        e.preventDefault();
    
       var radioName="payType";
       var ckbxName="tnc";
       var createAcc="createAcc";


       if ($('input[name='+ createAcc +']:checked').length) {
            $( "#frmbill" ).submit();
      }
      else {

           alert('Please select create an account checkbox');
      }

      if ($('input[name='+ radioName +']:checked').length) {
            $( "#frmbill" ).submit();
      }
      else {
           
           alert('Please select Payment Type');
      }

       if ($('input[name='+ ckbxName +']:checked').length) {
            $( "#frmbill" ).submit();
      }
      else {

           alert('Agree terms and conditions');
      }
      
    });
</script>
