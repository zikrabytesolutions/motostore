<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
 {
    function __construct() 
    {
        parent::__construct();
        $this->load->model('homeModel');
	}
	
	function main()
	{
		 $this->load->view('main');
	}
	
	public function index()
	{
        $data['category']= $this->homeModel->findallcategory();
        $data['slider']= $this->homeModel->sliderimages();
		
	// echo "<pre>";
    //       print_r($data);
	// echo "</pre>";
		 $this->load->view('home',$data);
	}

	function emailsave()
    {
           $this->form_validation->set_rules('email', 'Email/Phone number', 'required|is_unique[subscribed.email]' );
            if (!$this->form_validation->run() == TRUE )
            {
                $msg =  validation_errors();
                $this->session->set_flashdata( 'msg_error', $msg);
                return redirect('home');
            }
            else
            {
                $email=$this->input->post('email');
                $success= $this->homeModel->insertmail($email);
                if($success)
                {
                 $this->session->set_flashdata( 'msg_error', 'Thanyou Your Email Received' );
                   return redirect('home');
                }
            }
       
    }
}
