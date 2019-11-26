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
        $this->load->view('header');
        $this->load->view('cafe/addevent');
        $this->load->view('footer');
    }

    function save()
    {
       
        $now = date("Y-m-d H:i:s");
        $data= $this->input->post();
        $unique= uniqid();
        
            $config =  array
                (
                       'upload_path'     => 'assets/eventimages/',
                       'upload_url'      => base_url().'assets/eventimages/',
                       'allowed_types'   => 'jpeg|jpg|png|JPG|PNG',
                       'overwrite'       => TRUE,
                       'file_name'       =>  $unique     
                );
     
                 $this->load->library('upload', $config);
                 $this->upload->do_upload();
                 $data['created']=date("Y-m-d H:i:s");
                 if($this->upload->data())
                 {
                    $filedata=$this->upload->data();
                     $filePath=$unique.$filedata['file_ext'];
                     $data['created']= $now; $data['images']=  $filePath;
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

?>