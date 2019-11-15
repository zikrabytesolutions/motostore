<?php

class Stock extends MY_Controller
{
    function __construct() 
    {
        parent::__construct();
        $this->load->model('stockModel');
    }

    function index()
    {
        $data['stock']=$this->stockModel->stockmanagement();
        $this->load->view('header');
        $this->load->view('stock',$data);
        $this->load->view('footer');
    }

    function firstattribute($first)
    {
        return $this->stockModel->firstattribute($first);
    }

    function secondattribute($second)
    {
        return $this->stockModel->secondattribute($second);
    }

    function out($id)
    {
        $success= $this->stockModel->outofstock($id);
        if($success)
        {
            return redirect('stock');  
        }
        else{
            echo "Somthing Went Wromg";
        }
    }

    function ins($id)
    {
        $success= $this->stockModel->instock($id);
        if($success)
        {
            return redirect('stock');  
        }
        else{
            echo "Somthing Went Wromg";
        }
    }
}


?>