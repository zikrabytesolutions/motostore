<?php
class Motocafe extends CI_Controller
{
	function __construct() 
    {
        parent::__construct();
        $this->load->model('cafeModel');
	}

	public function index()
	{
		$data['event']= $this->cafeModel->eventlist();
		$data['gallery']= $this->cafeModel->gallerylist();
		$this->load->view('motocafe',$data);
	}
}



?>