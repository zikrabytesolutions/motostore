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
         if(count($this->cart->contents())>0)
         {
            $data['proinfo'] = $this->cart->contents();
            $this->load->view('checkout',$data);
         }
         else{
             return redirect('cart');
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
}

?>