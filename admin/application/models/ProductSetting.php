<?php 
class ProductSetting extends CI_Model
{
    function addcategory($data)
    {
        $this->db->insert('category',$data);
        return $this->db->insert_id();
    }

    function categoryactivity($activity)
    {
        return $this->db->insert('admin_activity_log',$activity);
    }

    function categorylist()
    {
       $this->db->select('*');
       $this->db->from('category');
       $query= $this->db->get();
       return $result= $query->result();
    }

    function categoryname($id)
    {
        $this->db->select('cat_name');
        $this->db->from('category');
        $this->db->where('id',$id);
        return $this->db->get()->row('cat_name');
    }

    function addsubcategory($data)
    {
        $this->db->insert('sub_category',$data);
        return $this->db->insert_id();
    }

    function subcategorylist($id)
    {
        $this->db->select('sub_category.*,category.cat_name');
        $this->db->from('sub_category');
        $this->db->join('category','category.id=sub_category.cat_id');
        $this->db->where('cat_id',$id);
        $query= $this->db->get();
       return $result= $query->result();
    }


    function allsubcategorylist()
    {
        $this->db->select('sub_category.*,category.cat_name, category.id as cid');
        $this->db->from('sub_category');
        $this->db->join('category','category.id=sub_category.cat_id');
        $query= $this->db->get();
       return $result= $query->result();
    }

    function addbrand($data)
    {
        $this->db->insert('brand',$data);
        return $this->db->insert_id();
    }

    function brandlist()
    {
        $this->db->select('*');
        $this->db->from('brand');
        $query= $this->db->get();
        return $result= $query->result();
    }

    function productlist()
    {
        $this->db->select('*');
        $this->db->from('product');
        $query= $this->db->get();
        return $result= $query->result();
    }

    function createproduct($data)
    {
        $this->db->insert('product',$data);
        return $this->db->insert_id();
    }

    function allproductdetails()
    {
        $this->db->select('product.status,product.id,product.product as name,category.cat_name,sub_category.sub_category_name');
        $this->db->from('product');
        $this->db->join('category','category.id=product.cat_id');
        $this->db->join('sub_category','sub_category.id=product.subcat_id');
        $query= $this->db->get();
        return $result= $query->result();
    }


    function updatecategory($cname,$status,$catid)
    {
        return $this->db->where('id',$catid)->UPDATE('category',['cat_name'=>$cname,'status'=>$status]);
    }

    function updatebrand($brand,$status,$catid)
    {
        return $this->db->where('id',$catid)->UPDATE('brand',['brand'=>$brand,'status'=>$status]);
    }

    function disable($id)
    {
        return $this->db->where('id',$id)->UPDATE('sub_category',['status'=>'0']);
    }

    function enable($id)
    {
        return $this->db->where('id',$id)->UPDATE('sub_category',['status'=>'1']);
    }

    function updatesubcategory($cat_id,$subname,$status,$subcatid)
    {
        return $this->db->where('id',$subcatid)->UPDATE('sub_category',['status'=>$status,'cat_id'=>$cat_id,'sub_category_name'=>$subname]);
    }


    function catdisable($id)
    {
        return $this->db->where('id',$id)->UPDATE('category',['status'=>'0']);
    }

    function catenable($id)
    {
        return $this->db->where('id',$id)->UPDATE('category',['status'=>'1']);
    }

    function branddisable($id)
    {
        return $this->db->where('id',$id)->UPDATE('brand',['status'=>'0']);
    }

    
    function brandenable($id)
    {
        return $this->db->where('id',$id)->UPDATE('brand',['status'=>'1']);
    }

    function attributelist()
    {
        $this->db->select('*');
        $this->db->from('attribute');
        $query= $this->db->get();
        return $result= $query->result();
    }

    function addattribute($data)
    {
        return $this->db->insert('attribute',$data);
    }


    function attenable($id)
    {
        return $this->db->where('id',$id)->UPDATE('attribute',['status'=>'1']);
    }

    
    function attdisable($id)
    {
        return $this->db->where('id',$id)->UPDATE('attribute',['status'=>'0']);
    }

