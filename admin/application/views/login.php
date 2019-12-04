<!DOCTYPE html>
<html>


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    
    <title>Moto Store |  Admin </title>


    <!-- Vendor styles -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/fontawesome/css/font-awesome.css')?>" />
    <link rel="stylesheet" href="<?= base_url('assets/vendor/metisMenu/dist/metisMenu.css')?>" />
    <link rel="stylesheet" href="<?= base_url('assets/vendor/animate.css/animate.css')?>" />
    <link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap/dist/css/bootstrap.css')?>" />

    <!-- App styles -->
    <link rel="stylesheet" href="<?= base_url('assets/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')?>" />
    <link rel="stylesheet" href="<?= base_url('assets/fonts/pe-icon-7-stroke/css/helper.css')?>" />
    <link rel="stylesheet" href="<?= base_url('assets/styles/style.css')?>">

</head>
<body class="blank">


<div class="splash"> <div class="color-line"></div><div class="splash-title"><h1>Homer - Responsive Admin Theme</h1><p>Special Admin Theme for small and medium webapp with very clean and aesthetic style and feel. </p><div class="spinner"> <div class="rect1"></div> <div class="rect2"></div> <div class="rect3"></div> <div class="rect4"></div> <div class="rect5"></div> </div> </div> </div>


<div class="color-line"></div>


<div class="login-container">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center m-b-md">
                <h3>Moto Store Admin Login</h3>
            </div>
            <div class="hpanel">
                <div class="panel-body">

                <?php if($this->session->flashdata('msg_error')):?>
                   
                    <div class="alert alert-danger">
                         <i class="fa fa-bolt"></i>    <b><?= $this->session->flashdata('msg_error') ?> </b>
                   </div>
                        
                     <?php endif;?>

					<?php echo form_open('login/validate',['id'=>'loginForm'])?>
                      
                            <div class="form-group">
                                <label class="control-label" for="username">Email ID</label>
                                <input type="text" placeholder="Enter email id" title="Please enter you username" required="" value="" name="userid" id="username" class="form-control">
                                
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                               
                            </div>
                           
                            <button type="submit" class="btn btn-success btn-block">Login</button>
                            
                        </form>
                </div>
            </div>
        </div>
    </div>
    
</div>


<!-- Vendor scripts -->
<script src="<?= base_url('assets/vendor/jquery/dist/jquery.min.js')?>"></script>
<script src="<?= base_url('assets/vendor/jquery-ui/jquery-ui.min.js')?>"></script>
<script src="<?= base_url('assets/vendor/slimScroll/jquery.slimscroll.min.js')?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap/dist/js/bootstrap.min.js')?>"></script>
<script src="<?= base_url('assets/vendor/metisMenu/dist/metisMenu.min.js')?>"></script>
<script src="<?= base_url('assets/vendor/iCheck/icheck.min.js')?>"></script>
<script src="<?= base_url('assets/vendor/sparkline/index.js')?>"></script>

<!-- App scripts -->
<script src="<?= base_url('assets/scripts/homer.js')?>"></script>

</body>

</html>