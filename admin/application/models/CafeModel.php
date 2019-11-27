<?php 
 class CafeModel extends CI_Model
 {
     function insertevent($data)
     {
        return $this->db->insert('cafe_event',$data);
     }

     function eventlist()
     {
         $this->db->select('*');
         $this->db->from('cafe_event');
         $query= $this->db->get();
         return $query->result();

     }
 }
?>