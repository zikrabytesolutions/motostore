<?php 
class LoginModel extends CI_Model
{
    function login($mobile,$password)
   {
       $this->db->select('*');
       $this->db->from('admin');
       $this->db->where("(mobile='$mobile' OR email='$mobile')",NULL, FALSE);
       $this->db->where('password',$password);
       $query= $this->db->get();
       return $result= $query->result();
   }
   
}

?>