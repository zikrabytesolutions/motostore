<?php 
class DashboardModel extends CI_Model
{
    function countproduct()
    {
        return $this->db->from("product_details")->count_all_results();
    }

    function outofstock()
    {
       return $this->db->where(['stockstatus'=>0])->from("product_details")->count_all_results();
    }

    
}

?>