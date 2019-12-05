<div class="row">
<div class="col-lg-6">
        <div class="hpanel hblue">
            <div class="panel-heading hbuilt">
                <div class="panel-tools">
                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                   
                </div>
               Admin Details
            </div>
            <div class="panel-body">
            <div class="table-responsive">
            <?php if($profile): foreach($profile as $pro):?>
               <table class="table">
                  <tr><td>Name</td>  <td> <?= $pro->name?></td> </tr>
                  <tr>  <td>Mobile</td>  <td> <?= $pro->mobile?></td></tr>
                  <tr> <td>Email</td>  <td> <?= $pro->email?></td></tr>
                       
                  </tr>
               </table>
                <?php endforeach; endif?>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-6">
        <div class="hpanel hblue">
            <div class="panel-heading hbuilt">
                <div class="panel-tools">
                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                   
                </div>
               Password Change
            </div>
            
            <div class="panel-body">
            <?php echo form_open('profile/passwordchange');?>
                          <!-- <div class="row"> -->
                          <?php if($this->session->flashdata('msg_error')):?>
                                          <span class="text-danger"><?= $this->session->flashdata('msg_error')?></span>
                                     <?php endif;?>
                      
                            <div class="form-group row">
                  <label for="pwd" class="col-sm-4 col-form-label">Current password</label>
                  <div class="col-sm-8">  
                        <div class="input-group">
                        <input type="password" class="form-control" id="pwd" name="password">
                        
                      </div>
                      <small style="color:red"><?php echo form_error('password'); ?></small> 
                  </div>
                </div>
                <div class="form-group row">
                  <label for="npwd" class="col-sm-4 col-form-label">New password</label>
                  <div class="col-sm-8">  
                        <div class="input-group">
                         <input type="password" class="form-control" id="npwd" name="npwd">
                        
                      </div>
                      <small style="color:red"><?php echo form_error('npwd'); ?></small> 
                  </div>
                </div>
                <div class="form-group row">
                  <label for="cpwd" class="col-sm-4 col-form-label">Confirm new password</label>
                  <div class="col-sm-8">  
                        <div class="input-group">
                         <input type="password" class="form-control" id="cpwd" name="cpwd">
                        
                      </div>
                       <small style="color:red"><?php echo form_error('cpwd'); ?></small>
                  </div>
                </div>
                 <input type="submit" class="btn-default bg-red my-4" value="Save Changes">
             </form>
        </div>
    </div>
</div>




</div>