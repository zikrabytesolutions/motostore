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
                   echo "<li><a href='#'>" . $row->cat_name . "</a></li>";
              endforeach;
         }
         else
         {
               echo "<li><b> Not found ... </b> </li>";
         }
     }
}

?>