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
                    $user_id = $this->Usermod->insertUser($email, $pass);
                }

                $data["errors"] = $errors;                                    

                if (count($errors) == 0) {
                    $data["success"] = 1;
                    $config = Array(
                    'protocol' => 'smtp',
                    'smtp_host' => 'ssl://smtp.googlemail.com',
                    'smtp_port' => 465,
                    'smtp_user' => 'gmail.login@googlemail.com',
                    'smtp_pass' => 'your_password',
                );
                $this->load->library('email', $config);
                $this->email->set_newline("\r\n");

                $this->email->from('gmail.login@googlemail.com', 'Your Name');
                $this->email->to('recipient@destination.tld');

                $this->email->subject(' CodeIgniter Rocks Socks ');
                $this->email->message('Hello World');


                if (!$this->email->send())
                    show_error($this->email->print_debugger());
                else
                    echo 'Your e-mail has been sent!';  
                }
                else
                    $data["success"] = 0;
            }                       

            echo "<pre>";
            var_Dump($data["errors"]);
            echo "</pre>";                
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
        $msg = "";
        $data = array();
        
        if (!$this->islogged()) {
            if ($this->input->post("login") == "success") {
                $email = $this->input->post("email");
                $pass = $this->input->post("pass");

                $pass = md5($pass);                        

                $id = "";                
                $id = $this->Usermod->login($email, $pass);

                if ($id) {
                    $userdata = $this->Usermod->getUserDetails($id);

                    echo "<pre>"; var_dump($userdata); echo "</pre>";

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
                $this->parser->parse("profile.tpl", $data);            
                }
                else {
                    $data["msg"] = "Email-ul sau parola sunt incorecte";
                    $this->parser->parse("login.tpl", $data);
                }         
            }
            else {
                $this->parser->parse("login.tpl");
            }
        }
        else {
            $msg = "Salut". $this->session->userdata("prenume");
            $datalogout["msg"] = $msg;
            $this->parser->parse("profile.tpl",$datalogout);
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
}
?>
