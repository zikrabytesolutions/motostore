<?php 
class Order extends MY_Controller
{
    function __construct() 
    {
        parent::__construct();
        $this->load->model('dashboardModel');
        $this->load->model('orderModel');
    }
    
    function details($orderid,$set='')
    {
        $data['address']= $this->dashboardModel->getdeliveryaddress($orderid);
        $data['orderdetails']=$this->dashboardModel->details($orderid);
        $data['summery']= $this->dashboardModel->getsummery($orderid);
        $data['users']= $this->dashboardModel->getuserdetails($orderid);
        if($set=='')
        {
            $this->session->set_userdata('prev_url',$_SERVER['HTTP_REFERER']);
        }
        $this->load->view('header');
        $this->load->view('order/orderdetails',$data);
        $this->load->view('footer');
    }

    function findcartvalue( $proid, $detailsid )
    {
       return $this->dashboardModel->showtempcartvalue($proid,$detailsid);
    }

    function findattributecart( $data )
     {
        return $this->dashboardModel->attributefind( $data );
     }

     function pending()
     {
        $data['recentorder']=$this->orderModel->pendingorder();
        $this->load->view('header');
        $this->load->view('order/pendingorder',$data);
        $this->load->view('footer');
     }

     function updatestatus()
    {
        $orderid= $this->input->post('orderid');
        $status= $this->input->post('status');

        $data= $this->orderModel->updateorderstatus($orderid, $status);
        if($data)
        {
            $set='done';
            return redirect('order/details/'.$orderid.'/'. $set);
        }
       
    }


    function accepted()
     {
        $data['acceptedorder']=$this->orderModel->acceptorder();
        $this->load->view('header');
        $this->load->view('order/acceptedorder',$data);
        $this->load->view('footer');
     }

     function shipped()
     {
        $data['shippedorder']=$this->orderModel->shippedorder();
        $this->load->view('header');
        $this->load->view('order/shippedorder',$data);
        $this->load->view('footer');
     }

     
     function delivered()
     {
        $data['deliveredorder']=$this->orderModel->deliveredorder();
        $this->load->view('header');
        $this->load->view('order/deliveredorder',$data);
        $this->load->view('footer');
     }

     function search($start='',$to='', $status='')
     {
       if($status=='all')
       {
         $data['acceptedorder']=$this->orderModel->allbystatus($status,$start,$to);
         $data['selectstatus']= $status;
         $this->load->view('header');
         $this->load->view('order/searchorder',$data);
         $this->load->view('footer');
       }
        elseif($status!='')
        {
         $data['acceptedorder']=$this->orderModel->filterorder($status,$start,$to);
         $data['selectstatus']= $status;
         $this->load->view('header');
         $this->load->view('order/searchorder',$data);
         $this->load->view('footer');
        }
        else
        {
         $data['selectstatus']= '';
         $data['acceptedorder']=$this->orderModel->allorderlist();
         $this->load->view('header');
         $this->load->view('order/searchorder',$data);
         $this->load->view('footer');
        }
     
     }

     function filter()
     {
         $status= $this->input->post('status');
         $start= $this->input->post('start');
         $to= $this->input->post('end');
          return redirect('order/search/'.$start.'/'. $to.'/'. $status);
     }
}

?>