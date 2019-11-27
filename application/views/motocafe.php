<!DOCTYPE html>
<html lang="en">
<head>
    <title>Moto store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include 'css.php'; ?>

       <link rel="stylesheet" href="<?= base_url('assets/css/select2-3.5.2/select2.css') ?>" />
        <link rel="stylesheet" href="<?= base_url('assets/css/select2-bootstrap/select2-bootstrap.css') ?>" />

</head>

<body>
  <div class="cafe-page">
    <!-- header start -->
      <header>
        <div class="cafe-logo">
         <a class="cafemid-logo" href="<?= base_url('')?>"><img class="mx-auto d-block" src="<?= base_url('assets/images/motocafe.png'); ?>" height="64px" width="164px"></a> 
        </div>
      </header>
      <!-- header end -->
      <!-- section bg start -->
    <section class="cafebg">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-lg-6 col-sm-12">
            <div class="event-imgbg">
              <img src="<?= base_url('assets/images/m1.png')?>" alt="" class="img-fluid">
              <div class="event-txt">
                 <a href="#eventblog-sec"><h2>Events</h2></a>
              </div>
            </div>
            
          </div>
          <div class="col-md-6 col-lg-6 col-sm-12">
            <div class="cafe-imgbg">
              <img src="<?= base_url('assets/images/m2.png')?>" alt="" class="img-fluid">
              <div class="cafe-txt">
              <a href="#eventgal-sec"><h2>Cafe</h2></a>
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- section bg end -->


<!-- section eventblog start -->
  
<section class="eventblog-sec" id="eventblog-sec">
  <div class="container">
  <?php echo form_open('Motocafe/post')?>
    <div class="row">
      <div class="col-8">
        <h3 class="side-title">Events</h3>
      </div>
       <div class="col-3">
      <select class="form-control selectplace" name="place" id="place">
      <option value="">Select Place</option>
      <?php  if($select): foreach($select as $sel):?>
        <option value="<?= $sel->place?>" <?php if($selected==$sel->place){echo "selected";}?>><?= $sel->place?></option>
        <?php endforeach; endif;?>
      </select>
    </div>
   <div class="col-1">
      <button class="btn btn-danger" type="submit">Go</button>
    </div>
    </div>
</form>
    <div class="row">
      <div class="col-12">
        <div class="owl-carousel owl-theme owl-loaded eventblog-carousel">
          <div class="owl-stage-outer">
            <div class="owl-stage">
        <?php date_default_timezone_set('Asia/Kolkata'); if($event): foreach($event as $ev):?>
              <div class="owl-item">
                <div class="col-content">
                  <div class="event-place">
                    <p><i class="fa fa-map-marker" aria-hidden="true">&nbsp; </i><?= $ev->place?></p>
                  </div>
                  <img src="<?= base_url('admin/assets/eventimages/'.$ev->images)?>" class="img-fluid" alt="alt_text">
                    <div class="event-des">
                      <p class="event-date"><?= date("d M,Y,h:i A", strtotime($ev->eventdate))?> </p>
                      <h5 class="event-des-title" data-toggle="tooltip" title="<?php echo $ev->name ;?>">
                      <?php
                                                    if(strlen($ev->name)>20)
                                                    {
                                                     echo  $stringCut = substr($ev->name, 0, 20).' ...';
                                                    }
                                                    else{
                                                   echo  $stringCut = substr($ev->name, 0, 20);
                                                    }
                                                    ?>
                     
                      </h5>
                      <p class="event-des-txt">
                      <?php
                                                    if(strlen($ev->description)>180)
                                                    {
                                                     echo  $stringCut = substr($ev->description, 0, 180).' ...';
                                                    }
                                                    else{
                                                   echo  $stringCut = substr($ev->description, 0, 180);
                                                    }
                                                    ?>
                       </p>
                     <!-- <div class="text-right eventbtn">
                        <a href="">Read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                      </div> -->
                    </div>
                </div>
              </div>
        <?php endforeach; endif;?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- section eventblog end -->



<!-- section eventgal start -->
  
<section class="eventgal-sec" id="eventgal-sec">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h3 class="side-title">Explore Cafe</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="owl-carousel owl-theme owl-loaded eventgal-carousel">
          <div class="owl-stage-outer">
            <div class="owl-stage">
            <?php if($gallery): foreach($gallery as $gl):?>
              <div class="owl-item">
                <img src="<?= base_url('admin/assets/eventimages/'.$gl->images)?>" class="img-fluid" alt="alt_text">
                <h5><?= $gl->title?></h5>
              </div>
              <?php endforeach; endif;?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- section eventgal end -->


    <!-- footer start -->
   <?php include 'footer.php'; ?>
    <!-- footer end -->


</div>
<script type="text/javascript" src="<?= base_url('assets/js/jquery.js') ?>"></script>

 <?php include 'js.php'; ?>
  <script type="text/javascript" src="<?= base_url('assets/css/select2-3.5.2/select2.min.js') ?>"></script>
  <script type="text/javascript">
    $('.selectplace').select2();
  </script>
</body>
</html> 