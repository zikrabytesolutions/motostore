
    
    <!-- End Breadcrumb-->
    <div class="row">

    <div class="col-lg-12">
        <div class="hpanel hblue">
            <div class="panel-heading hbuilt">
                <div class="panel-tools">
                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                   
                </div>
               Sub category List
            </div>
            <div class="panel-body">
            <div class="table-responsive">
                <table cellpadding="1" cellspacing="1" class="table table-bordered table-striped">
                      <thead>
                    <tr>
                        <th>#</th>
                        <th>Category</th>
                        <th>Sub category</th>
                        <th>Status</th>
                        <th>Action</th>
                        
                    </tr>
                 </thead>
                 <tbody>
             <?php $i=0; if($subcategory): foreach($subcategory as $cat): $i++; ?>
              <tr>
                  <td><?= $i?></td>
                  <td>
                            <a  href="<?= base_url('subcategory/add/'.$cat->cid)?>" data-toggle="tooltip" data-placement="top" title="Add Sub Category" style="color:#8173ff">
                             <u> <?= $cat->cat_name?> </u>
                            </td>
                  <td><?= $cat->sub_category_name?></td>
                  <td>
                      <?php if($cat->status==1):?>
                         <a href ="<?= base_url('subcategory/inactive/'.$cat->id)?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click For In Active"><span class="badge badge-success shadow-success m-1">Active</span></a>
                      <?php else:?>
                      <a href ="<?= base_url('subcategory/active/'.$cat->id)?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click For Active"> <span class="badge badge-danger shadow-danger m-1">In Active</span> </a>
                       <?php endif;?>
                  </td>
                  <td>
                  
                  <button class="btn btn-danger btn-xs" type="button" data-toggle="modal" data-target="#myModal<?= $cat->id?>"><i class="fa fa-pencil"></i></button>
                  <button class="btn btn-warning btn-xs" type="button" data-toggle="modal" data-target="#myModal2<?=$cat->id?>"><i class="fa fa-trash"></i></button>
                  </td>
              </tr>

              <div class="modal fade hmodal-warning" id="myModal<?=$cat->id?>" tabindex="-1" role="dialog"  aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content animated bounceIn">
                            <div class="color-line"></div>
                            <div class="modal-header">
                                <h5 class="modal-title">Edit <?= $cat->sub_category_name?></strong> </h5>
                                <small class="font-bold"></small>
                            </div>
                            <?php echo form_open('subcategory/update');?>
                      <div class="modal-body">
                         <div class="row">
                             <div class="col-md-12">
                                        <div class="form-group">
                                        <label for="input-1">Category</label>
                                        <?php 
                                             if($category):
                                                $data['row'] = array();
                                                $row[''] = 'Select Category';
                                                foreach($category as $cats):
                                                    $row[$cats->id] = $cats->cat_name;
                                                endforeach; endif;
                                                $formclass = array('class'=>'form-control','onChange'=>'getsubcat(this.value)');
                                                echo form_dropdown('cat_id', $row,$cat->cid, $formclass);
                                                ?>
                                                <?php if($this->session->flashdata('udate')):?>
                                        <?php $up= $this->session->flashdata('udate');?>
                                           <span class="text-<?= $up['class']?>"> <?= $up['catname']?> </span>
                                          <?php endif;?> 
                                    </div>
                                   
                                 <div class="form-group">
                                    <label for="input-1">Sub Category Name</label>
                                       <?php $ctname = array(
                                         'type'  => 'text',
                                         'name'  => 'sub_category_name',
                                         'required'  => 'require',
                                         'value' =>  $cat->sub_category_name,
                                          'placeholder'=> 'Enter Sub Category Name',
                                          'class' => 'form-control'
                                        );
                                        echo form_input($ctname);
                                    ?>

                                      <?php $ctstatus = array(
                                         'type'  => 'hidden',
                                         'name'  => 'subcatid',
                                         'value' =>  $cat->id
                                        );
                                        echo form_input($ctstatus);
                                    ?>
                                    <?php if($this->session->flashdata('udate')):?>
                                        <?php $up= $this->session->flashdata('udate');?>
                                           <span class="text-<?= $up['class']?>"> <?= $up['message']?> </span>
                                          <?php endif;?>
                                    </div>
                             </div>
                            
                              <div class="col-md-12">
                              <div class="form-group">
                                    <label for="input-2">Status</label>
                                      <?php 
                                          $options = array(
                                            '1'  => 'Active',
                                            '0'  => 'In Active',
                                          );
                                    $formclass = array('class'=>'form-control');
                                    echo form_dropdown('status', $options,'1', $formclass);
                                      ?>
                                </div>
                              </div>

                         </div>
                    </div>
                            <div class="modal-footer">
                              
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                          </form>
                        </div>
                    </div>
                </div>  
            <?php endforeach;endif;?>

          </tbody>
                </table>
                </div>
        </div>
    </div>
</div>
</div><!-- End Row-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
      <?php if($this->session->flashdata('udate')):?>
      <?php $data= $this->session->flashdata('udate'); ?>
          <script>
           $(document).ready(function () 
              {
                $('#myModal<?= $data['subcatid']?>').modal('show');
              });
                 
          </script>
      <?php endif; ?>
