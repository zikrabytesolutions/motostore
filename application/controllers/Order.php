
<?php 
class Order extends MY_Controller
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

    function orderlistdetail($orderdid)
    {
       return $this->userModel->myorderlist($orderdid);
    }

    
        function fetch($search)
        {
           echo "hello";
        }
    
}


?>