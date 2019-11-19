
<?php 
class Order extends CI_Controller
{
    function __construct() 
	{
		   parent::__construct();
		   $this->load->model( 'userModel' );
       }
       
    function index()
    {
        $data['recentorder']= $this->userModel->myorder();
        $this->load->view('order',$data);
    }
}


?>