<div class="row">
    <div class="col-md-5">
   
        <div class="hpanel hblue">
            <div class="panel-heading hbuilt">
                <div class="panel-tools">
                   
                </div>
                User Details
            </div>
            <div class="panel-body">
                <?php if($users): foreach($users as $us):?>
                    <div class="row">
                        <div class="col-md-3"><b> Name </b></div> <div class="col-md-9"><?= $us->name?></div>
                        <div class="col-md-3"><b>  Mobile </b></div> <div class="col-md-9"><?= $us->mobile?></div>
                        <div class="col-md-3"><b>  Email </b></div> <div class="col-md-9"><?= $us->email?></div>
                        <div class="col-md-3"><b>  Status </b></div> <div class="col-md-9">
                        <?php if($us->status==0){ echo "<span style='color:red'>User Not Verified</span>";}
                        else {echo "<span style='color:green'>User Verified</span>";}?>
                        
                        </div>
                    </div>
                <?php endforeach; endif?>
            </div>
            <div class="panel-footer">
               <a href="<?= $this->session->userdata('prev_url');?>"  class="btn btn-primary btn-xs"><i class="fa fa-undo" aria-hidden="true"></i> GO Back</a>
            </div>
        </div>
   
    </div>


    <div class="col-md-7">
   
        <div class="hpanel hblue">
            <div class="panel-heading hbuilt">
                <div class="panel-tools">
                   
                </div>
                Delivery Address & Order Details
            </div>
            <div class="panel-body">
            <div class="row">
                            		<div class="col-md-7">
                            			<?php if($address): foreach($address as $add):?>
                            <span> <b>Name : </b><?= $add->name;?><br> <b>Mobile :</b> <?= $add->mobile?></span><br>
                            <span> <b>Address : </b> <?= $add->streetaddress;?>, <?= $add->streetaddress1;?>, <?= $add->city;?>- <?= $add->postcode;?></span>
                           <?php endforeach; endif;?>
                            		</div>
                            	

                            	
                            		<div class="col-md-5">

							<span >
							    <?php if($summery): foreach($summery as $sumr):?>
									 <b>Order date : </b><?= date("d M, Y", strtotime($sumr->created))?><br>
								 <b>Total  Item :</b> <?= $sumr->iteam?><br>  <b> Grand Total :</b> Rs.<?= $sumr->grand?>
									<?php $status= $sumr->status;?>  <?php $orderid= $sumr->orderid;?>
                                    <?php endforeach; endif;?>
							   </span>
							</div>
				</div>
            </div>
            <div class="panel-footer">
            <?php echo form_open('order/updatestatus')?>
            Update Order Status  
                <select name="status">
                    <option value="0" <?php if($status=='0'){echo "selected";}?>>Pending</option>
                    <option value="1" <?php if($status=='1'){echo "selected";}?>>Accepted</option>
                    <option value="2" <?php if($status=='2'){echo "selected";}?>>Shipped</option>
                    <option value="3" <?php if($status=='3'){echo "selected";}?>>Delivered</option>
                    
                </select>
                
                 <input type="hidden" name="orderid" value="<?= $orderid?>">
                <button type="submit" class="btn btn-primary btn-xs">  Update</button>
                </form>
        </div>
    </div>
    </div>
<?php $ci =& get_instance();?>
    <div class="col-lg-12">
        <div class="hpanel">
            <div class="panel-heading">
                <div class="panel-tools">
                   
                </div>
              Order Details
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                <table cellpadding="1" cellspacing="1" class="table table-bordered table-striped">
                <?php if($orderdetails): foreach($orderdetails as $ds):?>
									<?php $result= $ci->findcartvalue($ds->productid,$ds->variationid);?>
                                       <?php if($result): foreach($result as $rs): ?>
                                      
										<tr>
                                            <td class="column_product_img">
                                                <a href="#">
                                                    <img class="cart__image img-fluid" src="<?= base_url('assets/productimage/'.$rs->photo)?>" width="100px">
                                                </a>
                                            </td>

                                            <td class="column_product_info">
                                                <p>
                                                    <a href="#" style="color:black"><?= $rs->product?></a>
                                                </p>

                                                <div class="cart_item__details">
                                                    <p class="c_item_price"><b>Rs. </b> 
                                                    	<span class="p-prc mr-2"><?= $ds->price?>,</span> <b>Quantity : </b> <span class="p-prc mr-2"><?= $ds->quantity?></span></p>

                                                    <?php  $attribute= $ci->findattributecart($rs->second);?>
                                                       <?php if($attribute): foreach($attribute as $att):?>
                                                        <?php if(strtolower( $att->attribute)!='color'):?>
                                                            <p class="c_item_size">
                                                            	<span class=""><b><?= $att->attribute?> :</b> <?= $att->value_name?></span></p>
                                                    <?php endif; endforeach; endif?>


                                                     <?php  $attribute= $ci->findattributecart($rs->first);?>
                                                       <?php if($attribute): foreach($attribute as $att):?>
                                                        <?php if(strtolower( $att->attribute)=='color'):?>
                                                                <div class="color-choose">
                                                               <?= $att->attribute?> :</b>
                                                                <span ><?= $att->value_name?> </span>
                                                                </div>
                                                        <?php endif; endforeach; endif?>
                                                </div>

                                            </td>

                                            <td class="column_total">
                                                <span class="money" data-currency-usd="$15.00"><b>Rs.<?php echo $ds->total ?></b></span>
                                            </td>

                                        </tr>

									 <?php endforeach; endif;?>
								<?php endforeach; endif;?>
                    </tbody>
                </table>
                </div>

            </div>
           
        </div>
    </div>
   
</div>