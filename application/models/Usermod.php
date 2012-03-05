<?php 

    class Usermod extends CI_Model {
    
    public function getUsers() {
       $query = $this->db->get('Users');
       
       foreach ($query->result() as $row) {
           echo $row->id;
           echo $row->email;
       }
                   
    }
    
    public function insertUser($email, $pass, $code) {
        
        $data = array ("email" => $email,
                       "password" => $pass,
                       "user_code" => $code);
        
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
        $this->db->where("status", 1);
        
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
       
         foreach ($query->result() as $row) {
           $res["email"] = $row->email;
           $res["status"] = $row->status;
           $res["user_code"] = $row->user_code;
           $res["level"] = $row->level;
           $res["nume"] = $row->nume;
           $res["prenume"] = $row->prenume;
           $res["phone"] = $row->phone;
        }
        
        return $res;
    }
    
    public function activateUser($id) {
        
             $data = array(
               'status' => 1
               );

        $this->db->where('id', $id);
        $this->db->update('users', $data);
        
    }
    
    public function checkUserDetails($id) {
        $this->db->select("*");
        $this->db->where("id", $id);
        $this->db->where("status", 1);
        
        $query = $this->db->get("users");
        
        $res = array();
       
         foreach ($query->result() as $row) {
           $res["id"] = $row->id;
           $res["email"] = $row->email;
           $res["status"] = $row->status;
           $res["user_code"] = $row->user_code;
           $res["level"] = $row->level;
           $res["nume"] = $row->nume;
           $res["prenume"] = $row->prenume;
        }
        
        return $res;
    }
    
    public function generateUser($phone) {
         $data = array ("status" => 2,
                        "phone"=> $phone);                        
        
        $this->db->insert('users',$data);
        
        return $this->db->insert_id();
    }
    
    public function generateAddress($user_id, $address) {
        $data = array ("user_id" => $user_id,
                       "address"=> $address);                        
        
        $this->db->insert('addresses',$data);
        
        return $this->db->insert_id();
    }
    
    public function getUserByEmail($email) {
        $this->db->select("id");
        $this->db->where("email", $email);
        $this->db->where("status", 1);
        
        $query = $this->db->get("users");
        
         foreach ($query->result() as $row) {
             $res["id"] = $row->id;
             $res["email"] = $row->email;
         }
         
         return $res;
    }
    
    public function addUserCode ($id, $code, $type) {
        $data = array ("user_id" => $id,
                       "code" => $code,
                       "code_type" => $type);                        
        
        $this->db->insert('user_codes',$data);
        
        return $this->db->insert_id();
        
    }
    
    public function checkUserCode ($id, $code) {
        $this->db->select("id, user_id, code_type, code");
        $this->db->where("user_id", $id);
        $this->db->where("code", $code);
        
        $query = $this->db->get("user_codes");
        
         foreach ($query->result() as $row) {
             $res["id"] = $row->id;
             $res["user_id"] = $row->user_id;
             $res["code_type"] = $row->code_type;
             $res["code"] = $row->code;
         }
         
         return $res;
    }
    
    public function changeUserDetails($id, $data) {             
        $this->db->where('id', $id);
        $this->db->update('users', $data);
    }
}
?>