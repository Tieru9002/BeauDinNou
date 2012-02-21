<?php
class Main extends CI_Controller {
    
        public function index ()  {          
            
            $this->load->model("Usermod");            
            if (!$this->session->userdata("logged_in")) {
            if ($this->input->post("login") == "success") {
                $email = $this->input->post("email");
                $pass = $this->input->post("pass");
                
                $pass = md5($pass);                        

                $id = "";                
                $id = $this->Usermod->login($email, $pass);

                if ($id) {                    
                    $userdata = $this->Usermod->checkUserDetails($id);                    

                    $usersess = array(
                       'nume'      => $userdata["nume"],
                       'prenume'   => $userdata["prenume"],
                       'email'     => $userdata["email"],
                       'level'     => $userdata["level"],
                       'logged_in' => TRUE
                   );

                   $this->session->set_userdata($usersess);
                }      
                
                if ($this->session->userdata("logged_in") == TRUE) {
                $msg = "Bine ai venit ".$this->session->userdata("prenume");
                $data["msg"] = $msg;                        
                }
                else {
                    $data["msg"] = "Email-ul sau parola sunt incorecte";                  
                }         
            }
            else {                
            }
        }
            
            $this->load->model("Productmod");
            
            $popular = $this->Productmod->getPopularProducts();
            $featured_d = $this->Productmod->getFeatured_d();
            $featured_s = $this->Productmod->getFeatured_s();
            $promo = $this->Productmod->getAllPromo();
            
            $i=0;
            foreach ($featured_d as $value) {
                if ($i < 6 ) {
                $featured_d1[] = $value;
                $featured_d1[$i]["price"] = number_format($featured_d1[$i]["price"],2,'.','');                
                }
                $i++;
            }
            $i=0;
            $featured_d2 = array();
            foreach ($featured_d as $value) {
                if ($i > 5 ) {
                $featured_d2[] = $value;
                $featured_d2[$i]["price"] = number_format($featured_d2[$i]["price"],2,'.','');
                }
                $i++;
            }            
            $specials = $this->Productmod->getSpecials();                        
            var_dump($this->session->all_userdata());
            //echo "<pre>"; var_dump($this->session->userdata("email")); echo "</pre>";
            //echo "<pre>";var_dump($featured_d); var_dump($featured_s); echo "</pre>";
            $root_categories = $this->Productmod->getRootCategories();
            //echo "<pre>"; var_dump($root_categories); echo"</pre>";
            $cartnritems = $this->cart->total_items();
            $totalprice = $this->cart->total();
            $data["featured_d1"] = $featured_d1;
            $data["featured_d2"] = $featured_d2;
            $data["featured_s"] = $featured_s;
            $data["promo"] = $promo;
            $data["popular"] = $popular;
            $data["rootcats"] = $root_categories;          
            $data['cartnritems'] = $cartnritems;
            $data['totalprice'] = $totalprice;
            $data['specials'] = $specials;
            $data['cartitems'] = $this->cart->contents();
            $data["base_url"] = base_url();
            $this->parser->parse("homepage.tpl",$data);            
        }
    
}    