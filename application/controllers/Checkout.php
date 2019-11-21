<?php 
class Checkout extends CI_Controller
{

    
     function __construct() 
     {
        parent::__construct();
        $this->load->model( 'cartModel' );
     }


    function index()
    {
       if($this->session->userdata('motoubid'))
       {
         $id= $this->session->userdata('motoubid');
         $iteam= $this->cartModel->carrowcpont($id);
         if($iteam>0)
         {
              $data['proinfo'] = $this->cartModel->cartdata($id); //cartiteam
              $data['cartdata'] = $this->cartModel->carttotal($id); // cart data
              $data['delivery'] = $this->cartModel->deliveryaddress($id); // delivery address
              $data['billing'] = $this->cartModel->billingaddress($id); // delivery address
             $this->load->view('logincheckout',$data);
            
         }
         else
         {
            return redirect('cart');
         }
         
       }
       else
       {
         if(count($this->cart->contents())>0)
         {
            $data['proinfo'] = $this->cart->contents();
            $this->load->view('checkout',$data);
         }
         else
         {
             return redirect('cart');
         }
    }
   }


    function findcartvalue( $proid, $detailsid )
     {

        return $this->cartModel->showtempcartvalue( $proid, $detailsid );
    }

    function findattributecart( $data )
     {
        return $this->cartModel->attributefind( $data );
     }


     function addshippingaddress()
     {
        $data= $this->input->post();
        $data['userid']=  $id= $this->session->userdata('motoubid');
        $success= $this->cartModel->insertaddress($data);
        if($success)
        {
           return redirect('checkout');
        }
     }
}

?>