<?php 
  class UserModel extends CI_Model
  {
      function userlist()
      {
          $this->db->select('*');
          $this->db->from('users');
          $query= $this->db->get();
          return $query->result();
      }

      function emaillist()
      {
        $this->db->select('*');
          $this->db->from('subscribed');
          $query= $this->db->get();
          return $query->result();
      }

      
  }

?>