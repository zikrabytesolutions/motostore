<!DOCTYPE html>
<html lang="en">

<head>
    <title>Moto store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include 'css.php'; ?>

</head>

<body>
    <?php $CI = &get_instance(); ?>
    <div class="login">

        <!-- header start -->
        <?php include('header.php');?>
        <div class="login-page py-5">
        	        <div class="col-md-6 offset-md-3">
						<h4 class="title-border clr-black">Login</h4>
						<div class="login-form">	
								<div class="form-group row">
									<div class="col-sm-12">
										<?php if($this->session->flashdata('link')):?>
                                          <div class="alert alert-success"><?= $this->session->flashdata('link')?></div>
                                     <?php endif;?>
                                     <?php if($this->session->flashdata('msg_error')):?>
                                          <div class="alert alert-danger"><?= $this->session->flashdata('msg_error')?></div>
                                     <?php endif;?>
									</div>
								</div>
                               <?php echo form_open('login/auth',['id'=>'motostoreRegisterForm']);?>
							   
								<div class="form-group row">
									<label for="phone" class="col-sm-4 col-form-label">Email/Phone number</label>
									<div class="col-sm-8">
										<input type="tel" class="form-control" id="phone" name="userid" >
									</div>
								</div>		
								<div class="form-group row">
									<label for="password" class="col-sm-4 col-form-label">Password</label>
									<div class="col-sm-8">	
								        <div class="input-group">
								        <input type="password" class="form-control" id="password" name="password" >
								        <div class="input-group-append">
								          <span class="input-group-text" id="showPw"><i class="fa fa-eye" aria-hidden="true"></i></span>
								          <span class="input-group-text" id="hidePw"><i class="fa fa-eye-slash" aria-hidden="true"></i></span>
								         
								        </div>
								      </div>
									</div>
								</div>
								<div class="row">
								   <div class="col-sm-6" >
								      <button style="float:right" type="submit" class="btn btn-default d-block mx-auto">Login</button>
								   </div>
								   <div class="col-sm-6">
								   <a href="<?= base_url('login/forgot')?>">Forgot password</a>
								   </div>
								 </div>
							</form>
							<hr/>
							<div class="text-center">
							New to Motostore?<a href="<?= base_url('signup')?>"> Create an account</a>
							</div>
						</div>
					</div>
        </div>

   
		<?php include('footer.php');?>
		 </div>
		<?php include('js.php');?>
	</body>
	</html>