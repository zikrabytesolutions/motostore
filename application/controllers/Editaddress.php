<?php
class Editaddress Extends MY_Controller
{

	function __construct() 
	{
		   parent::__construct();
		   $this->load->model( 'userModel' );
	}

	function index()
	{
		$data['address']= $this->userModel->deliveryaddress();
		$this->load->view('edit-address',$data);
	}
}




?>