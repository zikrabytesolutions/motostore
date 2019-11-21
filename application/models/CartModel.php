<?php 
class CartModel extends CI_Model{
    
    function findproductdetails($proid,$prodetailsid)
    {
        $proid= base64_decode(strtr($proid, '-_', '+/'));
        $this->db->select('product.id as proid,product.product,product.photo,pd.*');
        $this->db->from('product_details as pd');
        $this->db->join('product','product.id=pd.pro_id');
        $this->db->where('pd.id',$prodetailsid);
        $this->db->where('product.id',$proid);
        $query= $this->db->get();
        return $query->row_array();

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

    function insertcartiteam($data)
    {
       $vrtid=  $data['variationid'];
       $id= $this->session->userdata('motoubid');
        $this->db->select('*');
        $this->db->from('product_cart_iteam');
        $this->db->where(['userid'=>$id,'variationid'=>$vrtid]);
        $query= $this->db->get();
        $avl=  $query->result();
        if($avl)
        {
            return true;
        }
        else{
            return $this->db->insert('product_cart_iteam',$data);
        } 
     
    }

    function deletecartiteam($rowid)
    {
        $data = array(
            'rowid'   => $rowid,
            'qty'     => 0
            );
            
           return  $this->cart->update($data);
    }

    function insertcart($cart)
    {
       
        $this->db->select('*');
        $this->db->from('product_cart');
        $this->db->where('userid',$cart['userid']);
        $query= $this->db->get();
        $av= $query->row_array();
        $iteam= $av['iteam'] + $cart['iteam'];   $total= $av['grandtotal'] + $cart['grandtotal']; $now= $cart['created'];
        $data= Array('iteam'=>$iteam,'grandtotal'=>$total,'created'=>$now);
        if($av)
        {
            $this->db->where('userid',$cart['userid'])->update('product_cart', $data);
        }
        else
        {
            return $this->db->insert('product_cart',$cart);
        }
       
    }

    function cartdata($id)
    {
        $this->db->select('*');
        $this->db->from('product_cart_iteam');
        $this->db->where('userid',$id);
        $query= $this->db->get();
        return $query->result();
    }

    function carttotal($id)
    {
        $this->db->select('*');
        $this->db->from('product_cart');
        $this->db->where('userid',$id);
        $query= $this->db->get();
        return $query->result();
    }

    function cart_iteam($rowid)
    {
        $this->db->select('*');
        $this->db->from('product_cart_iteam');
        $this->db->where('rowid',$rowid);
        $query= $this->db->get();
        return $query->row_array();
    }

    function updatecart($data,$rowid)
    {
       return $result= $this->db->where('rowid',$rowid)->UPDATE('product_cart_iteam',$data);
      
    }

    function cartdetails($userid)
    {
        $this->db->select('*');
        $this->db->from('product_cart');
        $this->db->where('userid',$userid);
        $query= $this->db->get();
        return $query->row_array();
    }

    function updatecartfinal($update,$userid)
    {
       return $this->db->where('userid',$userid)->UPDATE('product_cart',$update);
    }

    function deleteiteam($rowid)
    {
        return $this->db->where('rowid',$rowid)->DELETE('product_cart_iteam');
    }

    function deletecart($id)
    {
        return $this->db->where('userid',$id)->DELETE('product_cart');
    }

    function carrowcpont($id)
    {
        return $this->db->where(['userid'=>$id])->from("product_cart_iteam")->count_all_results();
    }

    function deliveryaddress($id)
    {
        $this->db->select('*');
        $this->db->from('deliveryaddress');
        $this->db->where('userid',$id);
        $query= $this->db->get();
        return $query->result();
    }

    function insertaddress($data)
    {
        return $this->db->insert('deliveryaddress',$data);
    }


    function billingaddress($id)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id',$id);
        $query= $this->db->get();
        return $query->result();
    }

    function updateaddress($data,$userid)
    {
        return $this->db->where('id',$userid)->UPDATE('deliveryaddress',$data);
    }

    function deleteaddress($id)
    {
        return $this->db->where('id',$id)->DELETE('deliveryaddress');
    }
    
}


?>