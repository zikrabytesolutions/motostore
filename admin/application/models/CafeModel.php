<?php 
 class CafeModel extends CI_Model
 {
     function insertevent($data)
     {
        return $this->db->insert('cafe_event',$data);
     }
 }
?>