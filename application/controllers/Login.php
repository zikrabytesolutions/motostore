<?php

class Login extends CI_Controller
 {

	function __construct() 
	{
		   parent::__construct();
		   $this->load->model( 'cartModel' );
	   }

    function index()
    {
        $this->load->view( 'login' );
     }

    function auth()
 {
        date_default_timezone_set( 'Asia/Kolkata' );
        $now = date( 'Y-m-d H:i:s' );
        $this->load->library( 'form_validation' );
        $this->form_validation->set_rules( 'userid', 'User Id ', 'required' );
        $this->form_validation->set_rules( 'password', 'Password', 'required' );
        if ( $this->form_validation->run() == TRUE )
        {

            $mobile = $this->input->post( 'userid' );
            $password = md5( $this->input->post( 'password' ) );
            $this->load->model( 'loginModel' );

            $userid = $this->loginModel->login( $mobile, $password );
            // print_r( $userid );
            if ( $userid )
            {
                foreach ( $userid as $user )
                {
                    if ( $user->id>0 )
                    {
                        $this->session->set_userdata( 'motoubid', $user->id );
                        $this->session->set_userdata( 'name', $user->name );
                        $this->session->set_userdata( 'email', $user->email );
                        if ( $this->cart->total_items() == '0' )
                        {
                            return redirect( 'dashboard' );
						} 
						else
						 {
                            $success =Login::cartprocess();
                            if ( $success )
                            {
                                return redirect( 'dashboard' );
                            }
                        }

                    } else {
                        $this->session->set_flashdata( 'msg_error', 'Somthing Went Wrong.' );
                        return redirect( 'login' );
                    }
                }
            } else {
                $this->session->set_flashdata( 'msg_error', 'Wrong User Id/Password..' );
                return redirect( 'login' );

            }
        } else {
            $this->session->set_flashdata( 'msg_error', 'Not Blank UserId or Password.' );
            return redirect( 'login' );

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
   
		   if ( $insert )
		   {
			   return true;
		   }
	   }
}

?>