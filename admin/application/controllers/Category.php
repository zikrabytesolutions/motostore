<?php 

class Category extends MY_Controller
{
    function __construct() 
    {
        parent::__construct();
        $this->load->model('productSetting');
        date_default_timezone_set('Asia/Kolkata');
    }

     function index()
     {
         $data['category']= $this->productSetting->categorylist();
        //  print_r($data);
         $this->load->view('header');
         $this->load->view('pro_setting/category',$data);
         $this->load->view('footer');
     }

     function add()
     {
        $id= $this->session->userdata('motoadsid');
        if (!$this->form_validation->run('category'))
        {
            $msg =  validation_errors();
            $this->session->set_flashdata('item', array('message' => $msg,'class' => 'danger'));
            return redirect('category');
        }
        else{
            $now = date("Y-m-d H:i:s");
            $data= $this->input->post();
            $data['created']= $now;
            $data['updated']=$now;
            $data['updated_by']=  $id;
            unset($data['submit']);
           $success=$this->productSetting->addcategory($data);
           if($success>0)
           {
               $activity= Array('activity_by'=>$id,'title'=>'Category Inserted','codes'=>'1','activity_id'=>$success,'created'=>$now);
               $done = $this->productSetting->categoryactivity($activity);
               if($done)
               {
                $this->session->set_flashdata('item', array('message' => 'Saved successfully','class' => 'success'));
                  return redirect('category');
               }
               else
               {
                $this->session->set_flashdata('item', array('message' => 'Somthing Went Wrong','class' => 'warning'));
                return redirect('category');
               }
           }
           else
           {
            $this->session->set_flashdata('item', array('message' => 'Category Not Insert','class' => 'danger'));
            return redirect('category');
           }

        }
     }


     function update()
     {
        $id= $this->session->userdata('motoadsid');
        $catid= $this->input->post('cat_id');
        if (!$this->form_validation->run('category'))
        {
            $msg= form_error('cat_name');
            $this->session->set_flashdata('udate', array('message' => $msg,'class' => 'danger','catid'=>$catid));
            return redirect('category');
        }
        else
        {
            $now = date("Y-m-d H:i:s");
            $cname= $this->input->post(cat_name);
            $status= $this->input->post(status);
            $data['updated']=$now;
            $data['updated_by']=  $id;
            $updated= $this->productSetting->updatecategory($cname,$status,$catid);
            if($updated)
            {
                $activity= Array('activity_by'=>$id,'title'=>'Category Updated','codes'=>'1','activity_id'=>$updated,'created'=>$now);
                $this->productSetting->categoryactivity($activity);
                $this->session->set_flashdata('success', array('message' =>'updated Succesfully','check' => 'success'));
                return redirect('category');
            }
            else
            {
                $this->session->set_flashdata('success', array('message' =>'Somthing Went Wrong','check' => 'fail'));
                return redirect('category');
            }
        }
        
     }

     function inactive($id)
     {
         $done= $this->productSetting->catdisable($id);
         if($done)
         {
            return redirect('category');
         }
     }



     function active($id)
     {
         $done= $this->productSetting->catenable($id);
         if($done)
         {
            return redirect('category');
         }
     }
}

?>