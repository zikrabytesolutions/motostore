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
      return $this->db->insert('product_cart_iteam',$data);
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
    
}


?>