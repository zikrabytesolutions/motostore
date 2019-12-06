<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Moto store</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php include 'css.php'; ?>
	
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
                       
                           <div class="panel panel-default">
                            <div class="panel-heading">
							 
                            	<div class="row">
                            		<div class="col-md-8">
                                    <h5>Shipping Address</h5> 
                            			<?php if($address): foreach($address as $add):?>
                            <span> <b>Name : </b><?= $add->name;?><br> <b>Mobile :</b> <?= $add->mobile?></span><br>
                            <span> <b>Address : </b> <?= $add->streetaddress;?>, <?= $add->streetaddress1;?>, <?= $add->city;?>- <?= $add->postcode;?></span>
                           <?php endforeach; endif;?>
                            		</div>
                            	

                            	
                            		<div class="col-md-4">
                                    
							<span >
							    <?php if($summery): foreach($summery as $sumr):?>
                                    <?php $orderid= $sumr->orderid?>
                                     <?php if($sumr->status=='0'):?>
                                       
                                        <button class="btn btn-danger" data-toggle="modal" data-target="#cancel">Cancel order</button>
                                         <br>
                                     <?php endif;?>
                                     <?php if($sumr->status=='9'):?><p style="color:red"><b>Order Cancelled</b></p><?php endif;?>
                                        <?php if($sumr->status=='1'):?><p style="color:green"><b>Order Accepted</b></p><?php endif;?>
                                        <?php if($sumr->status=='2'):?><p style="color:green"><b>Order Shipped</b></p><?php endif;?>
                                        <?php if($sumr->status=='3'):?><p style="color:green"><b>Order Delivered</b></p>
                                        <br>
                                    <?php endif;?>

									 <b>Order date : </b><?= date("d M, Y", strtotime($sumr->created))?><br>
								 <b>Total  Item :</b> <?= $sumr->iteam?><br>  <b> Grand Total :</b> Rs.<?= $sumr->grand?>
									<?php endforeach; endif;?>
							   </span>
							</div>
				</div>
							 	<hr>
                              
						   </div>
                            <div class="panel-body">
							
                                <table>
								<?php if($orderlist): foreach($orderlist as $ds):?>
									<?php $result= $ci->findcartvalue($ds->productid,$ds->variationid);?>
								
                                       <?php if($result): foreach($result as $rs): ?>
                                      
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
<?php include 'footer.php'; ?>

<!-- footer end -->
	</div>

    <div class="modal fade" id="cancel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h4 class="modal-title" id="myModalLabel">Alert!</h4>
      </div>
      <div class="modal-body">
         <p class="alt-txt"> Are you sure you want to Cancel?</p>
      </div>
      <div class="modal-footer">
        <a href="" class="btn btn-danger" data-dismiss="modal">No</a>
        <a href="<?= base_url('order/cancel/'. $orderid)?>" class="btn btn-success" >Yes</a>
      </div>

    </div>
  </div>
</div>


<?php include 'js.php'; ?>
	<script type="text/javascript">
		$(document).ready( function () {
    $('#myTable').DataTable();
} );
	</script>
</body>
</html>