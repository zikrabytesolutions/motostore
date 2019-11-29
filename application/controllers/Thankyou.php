<?php
class Thankyou extends MY_Controller
{

	function __construct() 
	{
           parent::__construct();
           
           $this->load->model( 'paymentModel' );
	   }
	   
	function index()
	{
		$data['order']=$this->paymentModel->orderinformation();
		$this->load->view('thankyou',$data);
	}


	function thankyoufirst()
	{
		$data['order']=$this->paymentModel->orderinformation();
		$this->load->view('thankyoufirst',$data);
	}
}

?>