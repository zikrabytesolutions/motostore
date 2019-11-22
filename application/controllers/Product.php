<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Product extends CI_Controller
{
    function __construct() 
    {
        parent::__construct();
        $this->load->model('productModel');
    }

    function lists($catid='',$min='',$max='',$brands='', $atributes='')
    {
       
        $catid= base64_decode(strtr($catid, '-_', '+/'));
        $data1= $this->productModel->getallproductreleted($catid);
        if($catid=='' || $min=='')
        {
            return redirect('home');
        }
        elseif(!$brands=='')
        {
            $min= base64_decode(strtr($min, '-_', '+/'));
            $max= base64_decode(strtr($max, '-_', '+/'));
            $brands= base64_decode(strtr($brands, '-_', '+/'));
            $atributes= base64_decode(strtr($atributes, '-_', '+/'));
            $data['subcategory']= $this->productModel->subcategory($catid);
            $brands= json_decode($brands);
            $atributes= json_decode($atributes);
           
            $data['productlist']= $this->productModel->filtersearch($catid,$min,$max,$brands,$atributes);
               
            if($data['productlist'])
            {

                $data['sbrand']=$brands; $data['min']=$min; $data['max']=$max;  $data['sattribute']=$atributes;
                 $this->load->view('product',$data);
            }
            else
            {
                $data['sbrand']=$brands; $data['min']=$min; $data['max']=$max;  $data['sattribute']=$atributes;
                $this->load->view('product',$data);
            }
        }
        else
        {    $data['sbrand']=$brands;$data['min']='100'; $data['max']='4000'; $data['sattribute']=$atributes;
            $data['subcategory']= $this->productModel->subcategory($catid);
            $data['productlist']= $this->productModel->getallproductreleted($catid);
            if($data)
            {
                // echo "<pre>";
               
                //   print_r($data);
                // echo "</pre>";
                 $this->load->view('product',$data);
            }
            else
            {
                $data['sbrand']=$brands; $data['min']=$min; $data['max']=$max;  $data['sattribute']=$atributes;
                $this->load->view('product',$data);
            }
        }
    }


    function listfilter()
    {
        
         $catid= $this->input->post('catid');
         $min= $this->input->post('min');
         $max= $this->input->post('max');
         $brand= $this->productModel->subcategorylist();
        foreach($brand as $brd)
        {
            $strippeds = str_replace(' ', '', $brd->sub_category_name);
             $branddata=$this->input->post($strippeds);
            if($branddata>0)
            {
                $brands[$strippeds]= $branddata;
            }
            
        }
       
        $brndat= json_encode($brands);
         $attribute= $this->productModel->attributelist();
        foreach($attribute as $att)
        {
            $stripped = str_replace(' ', '', $att->value_name);
            $attdata=$this->input->post($stripped);
            if($attdata>0)
            {
                $atributes[$stripped]= $attdata;
            }
            
        }
         $atributes= json_encode($atributes);
         if($min=='' && $max=='') { $min='blank'; $max='blank';}
         $min=  strtr(base64_encode($min), '+/', '-_');
         $max=  strtr(base64_encode($max), '+/', '-_');
         $brndat=  strtr(base64_encode($brndat), '+/', '-_');
         $atributes=  strtr(base64_encode($atributes), '+/', '-_');
         
    return redirect('product/lists/'.$catid.'/'.$min.'/'.$max.'/'.$brndat.'/'.$atributes);
      
    }

    function findattribute($pid)
    {
        return  $this->productModel->findattribute($pid);
    }

    function findattributevalue($aid,$pid)
    {
        return  $this->productModel->findattributevalue($aid,$pid);
    }

    function allsizeattributevalue($id)
    {
        return  $this->productModel->allsizeattributevalue($id);
    }

    function allsizeattribute()
    {
        return  $attribute= $this->productModel->allsizeattribute();
    }

    function details($proid='',$first='',$second='',$productname)
    {
         $proid= base64_decode(strtr($proid, '-_', '+/'));
         $first= base64_decode(strtr($first, '-_', '+/'));
         $second= base64_decode(strtr($second, '-_', '+/'));
         $data['proinfo'] = $this->cart->contents();
        
        if($first!='catblank')
        {
            if(!$first=='')
            {
                // echo  $first.'<br>';
                // echo  $second;
                $data['rsecond']=$second; $data['rfirst']=$first; $data['flag']='flase';
                $data['productdetail']= $this->productModel->findvariantproduct($proid,$first,$second);
                 $this->load->view('productdetails',$data);
            }
            
        }
        else
        {
            $data['productname']=$productname; $data['flag']='true'; $data['rsecond']=''; $data['rfirst']='';
            $data['productdetail']= $this->productModel->findproductdetails($proid);
            $this->load->view('productdetails',$data);
        }
       
    }

    function findprodetails($id)
    {
       return $this->productModel->productdetailsfind($id);
    }

    function findprodetailsnd($id)
    {
       return $this->productModel->productdetailsfindnd($id);
    }

    function findattributevale($proid,$attid)
    {
        return $this->productModel->productattributevalue($proid,$attid);
    }

    function findattributevalend($proid,$attid)
    {
        return $this->productModel->productattributevaluend($proid,$attid);
    }

    function findreletedproduct($proid)
    {
        $proid= base64_decode(strtr($proid, '-_', '+/'));
        $proid= base64_decode(strtr($proid, '-_', '+/'));
        $proid= base64_decode(strtr($proid, '-_', '+/'));

        return $this->productModel->reletedproduct($proid);

    }

    function attributeselect()
    {
        $proid= $this->input->post('pid');
        $first= $this->input->post('first');
        $second= $this->input->post('second');
        $proid= base64_decode(strtr($proid, '-_', '+/'));
        $first= base64_decode(strtr($first, '-_', '+/'));
        $second= base64_decode(strtr($second, '-_', '+/'));
        $data=$this->productModel->findvariantproduct($proid,$first,$second);
        echo json_encode($data);
    }
    
    
}
