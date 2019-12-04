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
                $this->session->set_flashdata('password', 'Password & Confirm Password Doe snot match');
                $this->load->view('signup');
            }
            else
            {
                $name= $this->input->post('name');
                $mobile= $this->input->post('mobile');
                $email=$this->input->post('email');
                $password= md5($password);
    
                $data= Array('name'=>$name,'mobile'=>$mobile,'email'=>$email,'password'=>$password,'status'=>'0','created'=>$now);
                $success=$this->loginModel->registeruser($data);
                if($success)
                {
                    $token=rand(9999,1000);
                    $token=  strtr(base64_encode($token), '+/', '-_');
                    $id= strtr(base64_encode($mobile), '+/', '-_');
                    $url= base_url('token/verify');
                    //  payment::sendlink($token,$id, $url, $email);
                    $this->session->set_flashdata('link', 'Check Your Email. We sent confirmation link');
                    return redirect('login');
                }
            }
            
        }
      
    }

    function sendlink($token,$id, $url, $to)
    {
         $subject='Motostore Verification Link';
        $message= 'Click on below link for verifying your accoutn <br>'.
        $headers  = 'From: MyWebsite<info@website.in>' . "\r\n" .
            		'MIME-Version: 1.0' . "\r\n" .
            	    'Content-type: text/html; charset=utf-8';
		mail($to, $subject, $message, $headers,'-finfo@website.in');
    }
}


?>