<?php 
class Event extends MY_Controller
{
    function add()
    {
        $this->load->view('header');
        $this->load->view('cafe/addevent');
        $this->load->view('footer');
    }
}

?>