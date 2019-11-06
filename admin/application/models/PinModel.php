<?php 

class PinModel extends CI_Model
{
    function addpin($data)
    {
        return $this->db->insert('pin',$data);
    }

    function pinlist()
    {
        $this->db->select('*');
        $this->db->from('pin');
        $query= $this->db->get();
        return $result=$query->result();
    }

   

    function disable($id)
    {
        return $this->db->where('id',$id)->UPDATE('pin',['status'=>'0']);
    }

    function enable($id)
    {
        return $this->db->where('id',$id)->UPDATE('pin',['status'=>'1']);
    }


    function pinupdate($pin,$place,$status,$pinid)
    {
        return $this->db->where('id',$pinid)->UPDATE('pin',['pin'=>$pin,'place'=>$place,'status'=>$status]);;
    }

    function uploadData()
    {
        $now = date("Y-m-d H:i:s");
        $id= $this->session->userdata('motoadsid');
        $count=0;
        $fp = fopen($_FILES['userfile']['tmp_name'],'r') or die("can't open file");
        while($csv_line = fgetcsv($fp,1024))
        {
            $count++;
            if($count == 1)
            {
                continue;
            }
            for($i = 0, $j = count($csv_line); $i < $j; $i++)
            {
                $insert_csv = array();
                $insert_csv['pin'] = $csv_line[0];
                $insert_csv['place'] = $csv_line[1];
                $insert_csv['status'] = $csv_line[2];

            }
            $i++;
            $data = array(
                'pin' => $insert_csv['pin'],
                'place' => $insert_csv['place'],
                'status' => $insert_csv['status'],
            );
            $data['updated']=$now;
            $data['updated_by']=  $id;
            $data=$this->db->insert('pin', $data);
        }
        fclose($fp) or die("can't close file");
        return $data;
    }
}

?>