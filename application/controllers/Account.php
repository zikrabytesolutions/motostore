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
	    $password= $this->input->post('password');
		if($password)
		{   
			 $password= md5($this->input->post('password'));
			 $avlaible= $this->userModel->checkpassword($userid,$password);
			
		     if($avlaible)
		    {
				  if($data['npwd']=='')
				  {
					$this->session->set_flashdata('msg_error', 'New password and confirm password can not be blank' );
					return redirect('account');
				  }
				  else
				  {
			      if(($data['cpwd']!=$data['npwd']))
			       {
				      $this->session->set_flashdata('msg_error', 'Password and confirm password doesnot match' );
				       return redirect('account');
				   }
				   else
				   {
						
						unset($data['cpwd']);
						unset($data['npwd']);
						unset($data['password']);
						$data['password']= md5($this->input->post('npwd'));
                         print_r($data);
						$success= $this->userModel->updateaccoutn($data,$userid);
						if($success)
						{
							$this->session->set_flashdata('msg_error', 'Account Updated' );
							return redirect('account'); 
						}
				   }
				}
		     }
		    else
		    {
				$this->session->set_flashdata('msg_error', 'Current password wrong.' );
				return redirect('account');	
		    }
	   }
	   else
	   {
		unset($data['userid']);
		unset($data['cpwd']);
		unset($data['npwd']);
		unset($data['password']);
		$success= $this->userModel->updateaccoutn($data,$userid);
		if($success)
		{
			$this->session->set_flashdata('msg_error', 'Account Updated' );
		     return redirect('account');
		  
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
			$username=$this->userModel->returnname();
			$done= $this->userModel->insertaddress($data);
			$this->session->set_flashdata('msg_error', 'Account Updated' );
		     return redirect('checkout');
		  
		}
	   }
		
	}





?>