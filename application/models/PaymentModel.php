<?php 
 class PaymentModel extends CI_Model
 {
     function userregister($data)
     {
          $this->db->insert('users',$data);
          return $this->db->insert_id();
     }

     function rowcounts()
     {
        return $this->db->from("users")->count_all_results();
     }
 }
?>