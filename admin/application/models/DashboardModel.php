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

    function alluser()
    {
        return $this->db->from("users")->count_all_results();
    }

    function recentorder()
    {
        $this->db->select('product_order_iteam.*,users.name,users.mobile,product_order.iteam,product_order.grand');
        $this->db->from('product_order_iteam');
        $this->db->join('users','users.id=product_order_iteam.userid');
        $this->db->join('product_order','product_order.orderid=product_order_iteam.orderdid');
        $this->db->group_by('product_order_iteam.orderdid');
        $query=$this->db->get();
        return $query->result();
    }

    
}

?>