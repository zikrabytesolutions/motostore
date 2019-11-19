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

	<div class="detail">
		<!-- header start -->
		<?php include('header.php');?>
		<!-- header end -->

	<!-- details section start -->

	 <div class="container-fluid products-body">
            <div class="row mt-50 mb-35 mr-2 ml-2">
                <aside class="col-md-3">
                    <?php include "detail_sidebar.php";?>
                </aside>
                <main class="col-md-9">
                   <section class="frmsec">
                   		<div class="account-form">
                            <h5>Details</h5>
                            <table id="myTable" class="display">
							    <thead>
							        <tr>
							            <th>Order</th>
							            <th>Date</th>
							            <th>Status</th>
							            <th>Total</th>
                                        <th>iteam</th>
							            <th>Action</th>
							        </tr>
							    </thead>
							    <tbody>
							       <?php if($recentorder): foreach($recentorder as $order):?>
							        <tr>
							            <td>#<?= $order->orderdid?></td>
							            <td><?= date("d/m/Y", strtotime($order->created))?></td>
							            <td>Pending</td>
							            <td><?= $order->grand?></td>
                                        <td><?= $order->iteam?></td>
							            <td>
							            	<a class="btn-default bg-red tblbtn" href="#">View</a>
							            </td>
							        </tr>
                                   <?php endforeach; endif?>
							    </tbody>
							</table>
                        </div>
                   </section>
                </main>
            </div>
        </div>

	<!-- details section end -->




<?php include('footer.php');?>

<script type="text/javascript">
		$(document).ready( function () {
    $('#myTable').DataTable();
} );
	</script>
