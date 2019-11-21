<?php 
class User extends MY_Controller
{

    function __construct() 
    {
        parent::__construct();
        $this->load->model('userModel');
    }

    function index()
    {
        $data['userlist']=$this->userModel->userlist();
        $this->load->view('header');
        $this->load->view('userlist',$data);
        $this->load->view('footer');
    }

    function exports_data()
      {$i=0;
        $pincode= $this->userModel->userlist();
          if($pincode)
         { 
            foreach($pincode as $pin)
            {
                $i++;
                $data[] = array('Sr No.'=> $i, 'pin'=>$pin->name, 'place'=> $pin->mobile, 'status'=> $pin->email);
            } 
         } 

         header("Content-type: application/csv");
        header("Content-Disposition: attachment; filename=\"userlist".".csv\"");
        header("Pragma: no-cache");
        header("Expires: 0");

        $handle = fopen('php://output', 'w');

        foreach ($data as $data) {
            fputcsv($handle, $data);
        }
            fclose($handle);
        exit;
    }
}

?>