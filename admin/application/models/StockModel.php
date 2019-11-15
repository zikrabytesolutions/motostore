<?php 
class StockModel extends CI_Model
{
    function stockmanagement()
    {
        $this->db->select('product.product,product_details.*');
        $this->db->from('product');
        $this->db->join('product_details','product_details.pro_id=product.id');
        $query=$this->db->get();
        return $query->result();
    }

    function firstattribute($first)
    {
        $this->db->select('value_name');
        $this->db->from('attribute_value');
        $this->db->where('id',$first);
        return $this->db->get()->row('value_name');
       
    }

    function secondattribute($second)
    {
        $this->db->select('value_name');
        $this->db->from('attribute_value');
        $this->db->where('id',$second);
        return $this->db->get()->row('value_name');
    }

    function outofstock($id)
    {
        return $this->db->where('id',$id)->UPDATE('product_details',['stockstatus'=>'0']);
    }

    function instock($id)
    {
        return $this->db->where('id',$id)->UPDATE('product_details',['stockstatus'=>'1']);
    }
}

?>