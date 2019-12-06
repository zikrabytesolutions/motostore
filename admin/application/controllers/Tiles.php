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
                 if (!$this->upload->do_upload())
                {
                   
                    $this->session->set_flashdata('msg_error',  $this->upload->display_errors());
                    return redirect('tiles');

                }
                else
                {
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

function update()
{
        $data= $this->input->post();
        $id= $this->input->post('id');
        $success= $this->DashboardModel->updatetiles($data,$id);
        if($success)
         {
            return redirect('tiles');
         }
}

function delete($id)
{
    $success= $this->DashboardModel->removetiles($id);
    if($success)
     {
        return redirect('tiles');
     }
}
              
    
}


?>