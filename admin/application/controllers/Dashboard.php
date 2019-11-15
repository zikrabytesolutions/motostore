<?php 
class Dashboard extends MY_Controller
{
    function __construct() 
    {
        parent::__construct();
        $this->load->model('dashboardModel');
    }

    function index()
    {
        $data['productcount']= $this->dashboardModel->countproduct();
        $data['stock']= $this->dashboardModel->outofstock();
        $this->load->view('header');
        $this->load->view('dashboard',$data);
        $this->load->view('footer');
    }
}


?>