
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
    <div class="checkout">
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

        <section class="checkout-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="title-border clr-black">Checkout details</h4>
                    </div>

                    <div class="col-md-7">
                        <div class="login-form">
                            <form id="motostoreCheckoutForm" action="#" method="post" data-url="">
                                <h5>Billing details</h5>

                                <div class="form-row">
                                    <div class="form-group col-sm-6">
                                        <label for="firstname">First name *</label>
                                        <input type="text" class="form-control" id="firstname" name="firstname">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="lastname">Last name *</label>
                                        <input type="text" class="form-control" id="lastname" name="lastname">
                                    </div>
                                </div>
                                <p>Country *</p>
                                <p>India</p>
                                <div class="form-row align-items-end">
                                    <div class="form-group col-sm-6">
                                        <label for="streetaddress">Street address *</label>
                                        <input type="text" class="form-control" id="streetaddress" name="streetaddress" placeholder="House number and street name">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <input type="text" class="form-control" id="streetaddress" name="streetaddress" placeholder="Apartment, suite, unit etc. (optional)">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="city">Town / City *</label>
                                    <input type="text" class="form-control" id="city" placeholder="1234 Main St">
                                </div>
                                <div class="form-group">
                                    <label for="state">State / County *</label>
                                    <input type="text" class="form-control" id="state" placeholder="1234 Main St">
                                </div>

                                <div class="form-group">
                                    <label for="postcode">Postcode / ZIP *</label>
                                    <input type="text" class="form-control" id="postcode" placeholder="1234 Main St">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone Number *</label>
                                    <input type="tel" class="form-control" id="phone" name="phone">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address *</label>
                                    <input type="email" class="form-control" id="email" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-z]+\.[a-z]{2,3}$">
                                </div>
                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" name="createAcc" value="createAcc" class="mr-2">
                                        <div><i class="fa fa-check"></i></div>Create an account?
                                    </label>
                                </div>

                                <div id="addPw">
                                    <div class="form-group">
                                        <label for="password">Password *</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="password" name="password">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="showPw">show</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" name="shipDiffAdd" value="shipDiffAdd" class="mr-2">
                                        <div><i class="fa fa-check"></i></div>Ship to a different address
                                    </label>
                                </div>

                                <div id="shipToDiffAdd">
                                    <div class="form-row">
                                        <div class="form-group col-sm-6">
                                            <label for="firstname">First name *</label>
                                            <input type="text" class="form-control" id="firstname" name="firstname">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="lastname">Last name *</label>
                                            <input type="text" class="form-control" id="lastname" name="lastname">
                                        </div>
                                    </div>
                                    <p>Country *</p>
                                    <p>India</p>
                                    <div class="form-row align-items-end">
                                        <div class="form-group col-sm-6">
                                            <label for="streetaddress">Street address *</label>
                                            <input type="text" class="form-control" id="streetaddress" name="streetaddress" placeholder="House number and street name">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <input type="text" class="form-control" id="streetaddress" name="streetaddress" placeholder="Apartment, suite, unit etc. (optional)">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="city">Town / City *</label>
                                        <input type="text" class="form-control" id="city" placeholder="1234 Main St">
                                    </div>
                                    <div class="form-group">
                                        <label for="state">State / County *</label>
                                        <input type="text" class="form-control" id="state" placeholder="1234 Main St">
                                    </div>

                                    <div class="form-group">
                                        <label for="postcode">Postcode / ZIP *</label>
                                        <input type="text" class="form-control" id="postcode" placeholder="1234 Main St">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Order notes (optional)</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <section class="orderInfo">
                            <h5>Your Order</h5>
                            <table class="table orderDetails">
                                <thead>
                                    <tr>
                                        <th class="column_product">PRODUCT</th>
                                        <th class="column_subtotal">SUBTOTAL</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <tr>

                                        <td>
                                            <span class="item">AGV K-1 Top Dreamtime Gloss White Yellow Blue Full Face Helmet - ML  × 1	</span>
                                        </td>

                                        <td>
                                            <span title="Subtotal" href="#">Rs.18,499.00</span>
                                        </td>
                                    </tr>
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <td>
                                            <span>Subtotal</span>
                                        </td>

                                        <td class="column_remove">
                                            <span title="Delete" href="#">Rs.18,499.00</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>Shipping</span>
                                        </td>

                                        <td>
                                            <span title="Delete" href="#">Free shipping</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>Total</span>
                                        </td>

                                        <td>
                                            <span title="Total" href="#">Rs.18,499.00</span>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
	                        <div id="orderPayment">
	                            <label class="mt-2">
	                                <input type="radio" name="payType" value="ccard" class="mr-2">
	                                <div><i class="fa fa-gear"></i></div>CCAvenue
	                                <img src="https://www.ccavenue.com/images_shoppingcart/ccavenue_pay_options.gif" class="img-fluid mt-2">
	                                <small class="d-block">Pay securely by Credit or Debit card or internet banking through Secure Servers.</small>
	                            </label>
	                            <label class="mt-2">
	                                <input type="radio" name="payType" value="paytm" class="mr-2">
	                                <div><i class="fa fa-gear"></i></div>Paytm Gateway
	                                <img src="https://www.customelements.in/wp-content/plugins/paytm/images/logo.gif" class="img-fluid mt-2">
	                                <small class="d-block">Pay via Paytm Wallet – Credit/Debit card, Netbanking, EMI & UPI.</small>
	                            </label>
	                            <label class="mt-2">
	                                <input type="radio" name="payType" value="cod" class="mr-2">
	                                <div><i class="fa fa-gear"></i></div>Cash on Delivery
	                            </label>
                                <label class="mt-2">
                                    <input type="checkbox" name="tnc" value="tnc" class="mr-2">
                                    <div><i class="fa fa-check"></i></div> I have read and agree to the terms and conditions *
                                </label>
                                <a class="add-to-cart btn-default bg-red my-4" href="#"><i class="icon-cart"></i>Proceed to pay</a>
                                <p>View Our <a href="">Privacy Policy</a></p>
	                        </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <script type="text/javascript" src="<?= base_url('assets/js/jquery.js') ?>"></script>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/owl.carousel.min.js') ?>"></script>


<!-- slick -->
<script type="text/javascript" src="<?= base_url('assets/slick/slick.min.js') ?>"></script>
<!-- slick -->
<script type="text/javascript" src="<?= base_url('assets/zoom/dist/easyzoom.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/zoom/dist/easyzoom.js') ?>"></script>	
    <script type="text/javascript" src="<?= base_url('assets/js/datepicker.min.js') ?>"></script>

    <script type="text/javascript" src="<?= base_url('assets/js/custom.js') ?>"></script>

</body>

</html>