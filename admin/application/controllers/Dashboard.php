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
        $data['monthorder']= $this->dashboardModel->monthorder();
        $data['todayorder']= $this->dashboardModel->todayorder();
        $data['recentorder']= $this->dashboardModel->recentorder();
        $data['productcount']= $this->dashboardModel->countproduct();
        $data['stock']= $this->dashboardModel->outofstock();
        $data['alluser']= $this->dashboardModel->alluser();
        $this->load->view('header');
        $this->load->view('dashboard',$data);
        $this->load->view('footer');
    }
}


?>