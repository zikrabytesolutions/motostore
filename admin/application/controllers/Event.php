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
        $title= $this->input->post('title');

        if(!empty($_FILES['files']['name']))
        {
            $filesCount = count($_FILES['files']['name']);
            for($i = 0; $i < $filesCount; $i++)
            {
                $uniqueid=uniqid();
                $_FILES['file']['name']     = $_FILES['files']['name'][$i];
                $_FILES['file']['type']     = $_FILES['files']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                $_FILES['file']['error']     = $_FILES['files']['error'][$i];
                $_FILES['file']['size']     = $_FILES['files']['size'][$i];
                
                // File upload configuration
                $uploadPath = 'assets/eventimages/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['overwrite'] = TRUE;
                $config['file_name'] = $uniqueid;
               
                // Load and initialize upload library
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                
                // Upload file to server
                if($this->upload->do_upload('file'))
                {
                    // Uploaded file data
                    $fileData = $this->upload->data();
                    $uploadData[$i]['image'] = $uniqueid.$fileData['file_ext'];
                    $uploadData[$i]['proid'] = $proid;
                    $uploadData[$i]['prodetailsid'] = $vrtid;
                }
            }
            
            if(!empty($uploadData))
            {
                // Insert files data into the database
                $insert = $this->productSetting->updateimage($uploadData);
                // Upload status message
                $statusMsg = $insert?'Files uploaded successfully.':'Some problem occurred, please try again.';
                $this->session->set_flashdata('statusMsg',$statusMsg);
                return redirect('event/gallery');
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