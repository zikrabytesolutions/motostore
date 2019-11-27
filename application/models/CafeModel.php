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

    function locationlink()
    {
        $this->db->select('*');
        $this->db->from('cafe_event');
        $this->db->where('status','1');
        $this->db->group_by('place');
        $query=$this->db->get();
        return $query->result();
    }

    function eventlistfilter($place)
    {
        $this->db->select('*');
        $this->db->from('cafe_event');
        $this->db->where('place',$place);
        $this->db->where('status','1');
        $query=$this->db->get();
        return $query->result();
    }
}

?>