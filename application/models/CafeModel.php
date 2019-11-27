<?php 
class CafeModel extends CI_MOdel
{
    function eventlist()
    {
        $this->db->select('*');
        $this->db->from('cafe_event');
        $this->db->where('status','1');
        $query=$this->db->get();
        return $query->result();
    }


    function gallerylist()
    {
        $this->db->select('*');
        $this->db->from('cafe_gallery');
        $this->db->where('status','1');
        $query=$this->db->get();
        return $query->result();
    }
}

?>