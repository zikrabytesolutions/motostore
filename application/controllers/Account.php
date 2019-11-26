<?php
class Account Extends MY_Controller
{
	function __construct() 
	{
		   parent::__construct();
		   $this->load->model( 'userModel' );
	}

	function index()
	{
		$data['profile']= $this->userModel->profiledetails();
		$this->load->view('accountdetails',$data);
	}


	function updateaccount()
	{
		$data= $this->input->post();
		$userid= $this->session->userdata('motoubid');
	   
		$success= $this->userModel->updateaccoutn($data,$userid);
		if($success)
		{
			unset($data['email']);
			$data['userid']= $userid;
			$data['profiledata']='1';
			$check= $this->userModel->checkaddress($userid);
			if($check)
			{
                $this->session->set_flashdata('msg_error', 'Account Updated' );
				return redirect('account'); 
			}
			else
			{
				$done= $this->userModel->insertaddress($data);
				if($done)
				{
					$this->session->set_flashdata('msg_error', 'Account Updated' );
					return redirect('account'); 
				}
		}	
	  }
	}
	



	function updateaccountadd()
	{
		$data= $this->input->post();
		$userid= $this->session->userdata('motoubid');
	    
		$success= $this->userModel->updateaccoutn($data,$userid);
		if($success)
		{
			$data['name']= $username=$this->userModel->returnname();
			$data['userid']=$userid;
			
			$done= $this->userModel->insertaddress($data);
			if($done)
			{
				// $this->session->set_flashdata('msg_error', 'Account Updated' );
				return redirect('checkout');
			}
			
		  
		}
	   }
		
	}





?>