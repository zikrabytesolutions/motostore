<?php 
class Motoexperience extends MY_Controller
{
    function __construct() 
    {
        parent::__construct();
        $this->load->model('experienceModel');
        date_default_timezone_set('Asia/Kolkata');
       
    }


    function place()
    {
        $this->load->view('header');
        $this->load->view('experience/addplace');
        $this->load->view('footer');
    }

    function saveplace()
    {
        if (!$this->form_validation->run('place'))
        {
            $this->load->view('header');
            $this->load->view('experience/addplace');
            $this->load->view('footer');
        }
        else
        {
            $data= $this->input->post();

        }
    }
}

?>