    function updateattribute($attribute,$status,$atid)
    {
        return $this->db->where('id',$atid)->UPDATE('attribute',['attribute'=>$attribute,'status'=>$status]);
    }

    function attributeone($id)
    {
        $this->db->select('attribute');
        $this->db->from('attribute');
        $this->db->where('id',$id);
        return $this->db->get()->row()->attribute;
    }

    function attributevalue($id)
    {
        $this->db->select('*');
        $this->db->from('attribute_value');
        $this->db->where('attribute_id',$id);
        $query= $this->db->get();
        return $result= $query->result();
    }

    function addattributevalue($data)
    {
        return $this->db->insert('attribute_value',$data);
    }

    function updateattribute_value($attribute,$atid)
    {
        $this->db->where('id',$atid)->UPDATE('attribute_value',$attribute);
    }


    function attenableval($id)
    {
        return $this->db->where('id',$id)->UPDATE('attribute_value',['status'=>'1']);
    }

    
    function attdisableval($id)
    {
        return $this->db->where('id',$id)->UPDATE('attribute_value',['status'=>'0']);
    }


    function insertproduct($product,$commonid)
    {
        $this->db->select('id');
        $this->db->from('product');
        $this->db->where('commonid',$commonid);
        $id= $this->db->get()->row('id');
        if($id>0)
        {
               $this->db->where('commonid',$commonid)->UPDATE('product',$product);
               return $id;
        }
         else
         {
              $this->db->insert('product',$product);
              return $this->db->insert_id();
         }
    }


    function checkproduct($commonid)
    {
        $this->db->select('id');
        $this->db->from('product');
        $this->db->where('commonid',$commonid);
        return $this->db->get()->row('id');
    }

    function insertproductattribute($attid,$commonid)
    {
        $this->db->insert('product_attribute',['commonid'=>$commonid,'attribute_id'=>$attid]);
        $id= $this->db->insert_id();

        $this->db->select('commonid');
        $this->db->from('product_attribute');
        $this->db->where('id',$id);
        $commid= $this->db->get()->row('commonid');

        $this->db->select('product_attribute.*,attribute.attribute');
        $this->db->from('product_attribute');
        $this->db->join('attribute','attribute.id=product_attribute.attribute_id');
        $this->db->where('commonid',$commid);
        $query= $this->db->get();
        return $result= $query->result();
    }

    function findattributevalue($att_id)
    {
        $this->db->select('*');
        $this->db->from('attribute_value');
        $this->db->where('attribute_id',$att_id);
        $query= $this->db->get();
        return $result= $query->result();
    }

    function checkproductattribute($attid,$commonid)
    {
        $this->db->select('*');
        $this->db->from('product_attribute');
        $this->db->where('attribute_id',$attid);
        $this->db->where('commonid',$commonid);
        $query= $this->db->get();
        return $result= $query->result();
    }

    function findattributeid($valueid)
    {
        $this->db->select('attribute_id,value_name');
        $this->db->from('attribute_value');
        $this->db->where('id',$valueid);
        $query= $this->db->get();
         return $query->row_array();
    }

    function insertattributevalute($data)
    {
        return $this->db->insert('product_attribute_value',$data);
    }

    function deleteattributevalute($valueid,$comonid)
    {
        return $this->db->where(['commonid'=>$comonid,'valueid'=>$valueid,''])->DELETE('product_attribute_value');
    }

    function findattrvalueforcheck($id,$commonid)
    {
        $this->db->select('valueid');
        $this->db->from('product_attribute_value');
        $this->db->where('valueid',$id);
        $this->db->where('commonid',$commonid);
        return $this->db->get()->row('valueid');
    }
//----------------------------------------------------------------------------------
    function getattribute($common)
    {
        $this->db->select('*');
        $this->db->from('product_attribute');
        $this->db->where('commonid',$common);
        $query= $this->db->get();
        return $result= $query->result();
    }

    function getattributevalue($atid,$common)
    {
        $this->db->select('attribute_value.value_name,attribute_value.id as pavid');
        $this->db->from('product_attribute_value as pav');
        $this->db->join('attribute_value','attribute_value.id=pav.valueid');
        $this->db->where('pav.commonid',$common);
        $this->db->where('pav.attributeid',$atid);
        $query= $this->db->get();
        return $result= $query->result();
    }

