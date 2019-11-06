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
		
	// echo "<pre>";
    //       print_r($data);
	// echo "</pre>";
		
		
		 $this->load->view('home',$data);
	}
}
