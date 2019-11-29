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

	function domesticall()
	{
		$this->load->view('domesticall');
	}

	function internationalall()
	{
		$this->load->view('internationalall');
	}

	function ridedetail()
	{
		$this->load->view('ridedetail');
	}
}



?>