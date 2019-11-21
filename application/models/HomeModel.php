<?php 
class HomeModel extends CI_Model{

    function findallcategory()
    {
        $this->db->select('*');
        $this->db->from('home_tiles');
        $query= $this->db->get();
        return $query->result();
    }

   
}

?>