<?php 
class Event extends MY_Controller
{
    
    function __construct() 
    {
        parent::__construct();
        $this->load->model('cafeModel');
        date_default_timezone_set('Asia/Kolkata');
       
    }

    function add()
    {
       $data['event']= $this->cafeModel->eventlist();
        $this->load->view('header');
        $this->load->view('cafe/addevent',$data);
        $this->load->view('footer');
    }

    function save()
    {
        $data= $this->input->post();
        $uid=uniqid();
     
        if(isset($_FILES['userfile']['tmp_name']))
        {
          
            $config =  array
                (
                       'upload_path'     => 'assets/eventimages/',
                       'upload_url'      => base_url().'assets/eventimages/',
                       'allowed_types'   => 'jpeg|jpg|png|JPG|PNG',
                       'overwrite'       => TRUE,
                       'file_name'       => $uid      
                );
     
                 $this->load->library('upload', $config);
                 $this->upload->do_upload();
                
                 if($this->upload->data())
                 {
                    $data['created']=date("Y-m-d H:i:s");
                    $filedata=$this->upload->data();
                   $data['images']=$filePath=$uid.$filedata['file_ext'];
                   $success=$this->cafeModel->insertevent($data);
                   if($success)
                   {
                      return redirect('event/add');
                   }
                   else{
                       echo "data not insert";
                   }
                 }
               
        }                     
    }

    function gallery()
    {
        $data['event']= $this->cafeModel->gallerylist();
        $this->load->view('header');
        $this->load->view('cafe/gallery',$data);
        $this->load->view('footer');
    }

    function on($id)
    {
        $success=$this->cafeModel->onevent($id);
        if($success)
        {
           return redirect('event/add');
        }
    }

    function off($id)
    {
        $success=$this->cafeModel->offevent($id);
        if($success)
        {
           return redirect('event/add');
        }
    }

    function delete($id)
    {
        $success=$this->cafeModel->deleteevent($id);
        if($success)
        {
           return redirect('event/add');
        }
    }

    function gallerysave()
    {
        $data= $this->input->post();
        $uid=uniqid();
     
        if(isset($_FILES['userfile']['tmp_name']))
        {
          
            $config =  array
                (
                       'upload_path'     => 'assets/eventimages/',
                       'upload_url'      => base_url().'assets/eventimages/',
                       'allowed_types'   => 'jpeg|jpg|png|JPG|PNG',
                       'overwrite'       => TRUE,
                       'file_name'       => $uid      
                );
     
                 $this->load->library('upload', $config);
                 $this->upload->do_upload();
                
                 if($this->upload->data())
                 {
                    $data['created']=date("Y-m-d H:i:s");
                    $filedata=$this->upload->data();
                   $data['images']=$filePath=$uid.$filedata['file_ext'];
                   $success=$this->cafeModel->insertgallery($data);
                   if($success)
                   {
                      return redirect('event/gallery');
                   }
                   else{
                       echo "data not insert";
                   }
                 }
               
        } 
    }

    function onimg($id)
    {
        $success=$this->cafeModel->oneventimg($id);
        if($success)
        {
           return redirect('event/gallery');
        }
    }

    function offimg($id)
    {
        $success=$this->cafeModel->offeventimg($id);
        if($success)
        {
           return redirect('event/gallery');
        }
    }

    function deleteimg($id)
    {
        $success=$this->cafeModel->deleteeventimg($id);
        if($success)
        {
           return redirect('event/gallery');
        }
    }

}

?>