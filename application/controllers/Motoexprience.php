<?php
class Motoexprience extends CI_Controller
{
	function __construct() 
	{
		   parent::__construct();
		   $this->load->model( 'exprienceModel' );
	}

	function ride()
	{
		$data['ridedomestic']= $this->exprienceModel->domestic();
		$data['rideinternational']= $this->exprienceModel->international();
		$this->load->view('motoexp',$data);
	}

	function domestic()
	{
		$data['ridedomestic']= $this->exprienceModel->domesticsall();
		$this->load->view('domesticall',$data);
	}

	function international()
	{
		$data['rideinternational']= $this->exprienceModel->internationalall();
		$this->load->view('internationalall',$data);
	}

	function ridedetail()
	{
		$this->load->view('ridedetail');
	}
}



?>