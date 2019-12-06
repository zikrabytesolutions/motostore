
<?php 
class Order extends MY_Controller
{
    function __construct() 
	{
		   parent::__construct();
           $this->load->model( 'userModel' );
           $this->load->model( 'cartModel' );
       }
       
    function index()
    {
        $data['recentorder']= $this->userModel->myorder();
        $this->load->view('order',$data);
    }

    function orderdetails($orderdid)
    {
       
        $orderdid= base64_decode(strtr($orderdid, '-_', '+/'));
        $data['address']= $this->userModel->getdeliveryaddress($orderdid);
        $data['orderlist']= $this->userModel->getorderlist($orderdid);
        $data['summery']= $this->userModel->getsummery($orderdid);

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


    function findcartvalue( $proid, $detailsid )
    {

       return $this->cartModel->showtempcartvalue($proid,$detailsid);
    }

    function findattributecart( $data )
     {
        return $this->cartModel->attributefind( $data );
     }

     function cancel($ordid)
     {
        
        $success= $this->cartModel->orderdcancel($ordid);
        if($success)
        {
            $ordid=  strtr(base64_encode($ordid), '+/', '-_');
            return redirect('order/orderdetails/'.$ordid);
        }
     }

    
    
}


?>