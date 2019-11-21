<?php 
class Tiles extends My_Controller
{
    function __construct() 
    {
        parent::__construct();
        $this->load->model('DashboardModel');
        date_default_timezone_set('Asia/Kolkata');
    }

    function index()
    {
        $data['category']=$this->DashboardModel->categorylist();
        $data['tiles']=$this->DashboardModel->tileslist();
        $this->load->view('header');
        $this->load->view('hometiles',$data);
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
                       'upload_path'     => 'assets/productimage/',
                       'upload_url'      => base_url().'assets/productimage/',
                       'allowed_types'   => 'jpeg|jpg|png|JPG|PNG',
                       'overwrite'       => TRUE,
                       'file_name'       => $uid      
                );
     
                 $this->load->library('upload', $config);
                 $this->upload->do_upload();
                
                 if($this->upload->data())
                 {
                    $filedata=$this->upload->data();
                   $data['image']=$filePath=$uid.$filedata['file_ext'];
                     $success= $this->DashboardModel->inserttiles($data);
                     if($success)
                     {
                      return redirect('tiles');
                     }
                 }
               
        }
                         
                       
}
              
    
}


?>