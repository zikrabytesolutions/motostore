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

     function orderinformation()
     {
         $this->db->select('product_order_iteam.*,product_order.grand,product_order.iteam');
         $this->db->from('product_order_iteam');
         $this->db->join('product_order','product_order.orderid=product_order_iteam.orderdid');
         $this->db->order_by('product_order_iteam.id','DESC');
         $this->db->limit('1');
         $query= $this->db->get();
         return $query->result();
     }



     function shippingaddress($shipping)
     {
         $this->db->insert('deliveryaddress',$shipping);
         return $this->db->insert_id();
     }
 }
?>