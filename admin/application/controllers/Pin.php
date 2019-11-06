<?php
class Pin extends MY_Controller
{

    
    function __construct() 
    {
        parent::__construct();
        $this->load->model('pinModel');
        $this->load->model('productSetting');
        date_default_timezone_set('Asia/Kolkata');
    }

     function index()
     {
        $data['pincode']= $this->pinModel->pinlist();
        //  print_r($data);
         $this->load->view('header');
         $this->load->view('pin/pincode',$data);
         $this->load->view('footer');
        
     }

     function add()
     {
        $id= $this->session->userdata('motoadsid');
        if (!$this->form_validation->run('pin'))
        {
            $msg =  validation_errors();
            $this->session->set_flashdata('item', array('message' => $msg,'class' => 'danger'));
            return redirect('pin');
        }
        else
        {
            $now = date("Y-m-d H:i:s");
            $data= $this->input->post();
            $data['created']= $now;
            $data['updated']=$now;
            $data['updated_by']=  $id;

           $success=$this->pinModel->addpin($data);
           if($success>0)
           {
               $activity= Array('activity_by'=>$id,'title'=>'New Brand Inserted','codes'=>'6','activity_id'=>$success,'created'=>$now);
               $done = $this->productSetting->categoryactivity($activity);
               if($done)
               {
                $this->session->set_flashdata('item', array('message' => 'Saved successfully','class' => 'success'));
                  return redirect('pin');
               }
               else
               {
                $this->session->set_flashdata('item', array('message' => 'Somthing Went Wrong','class' => 'warning'));
                return redirect('pin');
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
       $pinid= $this->input->post('pinid');
       if (!$this->form_validation->run('pin'))
       {
           $msg= form_error('pin');
           $this->session->set_flashdata('udate', array('message' => $msg,'class' => 'danger','pinid'=>$pinid));
           return redirect('pin');
       }
       else
       {
           $now = date("Y-m-d H:i:s");
           $pin= $this->input->post('pin');
           $place= $this->input->post('place');
           $status= $this->input->post('status');
           $data['updated']=$now;
           $data['updated_by']=  $id;
           $updated= $this->pinModel->pinupdate($pin,$place,$status,$pinid);
           if($updated)
           {
               $activity= Array('activity_by'=>$id,'title'=>'Pin Updated','codes'=>'6','activity_id'=>$updated,'created'=>$now);
               $this->productSetting->categoryactivity($activity);
               $this->session->set_flashdata('success', array('message' =>'updated Succesfully','check' => 'success'));
               return redirect('pin');
           }
           else
           {
               $this->session->set_flashdata('success', array('message' =>'Somthing Went Wrong','check' => 'fail'));
               return redirect('pin');
           }
       }
       
    }

     function inactive($id)
     {
         $done= $this->pinModel->disable($id);
         if($done)
         {
            return redirect('pin');
         }
     }



     function active($id)
     {
         $done= $this->pinModel->enable($id);
         if($done)
         {
            return redirect('pin');
         }
     }


     function upload()
     {
            $success= $this->pinModel->uploadData();
            if($success)
            {
                return redirect('pin');
            } 
     }

      function exports_data()
      {$i=0;
        $pincode= $this->pinModel->pinlist();
          if($pincode)
         { 
            foreach($pincode as $pin)
            {
                $i++;
                $data[] = array('Sr No.'=> $i, 'pin'=>$pin->pin, 'place'=> $pin->place, 'status'=> $pin->status);
            } 
         } 

         header("Content-type: application/csv");
        header("Content-Disposition: attachment; filename=\"pincode".".csv\"");
        header("Pragma: no-cache");
        header("Expires: 0");

        $handle = fopen('php://output', 'w');

        foreach ($data as $data) {
            fputcsv($handle, $data);
        }
            fclose($handle);
        exit;
    }
}


?>