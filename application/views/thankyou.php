<!DOCTYPE html>
<html lang="en">

<head>
    <title>Moto store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <!--styles -->
<?php include 'css.php'; ?>


</head>

<body>
    <div class="thankyou-page">

        <!-- header start -->
        <?php include('header.php');?>


    <section class="ty-sec">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <div class="tymsg">
              <h1>Thank you !</h1>
              <p> Your order has been received.</p>
            </div>
          </div>
        </div>
        <?php date_default_timezone_set('Asia/Kolkata'); if($order): foreach($order as $ord):?>
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <div class="ty-dtl">
              <ul class="">
                <li><b>Order number: </b> <?= $ord->orderdid?></li>
                <li><b>Date: </b> <?=date("d-m-Y", strtotime( $ord->created))?></li>
                <li><b>Total: </b> Rs. <?= $ord->grand?></li>
                <li><b>Payment method: </b> Cash on Delivery</li>
              </ul>
                <div class="tybtn">
                <a href="<?= base_url('order'); ?>" class="btn btn-success btn-default bg-red">
                <span class="">View Details</span>
              </a>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; endif;?>
      </div>
    </section>

   
  <?php include "footer.php"; ?>
   </div>
  <?php include "js.php"; ?>
</body>
</html>
