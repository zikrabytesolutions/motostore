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


    function domesticsall()
    {
       $this->db->select('moto_ride.*,place.placename');
       $this->db->from('moto_ride');
       $this->db->join('place','place.id=moto_ride.place');
       $this->db->where('placetype','2');
       $query= $this->db->get();
       return $query->result();
    }

    function internationalall()
    {
        $this->db->select('moto_ride.*,place.placename');
        $this->db->from('moto_ride');
        $this->db->join('place','place.id=moto_ride.place');
        $this->db->where('placetype','1');
        $query= $this->db->get();
        return $query->result();
    }

    function placesearch($id)
    {
        $this->db->select('*');
        $this->db->from('place');
        $this->db->where('type',$id);
        $query= $this->db->get();
        return $query->result();
    }

    function searchfilter($place,$placetype)
    {
        $this->db->select('moto_ride.*,place.placename');
        $this->db->from('moto_ride');
        $this->db->join('place','place.id=moto_ride.place');
        $this->db->where('placetype',$placetype);
        $this->db->where('place',$place);
        $query= $this->db->get();
        return $query->result();
    }

    function ridedetails($id)
    {
        $this->db->select('moto_ride.*,place.placename');
        $this->db->from('moto_ride');
        $this->db->join('place','place.id=moto_ride.place');
        $this->db->where('moto_ride.id',$id);
        $query= $this->db->get();
        return $query->result();
    }
}

?>