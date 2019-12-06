<?php

class Login extends CI_Controller
 {

	function __construct() 
	{
		   parent::__construct();
           $this->load->model( 'cartModel' );
           $this->load->model( 'userModel' );
	   }

    function index()
    {
        if($this->session->userdata('motoubid'))
        {
            return redirect('order');
        }else{
            $this->load->view( 'login' );
        }
        
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
                            return redirect( 'order' );
						} 
						else
						 {
                            $success =Login::cartprocess();
                            if ( $success )
                            {
                                return redirect( 'order' );
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
            $this->session->set_flashdata( 'msg_error', 'UserId or Password can not be blank' );
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
				   $inserted = $this->cartModel->deletecartiteam( $ds['rowid'] );
			   }
		   }
   
		   if ($inserted)
		   {
			   return true;
		   }
       }
       
       function forgot()
       {
           $this->load->view('forgotpassword');
       }

       function forgotpost()
       {
            $this->load->library( 'form_validation' );
            $this->form_validation->set_rules( 'userid', 'Email/Phone number', 'required' );
            if (!$this->form_validation->run() == TRUE )
            {
                $this->load->view('forgotpassword');
            }
            else
            {
                $userid=$this->input->post('userid');
                $found= $this->userModel->checkuserid($userid);
                if(!$found)
                {
                    $this->session->set_flashdata( 'msg_error', 'Please enter correct Email/Phone number.' );
                    return redirect( 'login/forgot' );   
                }
                else
                {
                    $token=rand(9999,1000);
                    $token=  strtr(base64_encode($token), '+/', '-_');
                    $id= strtr(base64_encode($id), '+/', '-_');
                    $url= base_url('token/verify');
                    //  payment::sendlink($token,$id, $url, $email);
                    $this->session->set_flashdata( 'link', 'Please check your email. we have sent you reset link' );
                    return redirect( 'login/forgot' );   
                }
            }
       }

       function logout()
       {
        $this->session->unset_userdata('motoubid');
        return redirect('home');
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
}

?>