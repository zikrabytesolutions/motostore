<section class="details_sidebar">
	<h5 class="title-border">
		<img class="pro-img" src="<?= base_url();?>assets/images/testi/t1.jpg" alt="profile_img">
		<?php $id= $this->session->userdata('motoubid');
                                  $this->db->select('name');
                                  $this->db->from('users');
                                  $this->db->where('id',$id);
                                  $name= $this->db->get()->row('name');
                            ?>
		
		<?php
                                                    if(strlen($name)>13)
                                                    {
                                                     echo  $stringCut = substr($name, 0, 13).' ...';
                                                    }
                                                    else{
                                                   echo  $stringCut = substr($name, 0, 13);
                                                    }
                                                    ?> 
	</h5>
	<ul class="nav flex-column detail_ul">
	<?php  $urlcheck= $this->uri->segment(1);?>

		<li class="nav-item <?php if($urlcheck=='order'){echo "active";}?>" >
			<a class="nav-link" href="<?= base_url('order')?>">Orders</a>
		</li>
		<li class="nav-item <?php if($urlcheck=='editaddress'){echo "active";}?>">
			<a class="nav-link" href="<?= base_url('editaddress')?>">Address</a>
		</li>
		<li class="nav-item <?php if($urlcheck=='account'){echo "active";}?>">
			<a class="nav-link" href="<?= base_url('account');?>">Account Details</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">Ride Details</a>
		</li>
    <li class="nav-item">
			<a class="nav-link" href="<?= base_url('users/changepassword')?>" >Change Password</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#" data-toggle="modal" data-target="#logoutpromt">Logout</a>
		</li>
	</ul>
</section>

<div class="modal fade" id="logoutpromt" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h4 class="modal-title" id="myModalLabel">Logout!</h4>
      </div>
      <div class="modal-body">
         <h4 style="color:red"> Are you sure you want to logout?</h4>
      </div>
      <div class="modal-footer">
        <a type="button" class="btn btn-warning" data-dismiss="modal">No</a>
        <a href="<?= base_url('login/logout/')?>" class="btn btn-default" >Yes</a>
      </div>

    </div>
  </div>
</div>
