<?php 
class UserModel extends CI_Model
{
    function myorder()
    {
       $id= $this->session->userdata('motoubid');
       $this->db->select('*');
       $this->db->from('product_order');
       $this->db->where('userid',$id);
       $this->db->order_by('id','DESC');
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
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id',$userid);
        $this->db->where('password', $password);
        return  $this->db->get()->row('name');
       
    }


    function myorderlist($orderdid)
    {
        $this->db->select('product.product,poi.*');
        $this->db->from('product_order_iteam as poi');
        $this->db->join('product','product.id=poi.productid');
        $this->db->where('poi.orderdid',$orderdid);
        $query= $this->db->get();
        return $query->result();
    }


    function totalorder($orderdid)
    {
        $this->db->select('*');
        $this->db->from('product_order');
        $this->db->where('orderid',$orderdid);
        $query= $this->db->get();
        return $query->row_array();
    }

    function deleteorder($orderdid)
    {
         $this->db->where('orderdid',$orderdid)->delete('product_order_iteam');
        return $this->db->where('orderid',$orderdid)->delete('product_order');
    }

    function getdeliveryaddress($orderid)
    {

        $this->db->select('delivery_address');
        $this->db->from('product_order');
        $this->db->where('orderid',$orderid);
        $deliveryid= $this->db->get()->row('delivery_address');

        $this->db->select('*');
        $this->db->from('deliveryaddress');
        $this->db->where('id',$deliveryid);
        $query= $this->db->get();
        return $query->result();
    }


    function getorderlist($orderid)
    {
    
        $this->db->select('*');
        $this->db->from('product_order_iteam');
        $this->db->where('orderdid',$orderid);
        $query= $this->db->get();
        return $query->result();

    }

    function returnname()
    {
        $id= $this->session->userdata('motoubid');
        $this->db->select('name');
        $this->db->from('users');
        $this->db->where('id',$id);
        return  $this->db->get()->row('name');
    }


    function getsummery($orderdid)
    {
        $this->db->select('*');
        $this->db->from('product_order');
        $this->db->where('orderid',$orderdid);
       $query= $this->db->get();
        return $query->result();
    }

    function insertaddress($data)
    {
        return $this->db->insert('deliveryaddress',$data);
    }

    function checkpasswords($password,$id)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id',$id);
        $this->db->where('password',$password);
       $query= $this->db->get();
        return $query->result();
    }


    function passwordchange($password,$id)
    {
        return $this->db->where('id',$id)->UPDATE('users',['password'=>$password]);
    }

    function checkaddress($userid)
    {
        $this->db->select('*');
        $this->db->from('deliveryaddress');
        $this->db->where('userid',$userid);
        $this->db->where('profiledata','1');
         $query= $this->db->get();
        return $query->result();
    }

    function checkuserid($mobile)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('email',$mobile);
         $query= $this->db->get();
        return $query->result();
    }

}

?>