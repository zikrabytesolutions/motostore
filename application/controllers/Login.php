<?php 

class Login extends CI_Controller
{
    function index()
    {
        $this->load->view('login');
    }

    function auth()
    {
        $this->load->library('form_validation');
			$this->form_validation->set_rules('userid', 'User Id ', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			if ($this->form_validation->run() == TRUE)
			{  
						$mobile=$this->input->post('userid');
						 $password= md5($this->input->post('password'));
						$this->load->model('loginModel');
						$userid=$this->loginModel->login($mobile,$password);
					   // print_r($userid);
						if ($userid)
							{
							  foreach($userid as $user)
							  {
								if($user->id>0)
								{
									$this->session->set_userdata( 'motoubid' ,$user->id );
									$this->session->set_userdata( 'name' ,$user->name );
									$this->session->set_userdata( 'email' ,$user->email );
									return redirect('dashboard'); 
								}
								else
								{
									$this->session->set_flashdata('msg_error', 'Somthing Went Wrong.');
									return redirect('login');
								}
							}
						}
					  else
					  {
						 $this->session->set_flashdata('msg_error', 'Wrong User Id/Password..');
						 return redirect('login');
						
					   }
			}
			else
			{
			  $this->session->set_flashdata('msg_error', 'Not Blank UserId or Password.');
			  return redirect('login');
		 
			}
    }
}

?>