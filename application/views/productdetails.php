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
    <!--fontello-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/slick/slick.css')?>" />

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/slick/slick-theme.css')?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/svg/css/fontello.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/fancybox/dist/jquery.fancybox.min.css') ?>" />
    <!--styles -->

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/responsive.css') ?>">

</head>

<body>
    <?php $CI = &get_instance(); ?>
    <div class="products-page">

    <?php include('header.php');?>
   
        <div class="container product-single py-5">
            <section class="product-header">
                <?php if($productdetail): foreach($productdetail as $pd): ?>
                <div class="row">
                    <div class="col-md-5">
                        <div class="product-view">
                            <div id="item-nav">
                                <div class="easyzoom">
                                    <a href="<?= base_url('admin/assets/productimage/' . $pd->photo) ?>">
                                        <img src="<?= base_url('admin/assets/productimage/' . $pd->photo) ?>" alt=""
                                            draggable="false" />
                                    </a>
                                </div>
                                <div class="easyzoom">
                                    <a href="<?= base_url('admin/assets/productimage/' . $pd->photo) ?>">
                                        <img src="<?= base_url('admin/assets/productimage/' . $pd->photo) ?>" alt=""
                                            draggable="false" />
                                    </a>
                                </div>
                                <div class="easyzoom">
                                    <a href="<?= base_url('admin/assets/productimage/' . $pd->photo) ?>">
                                        <img src="<?= base_url('admin/assets/productimage/' . $pd->photo) ?>" alt=""
                                            draggable="false" />
                                    </a>
                                </div>
                                <div class="easyzoom">
                                    <a href="<?= base_url('admin/assets/productimage/' . $pd->photo) ?>">
                                        <img src="<?= base_url('admin/assets/productimage/' . $pd->photo) ?>" alt=""
                                            draggable="false" />
                                    </a>
                                </div>
                            </div>

                            <div id="items-nav" class="multipleproduct">
                                <div><img src="<?= base_url('admin/assets/productimage/' . $pd->photo) ?>"
                                        class="sim-thumb" alt="" draggable="false" width="100px" ; height:100px></div>
                                <div><img src="<?= base_url('admin/assets/productimage/' . $pd->photo) ?>"
                                        class="sim-thumb" alt="" draggable="false" width="100px" ; height:100px></div>
                                <div><img src="<?= base_url('admin/assets/productimage/' . $pd->photo) ?>"
                                        class="sim-thumb" alt="" draggable="false" width="100px" ; height:100px></div>
                                <div><img src="<?= base_url('admin/assets/productimage/' . $pd->photo) ?>"
                                        class="sim-thumb" alt="" draggable="false" width="100px" ; height:100px></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <section class="product-details">
                            <h3><?= $pd->product; ?></h3>
                            <p>Product Code : <?= $pd->productcode; ?></p>
                            <div class="product-price"><b>
                            Price Rs: <span > <del id="regularprice">
                                        <?= $pd->regular_price?></del> </span><span class="slash" style="font-size:20px" id="offerprice"> <?= $pd->offer_price?></span> 
                            </div>
                            <div class="product-overview">
                                <p>Availability: <b><span id="stock"><?php if($pd->stockstatus=='0'){echo ' <span style="color:red"> Out Of Stock';}
							else{echo '<span style="color:green">In Stock';}?></span></b></p>
                                    <h5 class="title-border mt-5">Description</h5>
                                    <?= $pd->description?>


                                <?php
							 $prodetailsn=$CI->findprodetails($pd->id);
							 if($prodetailsn):
							 foreach($prodetailsn as $prodet):
								if(strtolower($prodet->attribute)=='color'):
							?>
                                <div class="product-color mt-4">
                                    <p><?= $prodet->attribute?> : </p>
                                    <div class="color-choose">
                                        <?php
								 $proattributevalue= $CI->findattributevale($pd->id,$prodet->id);
								  if($proattributevalue):
									 foreach($proattributevalue as $pval):
								 ?>
                                        <div>
                                            <?php

										  $pid= strtr(base64_encode($pd->id), '+/', '-_');
										  $pid=  strtr(base64_encode($pid), '+/', '-_');
										  $pid=  strtr(base64_encode($pid), '+/', '-_');
										  $first=  strtr(base64_encode($pval->first), '+/', '-_');
										  if($flag=='true')
										  {$second=$pval->second;}
										  elseif($rsecond!='') { $second=$rsecond;}
                                          $second=  strtr(base64_encode($second), '+/', '-_');
                                        
										?>
                                           <a
                                                href="<?= base_url('product/details/'.$pid.'/'.$first.'/'.$second.'/'.$pd->product)?>">
                                                <input data-image="red" type="radio" value="red"
                                                    <?php if($rfirst==$pval->first){echo "checked";}?>>
                                                <label for="red"><span style="background-color:<?= $pval->codes?>;">
                                                    </span></label>
                                            </a>
                                        </div>
                                        <?php  endforeach; endif;?>
                                    </div>
                                </div>
                                <?php endif; endforeach; endif;?>


                                <!-- --------------second------------>
                                <?php
							 $prodetails=$CI->findprodetailsnd($pd->id);
							 if($prodetails):
							 foreach($prodetails as $prdet):
								if(strtolower($prdet->attribute)=='size'):
						  ?>
                                <div class="product-size mt-4">
                                    <p><?= $prdet->attribute?> : </p>
                                    <div class="size-choose flex-container">
                                        <?php
								  $proattributevalue= $CI->findattributevalend($pd->id,$prdet->id);
								  if($proattributevalue):
									 foreach($proattributevalue as $pvals):
								 ?>
                                        <div>
                                            <?php
										  $pid= strtr(base64_encode($pd->id), '+/', '-_');
										  $pid=  strtr(base64_encode($pid), '+/', '-_');
										  $pid=  strtr(base64_encode($pid), '+/', '-_');
										  $second=  strtr(base64_encode($pvals->second), '+/', '-_');
										  if($flag=='true')
										  {$first=$pval->first;}
										  elseif($rfirst!='') { $first=$rfirst;}
										  $first=  strtr(base64_encode($first), '+/', '-_');

										?>
                                            <a href="<?= base_url('product/details/'.$pid.'/'.$first.'/'.$second.'/'.$pd->product)?>">
                                                <input data-size="xs" type="radio" id="xs" name="size" value="xs"
                                                <?php if($rsecond==$pval->second){echo "checked";}?>>
                                                <label><span><?= $pvals->value_name?></span></label>
                                            </a>
                                        </div>
                                        <?php  endforeach; endif;?>
                                    </div>
                                </div>

                                <?php endif; endforeach; endif;?>

                                <div class="product-brand mt-4">
                                    <p>Brand : <?= $pd->brandname?> </p>
                                    
                                </div>



                                <div class="product-cta flex-container mt-4">
                                    <?php
								     $proid= strtr(base64_encode($pd->id), '+/', '-_');
									 $proid=  strtr(base64_encode($proid), '+/', '-_');
									 $pdetailsid=  strtr(base64_encode($pd->detailsid), '+/', '-_');
								  ?>


                                    <div>
                                        <?php echo form_open('cart/cartadd')?>
                                        <input type="hidden" name="url" value="<?= $this->uri->uri_string();?>">
                                        <input type="hidden" name="proid" value="<?= $proid ?>">
                                        <input type="hidden" name="prodetailsid" value="<?= $pdetailsid ?>">
                                          <?php if($this->session->userdata('motoubid')):?>
                                          <?php    $id= $this->session->userdata('motoubid');
                                                    $this->db->select('*');
                                                    $this->db->from('product_cart_iteam');
                                                    $this->db->where('userid', $id);
                                                    $this->db->where('variationid', $pd->detailsid);
                                                    $query= $this->db->get();
                                                    $logincart= $query->result();
                                                   if($logincart):?>
                                                       <a href="<?= base_url('cart')?>" class="btn btn-default bg-black" style="color:white"> <i class="icon-cart"></i>Go to cart</a>
                                                   <?php else:?>
                                                    <button type="submit" class="btn btn-default bg-black"> <i class="icon-cart"></i>Add to cart</button>
                                             <?php endif;?>
                                             <?php else:?>


                                                <?php if($proinfo):   $flag=0; foreach($proinfo as $crt):?>
                                                   <?php if($crt['id']==$pd->detailsid):?> <?php $flag=1;?>  <?php else:?><?php $flag=0;?><?php endif;?>
                                              <?php endforeach; endif;?>
                                                <?php if($flag==1):?>
                                                    <a href="<?= base_url('cart')?>" class="btn btn-default bg-black" style="color:white"> <i class="icon-cart"></i>Go to cart</a>
                                                <?php else:?>
                                                    <button type="submit" class="btn btn-default bg-black"> <i class="icon-cart"></i>Add to cart</button>
                                             <?php endif?>

                                             <?php endif?>


                                        
                                        <?php echo form_close()?>
                                    </div>

                                    <div>
                                    <?php echo form_open('cart/cartlist')?>
                                       
                                        <input type="hidden" name="proid" value="<?= $proid ?>">
                                        <input type="hidden" name="prodetailsid" value="<?= $pdetailsid ?>">
                                     <button class="btn btn-success btn-default bg-red">
                                            <span class="add-to-cart">Buy Now</span>
                                        </button>
                                        <?php echo form_close()?>
                                    </div>
