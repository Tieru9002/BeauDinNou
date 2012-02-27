<?php

class User extends CI_Controller {
    
    public function register()
    {
        $this->load->model("Usermod");      
        $this->load->model("Productmod");
        $errors = array();
        $data = array();
        if (!$this->islogged()) {
            if ($this->input->post("register") == "success") {       

                $email = $this->input->post("email");
                $pass1 = $this->input->post("pass1");
                $pass2 = $this->input->post("pass2");           

                if ($pass1 != $pass2)
                    $errors["pass"] = "Cele 2 parole nu corespund.";
                else {
                    $pass = $pass1;
                    $pass = md5($pass);
                }   

                if ($email == "")
                    $errors["email"] = "Nu ati completat e-mailul.";

                if (!preg_match("/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i",$email))
                    $errors["match"] = "Adresa de e-mail nu este valida";

                if (!$this->Usermod->checkUser($email))
                    $errors["user"] = "Adresa de e-mail deja exista in baza de date";

                if (count($errors) == 0) {
                    $code_elements = md5($email."iar".$pass."beau");
                    $user_id = $this->Usermod->insertUser($email, $pass, $code_elements);
                }
                                                   

                if (count($errors) == 0) {
                                        
                    $this->load->library('email');
            
                    $config['protocol'] = "smtp";
                    $config['smtp_host'] = "ssl://smtp.googlemail.com";
                    $config['smtp_port'] = "465";
                    $config['smtp_user'] = "iarbeauro@gmail.com";//also valid for Google Apps Accounts
                    $config['smtp_pass'] = "rotopercutor";
                    $config['charset'] = "utf-8";
                    $config['mailtype'] = "html";
                    $config['newline'] = "\r\n";

                    $this->email->initialize($config);        
                    
                    $this->email->from('form@emailtodomain.com', 'YOUR_NAME');
                    $list = array($email);
                    $this->email->to($list);
                    $this->email->subject('Activarea contului iarbeau.ro');
                    $text = '<h1>Ti-ai facut cont la noi pe site</h1> <br /> <a href="http://localhost/iarbeau/index.php/User/activateaccount/'.$user_id.'/'.$code_elements.'">Click aici</a> pentru a activa contul.'; 
                    $this->email->message($text); //Your cool html5 ;P
                    $this->email->set_alt_message(strip_tags('<h1>TEXT MSG<h1>')); //Only text

                    if ( ! $this->email->send())
                    {
                    show_error($this->email->print_debugger());
                    } else {
                    echo('DONE');        
                    }   
                }
                else{
                    $data["errors"] = $errors;
                    $data["success"] = 0;
                }
            }                       

            $data["rootcats"] = $this->Productmod->getRootCategories();
            $data['popular'] = $this->Productmod->getPopularProducts();
            $data["base_url"] = base_url();
            $this->parser->parse("register_front.tpl",$data);
        }
        else {
            $this->parser->parse("profile.tpl");
        }
    }
    
    public function login() {
        $this->load->model("Usermod");                   
        if (!$this->islogged()) {            
            if ($this->input->post("login") == "success") {                
                $email = $this->input->post("email");
                $pass = $this->input->post("pass");                
                $pass = md5($pass);                        

                $id = "";                
                $id = $this->Usermod->login($email, $pass);

                if ($id) {
                    $userdata = $this->Usermod->getUserDetails($id);

                    

                    $usersess = array(
                       'nume'      => $userdata["nume"],
                       'prenume'   => $userdata["prenume"],
                       'email'     => $userdata["email"],
                       'level'     => $userdata["level"],
                       'logged_in' => TRUE
                   );                    

                   $this->session->set_userdata($usersess);
                   //var_dum($this->session->set_userdata($usersess));
                   echo "true";
                }     
                    else echo "false";
                
                if ($this->session->userdata("logged_in") == TRUE) {
                $msg = "Bine ai venit ".$this->session->userdata("prenume");
                $data["msg"] = $msg;        
                //$this->parser->parse("profile.tpl", $data);            
                }
                else {
                    $data["msg"] = "Email-ul sau parola sunt incorecte";
                  //  $this->parser->parse("login.tpl", $data);
                }                                                   
            }            
        }        
    }
    
    public function logout() {
        if ($this->islogged())
            $this->session->sess_destroy();
        redirect("user/register", "refresh");
        
    }
    
    public function islogged () {
        if ($this->session->userdata("logged_in") == TRUE)
            return 1;
    }
    
    public function activateAccount ($id, $code) {
        $this->load->model("Usermod"); 
        
        $user_data = $this->Usermod->getUserDetails($id);
        if ($user_data["user_code"] == $code ) {
            $this->Usermod->activateUser($id);
            
            $userdata = $this->Usermod->getUserDetails($id);       
            $usersess = array(
            'nume'      => $userdata["nume"],
            'prenume'   => $userdata["prenume"],
            'email'     => $userdata["email"],
            'level'     => $userdata["level"],
            'logged_in' => $userdata["status"]
            );
        $this->session->set_userdata($usersess);
        }
        
        
        
        redirect('', 'refresh');                
    }
    
    public function persPage () {
        $this->load->model("Misc");
        $this->load->model("Productmod");
        
        $popular = $this->Productmod->getPopularProducts();
        $root_categories = $this->Productmod->getRootCategories();
        $contact_details = $this->Misc->getContactDetails();
        $data["contact_details"] = $contact_details;
        $data["popular"] = $popular;
        $data["rootcats"] = $root_categories;
        $data["base_url"] = base_url();
        $this->parser->parse("pagina_personala.tpl", $data);
    }
    
    public function editAddress () {
        $this->load->model("Misc");        
        $this->load->model("Productmod");
        
        $popular = $this->Productmod->getPopularProducts();
        $root_categories = $this->Productmod->getRootCategories();
        $contact_details = $this->Misc->getContactDetails();
        $data["contact_details"] = $contact_details;
        $data["popular"] = $popular;
        $data["rootcats"] = $root_categories;
        $data["base_url"] = base_url();
        $this->parser->parse("edit_address.tpl", $data);
    }
    
}
?>
