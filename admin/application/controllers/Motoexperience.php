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
        $data['ridedetails']= $this->experienceModel->ridelist();
        $this->load->view('header');
        $this->load->view('experience/addride',$data);
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

    function saveride()
    {
        $data= $this->input->post();
        $uid=uniqid();
        if(isset($_FILES['userfile']['tmp_name']))
        {
        $config =  array
            (
                   'upload_path'     => 'assets/eventimages/',
                   'upload_url'      => base_url().'assets/eventimages/',
                   'allowed_types'   => 'jpeg|jpg|png|JPG|PNG',
                   'overwrite'       => TRUE,
                   'file_name'       => $uid      
            );
 
             $this->load->library('upload', $config);
             $this->upload->do_upload();
            
             if($this->upload->data())
             {
                $data['created']=date("Y-m-d H:i:s");
                $filedata=$this->upload->data();
                $data['images']=$filePath=$uid.$filedata['file_ext'];
                $success= $this->experienceModel->insertride($data);
                if( $success)
                {
                    $this->session->set_flashdata('link', 'Ride Created successfully');
                    return redirect('motoexperience/ride');
                }
             }
         }   
    }                     

    

    function deleteride($id)
    {
        $success= $this->experienceModel->deleteride($id);
        if( $success)
        {
            $this->session->set_flashdata('link', 'Ride Deleted successfully');
            return redirect('motoexperience/ride');
        }
    }

    function editride($id)
    {
        $data['ridedetails']= $this->experienceModel->filterride($id);
        $this->load->view('header');
        $this->load->view('experience/rideedit',$data);
        $this->load->view('footer');
    }

    function selectedplace($placetype)
    {
        return $this->experienceModel->filterplace($placetype);
    }


    function updateride()
    {
        $data= $this->input->post();
        $id= $this->input->post('id');
        $uid=uniqid();
        if(isset($_FILES['userfile']['tmp_name']))
        {
        $config =  array
            (
                   'upload_path'     => 'assets/eventimages/',
                   'upload_url'      => base_url().'assets/eventimages/',
                   'allowed_types'   => 'jpeg|jpg|png|JPG|PNG',
                   'overwrite'       => TRUE,
                   'file_name'       => $uid      
            );
 
             $this->load->library('upload', $config);
             $this->upload->do_upload();
            
             if($this->upload->data())
             {
               
                $filedata=$this->upload->data();
                $data['images']=$filePath=$uid.$filedata['file_ext'];
                $success= $this->experienceModel->updateride($data,$id);
                if( $success)
                {
                    $this->session->set_flashdata('link', 'Ride Updated successfully');
                    return redirect('motoexperience/editride/'.$id);
                }
             }
         }  
         else
         {
             unset($data['userfile']);
            $success= $this->experienceModel->updateride($data,$id);
            if( $success)
            {
                $this->session->set_flashdata('link', 'Ride Updated successfully');
                return redirect('motoexperience/editride/'.$id);
            }
         } 
    }              
}

?>