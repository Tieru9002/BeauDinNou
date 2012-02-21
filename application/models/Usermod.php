<?php 

    class Usermod extends CI_Model {
    
    public function getUsers() {
       $query = $this->db->get('Users');
       
       foreach ($query->result() as $row) {
           echo $row->id;
           echo $row->email;
       }
                   
    }
    
    public function insertUser($email, $pass) {
        
        $data = array ("email" => $email,
                       "password" => $pass);
        
        $this->db->insert('users',$data);
        
        return $this->db->insert_id();
    }
    
    public function checkUser($email) {
        $this->db->select("email");
        $this->db->where("email",$email);
        
        $query = $this->db->get("users");
        if ($query->result())
            return 0;
        else
            return 1;
       
    }
    
    public function login($email, $pass) {
        $this->db->select("id");
        $this->db->where("email", $email);
        $this->db->where("password", $pass);
        
        $query = $this->db->get("users");
        
        $res = array();
        $res["id"] = "";
        
        foreach ($query->result() as $row) {
            $res["id"] = $row->id;
        }
        
        return $res["id"];
    }
    
    public function getUserDetails($id) {
        $this->db->select("*");
        $this->db->where("id", $id);
        
        $query = $this->db->get("users");
        
        $res = array();
       
        foreach ($query->result_array() as $row) {
            $res = $row;
        }
        
        return $res;
    }
 

}
?>