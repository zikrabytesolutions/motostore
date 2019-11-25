<?php 

class OrderModel extends CI_Model
{

    function allcartdata($id)
    {
        $this->db->select('*');
        $this->db->from('product_cart_iteam');
        $this->db->where('userid',$id);
        $query= $this->db->get();
        return $query->result();
    }

    function insertorderiteam($dataiteam)
    {
        return $this->db->insert('product_order_iteam',$dataiteam);
    }

    function cartsummery($id)
    {
        $this->db->select('*');
        $this->db->from('product_cart');
        $this->db->where('userid',$id);
        $query= $this->db->get();
        return $query->result();
    }

    function insertorderd($cartsummery)
    {
        return $this->db->insert('product_order',$cartsummery);
    }

    function deletecartiteam($id)
    {
       return $this->db->where('userid',$id)->DELETE('product_cart_iteam');
    }

    function deletecart($id)
    {
       return $this->db->where('userid',$id)->DELETE('product_cart');
    }

    function addaddress($delivery)
    {
        return $this->db->insert('deliveryaddress',$delivery);
    }

    
        public function get_autocomplete($search_data)
       {
            $this->db->select('*');
            $this->db->like('cat_name', $search_data);

            return $this->db->get('category', 10)->result();
       }
    
}

?>