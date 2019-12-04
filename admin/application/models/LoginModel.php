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

   function checkpasswords($password,$id)
   {
    $this->db->select('*');
    $this->db->from('admin');
    $this->db->where('id',$id);
    $this->db->where('password',$password);
    $query= $this->db->get();
    return $result= $query->result();
   }

   function passwordchange($newpassword,$id)
   {
       return $this->db->where('id',$id)->UPDATE('admin',['password',$newpassword]);
   }

   function userdetails()
   {
    $id= $this->session->userdata('motoadsid');
    $this->db->select('*');
    $this->db->from('admin');
    $this->db->where('id',$id);
    $query= $this->db->get();
    return $result= $query->result();
   }
   
}

?>