<?php 
class Datasearch extends CI_Controller
{
    public function autocomplete()
    {
         // load model
         $this->load->model('OrderModel');
    
         $search_data = $this->input->post('search_data');
    
         $result = $this->OrderModel->get_autocomplete($search_data);
    
         if (!empty($result))
         {    
              foreach ($result as $row):
               $cid= strtr(base64_encode($row->id), '+/', '-_');
               $cid=  strtr(base64_encode($cid), '+/', '-_');
               $cid=  strtr(base64_encode($cid), '+/', '-_');
               $ctid=  strtr(base64_encode('catblank'), '+/', '-_');
                   echo "<li><a href='". base_url('product/lists/'.$cid.'/'.$ctid)."'>" . $row->cat_name . "</a></li>";
              endforeach;
         }
         else
         {
               echo "<li><b> Not found ... </b> </li>";
         }
     }
}

?>
