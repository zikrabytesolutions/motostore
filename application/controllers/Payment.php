<?php
class Payment extends CI_Controller
{

    function __construct() 
	{
           parent::__construct();
           
           $this->load->model( 'paymentModel' );
           $this->load->model('cartModel');
           $this->load->model('orderModel');
       }
       
    function inititate()
    {
        $data= $this->input->post();
        
        if (!$this->form_validation->run('checkout') == TRUE )
        {
            $data['proinfo'] = $this->cart->contents();
            $this->load->view('checkout',$data);
        }
        else
        {

            date_default_timezone_set('Asia/Kolkata');
            $now = date("Y-m-d H:i:s");
            $name= $this->input->post('name');
            $streetaddress= $this->input->post('streetaddress');
            $streetaddress1= $this->input->post('streetaddress1');
            $city= $this->input->post('city');
            $postcode= $this->input->post('postcode');
            $mobile= $this->input->post('mobile');
            $email= $this->input->post('email');
            $password= md5($this->input->post('password'));


            $dname= $this->input->post('dname');
            $dstreetaddress= $this->input->post('dstreetaddress');
            $dstreetaddress1= $this->input->post('dstreetaddress1');
            $dcity= $this->input->post('dcity');
            $dpostcode= $this->input->post('dpostcode');
            $dnotes= $this->input->post('dnotes');
            $dmobile= $this->input->post('dmobile');

            

            $data= Array('name'=>$name,'mobile'=>$mobile,'email'=>$email,'password'=>$password,'city'=>$city,'postcode'=>$postcode,
            'streetaddress'=>$streetaddress,'streetaddress1'=>$streetaddress1,'created'=>$now);
           
            $success= $this->paymentModel->userregister($data);
            $delivery= Array('userid'=>$success,'name'=>$dname,'mobile'=>$dmobile,'city'=>$dcity,'postcode'=>$dpostcode,
            'streetaddress'=>$dstreetaddress,'streetaddress1'=>$dstreetaddress1,'created'=>$now);
           
            $shipping= Array('userid'=>$success,'name'=>$name,'mobile'=>$mobile,'city'=>$city,'postcode'=>$postcode,
            'streetaddress'=>$streetaddress,'streetaddress1'=>$streetaddress1,'created'=>$now);
             $addressid= $this->paymentModel->shippingaddress($shipping);
            if($dname!='')
            {
                $this->orderModel->addaddress($delivery);
            }
            
            if($success)
            {
                        $this->session->set_userdata( 'motoubid', $success);
                        date_default_timezone_set( 'Asia/Kolkata' );
                        $now = date( 'Y-m-d H:i:s' );
                        $id = $this->session->userdata( 'motoubid' );
                        $rows = count( $this->cart->contents() );
                        $total = $this->cart->total();
                        $cart = Array( 'userid'=>$id, 'iteam'=>$rows, 'grandtotal'=>$total, 'created'=>$now );
                        $this->cartModel->insertcart( $cart );
                        $data = $this->cart->contents();
                        foreach ( $data as $ds )
                        {
                                 $data = Array( 'rowid'=>$ds['rowid'], 'userid'=>$id, 'proid'=>$ds['proid'], 'variationid'=>$ds['id'],
                                'qty'=>$ds['qty'], 'price'=>$ds['price'], 'subtotal'=>$ds['subtotal'], 'created'=>$now );
                                 $insert = $this->cartModel->insertcartiteam( $data );
                                if ( $insert )
                                {
                                  $insert = $this->cartModel->deletecartiteam( $ds['rowid'] );
                                }
                        }
                        if ($insert)
                        {      $counts= $this->cartModel->countalluser();
                               $orderid= date('ymdhi').''.$counts;
                               $cart_iteam=  $this->orderModel->allcartdata($id);
                               if($cart_iteam)
                               {
                                    foreach($cart_iteam as $crt)
                                    {
                                       $dataiteam = Array('orderdid'=> $orderid, 'userid'=>$id, 'productid'=>$crt->proid, 'variationid'=>$crt->variationid,
                                       'quantity'=>$crt->qty, 'price'=>$crt->price, 'total'=>$crt->subtotal, 'created'=>$now );
                                       $generate=$this->orderModel->insertorderiteam($dataiteam);
                                    }
                                    if($generate)
                                    {
                                        $cart=$this->orderModel->cartsummery($id);
                                        if($cart)
                                        {
                                            foreach($cart as $ct)
                                            {
                                                 $cartsummery= Array('orderid'=>$orderid,'delivery_address'=> $addressid, 'userid'=>$id,'iteam'=>$ct->iteam,'grand'=>$ct->grandtotal,'created'=>$now);
                                                 $datadone=$this->orderModel->insertorderd($cartsummery);
                                            }
                                            if($datadone)
                                            {
                                                $iteamdelete=$this->orderModel->deletecartiteam($id);
                                                $cartdelete=$this->orderModel->deletecart($id);

                                                if( $iteamdelete && $cartdelete)
                                                {
                                                    $token=rand(9999,1000);
                                                    $token=  strtr(base64_encode($token), '+/', '-_');
                                                    $id= strtr(base64_encode($id), '+/', '-_');
                                                    $url= base_url('token/verify');
                                                    //  payment::sendlink($token,$id, $url, $email);
                                                    return redirect('thankyou/thankyoufirst');
                                                }
                                                else
                                                {
                                                    echo "@$#^$&%*^#%@$#%^$";
                                                }
                                            }
                                        }
                                  }
                          }
                   }
            }
        }
    }

