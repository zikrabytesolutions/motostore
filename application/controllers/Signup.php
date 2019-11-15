<?php 

class Signup extends CI_Controller
{
    function __construct() 
    {
        parent::__construct();
        $this->load->model('loginModel');
    }

    function index()
    {
        $this->load->view('signup');
    }

    function register()
    {
        date_default_timezone_set('Asia/Kolkata');
        $now = date("Y-m-d H:i:s");
        if (!$this->form_validation->run('signup'))
        {
            $this->load->view('signup');
        }
        else
        {
            $password= $this->input->post('password');
            $conpassword= $this->input->post('conpassword');
            if($password!=$conpassword)
            {
                $this->session->set_flashdata('password', 'Password & Confirm Password Doesnot Match');
                $this->load->view('signup');
            }
            $name= $this->input->post('name');
            $mobile= $this->input->post('mobile');
            $email=$this->input->post('email');
            $password= md5($password);

            $data= Array('name'=>$name,'mobile'=>$mobile,'email'=>$email,'password'=>$password,'status'=>'1','created'=>$now);
            $success=$this->loginModel->registeruser($data);
            if($success)
            {
                return redirect('home');
            }
        }
      
    }
}


?>