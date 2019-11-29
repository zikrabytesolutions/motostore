<?php 
class ExperienceModel extends CI_Model
{
    function insertplace($data)
    {
      return $this->db->insert('place',$data);
    }

    function placelist()
    {
        $this->db->select('*');
        $this->db->from('place');
        $query= $this->db->get();
        return $query->result();

    }

    function updateplace($data,$placeid)
    {
        return $this->db->where('id',$placeid)->UPDATE('place',$data);
    }

    function deleteplace($id)
    {
        return $this->db->where('id',$id)->delete('place');
    }

    function placesearch($id)
    {
        $this->db->select('*');
        $this->db->from('place');
        $this->db->where('type',$id);
        $query= $this->db->get();
        return $query->result();
    }

    function insertride($data)
    {
        return $this->db->insert('moto_ride',$data);
    }

    function ridelist()
    {
        $this->db->select('moto_ride.*,place.placename');
        $this->db->from('moto_ride');
        $this->db->join('place','place.id=moto_ride.place');
        $this->db->order_by('moto_ride.id','DESC');
        $query= $this->db->get();
        return $query->result();
    }

    function deleteride($id)
    {
        return $this->db->where('id',$id)->delete('moto_ride');
    }

    function filterplace($placetype)
    {
        $this->db->select('*');
        $this->db->from('place');
        $this->db->where('type',$placetype);
        $query= $this->db->get();
        return $query->result();
    }

    function filterride($id)
    {
        $this->db->select('*');
        $this->db->from('moto_ride');
        $this->db->where('id',$id);
        $query= $this->db->get();
        return $query->result();
    }

    function updateride($data,$id)
    {
        return $this->db->where('id',$id)->UPDATE('moto_ride',$data);
    }
}

?>