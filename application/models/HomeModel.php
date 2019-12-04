<?php 
class HomeModel extends CI_Model{

    function findallcategory()
    {
        $this->db->select('*');
        $this->db->from('home_tiles');
        $query= $this->db->get();
        return $query->result();
    }


      function insertmail($email)
      {
          return $this->db->insert('subscribed',['email'=>$email]);
      }

      function sliderimages()
      {
        $this->db->select('*');
        $this->db->from('slider');
        $query= $this->db->get();
        return $query->result();
      }
   
}

?>