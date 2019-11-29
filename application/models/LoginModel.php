<?php 
class LoginModel extends CI_Model
{
    function registeruser($data)
    {
        $this->db->insert('users',$data);
        return $this->db->insert_id();
    }

    function login($mobile,$password)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where("(mobile='$mobile' OR email='$mobile')",NULL, FALSE);
        $this->db->where('password',$password);
        $query= $this->db->get();
        return $result= $query->result();
    }
}

?>