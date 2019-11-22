<header>
			<nav class="navbar navbar-expand-md">
                <div class="container-fluid">
                    <!-- Brand -->
                    <a class="navbar-brand d-block" href="<?= base_url('home')?>"><img class="mx-auto d-block" src="<?= base_url('assets/images/logo.png')?>"></a>
                    <ul class="nav dsk-hide">
                        <li class="nav-item search-nav">
							<a class="nav-link search-ico" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                            <div class="search-bar">
                                <input type="text" name="search">
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="cart-ico"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
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
                       <?php
                       $this->db->select('*');
                       $this->db->from('category');
                       $this->db->limit('6');
                       $query= $this->db->get();
                       $menucat= $query->result();
                       if( $menucat): foreach($menucat as $menue):

                        $this->db->select('*');
                        $this->db->from('sub_category');
                        $this->db->where('cat_id',$menue->id);
                        $query= $this->db->get();
                        $submenue= $query->result();

                        ?>

                          <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $menue->cat_name?><i class="fa fa-angle-down"></i></a>
                            <div class="dropdown-menu customMenuDrpdwn" aria-labelledby="navbarDropdownMenuLink">
                                <div class="submenu-item">

                                    <ul>
                                          <?php  if( $submenue): foreach($submenue as $sbm):?>
                                            <li><a class="submenu-link" href="#"><?= $sbm->sub_category_name?></a></li>
                                            <?php endforeach; endif?>
                                        </ul>

                                </div>
                                <!-- <div class="submenu-item">
                                    <div class="header-megamenu">Brand</div>
                                    <ul>
                                        <li><a class="submenu-link" href="#">Our Staff</a></li>
                                        <li><a class="submenu-link" href="#"> Services</a></li>
                                        <li><a class="submenu-link" href="#">Full-Width Page</a></li>
                                        <li><a class="submenu-link" href="#">Page Left Sidebar</a></li>
                                        <li><a class="submenu-link" href="#">Page Right Sidebar</a></li>
                                    </ul>
                                </div> -->
                            </div>
                          </li>
                       <?php endforeach; endif?>
                        </ul>

                    </div>
                    <ul class="nav mb-hide">
                        <li class="nav-item search-nav">
							<a class="nav-link search-ico" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                           
                        </li>
                        <li class="nav-item">
                           <?php if($this->session->userdata('motoubid')): ?>
                            <?php $cart= $this->db->where(['userid'=>$this->session->userdata('motoubid')])->from("product_cart_iteam")->count_all_results();?>
                            <?php if($cart>0):?>
                            <a class="nav-link" href="<?= base_url('cart')?>" id="cart-ico"><i class="fa fa-shopping-cart" aria-hidden="true"> </i> <small> <?= $cart?>  </small></a>
                            <?php else:?>
                                <a class="nav-link" href="<?= base_url('cart')?>" id="cart-ico"><i class="fa fa-shopping-cart" aria-hidden="true"> </i> </a>
                            <?php endif?>
                           <?php elseif(count($this->cart->contents())>0): ?>
                            <a class="nav-link" href="<?= base_url('cart')?>" id="cart-ico"><i class="fa fa-shopping-cart" aria-hidden="true"> </i> <small> <?= count($this->cart->contents())?></small></a>
                           <?php else:?>
                            <a class="nav-link" href="<?= base_url('cart')?>" id="cart-ico"><i class="fa fa-shopping-cart" aria-hidden="true"> </i> </a>
                           <?php endif?>
                        </li>
                        <li class="nav-item dropdown">
                            <?php if($this->session->userdata('motoubid')):?>
                            <?php $id= $this->session->userdata('motoubid');
                                  $this->db->select('name');
                                  $this->db->from('users');
                                  $this->db->where('id',$id);
                                  $name= $this->db->get()->row('name');
                            ?>
                            <a class="nav-link btn btn-default log-reg_butt" href="<?= base_url('login')?>"><?=substr($name, 0, 8) ?>.. <i class="fa fa-user" aria-hidden="true"></i></a>
                            <div class="dropdown-menu profilemenu" aria-labelledby="navbarDropdownMenuLink">
                              <div class="submenu-item">
                                <ul>
                                  <li><a class="submenu-link" href="<?= base_url('account')?>">My Profile</a></li>
                                  <li><a class="submenu-link" href="<?= base_url('login/logout')?>">Logout</a></li>
                                </ul>
                              </div>
                            </div>

                            <?php else:?>
                                <a class="nav-link btn btn-default log-reg_butt" href="<?= base_url('login')?>">Login / Register</a>
                            <?php endif?>
                        </li>
                    </ul>
                </div>
            </nav>
            <div>
               <div class="search-bar">
                  <input type="text" name="search">
               </div>
            </div>

		</header>
