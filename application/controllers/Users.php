<?php 
class Users extends MY_Controller
{

    function __construct() 
	{
		   parent::__construct();
		   $this->load->model('userModel');
    }
       
    function changepassword()
    {
        $this->load->view('changepassword');
    }


    function update()
    {
        if (!$this->form_validation->run('changepassword') == TRUE )
        {
            $this->load->view('changepassword');
        }
        else
        { 
            $npwd= $this->input->post('npwd');
            $cpwd= $this->input->post('cpwd');
            $id= $this->session->userdata('motoubid');
            $newpassword= md5($npwd);
            $password= md5($this->input->post('password'));
            $matching= $this->userModel->checkpasswords($password,$id);
            
            if($matching)
            {

			      if(($npwd!=$cpwd))
			       {
				      $this->session->set_flashdata('msg_error', 'Password and confirm password doesnot match' );
                      return redirect('users/changepassword');
				   }
				   else
				   {
                        if($newpassword==$password)
                        {
                            $this->session->set_flashdata('msg_error', 'Please enter different from old password' );
                            return redirect('users/changepassword'); 
                           
                        }
                        else
                        {
                            $success= $this->userModel->passwordchange($newpassword,$id);
                            if($success)
                            {
                                $this->session->set_flashdata('msg_error', 'Password Changed' );
                                return redirect('users/changepassword');
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