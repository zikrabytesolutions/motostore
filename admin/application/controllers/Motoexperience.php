<?php 
class Motoexperience extends MY_Controller
{
    function __construct() 
    {
        parent::__construct();
        $this->load->model('experienceModel');
        date_default_timezone_set('Asia/Kolkata');
       
    }


    function place()
    {
        $data['place']= $this->experienceModel->placelist();
        $this->load->view('header');
        $this->load->view('experience/addplace',$data);
        $this->load->view('footer');
    }

    function saveplace()
    {
        if (!$this->form_validation->run('place'))
        {
            $data['place']= $this->experienceModel->placelist();
            $this->load->view('header');
            $this->load->view('experience/addplace',$data);
            $this->load->view('footer');
        }
        else
        {
            $now = date("Y-m-d H:i:s");
            $data= $this->input->post();
            $data['created']= $now;
            $success= $this->experienceModel->insertplace($data);
            if( $success)
            {
                $this->session->set_flashdata('link', 'Place inserted successfully');
                return redirect('motoexperience/place');
            }
        }
    }

    function update()
    {
        $placeid= $this->input->post('id');
        $data= $this->input->post();
        $success= $this->experienceModel->updateplace($data,$placeid);
        
        if( $success)
        {
            $this->session->set_flashdata('update', 'Place Updated.');
            return redirect('motoexperience/place');
        }
    }

    function delete($id)
    {
        $success= $this->experienceModel->deleteplace($id);
        if( $success)
        {
            $this->session->set_flashdata('update', 'Place Deleted.');
            return redirect('motoexperience/place');
        }
    }

    function ride()
    {
        $this->load->view('header');
        $this->load->view('experience/addride');
        $this->load->view('footer');
    }

    function getplace()
    {
        $id=$this->input->post('type');
        $data=$this->experienceModel->placesearch($id);
        echo '<option value="">Select Place</option>';
        foreach($data as $ds)
        {
            echo '<option value="'.$ds->id.'">'.$ds->placename.'</option>';	
        }
    }
}

?>