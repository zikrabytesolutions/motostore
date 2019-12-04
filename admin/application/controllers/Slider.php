<?php 
class Slider extends MY_Controller
{
    function __construct() 
    {
        parent::__construct();
        $this->load->model('cafeModel');
        date_default_timezone_set('Asia/Kolkata');
       
    }

    function index()
    {
        $data['event']= $this->cafeModel->sliderimages();
        $this->load->view('header',$data);
        $this->load->view('slider');
        $this->load->view('footer');
    }

    function add()
    {
        $allimages= $this->cafeModel->countslider();
        if($allimages>=5)
        {
            $this->session->set_flashdata('msg_error', 'You can add only 5 images');
            return redirect('slider');
        }
        $uid=uniqid();
        if(isset($_FILES['userfile']['tmp_name']))
        {
            $config =  array
                (
                       'upload_path'     => 'assets/slider/',
                       'upload_url'      => base_url().'assets/slider/',
                       'allowed_types'   => 'jpeg|jpg|png|JPG|PNG',
                       'overwrite'       => TRUE,
                       'file_name'       => $uid      
                );
     
                 $this->load->library('upload', $config);
                 $this->upload->do_upload();
                
                 if($this->upload->data())
                 {
                   $filedata=$this->upload->data();
                   $images=$filePath=$uid.$filedata['file_ext'];
                   $title= $this->input->post('title');  
                   $success=$this->cafeModel->addslider($title, $images);
                   if($success)
                   {
                      return redirect('slider');
                   }
                   else{
                       echo "data not insert";
                   }
                 }
               
        } 
    }

    function deleteimg($id)
    {
        $success= $this->cafeModel->deleteimage($id);
        if($success)
        {
           return redirect('slider');
        }
    }
}

?>