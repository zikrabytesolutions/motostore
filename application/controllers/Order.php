
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

    function orderdetails($orderdid)
    {
       return $this->userModel->myorderlist($orderdid);
    }

    function totalorder($orderdid)
    {
        return $this->userModel->totalorder($orderdid);
    }

    function delete($orderdid)
    {
        $success= $this->userModel->deleteorder($orderdid);
        if($success)
        {
             return redirect('order');
        }
    }

    
    
}


?>