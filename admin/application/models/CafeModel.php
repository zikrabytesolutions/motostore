<?php 
 class CafeModel extends CI_Model
 {
     function insertevent($data)
     {
        return $this->db->insert('cafe_event',$data);
     }

     function eventlist()
     {
         $this->db->select('*');
         $this->db->from('cafe_event');
         $query= $this->db->get();
         return $query->result();

     }

     function onevent($id)
     {
         return $this->db->where('id',$id)->UPDATE('cafe_event',['status'=>'1']);
     }

     function offevent($id)
     {
         return $this->db->where('id',$id)->UPDATE('cafe_event',['status'=>'0']);
     }

     function deleteevent($id)
     {
        return $this->db->where('id',$id)->delete('cafe_event');
     }

     function insertgallery($data)
     {
        $insert = $this->db->insert_batch('cafe_gallery',$data);
        return $insert?true:false;
        
     }

     function gallerylist()
     {
        $this->db->select('*');
        $this->db->from('cafe_gallery');
        $query= $this->db->get();
        return $query->result();
     }

     function oneventimg($id)
     {
         return $this->db->where('id',$id)->UPDATE('cafe_gallery',['status'=>'1']);
     }

     function offeventimg($id)
     {
         return $this->db->where('id',$id)->UPDATE('cafe_gallery',['status'=>'0']);
     }

     function deleteeventimg($id)
     {
        return $this->db->where('id',$id)->delete('cafe_gallery');
     }
 }
?>