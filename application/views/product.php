<!DOCTYPE html>
<html lang="en">
<head>
    <title>Moto store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include 'css.php'; ?>

     <!--fontello-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/slick/slick.css')?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/slick/slick-theme.css')?>" />

</head>

<body>
    <?php $CI = &get_instance(); ?>
  <div class="products-page">
    <!-- header start -->
    <?php include('header.php');?>
    <div class="container-fluid products-body">
      <div class="row mt-50 mb-35 mr-2 ml-2">
        <aside class="col-md-2 filterside">
          <section class="products-sidebar">
            <?php echo form_open('product/listfilter')?>
            <div class="shop-by-filter">
              <h5 class="title-border">Shop By  
                <span style="float:right;font-size:15px;color:red">
                  <a href="<?= base_url('product/lists/'.$this->uri->segment(3).'/'.$this->uri->segment(4))?>" class="rst-link"> Reset Filter</a>
                </span>
              </h5>
              <label for="amount">Price range:</label>
              <input type="hidden" value="<?= $this->uri->segment(3);?>" name="catid">
              <input type="hidden" value="page" name="side">
              <div class="row">
                <div class="col-md-6">
                  <input type="text" id="min" name="min" readonly style="border:0; color:#000; font-weight:bold;">
                </div>
                <div class="col-md-6">
                  <input type="text" id="max" name="max" readonly style="border:0; color:#000; font-weight:bold;text-align: right;">
                </div>    
              </div>
              <div id="slider-range"></div>
              <div class="filter-manufacturer">
                <p class="filter-title">Subcategory</p>
                  <div class="manufacturer-list">
                    <div class="manufacturer-check">
                    <?php if($subcategory): foreach($subcategory as $brd):?>
                    <?php $stripped = str_replace(' ', '', $brd->sub_category_name);?>
                    <label>
                      <input type="checkbox" name="<?=$stripped?>" value="<?= $brd->id?>"
                      <?php if($sbrand){
                        foreach ($sbrand as $slt) 
                        {
                        if($brd->id==$slt){echo "checked";}
                        }
                      }
                      ?>>
                      <div><i class="fa fa-check"></i></div>
                    <?= $brd->sub_category_name?>
                    </label>
                    <?php endforeach; endif?>
                    </div>
                  </div>
              </div>
              <div class="filter-manufacturer">
                <p class="filter-title">Size</p>
                <div class="manufacturer-list">
                  <div class="manufacturer-check">
                  <?php
                  $attibutesize = $CI->allsizeattribute();
                  if ($attibutesize) : foreach ($attibutesize as $attz) :
                  ?>
                  <?php if ($attz->attribute == 'Size') : ?>
                  <?php $attibutesizev = $CI->allsizeattributevalue($attz->id);?>
                  <?php if($attibutesizev): foreach($attibutesizev as $attvz):?>
                  <div>
                    <label>
                      <input type="checkbox" name="<?= $attvz->value_name?>" value="<?= $attvz->id?>" 
                      <?php if($sattribute)
                      {
                        foreach($sattribute as $satt)
                        {
                          if( $attvz->id==$satt){echo "checked";}
                        }
                      }
                      ?>
                      > 
                      <div><i class="fa fa-check"></i></div>
                      <?= $attvz->value_name?>
                    </label>
                  </div>
                  <?php endforeach; endif?>
                  <?php endif?>
                  <?php endforeach; endif?>
                  </div>  
                </div>
              </div>
              <button class="btn btn-info" type="submit">GO</button>
            </div>
            </form>
          </section>
        </aside>
        <main class="col-md-10">
          <section class="products_inner">
            <div class="products_wrapper">
              <div class="products_container row">
                <?php if ($productlist) : foreach ($productlist as $plist) : ?>
                <div class="product-layout product-grid col-md-3 col-lg-3 mt-4">
                  <div class="p-item">
                    <?php
                    $catidgo=  strtr(base64_encode('catblank'), '+/', '-_');
                    $pid= strtr(base64_encode($plist->id), '+/', '-_');
                    $pid=  strtr(base64_encode($pid), '+/', '-_');
                    $pid=  strtr(base64_encode($pid), '+/', '-_');
                    ?>
                    <div class="item-img">
                      <a href="<?= base_url('product/details/'.$pid.'/'.$catidgo.'/'.$plist->product.'/'.$pid)?>" target="_blank"><img src="<?= base_url('admin/assets/productimage/' . $plist->photo) ?>" class="img-fluid"></a>
                    </div>
                    <div class="item-dtl">
                      <div class="item-title">
                        <h6 class="txt-h-up tooltrip" data-toggle="tooltip" title="<?= $plist->product?>"> 
                          <a href="<?= base_url('product/details/'.$pid.'/'.$catidgo.'/'.$plist->product.'/'.$pid)?>"  target="_blank"><?= $stringCut = substr($plist->product, 0, 29); ?>..</a>
                        </h6>
                      </div>
                      <div class="price-block">
                      <?php $price= $this->db->select('regular_price,offer_price')->from('product_details')->where('pro_id',$plist->id)->order_by('id','ASC')->limit('1')->get()->row_array();?>
                        <p class="">Rs.<span class="p-prc"><del><?= $price['regular_price']?> </del><b><?= $price['offer_price']?></b></span>
                          </p> 
                      </div>
                    </div>
                  </div>
                </div>
               <?php endforeach; else: ?>
                <div class="product-layout  col-xl-12">
                  <div class="p-item">
                    <div class="item-title">
                      <div class="notfound">
                        <img src="//img1a.flixcart.com/www/linchpin/fk-cp-zion/img/error-no-search-results_e83b58.png">
                        <h2>Sorry, no results found!</h2>
                        <div class="_1gJmUZ">Please check the spelling or try searching for something else</div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php endif;?>
              </div>
            </div>
          </section>
        </main>
      </div>
    </div>
    <!-- footer start -->
   <?php include 'footer.php'; ?>
    <!-- footer end -->


  </div>
  
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <?php include 'js.php'; ?>
  <script>
        var min = "<?= $min; ?>";
        var max = "<?= $max; ?>";
      	$( function() {
      		$("#slider-range" ).slider({
      			range: true,
      			min: 100,
      			max: 80000,
      			values: [min , max ],
                  step: 500,
                  slide: function( event, ui ) 
                  {
                      $( "#min" ).val(  ui.values[ 0 ]);
                      $( "#max" ).val( ui.values[ 1 ] );
                     
                  }
                  
              });
              $( "#min" ).val(min);
              $( "#max" ).val(max);
      	
      	} );
  </script>
  <script>
  $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
  });
  </script>
</body>
</html>