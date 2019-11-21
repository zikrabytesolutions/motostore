<section class="details_sidebar">
	<h5 class="title-border">
		<img class="pro-img" src="<?= base_url();?>assets/images/testi/t1.jpg" alt="profile_img">
		<?php $id= $this->session->userdata('motoubid');
                                  $this->db->select('name');
                                  $this->db->from('users');
                                  $this->db->where('id',$id);
                                  $name= $this->db->get()->row('name');
                            ?>
		<?= $name?>
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
			<a class="nav-link" href="<?= base_url('login/logout')?>">Logout</a>
		</li>
	</ul>
</section>