<!--                                     <div href="#">
                                        <span class="icon-like"></span>
                                    </div>
                                    <div href="">
                                        <span class="icon-share-bold"></span>
                                    </div> -->
                                </div>

                            </div>
                        </section>
                    </div>
                </div>
                <?php endforeach; endif;?>
            </section>

            <section class="related-products mt-5">
                <div class="rel-prod-header">
                    <h3 class="text-center">Related Products</h3>
                    <p class="text-center"><span class="icon-motorcycle"></span></p>
                </div>
                <div class="rel-products-inner mt-4">
                    <div class="row">

                        <div class="col-md-10 offset-md-1">
                            <div class="owl-carousel owl-theme owl-loaded related-products-carousel">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage">

									<?php  $product= $CI->findreletedproduct($this->uri->segment(3))?>
									<?php if($product): foreach($product as $pro):?>
                                        <div class="owl-item">
                                            <div class="p-item">
                                            
                                                <div class="item-img">
                                                    <img src="<?= base_url('admin/assets/productimage/'.$pro->photo)?>">
                                                </div>
                                                
                                                <div class="item-dtl">
                                                    <div class="item-title">
                                                    <h6 class="txt-h-up" class="tooltrip">
                                                        <?php
                                                           $catidgo=  strtr(base64_encode('catblank'), '+/', '-_');
                                                           $pid= strtr(base64_encode($pro->id), '+/', '-_');
                                                           $pid=  strtr(base64_encode($pid), '+/', '-_');
                                                           $pid=  strtr(base64_encode($pid), '+/', '-_');

                                                         ?>
                                                    <a href="<?= base_url('product/details/'.$pid.'/'.$catidgo.'/'.$pro->product.'/'.$pid)?>" data-toggle="tooltip" title="<?= $pro->product?>"><?= $stringCut = substr($pro->product, 0, 29); ?>..</a>
                                                    </h6>
                                                </div>
                                                <!-- <div class="p-left-txt">

