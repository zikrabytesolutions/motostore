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

		
		$userid= $this->input->post('userid');
		$password= md5($this->input->post('userid'));
		$avlaible= $this->userModel->checkpassword($userid,$password);
		if($avlaible)
		{
			
			if($data['cpwd']!=$data['npwd'])
			{
				return redirect('account');
			}
		}
		else{
			return redirect('account');
		}
		unset($data['userid']);
		unset($data['cpwd']);
		unset($data['npwd']);
		$data['password']= $avlaible;
		$success= $this->userModel->updateaccoutn($data,$userid);
		if($success)
		{
          return redirect('account');
		}
	}
}




?>