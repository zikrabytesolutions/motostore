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
    <link rel="stylesheet" href="<?= base_url('assetsvendor/sweetalert/lib/sweet-alert.css')?>" />
    <!-- App styles -->
    <link rel="stylesheet" href="<?= base_url('assets/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')?>" />
    <link rel="stylesheet" href="<?= base_url('assets/fonts/pe-icon-7-stroke/css/helper.css')?>" />
    <link rel="stylesheet" href="<?= base_url('assets/styles/style.css')?>">

</head>
<body class="fixed-navbar sidebar-scroll">

<!-- Simple splash screen-->
<div class="splash"> <div class="color-line"></div><div class="splash-title"><h1>Homer - Responsive Admin Theme</h1><p>Special Admin Theme for small and medium webapp with very clean and aesthetic style and feel. </p><div class="spinner"> <div class="rect1"></div> <div class="rect2"></div> <div class="rect3"></div> <div class="rect4"></div> <div class="rect5"></div> </div> </div> </div>
<!--[if lt IE 7]>
<p class="alert alert-danger">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Header -->
<div id="header">
    <div class="color-line">
    </div>
    <div id="logo" class="light-version">
        <span>
            Homer Theme
        </span>
    </div>
    <nav role="navigation">
        <div class="header-link hide-menu"><i class="fa fa-bars"></i></div>
        <div class="small-logo">
            <span class="text-primary">HOMER APP</span>
        </div>
        <form role="search" class="navbar-form-custom" method="post" action="#">
            <div class="form-group">
                <input type="text" placeholder="Search something special" class="form-control" name="search">
            </div>
        </form>
        <div class="mobile-menu">
        <button type="button" class="navbar-toggle mobile-menu-toggle" data-toggle="collapse" data-target="#mobile-collapse">
            <i class="fa fa-chevron-down"></i>
        </button>
        <div class="collapse mobile-navbar" id="mobile-collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a class="" href="login.html">Login</a>
                </li>
                <li>
                    <a class="" href="login.html">Logout</a>
                </li>
                <li>
                    <a class="" href="profile.html">Profile</a>
                </li>
            </ul>
        </div>
    </div>
        <div class="navbar-right">
            <ul class="nav navbar-nav no-borders">
                
                <li class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        <i class="pe-7s-keypad"></i>
                    </a>

                    <div class="dropdown-menu hdropdown bigmenu animated flipInX">
                        <table>
                            <tbody>
                            <tr>
                                <td>
                                    <a href="projects.html">
                                        <i class="pe pe-7s-portfolio text-info"></i>
                                        <h5>Projects</h5>
                                    </a>
                                </td>
                                <td>
                                    <a href="mailbox.html">
                                        <i class="pe pe-7s-mail text-warning"></i>
                                        <h5>Email</h5>
                                    </a>
                                </td>
                                <td>
                                    <a href="contacts.html">
                                        <i class="pe pe-7s-users text-success"></i>
                                        <h5>Contacts</h5>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="forum.html">
                                        <i class="pe pe-7s-comment text-info"></i>
                                        <h5>Forum</h5>
                                    </a>
                                </td>
                                <td>
                                    <a href="analytics.html">
                                        <i class="pe pe-7s-graph1 text-danger"></i>
                                        <h5>Analytics</h5>
                                    </a>
                                </td>
                                <td>
                                    <a href="file_manager.html">
                                        <i class="pe pe-7s-box1 text-success"></i>
                                        <h5>Files</h5>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </li>
               
                <li class="dropdown">
                    <a href="login.html">
                        <i class="pe-7s-upload pe-rotate-90"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<!-- Navigation -->
<aside id="menu">
    <div id="navigation">
        <div class="profile-picture">
            <a href="index.html">
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
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="analytics.html">Analytics</a></li>
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
                <a href="#"><span class="nav-label">Product Setting</span><span class="fa arrow"></span> </a>
                <ul class="nav nav-second-level">
                    <li class="active"><a href="<?= base_url('product')?>"> Product</a></li>
                    <li class="active"><a href="<?= base_url('product/lists')?>"> Product List</a></li>
                   
                    <li><a href="<?= base_url('attribute')?>">Attribute</a></li>
                  
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

            <!-- <li>
                <a href="<?= base_url('pin')?>"> <span class="nav-label">Pin Management</span><span class="label label-warning pull-right">NEW</span> </a>
            </li> -->

           
        </ul>
    </div>
</aside>

<!-- Main Wrapper -->
<div id="wrapper">
<div class="content">
  