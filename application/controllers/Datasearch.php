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
                   
              
               if(!isset($row->cat_name))
               {
                    $cid= strtr(base64_encode($row->cat_id), '+/', '-_');
                    $cid=  strtr(base64_encode($cid), '+/', '-_');
                    $cid=  strtr(base64_encode($cid), '+/', '-_');
                   
                         $mins='100'; $maxs='80000'; $atributes='';
                         $mins=  strtr(base64_encode($mins), '+/', '-_');
                         $maxs=  strtr(base64_encode($maxs), '+/', '-_');
                         $data= Array('data'=>$row->id);
                         $subcatid= json_encode($data);
                         $brndat=  strtr(base64_encode($subcatid), '+/', '-_');
                    

                    echo "<li><a href='". base_url('product/lists/'.$cid.'/'.$mins.'/'.$maxs.'/'.$brndat.'/'.$atributes)."'>" . $row->sub_category_name . "</a></li>";
               }
               else
               {
                    $cid= strtr(base64_encode($row->id), '+/', '-_');
                    $cid=  strtr(base64_encode($cid), '+/', '-_');
                    $cid=  strtr(base64_encode($cid), '+/', '-_');
                    $ctid=  strtr(base64_encode('catblank'), '+/', '-_');
                    echo "<li><a href='". base_url('product/lists/'.$cid.'/'.$ctid)."'>" . $row->cat_name . "</a></li>";
               }
                  
              endforeach;
         }
         else
         {
               echo "<li><b> Not found ... </b> </li>";
         }
     }
}

?>
