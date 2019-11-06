<?php 
  class Subcategory extends MY_Controller
  {
    function __construct() 
    {
        parent::__construct();
        $this->load->model('productSetting');
        // $this->load->library('form_validation');
        date_default_timezone_set('Asia/Kolkata');
    }

    function index()
    {
      $data['subcategory']= $this->productSetting->allsubcategorylist();
      $data['category']= $this->productSetting->categorylist();
     // print_r($data);
      $this->load->view('header');
      $this->load->view('pro_setting/subcategorylist',$data);
      $this->load->view('footer');
    }

     function add($id)
     {
         $data['subcategory']= $this->productSetting->subcategorylist($id);
         $data['cataname']= $this->productSetting->categoryname($id);
        // print_r($data);
         $this->load->view('header');
         $this->load->view('pro_setting/subcategory',$data);
         $this->load->view('footer');
     }

     function addpost()
     {
        $id= $this->session->userdata('motoadsid');
        $catid=$this->input->post('cat_id');
        if (!$this->form_validation->run('subcategory'))
        {
            
            $msg =  validation_errors();
             $this->session->set_flashdata('item', array('message' => $msg,'class' => 'danger'));
             return redirect('subcategory/add/'.$catid);
        }
        else{
            $now = date("Y-m-d H:i:s");
            $data= $this->input->post();
            $data['created']= $now;
            $data['updated']=$now;
            $data['updated_by']=  $id;
            unset($data['submit']);
           $success=$this->productSetting->addsubcategory($data);
           if($success>0)
           {
               $activity= Array('activity_by'=>$id,'title'=>'Sub Category Inserted','codes'=>'2','activity_id'=>$success,'created'=>$now);
               $done = $this->productSetting->categoryactivity($activity);
               if($done)
               {
                $this->session->set_flashdata('item', array('message' => 'Saved successfully','class' => 'success'));
                  return redirect('subcategory/add/'.$catid);
               }
               else
               {
                $this->session->set_flashdata('item', array('message' => 'Somthing Went Wrong','class' => 'warning'));
                return redirect('subcategory/add/'.$catid);
               }
           }
           else
           {
            $this->session->set_flashdata('item', array('message' => 'Category Not Insert','class' => 'danger'));
            return redirect('subcategory/add/'.$catid);
           }


        }
     }

     function inactive($id,$catid='')
     {
          $done = $this->productSetting->disable($id);
          if($done)
          {
            if($catid=='')
            {
              return redirect('subcategory'); 
            }
            else{
              return redirect('subcategory/add/'.$catid); 
            }
          }
     }

     function active($id,$catid='')
     {
          $done = $this->productSetting->enable($id);
          if($done)
          {
            if($catid=='')
            {
              return redirect('subcategory'); 
            }
            else
            {
              return redirect('subcategory/add/'.$catid); 
            }

          }
     }


     function update()
     {
        $id= $this->session->userdata('motoadsid');
        $subcatid= $this->input->post('subcatid');
        if (!$this->form_validation->run('subcategory'))
        {
            $msg= form_error('sub_category_name');
            $ctname= form_error('cat_id');
            $this->session->set_flashdata('udate', array('catname' => $ctname,'message' => $msg,'class' => 'danger','subcatid'=>$subcatid));
            return redirect('subcategory');
        }
        else
        {
            $now = date("Y-m-d H:i:s");
            $subname= $this->input->post('sub_category_name');
            $cat_id= $this->input->post('cat_id');
            $status= $this->input->post(status);
            $data['updated']=$now;
            $data['updated_by']=  $id;
            $updated= $this->productSetting->updatesubcategory($cat_id,$subname,$status,$subcatid);
            if($updated)
            {
                $activity= Array('activity_by'=>$id,'title'=>'Category Updated','codes'=>'2','activity_id'=>$updated,'created'=>$now);
                $this->productSetting->categoryactivity($activity);
                $this->session->set_flashdata('success', array('message' =>'updated Succesfully','check' => 'success'));
                return redirect('subcategory');
            }
            else
            {
                $this->session->set_flashdata('success', array('message' =>'Somthing Went Wrong','check' => 'fail'));
                return redirect('subcategory');
            }
        }
        
     }

  }

?>