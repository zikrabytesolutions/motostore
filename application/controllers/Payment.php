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
            $this->orderModel->addaddress($delivery);
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
                        {
                               $orderid= date('ymdhi').''.$id;
                               $cart_iteam=  $this->orderModel->allcartdata($id);
                               if($cart_iteam)
                               {
                                    foreach($cart_iteam as $crt)
                                    {
                                       $dataiteam = Array('orderdid'=> $orderid, 'userid'=>$id, 'productid'=>$crt->proid, 'variationid'=>$crt->id,
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
                                                 $cartsummery= Array('orderid'=>$orderid,'userid'=>$id,'iteam'=>$ct->iteam,'grand'=>$ct->grandtotal,'created'=>$now);
                                                 $datadone=$this->orderModel->insertorderd($cartsummery);
                                            }
                                            if($datadone)
                                            {
                                                $iteamdelete=$this->orderModel->deletecartiteam($id);
                                                $cartdelete=$this->orderModel->deletecart($id);

                                                if( $iteamdelete && $cartdelete)
                                                {
                                                      return redirect('order');
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
        date_default_timezone_set('Asia/Kolkata');
        $now = date("Y-m-d H:i:s");
        $id= $this->session->userdata('motoubid');
        $orderid= date('ymdhi').''.$id;
        $cart_iteam=  $this->orderModel->allcartdata($id);
        if($cart_iteam)
        {
             foreach($cart_iteam as $crt)
             {
                $dataiteam = Array('orderdid'=> $orderid, 'userid'=>$id, 'productid'=>$crt->proid, 'variationid'=>$crt->id,
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
                          $cartsummery= Array('orderid'=>$orderid,'userid'=>$id,'iteam'=>$ct->iteam,'grand'=>$ct->grandtotal,'created'=>$now);
                          $datadone=$this->orderModel->insertorderd($cartsummery);
                     }
                     if($datadone)
                     {
                         $iteamdelete=$this->orderModel->deletecartiteam($id);
                         $cartdelete=$this->orderModel->deletecart($id);

                         if( $iteamdelete && $cartdelete)
                         {
                               return redirect('order');
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

?>