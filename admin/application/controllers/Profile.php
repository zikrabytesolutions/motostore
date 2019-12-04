<?php 
class Profile extends MY_Controller
{

    function __construct() 
    {
        parent::__construct();
        $this->load->model('loginModel');
        date_default_timezone_set('Asia/Kolkata');
       
    }

    function index()
    {
        $data['profile']= $this->loginModel->userdetails();
        $this->load->view('header');
        $this->load->view('adminprofile',$data);
        $this->load->view('footer');
    }

    function passwordchange()
    {
        if (!$this->form_validation->run('changepassword') == TRUE )
        {
            $this->load->view('changepassword');
        }
        else
        { 
            $npwd= $this->input->post('npwd');
            $cpwd= $this->input->post('cpwd');
            $id= $this->session->userdata('motoadsid');
           
            $password= $this->input->post('password');
            $matching= $this->loginModel->checkpasswords($password,$id);
            if($matching)
            {

			      if(($npwd!=$cpwd))
			       {
				      $this->session->set_flashdata('msg_error', 'Password and confirm password doesnot match' );
                      return redirect('profile');
				   }
				   else
				   {
                        if($npwd==$password)
                        {
                            $this->session->set_flashdata('msg_error', 'Please enter different from old password' );
                            return redirect('profile'); 
                           
                        }
                        else
                        {
                            $success= $this->loginModel->passwordchange($newpassword,$id);
                            if($success)
                            {
                                $this->session->set_flashdata('msg_error', 'Password Changed' );
                                return redirect('profile');
                            }
                            
                        }
						
				   }
				
            }
            else
            {    $this->session->set_flashdata('msg_error', 'Your current password is Wrong' );
                return redirect('users/changepassword'); 
            }

        }
    }
}

?>