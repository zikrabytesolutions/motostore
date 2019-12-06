<!DOCTYPE html>
<html lang="en">
<head>
    <title>Moto Experience</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include 'css.php'; ?>


</head>

<body>
  <div class="cafe-page">
    <!-- header start -->
     <?php include 'cafeheader.php'; ?>
      <!-- header end -->
  <!-- banner section start -->
<section class="banner-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3 text-center">
        <div class="banner-title">
          <h1>Showcase & Discover Event Moments</h1>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- banner section end  -->
<section class="ride-detail">
  <div class="container">
  <?php if($details): foreach($details as $del):?>
    <div class="row"> 
      <div class="col-md-6">
        <div class="ride-img">
        <img src="<?= base_url('admin/assets/eventimages/'.$del->images);?>" class="img-fluid" >
        </div>
      </div>
      <div class="col-md-6">
        <div class="ride-content">
          <h4>
                  <?php
                   if(strlen($del->name)>30)
                       {
                          echo  $stringCut = substr($del->name, 0, 30).' ...';
                        }
                        else
                        {
                           echo  $stringCut = substr($del->name, 0, 30);
                        }
                  ?>
          </h4>
          <div class="row ride-list">
           
            <div class="col-md-4 col-sm-6">
             <i class="fa fa-location-arrow" aria-hidden="true"></i> <?= $del->place?>
            </div>
            <div class="col-md-8 col-sm-6">
              <i class="fa fa-clock-o" aria-hidden="true"></i> <?= date("d M, Y, h:i A", strtotime($del->eventdate))?>
            </div>
          </div>
          <div class="ride-des">
            <?= $del->description?>
          </div>
          <a href="<?= $del->linkurl?>" class="btn btn-success" target="_blank">Register</a>
        </div>
      </div>
    </div>
  <?php endforeach; endif;?>
  </div>
</section>

    <!-- footer start -->
   <?php include 'cafefooter.php'; ?>
    <!-- footer end -->


</div>
<script type="text/javascript" src="<?= base_url('assets/js/jquery.js') ?>"></script>

 <?php include 'js.php'; ?>

 
</body>
</html>