    function sendlink($token,$id, $url, $to)
    {
         $subject='Motostore Verification Link';
        $message= 'Click below on link for verify your accoutn <br>'.
        $headers  = 'From: MyWebsite<info@website.in>' . "\r\n" .
            		'MIME-Version: 1.0' . "\r\n" .
            	    'Content-type: text/html; charset=utf-8';
		mail($to, $subject, $message, $headers,'-finfo@website.in');
    }

    function findcartvalue( $proid, $detailsid )
     {

        return $this->cartModel->showtempcartvalue( $proid, $detailsid );
    }

    function findattributecart( $data )
     {
        return $this->cartModel->attributefind( $data );
     }
     
     function orderplace()
     {
        if (!$this->form_validation->run('logincheck') == TRUE )
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
        }
        else{

        
        date_default_timezone_set('Asia/Kolkata');
        $now = date("Y-m-d H:i:s");
        $id= $this->session->userdata('motoubid');
        $last= $this->paymentModel->rowcounts();
        $orderid= date('ymdhi').''.$last;
        $cart_iteam=  $this->orderModel->allcartdata($id);
        $addid= $this->input->post('daddress');
        if($cart_iteam)
        {
             foreach($cart_iteam as $crt)
             {
                $dataiteam = Array('orderdid'=> $orderid, 'userid'=>$id, 'productid'=>$crt->proid, 'variationid'=>$crt->variationid,
                'quantity'=>$crt->qty, 'price'=>$crt->price, 'total'=>$crt->subtotal, 'created'=>$now );
                $generate=$this->orderModel->insertorderiteam($dataiteam);
             }
             if($generate)
             {
                 $cart=$this->orderModel->cartsummery($id);
                 if($cart)
                 {
                     foreach($cart as $ct)
                     {
                          $cartsummery= Array('orderid'=>$orderid,'userid'=>$id,'iteam'=>$ct->iteam, 'delivery_address'=>$addid,'grand'=>$ct->grandtotal,'created'=>$now);
                          $datadone=$this->orderModel->insertorderd($cartsummery);
                     }
                     if($datadone)
                     {
                         $iteamdelete=$this->orderModel->deletecartiteam($id);
                         $cartdelete=$this->orderModel->deletecart($id);

                         if( $iteamdelete && $cartdelete)
                         {
                            return redirect('thankyou');
                         }
                         else
                         {
                             echo "@$#^$&%*^#%@$#%^$";
                         }
                     }
                 }
           }
   }
}
}
}

?>