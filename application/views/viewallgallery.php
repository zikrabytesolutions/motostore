<!DOCTYPE html>
<html lang="en">
<head>
    <title>Moto Cafe</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include 'css.php'; ?>

       <link rel="stylesheet" href="<?= base_url('assets/css/select2-3.5.2/select2.css') ?>" />
        <link rel="stylesheet" href="<?= base_url('assets/css/select2-bootstrap/select2-bootstrap.css') ?>" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css"/>

</head>

<body>
  <div class="cafe-page">
    <!-- header start -->
      <?php include 'cafeheader.php'; ?>
      <!-- header end -->
  <!-- banner section start -->
<section class="banner-sec cafe-banner">
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3 text-center">
        <div class="banner-title">
          <h1>Showcase & Discover Moto Rides Moments</h1>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- banner section end  -->
<!-- section eventgal start -->

<section class="eventgal-sec" id="eventgal-sec">
  <div class="container">
    <div class="row">
      <div class="col-lg-10">
        <h3 class="side-title">Explore Cafe</h3>
      </div>
    </div>
    <div class="row">
     <?php if($allimages): foreach($allimages as $img):?>
      <div class="col-lg-4">
        <div class="eventgal mt-25">
                <a href="<?= base_url('admin/assets/eventimages/'.$img->images); ?>" data-toggle="lightbox" data-gallery="example-gallery">
                <img src="<?= base_url('admin/assets/eventimages/'.$img->images); ?>" class="img-fluid" alt="alt_text">
                <!-- <h5>Title</h5> -->
                </a>
        </div>
      </div>
     <?php endforeach; endif;?>
     
    
    </div>
  </div>
</section>
<!-- section eventgal end -->

    <!-- footer start -->
   <?php include 'cafefooter.php'; ?>
    <!-- footer end -->


</div>
<script type="text/javascript" src="<?= base_url('assets/js/jquery.js') ?>"></script>

 <?php include 'js.php'; ?>
  <script type="text/javascript" src="<?= base_url('assets/css/select2-3.5.2/select2.min.js') ?>"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
  <script type="text/javascript">
    $('.selectplace').select2();
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
  </script>
</body>
</html>
