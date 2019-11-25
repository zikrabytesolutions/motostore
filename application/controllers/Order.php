
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
       $orderid= base64_decode( strtr( $orderdid, '-_', '+/' ) );
       $data['address']= $this->userModel->getdeliveryaddress($orderid);
       $data['orderlist']= $this->userModel->getorderlist($orderid);
    //    print_r($data);
       $this->load->view('orderdetails',$data);
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