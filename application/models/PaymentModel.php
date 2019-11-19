<?php 
 class PaymentModel extends CI_Model
 {
     function userregister($data)
     {
          $this->db->insert('users',$data);
          return $this->db->insert_id();
     }
 }
?>