<?php 
class User extends MY_Controller
{

    function __construct() 
    {
        parent::__construct();
        $this->load->model('userModel');
    }

    function index()
    {
        $data['userlist']=$this->userModel->userlist();
        $this->load->view('header');
        $this->load->view('userlist',$data);
        $this->load->view('footer');
    }
}

?>