    function taginsert($data)
    {
        $tag=$data['tag']; $proid= $data['product_id'];
        $this->db->select('product_id');
        $this->db->from('product_tag');
        $this->db->where(['tag'=>$tag,'product_id'=>$proid]);
        $id= $this->db->get()->row('product_id');
        if($id>0)
        {
            $delete= $this->db->where('product_id',$id)->DELETE('product_tag');
            if($delete)
            {
                return $this->db->insert('product_tag',$data);
            }
        }
        else{
            return $this->db->insert('product_tag',$data);
        } 
    }

    function insertproductdetails($data)
    {
        $proid= $data['pro_id'];  $regular= $data['regular_price'];
       
        $this->db->select('id');
        $this->db->from('product_details');
        $this->db->where('pro_id',$proid);
        $id= $this->db->get()->row('id');
        if($id>0)
        {
           return $this->db->where('pro_id',$proid)->UPDATE('product_details',$data);
        }
        else
        {
            if($regular>0)
            {
                return $this->db->insert('product_details',$data);
            }
            
        } 
    }

    function updateattributepid($productid,$commonid)
    {
        $this->db->select('id');
        $this->db->from('product_attribute');
        $this->db->where('commonid',$commonid);
        $id= $this->db->get()->row('id');
        if($id>0)
        {
           return $this->db->where('commonid',$commonid)->UPDATE('product_attribute',['product_id'=>$productid]);
        }
        else{
            return true;
        }
       
    }

    function updateattributevaluepid($productid,$commonid)
    {
        $this->db->select('id');
        $this->db->from('product_attribute_value');
        $this->db->where('commonid',$commonid);
        $id= $this->db->get()->row('id');
        if($id>0)
        {
           return $this->db->where('commonid',$commonid)->UPDATE('product_attribute_value',['productid'=>$productid]);
        }
        else{
            return true;
        }
    }


    function insertproductvdetails($data)
    {
        $proid= $data['pro_id'];  $regular= $data['regular_price'];
        $sr_no= $data['sr_no'];
        $this->db->select('id');
        $this->db->from('product_details');
        $this->db->where(['pro_id'=>$proid,'sr_no'=>$sr_no]);
        $id= $this->db->get()->row('id');
        if($id>0)
        {
            $this->db->where(['pro_id'=>$proid,'sr_no'=>$sr_no])->UPDATE('product_details',$data);
            return  $id; 
        }
        else
        {
            if($regular>0)
            {
                 $this->db->insert('product_details',$data);
                 return $this->db->insert_id();
            }
            
        } 
    }

    function updateproimage($productid,$filePath)
    {
        return $this->db->where('id',$productid)->UPDATE('product',['photo'=>$filePath]);
    }

    function deleteimage($commonid)
    {
        
        $this->db->select('id');
        $this->db->from('product');
        $this->db->where('commonid',$commonid);
        $id= $this->db->get()->row('id');
         if($id>0)
         {
            return $this->db->where('id',$id)->UPDATE('product',['photo'=>'']);
         }
        
    }

    function findsubcategory($category)
    {
        $this->db->select('*');
        $this->db->from('sub_category');
        $this->db->where('cat_id',$category);
        $query= $this->db->get();
        return $query->result();
    }

   
    function productlists($brand,$category,$subcategory)
    {
        $this->db->select('product.*,brand.brand,category.cat_name,sub_category.sub_category_name');
        $this->db->from('product');
        $this->db->join('brand','brand.id=product.brand_id');
        $this->db->join('category','category.id=product.cat_id');
        $this->db->join('sub_category','sub_category.id=product.subcat_id');
        $this->db->where(['product.cat_id'=>$category,'product.subcat_id'=>$subcategory,'product.brand_id'=>$brand]);
        $query= $this->db->get();
        return $query->result();
    }

