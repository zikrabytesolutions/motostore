<?php
class ProductModel extends CI_Model
{
    function getallproductreleted($catid)
    {
        $catid= base64_decode(strtr($catid, '-_', '+/'));
        $catid= base64_decode(strtr($catid, '-_', '+/'));

        $this->db->select('*');
        $this->db->from('product');
        $this->db->where('cat_id', $catid);
        $this->db->order_by('id','ASC');
        $query= $this->db->get();
        return $result= $query->result();
    }

    function findattribute($id)
    {
        $this->db->select('attribute.attribute as atname,product_attribute.attribute_id,product_attribute.product_id');
        $this->db->from('product_attribute');
        $this->db->join('attribute','attribute.id=product_attribute.attribute_id');
        $this->db->where('product_attribute.product_id', $id);
        $query= $this->db->get();
        return $result= $query->result();   
    }

    function findattributevalue($aid,$pid)
    {
       $this->db->select('attribute_value.value_name,attribute_value.slug,attribute_value.codes');
       $this->db->from('product_attribute_value');
       $this->db->join('attribute_value','attribute_value.id=product_attribute_value.valueid');
       $this->db->where(['productid'=>$pid,'attributeid'=>$aid]);
        $query= $this->db->get();
        return $result= $query->result();  
    }

    function brandlist()
    {
        $this->db->select('*');
        $this->db->from('brand');
        $query= $this->db->get();
        return $result= $query->result();
    }
   
    function filtersearch($catid,$min,$max,$brands,$atributes)
    {
        $catid= base64_decode(strtr($catid, '-_', '+/'));
        $catid= base64_decode(strtr($catid, '-_', '+/'));
        
        $this->db->select('DISTINCT(pd.pro_id) as pdid,product.*,');
        $this->db->from('product');
        $this->db->join('product_details as pd','pd.pro_id=product.id');
        $this->db->join('product_attribute_value as pav','pav.productid=product.id');
        if($brands)
        {
            $this->db->group_start();
            foreach($brands as $brnd)
            {
                if($brnd)
                {
                    $this->db->or_where('product.brand_id', $brnd); 
                } 
            }
            $this->db->group_end();
        } 
        if($atributes)
        {
            $this->db->group_start();
            foreach($atributes as $att)
            {
                if($att)
                {
                    $this->db->or_where('pav.valueid', $att); 
                } 
            }
            $this->db->group_end();
        } 
        $this->db->where('product.cat_id', $catid);
        if (strcmp($min, 'blank') != 0)
        {
            $this->db->where("(pd.regular_price > $min AND pd.regular_price <= $max)");
        }
        $this->db->order_by('pd.id','ASC');
        $query= $this->db->get();
        return $result= $query->result();
    }

    function atributevaluefilter($aid,$pid)
    {
       $this->db->select('attribute_value.value_name,attribute_value.slug,attribute_value.id');
       $this->db->from('product_attribute_value');
       $this->db->join('attribute_value','attribute_value.id=product_attribute_value.valueid');
       $this->db->where(['productid'=>$pid,'attributeid'=>$aid]);
       $this->db->group_by('attributeid');
        $query= $this->db->get();
        return $result= $query->result();  
    }

    function attributelist()
    {
        $this->db->select('*');
        $this->db->from('attribute_value');
        $query= $this->db->get();
        return $result= $query->result();
    }

    function allsizeattribute()
    {
        $this->db->select('*');
        $this->db->from('attribute');
        $query= $this->db->get();
        return $result= $query->result();
    }

    function allsizeattributevalue($id)
    {
       $this->db->select('attribute_value.*');
       $this->db->from('attribute_value');
       $this->db->where('attribute_id',$id);
        $query= $this->db->get();
        return $result= $query->result();  
    }

    function findproductdetails($proid)
    {
        $proid= base64_decode(strtr($proid, '-_', '+/'));
        $proid= base64_decode(strtr($proid, '-_', '+/'));

        $this->db->select('pd.id as detailsid,pd.pro_id,pd.regular_price,pd.offer_price,product.*,
        pd.stockstatus');
        $this->db->from('product');
        $this->db->join('product_details as pd','pd.pro_id=product.id');
        $this->db->where('product.id', $proid);
        $this->db->order_by('product.id','ASC');
        $this->db->limit(1);
        $query= $this->db->get();
        return $result= $query->result();
    }

    function productdetailsfind($id)
    {
        $this->db->select('attribute.attribute,attribute.id');
        $this->db->from('product_details');
        $this->db->join('attribute_value','attribute_value.id=product_details.first');
        $this->db->join('attribute','attribute.id=attribute_value.attribute_id');
        $this->db->group_by('attribute_value.id');
        $this->db->limit(1);
        $this->db->where('pro_id',$id);
         $query= $this->db->get();
         return $result= $query->result();  
    }

    function productdetailsfindnd($id)
    {
        $this->db->select('attribute.attribute,attribute.id');
        $this->db->from('product_details');
        $this->db->join('attribute_value','attribute_value.id=product_details.second');
        $this->db->join('attribute','attribute.id=attribute_value.attribute_id');
        $this->db->group_by('attribute_value.id');
        $this->db->limit(1);
        $this->db->where('pro_id',$id);
         $query= $this->db->get();
         return $result= $query->result();  
    }

    function productattributevalue($proid,$attid)
    {
        $this->db->select('attribute_value.*,product_details.first,product_details.second');
        $this->db->from('product_details');
        $this->db->join('attribute_value','attribute_value.id=product_details.first');
        $this->db->where('attribute_value.attribute_id',$attid);
        $this->db->group_by('attribute_value.id');
        $this->db->where('pro_id',$proid);
         $query= $this->db->get();
         return $result= $query->result(); 
    }

    function productattributevaluend($proid,$attid)
    {
        $this->db->select('attribute_value.*,product_details.first,product_details.second');
        $this->db->from('product_details');
        $this->db->join('attribute_value','attribute_value.id=product_details.second');
        $this->db->where('attribute_value.attribute_id',$attid);
        $this->db->group_by('attribute_value.id');
        $this->db->where('pro_id',$proid);
         $query= $this->db->get();
         return $result= $query->result(); 
    }
    
    function findvariantproduct($proid,$first,$second)
    {
        $proid= base64_decode(strtr($proid, '-_', '+/'));
        $proid= base64_decode(strtr($proid, '-_', '+/'));

        $this->db->select('pd.id as detailsid,pd.pro_id,pd.regular_price,pd.offer_price,product.*,
        pd.stockstatus');
        
        $this->db->from('product_details as pd');
        $this->db->join('product','product.id=pd.pro_id');
        $this->db->where(['pd.first'=>$first, 'pd.second'=>$second,'pd.pro_id'=>$proid]);
        $this->db->limit(1);
        $query= $this->db->get();
        return $result= $query->result();
    }

    function reletedproduct($proid)
    {
        $this->db->select('cat_id');
        $this->db->from('product');
        $this->db->where('id',$proid);
        $catid= $this->db->get()->row()->cat_id;

        $this->db->select('*');
        $this->db->from('product');
        $this->db->where('cat_id', $catid);
        $this->db->order_by('id','ASC');
        $query= $this->db->get();
        return $result= $query->result();

    }


}