<?php
        $attibute = $CI->findattribute($pro->id);
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


</div> -->
                                                    <div class="related-price">
                                                        <?php $price= $this->db->select('regular_price,offer_price')->from('product_details')->where('pro_id',$pro->id)->order_by('id','ASC')->limit('1')->get()->row_array();?>
                                                        <p class=""> Price Rs:<span class="p-prc"><del><?= $price['regular_price']?> </del><b><?= $price['offer_price']?></b></span></p> 
                                                        <h4 class="p-prc"></h4>
                                                    </div>
                                                    <!-- <div class="product-cta flex-container">
                                                        <div><span class="add-to-cart"><i class="icon-cart"></i>add to
                                                                cart</span></div>
                                                        <div href="#">
                                                            <span class="icon-like"></span>
                                                        </div>
                                                        <div href="">
                                                            <span class="icon-share-bold"></span>
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                     <?php  endforeach; endif;?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
<!-- footer start -->
<section class="footer-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="f-block">
                    <img class="f-logo" src="<?= base_url('assets/images/page-logo.jpg')?>">    
                
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
                    
                    <li><a href="">privacy policy</a></li>
                    <li><a href="">cookie</a></li>
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
    <script type="text/javascript" src="<?= base_url('assets/js/jquery.js') ?>"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
    <!-- slick -->
    <script type="text/javascript" src="<?= base_url('assets/slick/slick.min.js') ?>"></script>
    <!-- slick -->
    <script type="text/javascript" src="<?= base_url('assets/zoom/dist/easyzoom.js') ?>"></script>  
    <script type="text/javascript" src="<?= base_url('assets/js/datepicker.min.js') ?>"></script>
    <!-- price range slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/owl.carousel.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/custom.js')?>"></script>



    
<script>
 
function variation(pid,first,second,product)
{
  window.history.pushState('page2', 'Title', '<?= base_url()?>product/details/'+pid+'/'+first+'/'+second+'/'+product);
  var dataString = 'pid='+ pid +'&first='+ first+'&second='+ second+'&product='+ product;
            $.ajax({
            type:"post",
            cache:false,
            url:"<?= base_url('product/attributeselect')?>",
            data:dataString, 
            dataType: 'json',  
            success: function (data)
                {
                    if(data){
                var len = data.length;
                var txt = "";
                if(len > 0){
                    for(var i=0;i<len;i++){
                        if(data[i].product)
                        {
                            $('#regularprice').html(data[i].regular_price);
                            $('#offerprice').html(data[i].offer_price);
                            if(data[i].stockstatus=='0')
                            {
                                $('#stock').html(' <span style="color:red"> Out Of Stock </span>');
                            }
                            else{
                                $('#stock').html(' <span style="color:green"> In Stock </span>');
                            }
                        }
                    }
                   
                }
            }
                   
                }
            });
            return false;   
}
</script>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>