    function findproductattribute($proid)
    {
        $this->db->select('attribute.attribute as atname,product_attribute.attribute_id,product_attribute.product_id');
        $this->db->from('product_attribute');
        $this->db->join('attribute','attribute.id=product_attribute.attribute_id');
        $this->db->where('product_attribute.product_id', $proid);
        $query= $this->db->get();
        return $result= $query->result();

    }

    function findattributevalues($aid,$pid)
    {
       $this->db->select('attribute_value.value_name,attribute_value.slug,attribute_value.codes');
       $this->db->from('product_attribute_value');
       $this->db->join('attribute_value','attribute_value.id=product_attribute_value.valueid');
       $this->db->where(['productid'=>$pid,'attributeid'=>$aid]);
        $query= $this->db->get();
        return $result= $query->result();  
    }

    function productinfo($proid)
    {
        
        $this->db->select('product.*,brand.id as brandid,category.id as catid,sub_category.id as subcatid');
        $this->db->from('product');
        $this->db->join('brand','brand.id=product.brand_id');
        $this->db->join('category','category.id=product.cat_id');
        $this->db->join('sub_category','sub_category.id=product.subcat_id');
        $this->db->where('product.id',$proid);
        $query= $this->db->get();
        return $query->result();
    }

    function producttype()
    {
        $this->db->select('*');
        $this->db->from('product_type');
        $query= $this->db->get();
        return $query->result();
    }

    function productoff($proid)
    {
        return $this->db->where('id',$proid)->UPDATE('product',['status'=>0]);
    }

    function producton($proid)
    {
        return $this->db->where('id',$proid)->UPDATE('product',['status'=>1]);
    }

    function findproductvarition($proid)
    {
        $this->db->select('*');
        $this->db->from('product_details');
        $this->db->where('pro_id',$proid);
        $query=$this->db->get();
        return $query->result();
    }

    function firstattribute($detailsid)
    {
        $this->db->select('attribute_value.value_name');
        $this->db->from('product_details');
        $this->db->join('attribute_value','attribute_value.id=product_details.first');
        $this->db->where('product_details.id',$detailsid);
        return $this->db->get()->row('value_name');
       
    }

    function secondatattribute($detailsid)
    {
        $this->db->select('attribute_value.value_name');
        $this->db->from('product_details');
        $this->db->join('attribute_value','attribute_value.id=product_details.second');
        $this->db->where('product_details.id',$detailsid);
        return $this->db->get()->row('value_name');
       
    }

    function updateproduct($data,$proid)
    {
        return $this->db->where('id',$proid)->UPDATE('product',$data);
    }

    function updatevariation($data,$vrtid)
    {
         $success= $this->db->where('id',$vrtid)->UPDATE('product_details',$data);
         if($success)
         {
              return $vrtid;
         }
    }

    function updateimage($uploadData)
    {
        $insert = $this->db->insert_batch('product_image',$uploadData);
        return $insert?true:false;
    }


    function imagelist($proid,$vrtid)
    {
        $this->db->select('*');
        $this->db->from('product_image');
        $this->db->where('proid',$proid);
        $this->db->where('prodetailsid',$vrtid);
        $query=$this->db->get();
        return $query->result();
    }

    function brandremove($id)
    {
        return $this->db->where('id',$id)->DELETE('brand');
    }

    function catremove($id)
    {
        return $this->db->where('id',$id)->DELETE('category');
    }

    function subcatremove($id)
    {
        return $this->db->where('id',$id)->DELETE('sub_category');
    }

    function allproductlists()
    {
        $this->db->select('product.*,brand.brand,category.cat_name,sub_category.sub_category_name');
        $this->db->from('product');
        $this->db->join('brand','brand.id=product.brand_id');
        $this->db->join('category','category.id=product.cat_id');
        $this->db->join('sub_category','sub_category.id=product.subcat_id');
        $query= $this->db->get();
        return $query->result();
    }

    function countcategory()
    {
        return $this->db->from("category")->count_all_results();
    }

    function countparoct()
    {
        return $this->db->from("product")->count_all_results();
    }

    function attdelete($id)
    {
        return $this->db->where('id',$id)->DELETE('attribute');
    }

    function configdelete($id)
    {
        return $this->db->where('id',$id)->DELETE('attribute_value');
    }
    
}

?>