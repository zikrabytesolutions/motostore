<!DOCTYPE html>
<html lang="en">

<head>
  <title>Moto store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php include 'css.php' ;?>
  <!--fontello-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/slick/slick.css')?>"/>

  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/slick/slick-theme.css')?>"/>
 
  <!--styles -->

</head>

<body>
  <?php $Ci = &get_instance(); ?>
  <div class="checkout">
    <?php include('header.php');?>

    <section class="checkout-body py-5">
      <div class="container">
        <?php echo form_open('payment/orderplace',['id' => 'frmbill']);?>

                <div class="row">
                    <div class="col-md-7">
                   <?php if($billing): foreach($billing as $bill):?>

                        <h5 class="title-border clr-black" style="margin-bottom:15px">Billing Address</h5>
                        <div class="p-item">
                             <h5 style="text-align:center"> <?php
                                                    if(strlen($bill->name)>18)
                                                    {
                                                     echo  $stringCut = substr($bill->name, 0, 18).' ...';
                                                    }
                                                    else{
                                                   echo  $stringCut = substr($bill->name, 0, 18);
                                                    }
                                                    ?> </h5>
                                                     <hr>
                                                     <?php $mobiles= $bill->mobile?>
                        <?php if($bill->streetaddress!='' && $bill->streetaddress1!=''):?>
                             <p>Mobile : <?= $bill->mobile?><br> <?= $bill->streetaddress?>, <?= $bill->streetaddress1?>, <?= $bill->city?>, <?= $bill->postcode?></p>
                             <?php else:?>
                            <a  class="btn btn-primary" data-toggle="modal" data-target="#myModalbill" style="color:white">Update Billing Adress</a>
                     <?php endif?>
                        </div>

                   <?php endforeach; endif;?>

                      <br>

                    <h5 class="title-border clr-black">Select Shipping Address  </h5>
                    <a  class="btn btn-default bg-black" data-toggle="modal" data-target="#myModal" style="color:white">Add New Shipping Address</a>
                        <div class="row">


                        <?php $i=0; if($delivery): foreach($delivery as $del): $i++;?>
                          <div class="product-layout product-grid col-md-6 col-lg-6 mt-4">
                            <div class="p-item">
                               <h5 style="margin-bottom:-10px">
                                <span data-toggle="tooltip" title="<?= $del->name; ?>">
                                <?php
                                                    if(strlen($del->name)>8)
                                                    {
                                                     echo  $stringCut = substr($del->name, 0, 8).' ...';
                                                    }
                                                    else{
                                                   echo  $stringCut = substr($del->name, 0, 8);
                                                    }
                                                    ?>
                                                  </span>
                               <label class="mt-2" style="float:right">
	                                <input type="radio" name="daddress" value="<?= $del->id?>" class="mr-2" checked>
	                                <div><i class="fa fa-gear"></i></div>
	                            </label>
                               </h5>

                               <hr>
                               <p>Mobile : <?= $del->mobile?></p>
                               <p>Street : <span data-toggle="tooltip" title="<?= $del->streetaddress?>">
                                <?php
                                 if(strlen($del->streetaddress)>25)
                                 {
                                   echo  $stringCut = substr($del->streetaddress, 0, 25).' ...';
                                 }
                                 else{
                                   echo  $stringCut = substr($del->streetaddress, 0, 25);
                                 }
                                 ?></span></p>
                                <p>House : <span data-toggle="tooltip" title="<?= $del->streetaddress1 ;?>">
                                  <?php
                                 if(strlen($del->streetaddress1)>25)
                                 {
                                   echo  $stringCut = substr($del->streetaddress1, 0, 25).' ...';
                                 }
                                 else{
                                   echo  $stringCut = substr($del->streetaddress1, 0, 25);
                                 }
                                 ?>

                                </span></p>
                                <p>City : <?= $del->city?></p>
                                <p>Pin Code : <?= $del->postcode?></p>
                            </div>
                            </div>

                        <?php endforeach; else:?>
                             <!-- Button trigger modal -->




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
                                            <span class="item"><?php
                                                    if(strlen($rs->product)>23)
                                                    {
                                                     echo  $stringCut = substr($rs->product, 0, 23).' ...';
                                                    }
                                                    else{
                                                   echo  $stringCut = substr($rs->product, 0, 23);
                                                    }
                                                    ?>- (
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
                                            <span title="Subtotal" href="#">Rs. <?php echo $ds->subtotal; ?></span>
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
	                                <input type="radio" name="payType" value="1" class="mr-2"  <?php if(form_error('payType')){echo "checked";}?>">
	                                <div><i class="fa fa-gear"></i></div>CCAvenue
	                                <img src="https://www.ccavenue.com/images_shoppingcart/ccavenue_pay_options.gif" class="img-fluid mt-2">
	                                <small class="d-block">Pay securely by Credit or Debit card or internet banking through Secure Servers.</small>
	                            </label>
	                            <label class="mt-2">
	                                <input type="radio" name="payType" value="1" class="mr-2"  <?php if(form_error('payType')){echo "checked";}?>">
	                                <div><i class="fa fa-gear"></i></div>Paytm Gateway
	                                <img src="https://www.customelements.in/wp-content/plugins/paytm/images/logo.gif" class="img-fluid mt-2">
	                                <small class="d-block">Pay via Paytm Wallet – Credit/Debit card, Netbanking, EMI & UPI.</small>
	                            </label>
	                            <label class="mt-2">
	                                <input type="radio" name="payType" value="1" class="mr-2" <input type="radio" name="payType" value="1" class="mr-2" <?php if(set_value('payType')){echo "checked";}else{echo "";} ?>>
	                                <div><i class="fa fa-gear"></i></div>Cash on Delivery
	                            </label>
                                <small style="color:red"><?php echo form_error('payType'); ?></small>
                                <label class="mt-2">
                                    <input type="checkbox" name="tnc" value="1" class="mr-2"  <?php if(set_value('tnc')){echo "checked";}else{echo "";} ?>>
                                    <div><i class="fa fa-check"></i></div> I have read and agree to the terms and conditions *
                                </label>
                                <input type="checkbox" name="tnc" value="1" class="mr-2" <?php if(set_value('tnc')){echo "checked";}else{echo "";} ?> >
                                <small style="color:red"><?php echo form_error('tnc'); ?></small>
                                <?php if($delivery):?>
                                <button class="add-to-cart btn-default bg-red my-4 btnsub" type="submit"><i class="icon-cart"></i>Proceed to pay</button>
                                <?php else: ?>
                                    <a class="add-to-cart btn-default bg-red my-4" data-toggle="modal" data-target="#myModalblank" style="color:white"><i class="icon-cart"></i> Proceed to pay</a>
                                <?php endif?>
                                <p>View Our <a href="">Privacy Policy</a></p>
	                        </div>
                        </section>
                    </div>
                </div>
                </form>
            </div>

         

          <br>

</div>
</form>
</div>
</section>

</div>




<!-- Modal -->
<div class="modal fade" id="myModalbill" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h4 class="modal-title" id="myModalLabel">Billing Address</h4>
      </div>
      <?php echo form_open('account/updateaccountadd')?>
      <div class="modal-body">


        <p>Country *</p>
        <p>India</p>
        <div class="form-row align-items-end">
         <div class="col-md-6">
          <div class="form-group">
            <label for="city">Town / City *</label>
            <input type="text" class="form-control" id="city" placeholder="City" name="city">
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="city">Mobile *</label>
            <input type="text" value="<?= $mobiles?>" class="form-control" id="dmobile" placeholder="Mobile" name="mobile" maxlength="10" pattern="[6789][0-9]{9}" oninvalid="setCustomValidity('Number should start from 9/8/7/6')" onchange="try{setCustomValidity('')}catch(e){}" onkeypress="return ((event.charCode >=48 &amp;&amp; event.charCode <=57) || (event.charCode >=0 &amp;&amp; event.charCode <=31) )" required="">
          </div>
        </div>

        <div class="form-group col-sm-6">
          <label for="streetaddress">Street address *</label>
          <input type="text" class="form-control" id="streetaddress" name="streetaddress" placeholder="Street address" required>
        </div>
        <div class="form-group col-sm-6">
          <input type="text" class="form-control" id="streetaddress" name="streetaddress1" placeholder="Apartment, suite" required>
        </div>
      </div>
      <div class="form-group">
        <label for="postcode">Postcode / ZIP *</label>
        <input type="text" class="form-control" id="postcode" placeholder="1234 Main St" name="postcode" maxlength="6" onchange="try{setCustomValidity('')}catch(e){}" onkeypress="return ((event.charCode >=48 &amp;&amp; event.charCode <=57) || (event.charCode >=0 &amp;&amp; event.charCode <=31) )" required="">
      </div>

    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary">Save changes</button>
    </div>
  </form>
</div>
</div>
</div>



<!-- Modal -->
<div class="modal fade" id="myModalblank" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h4 class="modal-title" id="myModalLabel">Alert!</h4>
      </div>
      <?php echo form_open('account/updateaccountadd')?>
      <div class="modal-body">
        <h6>Please add shipping or billing address</h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </form>
  </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h4 class="modal-title" id="myModalLabel">Shipping Address</h4>
      </div>
      <?php echo form_open('checkout/addshippingaddress');?>
      <div class="modal-body">

        <div class="form-row">
          <div class="form-group col-sm-12">
            <label for="firstname">Full name *</label>
            <input type="text" class="form-control" id="firstname" name="name" onkeypress="return ((event.charCode >=97 &amp;&amp; event.charCode <=122) || (event.charCode >=65 &amp;&amp; event.charCode <=90) || (event.charCode >=0 &amp;&amp; event.charCode <=32) )" required>
          </div>
        </div>
        <p>Country *</p>
        <p>India</p>
        <div class="form-row align-items-end">
         <div class="col-md-6">
          <div class="form-group">
            <label for="city">Town / City *</label>
            <input type="text" class="form-control" id="city" placeholder="1234 Main St" name="city">
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="city">Mobile *</label>
            <input type="text" class="form-control" id="dmobile" placeholder="Mobile" name="mobile" maxlength="10" pattern="[6789][0-9]{9}" oninvalid="setCustomValidity('Number should start from 9/8/7/6')" onchange="try{setCustomValidity('')}catch(e){}" onkeypress="return ((event.charCode >=48 &amp;&amp; event.charCode <=57) || (event.charCode >=0 &amp;&amp; event.charCode <=31) )" required="">
          </div>
        </div>

        <div class="form-group col-sm-6">
          <label for="streetaddress">Street address *</label>
          <input type="text" class="form-control" id="streetaddress" name="streetaddress" placeholder="House number and street name" required>
        </div>
        <div class="form-group col-sm-6">
          <input type="text" class="form-control" id="streetaddress" name="streetaddress1" placeholder="Apartment, suite, unit etc. (optional)" required>
        </div>
      </div>
      <div class="form-group">
        <label for="postcode">Postcode / ZIP *</label>
        <input type="text" class="form-control" id="postcode" placeholder="1234 Main St" name="postcode" maxlength="6" onchange="try{setCustomValidity('')}catch(e){}" onkeypress="return ((event.charCode >=48 &amp;&amp; event.charCode <=57) || (event.charCode >=0 &amp;&amp; event.charCode <=31) )" required="">
      </div>

    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-success">Save changes</button>
    </div>
  </form>
</div>
</div>

<?php include('footer.php');?>
</div>

<?php include('js.php');?>
</body>
</html>