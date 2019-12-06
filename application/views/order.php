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
                            <h5>Details</h5>
							<table class="table table-striped" id="myTable">
							<thead>
							        <tr>
							            <th>Order Id</th>
							            <th>Date</th>
							            <th>Status</th>
							            <th>Total(Rs)</th>
                                        <th>Item</th>
							            <th>Action</th>
							        </tr>
							    </thead>
							    <tbody>
								<?php $i=0; if($recentorder): foreach($recentorder as $order): $i++;?>
							        <tr>
							            <td>#<?= $order->orderid?></td>
							            <td><?= date("d/m/Y", strtotime($order->created))?></td>
							            <td>
										 <?php if($order->status=='0'){echo "Pending";}?>
										 <?php if($order->status=='1'){echo "Accepted";}?>
										 <?php if($order->status=='2'){echo "Shipped";}?>
										 <?php if($order->status=='3'){echo "Delivered";}?>
										 <?php if($order->status=='9'){echo "Order Cancelled";}?>
										</td>
							            <td><?= $order->grand?></td>
                                        <td><?= $order->iteam?></td>
							            <td>
										<?php $orderid= strtr(base64_encode($order->orderid), '+/', '-_');?>
										<a href="<?= base_url('order/orderdetails/'.$orderid)?>" class="btn btn-view"><i class="fa fa-eye" aria-hidden="true"></i></a>

							        	</td>
							        </tr>
                                   <?php endforeach; else: ?>
								   <tr><td colspan="6"><h4>No Data Found</h4></td></tr>
                                       
								   <?php endif; ?>
							    </tbody>
							</table>
                        </div>
                   </section>
                </main>
            </div>
        </div>

	<!-- details section end -->
	<?php include 'footer.php'; ?>

	</div>

	<?php include 'js.php'; ?>

	<script type="text/javascript">
		$(document).ready( function () {
    $('#myTable').DataTable();
} );
	</script>
</body>
</html>
