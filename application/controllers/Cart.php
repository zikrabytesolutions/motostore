<?php

class Cart extends CI_Controller
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
            $data['proinfo'] = $this->cartModel->cartdata($id); //cartiteam
            $data['cartdata'] = $this->cartModel->carttotal($id); // cart data
            Cart::cartprocess();
            $this->load->view( 'logincart', $data );
           
        }
        else
        {
            $data['proinfo'] = $this->cart->contents();
            $this->load->view( 'cart', $data );
        }
        
        
    }

   function cartlist()
   {
        $proid = $this->input->post( 'proid' );
        $prodetailsid = $this->input->post( 'prodetailsid' );

        $proid = base64_decode( strtr( $proid, '-_', '+/' ) );
        $prodetailsid = base64_decode( strtr( $prodetailsid, '-_', '+/' ) );
        $data = $this->cartModel->findproductdetails( $proid, $prodetailsid );
        if($data['offer_price']==$data['regular_price'])
        {
        $datas = array(
            'id'      =>  $data['id'],
            'proid'      =>  $data['proid'],
            'qty'     => 1,
            'price'   =>$data['regular_price'],
            'name'    => 'Moto Store',

        );
    }
    else
    {
        $datas = array(
            'id'      =>  $data['id'],
            'proid'      =>  $data['proid'],
            'qty'     => 1,
            'price'   =>$data['offer_price'],
            'name'    => 'Moto Store',

        );
    }
        $this->cart->insert( $datas );
        if($this->session->userdata('motoubid'))
        {
            Cart::cartprocess();
            return redirect('cart');
        }
        else
        {
             return redirect('cart');
        }
        
    }

    function findcartvalue( $proid, $detailsid )
     {

        return $this->cartModel->showtempcartvalue($proid,$detailsid );
    }

    function delete( $rowid )
 {
        $data = array(
            'rowid'   => $rowid,
            'qty'     => 0
        );

        $success = $this->cart->update( $data );
        if ( $success )
 {
            return redirect( 'cart' );
        }

    }

    function findattributecart( $data )
     {
        return $this->cartModel->attributefind( $data );
     }

    function addcart( $rowid, $qty )
 {
        $data = array(
            'rowid'   => $rowid,
            'qty'     =>$qty+1,
        );

        $success = $this->cart->update( $data );
        if ( $success )
 {
            return redirect( 'cart' );
        }

    }

    function mincart( $rowid, $qty )
 {
        $data = array(
            'rowid'   => $rowid,
            'qty'     =>$qty-1
        );

        $success = $this->cart->update( $data );
        if ( $success )
 {
            return redirect( 'cart' );
        }

    }


    function loginmincart($rowid,$qty)    //quantity desc
    {
        $iteam= $this->cartModel->cart_iteam($rowid);
        $subtotal= $iteam['subtotal'] - $iteam['price'];
        $data = array('qty' =>$qty-1,'subtotal'=> $subtotal);
        $minus= $this->cartModel->updatecart($data,$rowid); // update cart value
        if($minus)
        {
            $cart= $this->cartModel->cartdetails($iteam['userid']); // return cart value
            if($cart)
            {
                $update= Array('grandtotal'=> $cart['grandtotal']- $iteam['price'] );
                $success= $this->cartModel->updatecartfinal($update,$cart['userid']);
                if($success)
                {
                    return redirect( 'cart' );
                }
 
            }
            else
            {
                echo "somthing went wrong";
            }
        }
        else
        {
            echo "somthing went wrong.";
        }
    }

    function loginaddcart($rowid,$qty)   //quantity desc
    {
        $iteam= $this->cartModel->cart_iteam($rowid);
        $subtotal= $iteam['subtotal'] + $iteam['price'];
        $data = array('qty' =>$qty+1,'subtotal'=> $subtotal);
        $minus= $this->cartModel->updatecart($data,$rowid); // update cart value
        if($minus)
        {
            $cart= $this->cartModel->cartdetails($iteam['userid']); // return cart value
            if($cart)
            {
                $update= Array('grandtotal'=> $cart['grandtotal']+ $iteam['price'] );
                $success= $this->cartModel->updatecartfinal($update,$cart['userid']);
                if($success)
                {
                    return redirect( 'cart' );
                }
 
            }
            else
            {
                echo "somthing went wrong";
            }
        }
        else
        {
            echo "somthing went wrong.";
        }
    }

    function logindelete($rowid)
    {
        
            $id= $this->session->userdata('motoubid');
            $iteam= $this->cartModel->cart_iteam($rowid);
            $cart= $this->cartModel->cartdetails($id);
            $iteams= Array ('iteam'=>$cart['iteam']-1, 'grandtotal'=> $cart['grandtotal'] - $iteam['subtotal']);
            $success= $this->cartModel->updatecartfinal($iteams,$id);
            if( $success)
            {
                $deleted=$this->cartModel->deleteiteam($rowid);
                if($deleted)
                {
                    $iteam= $this->cartModel->carrowcpont($id); // cart iteam less tahn zero
                    if($iteam>0)
                    {
                         return redirect( 'cart' );
                    }
                    else
                    {
                        $deleted= $this->cartModel->deletecart($id);  // delete cart details like grand
                        if($deleted)
                        {
                            return redirect( 'cart' );
                        }
                    }
                    
                }
               
            }
        
    }

    function cartprocess()
	{
		date_default_timezone_set( 'Asia/Kolkata' );
        $now = date( 'Y-m-d H:i:s' );
		   $id = $this->session->userdata( 'motoubid' );
		   $rows = count( $this->cart->contents() );
		   $total = $this->cart->total();
		   $cart = Array( 'userid'=>$id, 'iteam'=>$rows, 'grandtotal'=>$total, 'created'=>$now );
		   $this->cartModel->insertcart( $cart );
		   $data = $this->cart->contents();
		   foreach ($data as $ds)
		  {
			   $data = Array( 'rowid'=>$ds['rowid'], 'userid'=>$id, 'proid'=>$ds['proid'], 'variationid'=>$ds['id'],
			   'qty'=>$ds['qty'], 'price'=>$ds['price'], 'subtotal'=>$ds['subtotal'], 'created'=>$now );
   
			   $insert = $this->cartModel->insertcartiteam( $data );
			   if ($insert)
				{
				   $inserted = $this->cartModel->deletecartiteam( $ds['rowid'] );
			    }
		   }
       }

       function cartadd()
       {
        $proid = $this->input->post( 'proid' );
        $prodetailsid = $this->input->post( 'prodetailsid' );
        $url = $this->input->post( 'url' );

        $proid = base64_decode( strtr( $proid, '-_', '+/' ) );
        $prodetailsid = base64_decode( strtr( $prodetailsid, '-_', '+/' ) );
        $data = $this->cartModel->findproductdetails( $proid, $prodetailsid );
        if($data['offer_price']==$data['regular_price'])
        {
            $datas = array(
                'id'      =>  $data['id'],
                'proid'      =>  $data['proid'],
                'qty'     => 1,
                'price'   =>$data['regular_price'],
                'name'    => 'Moto Store',
    
            );
        }
        else{
            $datas = array(
                'id'      =>  $data['id'],
                'proid'      =>  $data['proid'],
                'qty'     => 1,
                'price'   =>$data['offer_price'],
                'name'    => 'Moto Store',
    
            );
        }
       
        $this->cart->insert( $datas );
        if($this->session->userdata('motoubid'))
        {
            Cart::cartprocess();
            return redirect($url);
        }
        else
        {
            return redirect($url);
        }
       }

}

?>