<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Controller extends CI_Controller 
{

    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('motoubid'))
        { 
            
            $this->session->set_flashdata('failed', 'Session Not Active! Please Login');
			return redirect('login');
          
        }
    }
} 

 
?>