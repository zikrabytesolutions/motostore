<div class="row">
<div class="col-lg-5">
        <div class="hpanel hblue">
            <div class="panel-heading hbuilt">
                <div class="panel-tools">
                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                   
                </div>
                Add Sub Category
            </div>
            
            <div class="panel-body">
      <?php echo form_open('subcategory/addpost');?>
    
           
                      <div class="form-group">
              
              <?php $data = array(
                  'type'  => 'text',
                  'value'=>$cataname,
                  'class' => 'form-control',
                  'readonly'=>'true'
                       );
                       echo form_input($data);
                   ?>
             
          </div>
          <div class="form-group">
              <label for="input-1">Name</label>
              <?php $data = array(
                  'type'  => 'text',
                  'name'  => 'sub_category_name',
                  'placeholder'=> 'Enter Sub- Category Name',
                  'class' => 'form-control'
                       );
                       echo form_input($data);
                   ?>

                  <?php $data = array(
                  'type'  => 'hidden',
                  'name'  => 'cat_id',
                  'value' => $this->uri->segment(3)
                       );
                       echo form_input($data);
                   ?>
                <?php if($this->session->flashdata('item')):?>
              <?php $info= $this->session->flashdata('item');?>
               
                          <span class="text-<?= $info['class']?>"><b><?= $info['message']?> </b> </span>
                         
                      <?php endif;?>
          </div>
         
          
          <div class="form-group" style="float:right">
               <?php echo form_submit('submit', 'create',['class'=>'btn btn-primary px-5']);?>
             
          </div>
     
      </div>
     </form>
    </div>
</div>


<div class="col-lg-7">
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
                  <th>Sub Category</th>
                  <th>Status</th>
                
                  
              </tr>
                    </thead>
                    <tbody>
             <?php $i=0; if($subcategory): foreach($subcategory as $cat): $i++; ?>
              <tr>
                  <td><?= $i?></td>
                  <td><?= $cat->cat_name?></td>
                  <td><?= $cat->sub_category_name?></td>
                  <td>
                      <?php if($cat->status==1):?>
                         <a href ="<?= base_url('subcategory/inactive/'.$cat->id.'/'.$this->uri->segment(3))?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click For In Active"><span class="badge badge-success shadow-success m-1">Active</span></a>
                      <?php else:?>
                      <a href ="<?= base_url('subcategory/active/'.$cat->id.'/'.$this->uri->segment(3))?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click For Active"> <span class="badge badge-danger shadow-danger m-1">In Active</span> </a>
                       <?php endif;?>
                  </td>
                 
                  
              </tr>
                  <?php endforeach;endif;?>

          </tbody>
                </table>
                </div>
        </div>
    </div>
</div>

</div>