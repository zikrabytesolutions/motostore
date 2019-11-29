<!DOCTYPE html>
<html lang="en">

<head>
    <title>Moto store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include 'css.php'; ?>
    
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/slick/slick.css')?>"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/slick/slick-theme.css')?>"/>

  

</head>

<body>
<?php $Ci = &get_instance(); ?>
    <div class="cart-page">
        <?php include('header.php');?>


        <div class="cart-body py-5">
        <div class="container">
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
                                                    <p class="c_item_price"><b>Rs.</b> <del class="p-prc mr-2"><?= $rs->regular_price?></del><span class="p-prc mr-2"><?= $rs->offer_price?></span></p>

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
                                                <span class="money" data-currency-usd="$15.00">Rs.<?php echo $this->cart->format_number($ds['subtotal']); ?></span>
                                            </td>

                                            <td class="column_quantity">
                                                <div class="product-qty">
                                                    <div class="qty-choose flex-container">
                                                        <?php if($ds['qty']==1):?>
                                                       <a class="product-quantity" href="<?= base_url('cart/mincart/'.$ds['rowid'].'/'.$ds['qty'])?>" style="pointer-events: none;
                                                               cursor: default;">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </a>
                                                    <?php else: ?>
                                                    <a class="product-quantity" href="<?= base_url('cart/mincart/'.$ds['rowid'].'/'.$ds['qty'])?>">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </a>
                                                    <?php endif?>
                                                        <div>
                                                            <input type="text" id="product-quantity-input" value="<?= $ds['qty']?>" readonly/>
                                                        </div>
                                                        <a class="product-quantity" href="<?= base_url('cart/addcart/'.$ds['rowid'].'/'.$ds['qty'])?>">
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
                                        <td><?php echo $rows = count($this->cart->contents()); ?>
                                           <?php if(count($this->cart->contents())>1){echo "Items";}else{echo "Item";}?>
                                         </td>
                                        <th> Rs. <?php echo $this->cart->format_number($this->cart->total()); ?></th>
                                    </tr>
                                    <tr>
                                        <td>Shipping</td>
                                        <th style="color:green">Free</th>
                                    </tr>
                                    <tr>
                                        <td>Total Price ( With GST )</td>
                                        <th class="p-prc">Rs. <?php echo $this->cart->format_number($this->cart->total()); ?></th>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="5" class="text-center">
                                           <?php if(count($this->cart->contents())>0):?>
                                            <a class="add-to-cart btn-default btn-sm" href="<?= base_url('checkout')?>">proceed to checkout</a>
                                           <?php else : ?>
                                            <a class="btn-default btn-sm" href="#" style="background-color: #a09c9c">proceed to checkout</a>
                                           <?php endif?>
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
   

    <?php include('footer.php');?>
</div>
    <?php include('js.php');?>
</body>
</html>

