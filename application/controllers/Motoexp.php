<?php
class Motoexp extends CI_Controller
{
	function index(){
		$this->load->view('motoexp');
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