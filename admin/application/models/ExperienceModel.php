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
}

?>