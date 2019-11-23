<?php 

class Checkoutlogin extends CI_Controller
{

    

    function checkauth()
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
                            return redirect( 'checkout' );
						} 
						else
						 {
                            $success =Login::cartprocess();
                            if ( $success )
                            {
                                return redirect( 'checkout' );
                            }
                        }

                    } else {
                        $this->session->set_flashdata( 'msg_error', 'Somthing Went Wrong.' );
                        return redirect( 'checkout' );
                    }
                }
            } else {
                $this->session->set_flashdata( 'msg_error', 'Wrong User Id/Password..' );
                return redirect( 'checkout' );

            }
        } else {
            $this->session->set_flashdata( 'msg_error', 'UserId or Password can not be blank' );
            return redirect( 'checkout' );

        }
	}
}


?>