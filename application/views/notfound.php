<!DOCTYPE html>
<html lang="en">
<head>
  <title>Not Found</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php include 'css.php'; ?>

<style type="text/css">
      #notfound {
    position: relative;
    height: 50vh;
    background: #030005;
}
#notfound .notfound {
    position: absolute;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
}
.notfound {
    max-width: 767px;
    width: 100%;
    line-height: 1.4;
    text-align: center;
}
.notfound .notfound-404 {
    position: relative;
    height: 180px;
    margin: 20px 0px;
    z-index: -1;
}
.notfound .notfound-404 h1 {
    font-family: 'Montserrat', sans-serif;
    position: absolute;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50% , -50%);
    -ms-transform: translate(-50% , -50%);
    transform: translate(-50% , -50%);
    font-size: 224px;
    font-weight: 900;
    margin-top: 0px;
    margin-bottom: 0px;
    margin-left: -12px;
    color: #030005;
    text-transform: uppercase;
    text-shadow: -1px -1px 0px #ffffff, 1px 1px 0px #da251d;
    letter-spacing: -20px;
}
.notfound .notfound-404 h2 {
    font-family: 'Montserrat', sans-serif;
    position: absolute;
    left: 0;
    right: 0;
    top: 110px;
    font-size: 42px;
    font-weight: 700;
    color: #fff;
    text-transform: uppercase;
    text-shadow: 0px 2px 0px #8400ff;
    letter-spacing: 13px;
    margin: 0;
}
.notfound a {
    font-family: 'Montserrat', sans-serif;
    display: inline-block;
    text-transform: uppercase;
    color: #ffffff;
    text-decoration: none;
    border: 2px solid #da251d;
    background: transparent;
    padding: 10px 40px;
    font-size: 14px;
    font-weight: 700;
    -webkit-transition: 0.2s all;
    transition: 0.2s all;
}
@media (max-width: 999px){
  .notfound .notfound-404 h1 {
     font-size: 150px;
  }
  .notfound .notfound-404 h2 {
     font-size: 24px;
    letter-spacing: 4px;
  }
    #notfound {
    position: relative;
    height: 50vh;
  }
}
</style>

</head>

<body>
  <!-- header start-->
  <header>
    <div class="mid-logo-block">
      <a class="mid-logo" href="<?= base_url('')?>"><img class="mx-auto d-block" src="<?= base_url('assets/images/logo.png')?>"></a>  
    </div>
  </header>
  <!-- header end -->
<div id="notfound">
    <div class="notfound">
      <div class="notfound-404">
        <h1>404</h1>
        <h2>Page not found</h2>
      </div>
      <a href="<?= base_url();?>">Go to main page</a>
    </div>
  </div>
 <!-- footer start -->
<section class="footer-sec">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="f-block">
          <img class="f-logo" src="<?= base_url('assets/images/logo.png')?>">
        <p>
          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        </p>
        </div>

      </div>
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="f-block">
          <h6 class="txt-h-up">services</h6>
        
        <ul class="privacy-block">
          
          <li><a href="">Helmets</a></li>
          <li><a href="">Riding Gear</a></li>
          <li><a href="">Luggage</a></li>
        </ul>
        </div>

      </div>
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="f-block">
          <h6 class="txt-h-up">Contact</h6>
        <ul class="contact-block">
          <li><a href="">9, Lake Square, Kensington Road, Ulsoor, Bengaluru 560042</a></li>
          <li>phone : +91 94-4973-4040</li>
          <li>Email :<a href="mailto:info@motostore.com"> info@motostore.com</a></li>
        </ul>
        </div>

      </div>
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="f-block">
          <h6 class="txt-h-up">motostore social</h6>
          <ul class="social-block">
            <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <li><a href=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
          </ul>
        </div>

      </div>
      
    </div>
  </div>
</section>
<section class="cr-sec">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="cpr-text">
          <h6>2019 &copy;Copyright Moto Store.</h6>
          <p>Powered by <a href="">zikrabye Solutions</a></p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- footer end -->



</div>
<script type="text/javascript" src="<?= base_url('assets/js/jquery.js') ?>"></script>

<?php include 'js.php'; ?>

</body>
</html>
