<?php 
class OrderModel extends CI_Model
{
    function pendingorder()
    {
        $this->db->select('product_order_iteam.*,users.name,users.mobile,product_order.iteam,product_order.grand,product_order.created');
        $this->db->from('product_order_iteam');
        $this->db->join('users','users.id=product_order_iteam.userid');
        $this->db->join('product_order','product_order.orderid=product_order_iteam.orderdid');
        $this->db->order_by('product_order_iteam.id','DESC');
        $this->db->group_by('product_order_iteam.orderdid');
        $this->db->where('product_order.status','0');
        $query=$this->db->get();
        return $query->result();
    }

    function updateorderstatus($orderid, $status)
    {
        return $this->db->where('orderid',$orderid)->UPDATE('product_order',['status'=>$status]);
    }

    function acceptorder()
    {
        $this->db->select('product_order_iteam.*,users.name,users.mobile,product_order.iteam,product_order.grand,product_order.created');
        $this->db->from('product_order_iteam');
        $this->db->join('users','users.id=product_order_iteam.userid');
        $this->db->join('product_order','product_order.orderid=product_order_iteam.orderdid');
        $this->db->order_by('product_order_iteam.id','DESC');
        $this->db->group_by('product_order_iteam.orderdid');
        $this->db->where('product_order.status','1');
        $query=$this->db->get();
        return $query->result();
    }

    function shippedorder()
    {
        $this->db->select('product_order_iteam.*,users.name,users.mobile,product_order.iteam,product_order.grand,product_order.created');
        $this->db->from('product_order_iteam');
        $this->db->join('users','users.id=product_order_iteam.userid');
        $this->db->join('product_order','product_order.orderid=product_order_iteam.orderdid');
        $this->db->order_by('product_order_iteam.id','DESC');
        $this->db->group_by('product_order_iteam.orderdid');
        $this->db->where('product_order.status','2');
        $query=$this->db->get();
        return $query->result();
    }

    function userorder($id)
    {
        $this->db->select('product_order_iteam.*,users.name,users.mobile,users.email,users.status as ustatus,product_order.iteam,product_order.grand, product_order.orderid');
        $this->db->from('product_order_iteam');
        $this->db->join('users','users.id=product_order_iteam.userid');
        $this->db->join('product_order','product_order.orderid=product_order_iteam.orderdid');
        $this->db->order_by('product_order_iteam.id','DESC');
        $this->db->group_by('product_order_iteam.orderdid');
        $this->db->where('users.id',$id);
        $query=$this->db->get();
        return $query->result();
    }

    function deliveredorder()
    {
        $this->db->select('product_order_iteam.*,users.name,users.mobile,product_order.iteam,product_order.grand,product_order.created');
        $this->db->from('product_order_iteam');
        $this->db->join('users','users.id=product_order_iteam.userid');
        $this->db->join('product_order','product_order.orderid=product_order_iteam.orderdid');
        $this->db->order_by('product_order_iteam.id','DESC');
        $this->db->group_by('product_order_iteam.orderdid');
        $this->db->where('product_order.status','3');
        $query=$this->db->get();
        return $query->result();
    }

    function filterorder($status,$from,$to)
    {
        $this->db->select('product_order.status,product_order.created,product_order.orderid as orderdid, users.name,users.mobile,product_order.iteam,product_order.grand');
        $this->db->from('product_order');
        $this->db->from('users','users.id=product_order.userid');
        $this->db->where('product_order.status',$status);
        $this->db->where('Date(product_order.created) >=', $from);
        $this->db->where('Date(product_order.created) <=', $to);
        $query=$this->db->get();
        return $query->result();
    }

    function allbystatus($status,$start,$to)
    {
        $this->db->select('product_order.status,product_order.created,product_order.orderid as orderdid, users.name,users.mobile,product_order.iteam,product_order.grand');
        $this->db->from('product_order');
        $this->db->from('users','users.id=product_order.userid');
        $this->db->where('Date(product_order.created) >=', $start);
        $this->db->where('Date(product_order.created) <=', $to);
        $query=$this->db->get();
        return $query->result();
    }

    function allorderlist()
    {
        $this->db->select('product_order.status,product_order.created,product_order.orderid as orderdid, users.name,users.mobile,product_order.iteam,product_order.grand');
        $this->db->from('product_order');
        $this->db->from('users','users.id=product_order.userid');
        $query=$this->db->get();
        return $query->result();
    }
}

?>