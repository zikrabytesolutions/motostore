
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Moto store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/slick/slick.css')?>"/>

<link rel="stylesheet" type="text/css" href="<?= base_url('assets/slick/slick-theme.css')?>"/>
    <link rel="stylesheet" href="<?= base_url('assets/svg/css/fontello.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/fancybox\dist\jquery.fancybox.min.css') ?>" />
    <!--styles -->

</head>

<body>
<?php $Ci = &get_instance(); ?>
    <div class="cart-page">
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
        <div class="container cart-body">
            <h5 class="title-border">Shopping Cart</h5>
            <div class="row mt-50 mb-35">
                <main class="col-md-8 mb-3">
                    <section class="cart-wrapper">
                        <div class="cart-table">

                            <div class="template_cart">
                               
                                
                           
                                <table class="table table-bordered cart_items">
                                <?php if($proinfo):?>
                                    <thead>
                                        <tr>
                                            <th class="column_product" colspan="2">Product</th>
                                            <th class="column_price">Price</th>
                                            <th class="column_quantity">Quantity</th>
                                            <th class="column_remove">Remove</th>
                                        </tr>
                                    </thead>
<?php endif;?>
                                    <tbody>

                                    <?php if($proinfo): foreach($proinfo as $ds): ?>
                                       
                                       <?php $result= $Ci->findcartvalue($ds['proid'],$ds['id'])?>
                                       <?php if($result): foreach($result as $rs): ?>
                                        <tr>
                                            <td class="column_product_img">
                                                <a href="#">
                                                    <img class="cart__image img-fluid" src="<?= base_url('admin/assets/productimage/'.$rs->photo)?>" alt="Ibera PakRak Clip-On Quick-Release Commuter Bicycle Bag">
                                                </a>
                                            </td>

                                            <td class="column_product_info">
                                                <p class="cart_item__name product_name">
                                                    <a href="#"><?= $rs->product?></a>
                                                </p>

                                                <div class="cart_item__details">
                                                    <p class="c_item_price"><span class="p-prc mr-2"><?= $rs->offer_price?></span><strike><?= $rs->regular_price?></strike></p>
                                                   
                                                    <?php  $attribute= $Ci->findattributecart($rs->second);?>
                                                       <?php if($attribute): foreach($attribute as $att):?>
                                                        <?php if(strtolower( $att->attribute)!='color'):?>
                                                            <p class="c_item_size"><b><?= $att->attribute?> :</b> <?= $att->value_name?></p>
                                                    <?php endif; endforeach; endif?>


                                                     <?php  $attribute= $Ci->findattributecart($rs->first);?>
                                                       <?php if($attribute): foreach($attribute as $att):?>
                                                        <?php if(strtolower( $att->attribute)=='color'):?>
                                                                <div class="color-choose">
                                                                <input data-image="red" type="radio" value="red">
                                                                <label for="red"><b><?= $att->attribute?> :</b> 
                                                                <span style="background-color:<?= $att->codes?>"> </span></label>
                                                                </div>
                                                        <?php endif; endforeach; endif?>
                                                </div>

                                            </td>

                                            <td class="column_total">
                                                <span class="money" data-currency-usd="$15.00"><?php echo $this->cart->format_number($ds['subtotal']); ?></span>
                                            </td>

                                            <td class="column_quantity">
                                                <div class="product-qty">
                                                    <div class="qty-choose flex-container">
                                                        <?php if($ds['qty']==1):?>
                                                       <a class="product-quantity-add" href="<?= base_url('cart/mincart/'.$ds['rowid'].'/'.$ds['qty'])?>" style="pointer-events: none;
                                                               cursor: default;">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </a>
                                                    <?php else: ?>
                                                    <a class="product-quantity-add" href="<?= base_url('cart/mincart/'.$ds['rowid'].'/'.$ds['qty'])?>">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </a>
                                                    <?php endif?>
                                                        <div>
                                                            <input type="text" id="product-quantity-input" value="<?= $ds['qty']?>" readonly/>
                                                        </div>
                                                        <a class="product-quantity-add" href="<?= base_url('cart/addcart/'.$ds['rowid'].'/'.$ds['qty'])?>">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="column_remove">
                                                <a class="icon-bin-delete" title="Delete" href="<?= base_url('cart/delete/'.$ds['rowid'])?>"></a>
                                            </td>
                                        </tr>
                                       
                                       <?php endforeach; endif;?>
                                       <?php endforeach; else:?>
                                       <h3><i class="icon-cart"></i>Your Cart is Empty</h3>

                                           <?php endif;?>
                                       
                                                                              

                                    </tbody>

                                    <tfoot>
                                        <tr>
                                            <td colspan="5">
                                                <a class="add-to-cart btn-default bg-black" href="<?= base_url('home')?>"><i class="icon-cart"></i>continue shopping</a>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>

                            </div>
                        </div>
                    </section>
                </main>
                <aside class="col-md-4">
                    <section>
                        <div>
                            <table class="table table-bordered cart_details">
                                <tbody>
                                    <tr>
                                        <td><?php echo $rows = count($this->cart->contents()); ?> Items</td>
                                        <th><?php echo $this->cart->format_number($this->cart->total()); ?></th>
                                    </tr>
                                    <tr>
                                        <td>Shipping</td>
                                        <th style="color:green">Free</th>
                                    </tr>
                                    <tr>
                                        <td>Total Price ( With GST )</td>
                                        <th class="p-prc"><?php echo $this->cart->format_number($this->cart->total()); ?></th>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="5" class="text-center">
                                            <a class="add-to-cart btn-default btn-sm" href="#">proceed to checkout</a>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="delivery-info-details mt-35">
                            <div class="row d-flex flex-nowrap justify-content-around">
                                <div class="text-center">
                                    <span class="icon-shield"></span>
                                    <p class="mt-2">Security Policy</p>
                                </div>
                                <div class="text-center">
                                    <span class="icon-delivery-truck"></span>
                                    <p class="mt-2">Delivery Policy</p>
                                </div>
                                <div class="text-center">
                                    <span class="icon-back-arrow"></span>
                                    <p class="mt-2">Return Policy</p>
                                </div>
                            </div>
                        </div>
                    </section>
                </aside>

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

</body>

</html>