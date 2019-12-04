<?php 
class Brand extends MY_Controller
{

    function __construct() 
    {
        parent::__construct();
        $this->load->model('productSetting');
        date_default_timezone_set('Asia/Kolkata');
    }

     function index()
     {
         $data['brand']= $this->productSetting->brandlist();
        //  print_r($data);
         $this->load->view('header');
         $this->load->view('pro_setting/brand',$data);
         $this->load->view('footer');
     }

     function add()
     {
        $id= $this->session->userdata('motoadsid');
        if (!$this->form_validation->run('brand'))
        {
            $msg =  validation_errors();
            $this->session->set_flashdata('item', array('message' => $msg,'class' => 'danger'));
            return redirect('brand');
        }
        else
        {
            $now = date("Y-m-d H:i:s");
            $data= $this->input->post();
            $data['created']= $now;
            $data['updated']=$now;
            $data['updated_by']=  $id;

           $success=$this->productSetting->addbrand($data);
           if($success>0)
           {
               $activity= Array('activity_by'=>$id,'title'=>'New Brand Inserted','codes'=>'3','activity_id'=>$success,'created'=>$now);
               $done = $this->productSetting->categoryactivity($activity);
               if($done)
               {
                $this->session->set_flashdata('item', array('message' => 'Saved successfully','class' => 'success'));
                  return redirect('brand');
               }
               else
               {
                $this->session->set_flashdata('item', array('message' => 'Somthing Went Wrong','class' => 'warning'));
                return redirect('brand');
               }
           }
           else
           {
            $this->session->set_flashdata('item', array('message' => 'Brand Not Insert','class' => 'danger'));
            return redirect('brand');
           }


        }

         
     }

     function update()
     {
        $id= $this->session->userdata('motoadsid');
        $catid= $this->input->post('brandid');
        if (!$this->form_validation->run('brand'))
        {
            $msg= form_error('cat_name');
            $this->session->set_flashdata('udate', array('message' => $msg,'class' => 'danger','catid'=>$catid));
            return redirect('brand');
        }
        else
        {
            $now = date("Y-m-d H:i:s");
            $brand= $this->input->post(brand);
            $status= $this->input->post(status);
            $data['updated']=$now;
            $data['updated_by']=  $id;
            $updated= $this->productSetting->updatebrand($brand,$status,$catid);
            if($updated)
            {
                $activity= Array('activity_by'=>$id,'title'=>'Brand Updated','codes'=>'1','activity_id'=>$updated,'created'=>$now);
                $this->productSetting->categoryactivity($activity);
                $this->session->set_flashdata('success', array('message' =>'updated Succesfully','check' => 'success'));
                return redirect('brand');
            }
            else
            {
                $this->session->set_flashdata('success', array('message' =>'Somthing Went Wrong','check' => 'fail'));
                return redirect('brand');
            }
        }
        
     }

     function inactive($id)
     {
         $done= $this->productSetting->branddisable($id);
         if($done)
         {
            return redirect('brand');
         }
     }



     function active($id)
     {
         $done= $this->productSetting->brandenable($id);
         if($done)
         {
            return redirect('brand');
         }
     }

     function delete($id)
     {
        $done= $this->productSetting->brandremove($id);
        if($done)
        {
           return redirect('brand');
        }
     }

}

?>