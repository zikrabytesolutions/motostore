<!DOCTYPE html>
<html lang="en">

<head>
    <title>Moto store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/font-awesome.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/owl.theme.default.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/animate.css') ?>">

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/responsive.css') ?>">
    <!--fontello-->
    <link rel="stylesheet" href="<?= base_url('assets/svg/css/fontello.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/fancybox\dist\jquery.fancybox.min.css') ?>" />
    <!--styles -->

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="https://jqueryui.com/resources/demos/style.css">

</head>

<body>
    <?php $CI = &get_instance(); ?>
    <div class="products-page">

        <!-- header start -->
        <header>
            <div class="container">
                <div class="row d-none d-md-block d-lg-block ">
                    <div class="mid-logo-block">
                        <!-- Brand -->
                        <a class="mid-logo" href="<?= base_url('') ?>"><img class="mx-auto d-block" src="<?= base_url('assets/images/page-logo.jpg') ?>"></a>
                    </div>

                </div>
            </div>
            <nav class="navbar navbar-expand-md">
                <div class="container">
                    <!-- Brand -->
                    <a class="navbar-brand d-block d-md-none d-lg-none" href="#"><img src="<?= base_url('assets/images/page-logo.jpg') ?>"></a>
                    <ul class="nav dsk-hide">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                    <!-- Toggler/collapsibe Button -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation-menu">
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- Navbar links -->
                    <div class="collapse navbar-collapse justify-content-center" id="navigation-menu">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Riding Gears </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Accessories </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Brands </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Blog </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Design </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact </a>
                            </li>
                        </ul>

                    </div>
                    <ul class="nav mb-hide">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>

        </header>
        <!-- <section class="products-header">
            <h1>Riding Gears</h1>
        </section> -->
        <div class="container-fluid products-body">
            <div class="row mt-50 mb-35 mr-2 ml-2">
                <aside class="col-md-3">
                    <section class="products-sidebar">
                    <?php echo form_open('product/listfilter')?>
                        <div class="shop-by-filter">
                            <h5 class="title-border">Shop By  
                                <span style="float:right;font-size:15px;color:red">
                                   <a href="<?= base_url('product/lists/'.$this->uri->segment(3).'/'.$this->uri->segment(4))?>"> Reset Filter</a>
                                </span>
                            </h5>
                            <label for="amount">Price range:</label>
                            <input type="hidden" value="<?= $this->uri->segment(3);?>" name="catid">
                            <input type="hidden" value="page" name="side">
                              <div class="row">
                           
                                <div class="col-md-8">
                                <input type="text" id="min" name="min" readonly style="border:0; color:#f6931f; font-weight:bold;">
                                 </div>

                                 <div class="col-md-4">
                                 <input type="text" id="max" name="max" readonly style="border:0; color:#f6931f; font-weight:bold;">
                                 </div>

                                 
                             </div>

                           <div id="slider-range"></div>
                            
                 
                            <div class="filter-manufacturer">
                                <p class="filter-title">Manufacturer</p>
                                <div class="manufacturer-list">
                                    <div class="manufacturer-check">
                                        
                                        <?php if($brand): foreach($brand as $brd):?>
                                            <?php $stripped = str_replace(' ', '', $brd->brand);?>
                                            <label>
                                            <input type="checkbox" name="<?=$stripped?>" value="<?= $brd->id?>"
                                             <?php if($sbrand){
                                               foreach ($sbrand as $slt) 
                                               {
                                                if($brd->id==$slt){echo "checked";}
                                               }
                                             }
                                             
                                             ?>><div><i class="fa fa-check"></i></div>
                                              <?= $brd->brand?></label><br>
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
                                         ?> <?php if ($attz->attribute == 'Size') : ?>
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
                                                 > <div><i class="fa fa-check"></i></div>
                                                 <?= $attvz->value_name?></label><br>
                                                </div>
                                                <?php endforeach; endif?>
                                            <?php endif?>
                                         <?php endforeach; endif?>
                                    
                                    </div>
                                    
                                </div>

                            </div>
                            <button class="btn btn-warning" type="submit">GO</button>
                        </div>
                        
                        </form>
                    </section>
                </aside>
                <main class="col-md-9">
                    <section class="products_inner">
                        <div class="products_wrapper">
                            <!-- <div class="sort">
                                <div class="input-group mb-3 align-items-center">
                                    <label for="products-sort" class="mr-2">Sort By :</label>

                                    <select id="products-sort">
                                        <option selected>Name (A to Z)</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div> -->
                             <div class="products_container row mt-4">
                                <?php if ($productlist) : foreach ($productlist as $plist) : ?>
                                    <div class="product-layout product-grid col-md-4 col-lg-3 mt-4">

                                        <div class="p-item">
                                              <div class="item-title">
                                                    <h6 class="txt-h-up" class="tooltrip">
                                                        <?php
                                                           $catidgo=  strtr(base64_encode('catblank'), '+/', '-_');
                                                           $pid= strtr(base64_encode($plist->id), '+/', '-_');
                                                           $pid=  strtr(base64_encode($pid), '+/', '-_');
                                                           $pid=  strtr(base64_encode($pid), '+/', '-_');
                                                           
                                                         ?>
                                                    <a href="<?= base_url('product/details/'.$pid.'/'.$catidgo.'/'.$plist->product.'/'.$pid)?>" data-toggle="tooltip" title="<?= $plist->product?>"><?= $stringCut = substr($plist->product, 0, 29); ?>..</a>
                                                    </h6>
                                                </div>
                                                <div class="item-img">
                                                    <img src="<?= base_url('admin/assets/productimage/' . $plist->photo) ?>" class="img-fluid">
                                                </div>
                                                <div class="item-dtl">
                                                    <div class="p-left-txt">

                                                        <?php
                                                                $attibute = $CI->findattribute($plist->id);
                                                                if ($attibute) : foreach ($attibute as $att) :
                                                                        ?>
                                                                <div class="color-choose flex-container justify-content-start mb-3 ">
                                                                    <p class="mr-2 mb-0"><?= $att->atname ?>:</p>
                                                                    <?php $attibutevalue = $CI->findattributevalue($att->attribute_id, $att->product_id); ?>
                                                                    <?php if ($att->atname == 'color') : ?>
                                                                        <?php if ($attibutevalue) : foreach ($attibutevalue as $attv) : ?>
                                                                                <div>
                                                                                    <input data-image="red" type="radio" value="red">
                                                                                    <label for="red"><span style="background-color:<?= $attv->codes ?>;"></span></label>
                                                                                </div>
                                                                        <?php endforeach;
                                                                                            endif; ?>
                                                                    <?php else : ?>
                                                                        <?php if ($attibutevalue) : foreach ($attibutevalue as $attv) : ?>
                                                                                <div>
                                                                                    <input data-size="s" type="radio" id="s" name="size" value="s">
                                                                                    <p style="margin-top: 10px;"><?= $attv->value_name . ', ' ?></p>
                                                                                </div>
                                                                        <?php endforeach;
                                                                                            endif; ?>
                                                                    <?php endif ?>
                                                                </div>
                                                        <?php endforeach;
                                                                endif; ?>


                                                    </div>
                                                    <div class="p-right-txt">
                                                        
                                                        <?php $price= $this->db->select('regular_price,offer_price')->from('product_details')->where('pro_id',$plist->id)->order_by('id','ASC')->limit('1')->get()->row_array();?>
                                                        <p class="txt-p-up" style="font-size:18px"> &#x20A8;:</p> <h4 class="p-prc"><del><?= $price['regular_price']?> </del><b><?= $price['offer_price']?></b></h4>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                <?php endforeach; else: ?>
                                    <div class="product-layout product-grid col-md-12">
                                    <div class="p-item">
                                                <div class="item-title">
                                         <div class="notfound"><img src="//img1a.flixcart.com/www/linchpin/fk-cp-zion/img/error-no-search-results_e83b58.png">
                                         <h2>Sorry, no results found!</h2>
                                         <div class="_1gJmUZ">Please check the spelling or try searching for something else</div></div>
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
    </div>

    <script type="text/javascript" src="<?= base_url('assets/js/jquery.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/owl.carousel.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/custom.js') ?>"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- slick -->
    <script type="text/javascript" src="<?= base_url('assets/slick/slick.min.js') ?>"></script>
    <!-- slick -->
    <script type="text/javascript" src="<?= base_url('assets/zoom/dist/easyzoom.js') ?>"></script>
    <!-- price range slider -->

    <script>
        var min = "<?= $min; ?>";
        var max = "<?= $max; ?>";
	$( function() {
		$("#slider-range" ).slider({
			range: true,
			min: 0,
			max: 5000,
			values: [min , max ],
            step: 100,
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