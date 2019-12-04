<?php 

class Attribute extends MY_Controller
{
    function __construct() 
    {
        parent::__construct();
        $this->load->model('productSetting');
        date_default_timezone_set('Asia/Kolkata');
    }

     function index()
     {
         $data['attribute']= $this->productSetting->attributelist();
        //  print_r($data);
        $this->load->view('header');
        $this->load->view('pro_setting/attribute',$data);
        $this->load->view('footer');
     }

     function add()
     {
        $id= $this->session->userdata('motoadsid');
        if (!$this->form_validation->run('attribute'))
        {
            $msg =  validation_errors();
            $this->session->set_flashdata('item', array('message' => $msg,'class' => 'danger'));
            return redirect('attribute');
        }
        else{
            $now = date("Y-m-d H:i:s");
            $data= $this->input->post();
            $data['created']= $now;
            $data['updated']=$now;
            $data['created_by']=  $id;
            unset($data['submit']);
           $success=$this->productSetting->addattribute($data);
           if($success>0)
           {
               $activity= Array('activity_by'=>$id,'title'=>'Attribute Inserted','codes'=>'4','activity_id'=>$success,'created'=>$now);
               $done = $this->productSetting->categoryactivity($activity);
               if($done)
               {
                $this->session->set_flashdata('item', array('message' => 'Saved successfully','class' => 'success'));
                  return redirect('attribute');
               }
               else
               {
                $this->session->set_flashdata('item', array('message' => 'Somthing Went Wrong','class' => 'warning'));
                return redirect('attribute');
               }
           }
           else
           {
            $this->session->set_flashdata('item', array('message' => 'Category Not Insert','class' => 'danger'));
            return redirect('attribute');
           }

        }
     }


     function update()
     {
        $id= $this->session->userdata('motoadsid');
        $atid= $this->input->post('atid');
        if (!$this->form_validation->run('attribute'))
        {
            $msg= form_error('cat_name');
            $this->session->set_flashdata('udate', array('message' => $msg,'class' => 'danger','catid'=>$catid));
            return redirect('attribute');
        }
        else
        {
            $now = date("Y-m-d H:i:s");
            $attribute= $this->input->post('attribute');
            $status= $this->input->post(status);
            $data['updated']=$now;
            $data['updated_by']=  $id;
            $updated= $this->productSetting->updateattribute($attribute,$status,$atid);
            if($updated)
            {
                $activity= Array('activity_by'=>$id,'title'=>'Attribute Updated','codes'=>'4','activity_id'=>$updated,'created'=>$now);
                $this->productSetting->categoryactivity($activity);
                $this->session->set_flashdata('success', array('message' =>'updated Succesfully','check' => 'success'));
                return redirect('attribute');
            }
            else
            {
                $this->session->set_flashdata('success', array('message' =>'Somthing Went Wrong','check' => 'fail'));
                return redirect('attribute');
            }
        }
        
     }

     function inactive($id)
     {
         $done= $this->productSetting->attdisable($id);
         if($done)
         {
            return redirect('attribute');
         }
     }

     function active($id)
     {
         $done= $this->productSetting->attenable($id);
         if($done)
         {
            return redirect('attribute');
         }
     }

     function config($id)
     {
        $data['attribute']= $this->productSetting->attributeone($id);
        $data['attribute_value']= $this->productSetting->attributevalue($id);
        $this->load->view('header');
        $this->load->view('pro_setting/configuration',$data);
        $this->load->view('footer');
     }

     function configpost()
     {
         $attributeid= $this->input->post('attribute_id');
      
        $id= $this->session->userdata('motoadsid');
        if (!$this->form_validation->run('attribute_value'))
        {
            $msg =  validation_errors();
            $this->session->set_flashdata('item', array('message' => $msg,'class' => 'danger'));
            return redirect('attribute/config/'.$attributeid);
        }
        else
        {
            $now = date("Y-m-d H:i:s");
            $data= $this->input->post();
            $data['created']= $now;
           
            unset($data['submit']);
           $success=$this->productSetting->addattributevalue($data);
           if($success>0)
           {
               $activity= Array('activity_by'=>$id,'title'=>'Attribute Value Inserted','codes'=>'5','activity_id'=>$success,'created'=>$now);
               $done = $this->productSetting->categoryactivity($activity);
               if($done)
               {
                $this->session->set_flashdata('item', array('message' => 'Saved successfully','class' => 'success'));
                return redirect('attribute/config/'.$attributeid);
               }
               else
               {
                $this->session->set_flashdata('item', array('message' => 'Somthing Went Wrong','class' => 'warning'));
                return redirect('attribute/config/'.$attributeid);
               }
           }
           else
           {
            $this->session->set_flashdata('item', array('message' => 'Category Not Insert','class' => 'danger'));
            return redirect('attribute/config/'.$attributeid);
           }

        }
     }

     function configupdate()
     {
        $id= $this->session->userdata('motoadsid');
        $atid= $this->input->post('atid');
        if (!$this->form_validation->run('attribute_value'))
        {
            $msg= form_error('cat_name');
            $this->session->set_flashdata('udate', array('message' => $msg,'class' => 'danger','catid'=>$atid));
            return redirect('attribute/config/'.$atid);
        }
        else
        {
            $now = date("Y-m-d H:i:s");
            $attribute= $this->input->post();
             unset($attribute['atid']);
            $updated= $this->productSetting->updateattribute_value($attribute,$atid);
            if($updated)
            {
                $activity= Array('activity_by'=>$id,'title'=>'Attribute Updated','codes'=>'4','activity_id'=>$updated,'created'=>$now);
                $this->productSetting->categoryactivity($activity);
                $this->session->set_flashdata('success', array('message' =>'updated Succesfully','check' => 'success'));
                return redirect('attribute/config/'.$atid);
            }
            else
            {
                $this->session->set_flashdata('success', array('message' =>'Somthing Went Wrong','check' => 'fail'));
                return redirect('attribute/config/'.$atid);
            }
        }
     }


     function inactivevalue($id,$atid)
     {
         $done= $this->productSetting->attdisableval($id);
         if($done)
         {
            return redirect('attribute/config/'.$atid);
         }
     }

     function activevalue($id,$atid)
     {
         $done= $this->productSetting->attenableval($id);
         if($done)
         {
            return redirect('attribute/config/'.$atid);
         }
     }


     function delete($id)
     {
        $done= $this->productSetting->attdelete($id);
        if($done)
        {
           return redirect('attribute');
        }
     }

     function configdelete($id,$attid)
     {
        $done= $this->productSetting->configdelete($id);
        if($done)
        {
           return redirect('attribute/config/'.$attid);
        }
     }
}

?>