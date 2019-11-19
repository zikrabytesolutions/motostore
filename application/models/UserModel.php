<?php 
class UserModel extends CI_Model
{
    function myorder()
    {
       $id= $this->session->userdata('motoubid');
       $this->db->select('product_order_iteam.*,users.name,users.mobile,product_order.iteam,product_order.grand');
       $this->db->from('product_order_iteam');
       $this->db->join('users','users.id=product_order_iteam.userid');
       $this->db->join('product_order','product_order.orderid=product_order_iteam.orderdid');
       $this->db->group_by('product_order_iteam.orderdid');
       $this->db->where('product_order_iteam.userid',$id);
       $query=$this->db->get();
       return $query->result();
    }

    function profiledetails()
    {
        $id= $this->session->userdata('motoubid');
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id',$id);
        $query= $this->db->get();
        return $query->result();
    }

    function deliveryaddress()
    {
        $id= $this->session->userdata('motoubid');
        $this->db->select('*');
        $this->db->from('deliveryaddress');
        $this->db->where('userid',$id);
        $query= $this->db->get();
        return $query->result();
    }

    function updateaccoutn($data,$id)
    {
        return $this->db->where('id',$id)->UPDATE('users',$data);
    }

    function checkpassword($userid,$password)
    {
        $this->db->select('password');
        $this->db->from('users');
        $this->db->where(['id'=>$userid,'password'=>$password]);
        return  $this->db->get()->row('name');
       
    }
}

?>