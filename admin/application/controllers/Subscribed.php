<?php 
class Subscribed extends MY_Controller
{
    
    function __construct() 
    {
        parent::__construct();
        $this->load->model('stockModel');
    }

    function index()
    {
        $data['emaillist']=$this->stockModel->allemaillist();
        $this->load->view('header');
        $this->load->view('emailsuscribed',$data);
        $this->load->view('footer');
    }

    
}

?>