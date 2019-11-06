<?php 
class HomeModel extends CI_Model{

    function findallcategory()
    {
        $this->db->select('product.*,category.id as cid');
        $this->db->from('category');
        $this->db->join('product','product.cat_id=category.id');
        $this->db->group_by('product.cat_id');
        $this->db->where('category.status','1');
        $query=$this->db->get();
        return $result=$query->result();
    }

   
}

?>