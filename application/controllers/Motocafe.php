<?php
class Motocafe extends CI_Controller
{
	function __construct() 
    {
        parent::__construct();
        $this->load->model('cafeModel');
	}

	public function view($place='')
	{
		if($place!='')
		{
			$place= base64_decode(strtr($place, '-_', '+/'));
			$place= base64_decode(strtr($place, '-_', '+/'));
			 $truefound=$this->cafeModel->eventlistfilter($place);
			if($truefound)
			{
                $data['selected']=$place;
				$data['event']= $this->cafeModel->eventlistfilter($place);
				$data['select']= $this->cafeModel->locationlink();
				$data['gallery']= $this->cafeModel->gallerylist();
				$this->load->view('motocafe',$data);
			}
			else
			{
                 echo "not found 404 URL Will Comme";
			}
		}
		else
		{
			$data['event']= $this->cafeModel->eventlist();
			$data['select']= $this->cafeModel->locationlink();
			$data['gallery']= $this->cafeModel->gallerylist();
			$data['selected']='';
			$this->load->view('motocafe',$data);
		}
		
	}

	function post()
	{
		 $place= $this->input->post('place');
		 $place=  strtr(base64_encode($place), '+/', '-_');
         $place=  strtr(base64_encode($place), '+/', '-_');
		 return redirect('motocafe/view/'.$place.'#eventblog-sec');
	}
	

	function viewall()
	{
		$data['allimages']= $this->cafeModel->alliamges();
		$this->load->view('viewallgallery',$data);
	}
}



?>