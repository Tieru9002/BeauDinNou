<?php

class Misc extends CI_Model { 
    
    public function getContactDetails() {
        $this->db->select("*");                
        $query = $this->db->get("contact");        
        $res = array();
        foreach ( $query->result()  as $row ) {
            $res["id"] = $row->id;            
            $res["name"] = $row->name;
            $res["address"] = $row->address;
            $res["tel"] = $row->tel;
            $res["email"] = $row->email;
            $res["description"] = $row->description;
        }
        
        return $res;
    }
}
?>