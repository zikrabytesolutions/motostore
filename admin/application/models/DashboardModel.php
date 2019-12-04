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
        $this->db->order_by('product_order_iteam.id','DESC');
        $this->db->group_by('product_order_iteam.orderdid');
        $this->db->where('product_order.status','0');
        $this->db->limit('10');
        $query=$this->db->get();
        return $query->result();
    }

    function details($orderdid)
    {
        $this->db->select('*');
        $this->db->from('product_order_iteam');
        $this->db->where('orderdid',$orderdid);
        $query=$this->db->get();
        return $query->result();
    }

    function categorylist()
    {
        $this->db->select('*');
        $this->db->from('category');
        $query= $this->db->get();
        return $query->result();
    }

    function inserttiles($data)
    {
        return $this->db->insert('home_tiles',$data);
    }


    function tileslist()
    {
        $this->db->select('*');
        $this->db->from('home_tiles');
        $query= $this->db->get();
        return $query->result();
    }


    function updatetiles($data,$id)
    {
        return $this->db->where('id',$id)->update('home_tiles',$data);
    }

    function removetiles($id)
    {
        return $this->db->where('id',$id)->delete('home_tiles');
    }

    function showtempcartvalue($proid,$detailsid)
    {
        $this->db->select('product.id as proid,product.product,product.photo,product.photo,pd.*');
        $this->db->from('product_details as pd');
        $this->db->join('product','product.id=pd.pro_id');
        $this->db->where('pd.id',$detailsid);
         $this->db->where('product.id',$proid);
        $query= $this->db->get();
        return $query->result();
    }

    function attributefind($data)
    {
        $this->db->select('attribute.attribute,attribute_value.value_name,attribute_value.codes');
        $this->db->from('attribute_value');
        $this->db->join('attribute','attribute.id=attribute_value.attribute_id');
        $this->db->where('attribute_value.id',$data);
        $this->db->group_by('attribute_value.attribute_id');
        $query= $this->db->get();
        return $query->result();
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

    function getsummery($orderdid)
    {
        $this->db->select('*');
        $this->db->from('product_order');
        $this->db->where('orderid',$orderdid);
       $query= $this->db->get();
        return $query->result();
    }

    function getuserdetails($orderid)
    {
        $this->db->select('userid');
        $this->db->from('product_order');
        $this->db->where('orderid',$orderid);
        $userid= $this->db->get()->row('userid');

        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id',$userid);
        $query= $this->db->get();
        return $query->result();
    }

    function monthorder()
    {
        return $this->db->from("product_order")->where(['MONTH(created)'=>date('m'),'year(created)'=>date('Y')])->count_all_results();
    }

    function todayorder()
    {
        $date = new DateTime("now");
        $curr_date = $date->format('Y-m-d ');
        return $this->db->from("product_order")->where('DATE(created)',$curr_date)->count_all_results();
    }

    
}

?>