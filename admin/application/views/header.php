<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title -->
    <title>Dashboard | Moto Store</title>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!--<link rel="shortcut icon" type="image/ico" href="favicon.ico" />-->

        <!-- Vendor styles -->
        <link rel="stylesheet" href="<?= base_url('assets/vendor/fontawesome/css/font-awesome.css')?>" />
    <link rel="stylesheet" href="<?= base_url('assets/vendor/metisMenu/dist/metisMenu.css')?>" />
    <link rel="stylesheet" href="<?= base_url('assets/vendor/animate.css/animate.css')?>" />
    <link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap/dist/css/bootstrap.css')?>" />
    <link rel="stylesheet" href="<?= base_url('assets/vendor/summernote/dist/summernote.css')?>" />
    <link rel="stylesheet" href="<?= base_url('assets/vendor/summernote/dist/summernote-bs3.css')?>" />
    <link rel="stylesheet" href="<?= base_url('assets/vendor/sweetalert/lib/sweet-alert.css')?>" />
    <!-- App styles -->
    <link rel="stylesheet" href="<?= base_url('assets/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')?>" />
    <link rel="stylesheet" href="<?= base_url('assets/fonts/pe-icon-7-stroke/css/helper.css')?>" />
    <link rel="stylesheet" href="<?= base_url('assets/styles/style.css')?>">

</head>
<body class="fixed-navbar sidebar-scroll">

<!-- Simple splash screen-->
<div class="splash"> <div class="color-line"></div><div class="splash-title"><h1>Moto Store | Admin Panel </p><div class="spinner"> <div class="rect1"></div> <div class="rect2"></div> <div class="rect3"></div> <div class="rect4"></div> <div class="rect5"></div> </div> </div> </div>
<!--[if lt IE 7]>
<p class="alert alert-danger">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Header -->
<div id="header">
    <div class="color-line">
    </div>
    <div id="logo" class="light-version">
        <span>
        Moto Store
        </span>
    </div>
    <nav role="navigation">
        <div class="header-link hide-menu"><i class="fa fa-bars"></i></div>
        <div class="small-logo">
            <span class="text-primary">Moto Store</span>
        </div>
        
        <div class="mobile-menu">
        <button type="button" class="navbar-toggle mobile-menu-toggle" data-toggle="collapse" data-target="#mobile-collapse">
            <i class="fa fa-chevron-down"></i>
        </button>
        <div class="collapse mobile-navbar" id="mobile-collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a class="" href="profile.html">Profile</a>
                </li>
            </ul>
        </div>
    </div>
       
    </nav>
</div>

<!-- Navigation -->
<aside id="menu">
<!-- <aside id="menu" style="overflow: scroll;"> -->
    <div id="navigation">
        <div class="profile-picture">
            <a href="<?= base_url('profile')?>">
                <img src="<?= base_url('assets/images/profile.jpg')?>" class="img-circle m-b" alt="logo">
            </a>

            <div class="stats-label text-color">
                <span class="font-extra-bold font-uppercase">
                  <?= $this->session->userdata('name')?>
                </span>

                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        <small class="text-muted">Admin <b class="caret"></b></small>
                    </a>
                    <ul class="dropdown-menu animated flipInX m-t-xs">
                       
                        <li><a href="<?= base_url('profile')?>">Profile</a></li>
                        
                        <li class="divider"></li>
                        <li><a href="<?= base_url('login/logout')?>">Logout</a></li>
                    </ul>
                </div> 
            </div>
        </div>

        <ul class="nav" id="side-menu">
            <li>
                <a href="<?= base_url('dashboard')?>"> <span class="nav-label">Dashboard</span> </a>
            </li>
            <li><a href="<?= base_url('brand')?>">Brand</a></li>
            <li><a href="<?= base_url('category')?>">Category</a></li>
            <li><a href="<?= base_url('subcategory')?>">Sub Category</a></li>
            <!-- <li>
                <a href="<?= base_url('stock')?>"> <span class="nav-label">Stock </span> </a>
            </li> -->

            <li>
                <a href="<?= base_url('user')?>"> <span class="nav-label">User </span> </a>
            </li>

            <li>
                <a href="<?= base_url('tiles')?>"> <span class="nav-label">Home Page Tiles </span> </a>
            </li>
            
            <li>
                <a href="#"><span class="nav-label"> Setting</span><span class="fa arrow"></span> </a>
                <ul class="nav nav-second-level">
                    <li class="active"><a href="<?= base_url('product')?>"> Product</a></li>
                    <li class="active"><a href="<?= base_url('product/lists')?>"> Product List</a></li>
                   
                    <li><a href="<?= base_url('attribute')?>">Attribute</a></li>
                  
                </ul>
            </li>

            <li>
                <a href="#"><span class="nav-label">Order</span><span class="fa arrow"></span> </a>
                <ul class="nav nav-second-level">
                    <li class="active"><a href="<?= base_url('order/search')?>">  Search</a></li>
                    <li class="active"><a href="<?= base_url('order/pending')?>">  Pending</a></li>
                    <li class="active"><a href="<?= base_url('order/accepted')?>">  Accepted</a></li>
                    <li class="active"><a href="<?= base_url('order/shipped')?>">  Shipped</a></li>
                    <li class="active"><a href="<?= base_url('order/delivered')?>">  Delivered</a></li>
                    
                </ul>
            </li>


            <li>
                <a href="#"><span class="nav-label">Moto Cafe </span><span class="fa arrow"></span> </a>
                <ul class="nav nav-second-level">
                    <li class="active"><a href="<?= base_url('event/add')?>"> Event</a></li>
                    <li class="active"><a href="<?= base_url('event/gallery')?>"> Gallery</a></li>
                </ul>
            </li>

            <li>
                <a href="#"><span class="nav-label">Moto experience </span><span class="fa arrow"></span> </a>
                <ul class="nav nav-second-level">
                    <li class="active"><a href="<?= base_url('Motoexperience/place')?>"> Place</a></li>
                    <li class="active"><a href="<?= base_url('Motoexperience/ride')?>"> Ride</a></li>
                </ul>
            </li>
            <li>
                <a href="<?= base_url('subscribed')?>"> <span class="nav-label">Subscribed Email </span> </a>
            </li>

            <li>
                <a href="<?= base_url('slider')?>"> <span class="nav-label">Slider</span> </a>
            </li>

            <li>
            </li>
            <!-- <li>
                <a href="<?= base_url('pin')?>"> <span class="nav-label">Pin Management</span><span class="label label-warning pull-right">NEW</span> </a>
            </li> -->

           
        </ul>
    </div>
</aside>

<!-- Main Wrapper -->
<div id="wrapper">
<div class="content">
  