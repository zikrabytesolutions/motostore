<?php
class Motoexprience extends CI_Controller
{
	function __construct() 
	{
		   parent::__construct();
		   $this->load->model( 'exprienceModel' );
	}

	function ride($place='',$placetype='',$enc='')
	{
		if($place=='' && $placetype=='')
		{
			$data['ridedomestic']= $this->exprienceModel->domestic();
			$data['rideinternational']= $this->exprienceModel->international();
			$data['place']=''; $data['placetype']='';
			$this->load->view('motoexp',$data);
		}
		else
		{
			$place= base64_decode(strtr($place, '-_', '+/'));
			$placetype= base64_decode(strtr($placetype, '-_', '+/'));
			$data['place']=$place; $data['placetype']=$placetype;
			$data['result']= $this->exprienceModel->searchfilter($place,$placetype);
		
			$this->load->view('motoexp',$data);
		}
		
	}

	function domestic()
	{
		$data['ridedomestic']= $this->exprienceModel->domesticsall();
		$this->load->view('domesticall',$data);
	}

	function international()
	{
		$data['rideinternational']= $this->exprienceModel->internationalall();
		$this->load->view('internationalall',$data);
	}

	function ridedetail($id)
	{
         $data['details']= $this->exprienceModel->ridedetails($id);
		$this->load->view('ridedetail',$data);
	}

	function getplace()
	{
		
        $id=$this->input->post('type');
        $data=$this->exprienceModel->placesearch($id);
        echo '<option value="">Select Place</option>';
        foreach($data as $ds)
        {
            echo '<option value="'.$ds->id.'">'.$ds->placename.'</option>';	
        }
	}

	function searchpost()
	{
		$place= $this->input->post('place');
		$placetype= $this->input->post('placetype');
		$place=  strtr(base64_encode($place), '+/', '-_');
		$placetype=  strtr(base64_encode($placetype), '+/', '-_');
		$enc=  strtr(base64_encode('encryptionokgotoadmin'), '+/', '-_');
		return redirect('motoexprience/ride/'.$place.'/'.$placetype.'/'.$enc);
	}
}



?>