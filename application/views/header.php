 <script type="text/javascript" src="<?= base_url('assets/js/jquery.js') ?>"></script>
 <header>
			<nav class="navbar navbar-expand-md">
                <div class="container-fluid">
                    <!-- Brand -->
                    <a class="navbar-brand d-block" href="<?= base_url('home')?>"><img class="mx-auto d-block" src="<?= base_url('assets/images/motologo.png')?>"></a>
                    <ul class="nav dsk-hide">
                        <li class="nav-item search-nav">
							           <a class="nav-link search-ico search-ico-d" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                
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
                        $cid= strtr(base64_encode($menue->id), '+/', '-_');
                        $cid=  strtr(base64_encode($cid), '+/', '-_');
                        $cid=  strtr(base64_encode($cid), '+/', '-_');
                        $ctid=  strtr(base64_encode('catblank'), '+/', '-_');

                        $this->db->select('*');
                        $this->db->from('sub_category');
                        $this->db->where('cat_id',$menue->id);
                        $query= $this->db->get();
                        $submenue= $query->result();

                        ?>
                          <li class="nav-item dropdown">
                            <a class="nav-link" href="<?= base_url('product/lists/'.$cid.'/'.$ctid)?>" id="navbarDropdownMenuLink"   aria-haspopup="true" aria-expanded="false"><?= $menue->cat_name?><i class="fa fa-angle-down"></i></a>
                            <div class="dropdown-menu customMenuDrpdwn" aria-labelledby="navbarDropdownMenuLink">
                                <div class="submenu-item">

                                    <ul>
                                          <?php $i=0; if( $submenue): foreach($submenue as $sbm): $i++;?>
                                                 <?php
                                                 $mins='100'; $maxs='80000'; $atributes='';
                                                 $mins=  strtr(base64_encode($mins), '+/', '-_');
                                                 $maxs=  strtr(base64_encode($maxs), '+/', '-_');
                                                    $data= Array('data'=>$sbm->id);
                                                    $subcatid= json_encode($data);
                                                    $brndat=  strtr(base64_encode($subcatid), '+/', '-_');
                                                 ?>
                                            <li><a class="submenu-link" href="<?= base_url('product/lists/'.$cid.'/'.$mins.'/'.$maxs.'/'.$brndat.'/'.$atributes)?>"><?= $sbm->sub_category_name?></a></li>
                                            <?php endforeach; endif?>
                                        </ul>

                                </div>
                        
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
                                  <li><a class="submenu-link" href="#" data-toggle="modal" data-target="#logoutpromt">Logout</a></li>
                                </ul>
                              </div>
                            </div>

                            <?php else:?>
                                <a class="nav-link btn btn-default log-reg_butt" href="<?= base_url('login')?>">Login / Register</a>
                            <?php endif ?>
                        </li>
                    </ul>
                </div>
            </nav>
		</header>
       
        <!-- <style>
           #autoSuggestionsList > li {
    background: none repeat scroll 0 0 #F3F3F3;
    border-bottom: 1px solid #E3E3E3;
    list-style: none outside none;
    padding: 3px 15px 3px 15px;
    text-align: left;
}

#autoSuggestionsList > li a { color: #black; }

.auto_list {
    border: 1px solid #E3E3E3;
    border-radius: 5px 5px 5px 5px;
    position: absolute;
}
        </style> -->
        <div class="search-bar">
          <input type="text" name="search" placeholder="Search here" id="search_data" type="text" onkeyup="ajaxSearch();">
         <a class="nav-link close-ico" href="#"><i class="fa fa-close" aria-hidden="true"></i></a>
         <div id="suggestions">
         <div id="autoSuggestionsList"></div>
     </div>
        
        </div>

        <script type="text/javascript">

function ajaxSearch()
{
    var input_data = $('#search_data').val();

    if (input_data.length === 0)
    {
        $('#suggestions').hide();
    }
    else
    {

        var post_data = {
            'search_data': input_data,
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
            };

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>datasearch/autocomplete/",
            data: post_data,
            success: function (data) {
                // return success
                if (data.length > 0) {
                    $('#suggestions').show();
                    $('#autoSuggestionsList').addClass('auto_list');
                    $('#autoSuggestionsList').html(data);
                }
            }
         });

     }
 }
</script>

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