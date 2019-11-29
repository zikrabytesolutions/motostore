<?php 
class ExprienceModel extends CI_Model
{
    function domestic()
    {
       $this->db->select('moto_ride.*,place.placename');
       $this->db->from('moto_ride');
       $this->db->join('place','place.id=moto_ride.place');
       $this->db->where('placetype','2');
       $this->db->limit('10');
       $query= $this->db->get();
       return $query->result();
    }

    function international()
    {
        $this->db->select('moto_ride.*,place.placename');
        $this->db->from('moto_ride');
        $this->db->join('place','place.id=moto_ride.place');
        $this->db->where('placetype','1');
        $this->db->limit('10');
        $query= $this->db->get();
        return $query->result();
    }
}

?>