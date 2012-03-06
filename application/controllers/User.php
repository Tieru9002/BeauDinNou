<?php

class User extends CI_Controller {

    public function register() {
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

                if (!preg_match("/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i", $email))
                    $errors["match"] = "Adresa de e-mail nu este valida";

                if (!$this->Usermod->checkUser($email))
                    $errors["user"] = "Adresa de e-mail deja exista in baza de date";

                if (count($errors) == 0) {
                    $code_elements = md5($email . "iar" . $pass . "beau");
                    $user_id = $this->Usermod->insertUser($email, $pass, $code_elements);
                }


                if (count($errors) == 0) {

                    $this->load->library('email');

                    $config['protocol'] = "smtp";
                    $config['smtp_host'] = "ssl://smtp.googlemail.com";
                    $config['smtp_port'] = "465";
                    $config['smtp_user'] = "iarbeauro@gmail.com"; //also valid for Google Apps Accounts
                    $config['smtp_pass'] = "rotopercutor";
                    $config['charset'] = "utf-8";
                    $config['mailtype'] = "html";
                    $config['newline'] = "\r\n";

                    $this->email->initialize($config);

                    $this->email->from('form@emailtodomain.com', 'YOUR_NAME');
                    $list = array($email);
                    $this->email->to($list);
                    $this->email->subject('Activarea contului iarbeau.ro');
                    $text = '<h1>Ti-ai facut cont la noi pe site</h1> <br /> <a href="http://localhost/iarbeau/index.php/User/activateAccount/' . $user_id . '/' . $code_elements . '">Click aici</a> pentru a activa contul.';
                    $this->email->message($text); //Your cool html5 ;P
                    $this->email->set_alt_message(strip_tags('<h1>TEXT MSG<h1>')); //Only text

                    if (!$this->email->send()) {
                        show_error($this->email->print_debugger());
                    } else {
                        echo('DONE');
                    }
                } else {
                    $data["errors"] = $errors;
                    $data["success"] = 0;
                }
            }

            $data["rootcats"] = $this->Productmod->getRootCategories();
            $data['popular'] = $this->Productmod->getPopularProducts();
            $data["base_url"] = base_url();
            $this->parser->parse("register_front.tpl", $data);
        } else {
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
                        'id' => $id,
                        'nume' => $userdata["nume"],
                        'prenume' => $userdata["prenume"],
                        'email' => $userdata["email"],
                        'level' => $userdata["level"],
                        'logged_in' => TRUE,
                    );

                    $this->session->set_userdata($usersess);
                    //var_dum($this->session->set_userdata($usersess));
                    echo "true";
                }
                else
                    echo "false";

                if ($this->session->userdata("logged_in") == TRUE) {
                    $msg = "Bine ai venit " . $this->session->userdata("prenume");
                    $data["msg"] = $msg;
                    //$this->parser->parse("profile.tpl", $data);            
                } else {
                    $data["msg"] = "Email-ul sau parola sunt incorecte";
                    //  $this->parser->parse("login.tpl", $data);
                }
            }
        }
    }

    public function logout() {
        if ($this->islogged()) {
            $usersess = array(
                'nume' => '',
                'prenume' => '',
                'email' => '',
                'level' => '',
                'logged_in' => '',
                'id' => ''
            );
            $this->session->unset_userdata($usersess);
            echo "true";
        }
        //redirect("", "refresh");
    }

    public function islogged() {
        if ($this->session->userdata("logged_in") == TRUE)
            return 1;
    }

    public function activateAccount($id, $code) {
        $this->load->model("Usermod");

        $user_data = $this->Usermod->getUserDetails($id);
        if ($user_data["user_code"] == $code) {
            $this->Usermod->activateUser($id);

            $userdata = $this->Usermod->getUserDetails($id);
            $usersess = array(
                'nume' => $userdata["nume"],
                'prenume' => $userdata["prenume"],
                'email' => $userdata["email"],
                'level' => $userdata["level"],
                'logged_in' => $userdata["status"],
                'id' => $userdata["id"]
            );
            $this->session->set_userdata($usersess);
        }



        redirect('', 'refresh');
    }

    public function persPage() {
//        error_reporting(0);
        $this->load->model("Misc");
        $this->load->model("Usermod");
        $this->load->model("Productmod");

        $user_id = $this->session->userdata('id');
        if ($this->input->post("add_details") == "success") {
            $email = $this->input->post("email");
            $user_data["email"] = $email;
            if ($this->input->post("nume") != "") {
                $nume = $this->input->post("nume");
                $user_data["nume"] = $nume;
            }
            if ($this->input->post("prenume") != "") {
                $prenume = $this->input->post("prenume");
                $user_data["prenume"] = $prenume;
            }
            if ($this->input->post("phone") != "") {
                $phone = $this->input->post("phone");
                $user_data["phone"] = $phone;
            }


            $this->Usermod->changeUserDetails($user_id, $user_data);
        }
        $user_details = $this->Usermod->getUserDetails($user_id);



        $popular = $this->Productmod->getPopularProducts();
        $root_categories = $this->Productmod->getRootCategories();
        $contact_details = $this->Misc->getContactDetails();
        $data["email"] = $user_details["email"];
        $data["phone"] = $user_details["phone"];
        $data["nume"] = $user_details["nume"];
        $data["prenume"] = $user_details["prenume"];
        $data["contact_details"] = $contact_details;
        $data["popular"] = $popular;
        $data["rootcats"] = $root_categories;
        $data["base_url"] = base_url();
        $this->parser->parse("pagina_personala.tpl", $data);
    }



    public function forgotPassword() {
        error_reporting(0);
        $this->load->model("Usermod");
        $this->load->model("Productmod");

        if ($this->input->post("send") == "success") {
            $email = $this->input->post("email");


            $user_details = $this->Usermod->getUserByEmail($email);
            if (count($user_details) > 0) {
                $code = md5($email . "ia1rbea2udin6nou" . $user_details["id"]);

                $type = "recover_pass";

                $this->Usermod->addUserCode($user_details["id"], $code, $type);

                $this->load->library('email');

                $config['protocol'] = "smtp";
                $config['smtp_host'] = "ssl://smtp.googlemail.com";
                $config['smtp_port'] = "465";
                $config['smtp_user'] = "iarbeauro@gmail.com"; //also valid for Google Apps Accounts
                $config['smtp_pass'] = "rotopercutor";
                $config['charset'] = "utf-8";
                $config['mailtype'] = "html";
                $config['newline'] = "\r\n";

                $this->email->initialize($config);

                $this->email->from('form@emailtodomain.com', 'YOUR_NAME');
                $list = array($email);
                $this->email->to($list);
                $this->email->subject("Parola uitata iarbeau.ro");
                $text = '<h1>Ti-ai uitat parola</h1> <br /> <a href="http://localhost/iarbeau/index.php/User/checkUserCode/' . $user_details["id"] . '/' . $code . '">Click aici</a> pentru a activa contul.';
                $this->email->message($text); //Your cool html5 ;P
                $this->email->set_alt_message(strip_tags('<h1>TEXT MSG<h1>')); //Only text

                if (!$this->email->send()) {
                    show_error($this->email->print_debugger());
                } else {
                    echo('DONE');
                    $data["status"] = "V-am trimis un mail.";
                }
            } else {
                $data["status"] = "Adresa de email nu exista in baza de date";
            }
        }

        $data["base_url"] = base_url();
        $this->parser->parse("forgot_password.tpl", $data);
    }

    public function changePassword() {
        $this->load->model("Misc");
        $this->load->model("Productmod");
        $this->load->model("Usermod");        
        error_reporting(0);
        $user_id = $this->session->userdata("id");
        
        if ($this->input->post("send") == "success") {
            $old_pwd = $this->input->post("fieldOldPwd");
            $new_pwd= $this->input->post("fieldNewPwd");
            $conf_pwd= $this->input->post("fieldConfPwd");
            $errors = array();            
            if ($new_pwd == $conf_pwd) {            
                $res = $this->Usermod->verifyPassword($user_id, $old_pwd);
                if (count($res) < 1) {
                    $errors = "Parola nu a fost introdusa corect.";
                }
            }
            else {
                $errors[] = "Cele 2 parole nu corespund.";
            }   
            
               
            if (count($errors) < 1) {
            $this->Usermod->changePassword($user_id, $conf_pwd);
            $errors[] = "Parola a fost schimbata cu success.";
            }
        }
        var_dump($errors);
        
        $popular = $this->Productmod->getPopularProducts();
        $root_categories = $this->Productmod->getRootCategories();
        $contact_details = $this->Misc->getContactDetails();
        $data["contact_details"] = $contact_details;
        $data["popular"] = $popular;
        $data["rootcats"] = $root_categories;
        $data["base_url"] = base_url();
        $this->parser->parse("change_password.tpl", $data);
    }

    public function invoiceData() {
        $this->load->model("Misc");
        $this->load->model("Productmod");
        $this->load->model("Usermod");

        if ($this->input->post("send") == "success") {

            $name = $this->input->post("fieldDenumireFirma");
            $cui = $this->input->post("fieldCui");
            $reg_order = $this->input->post("fieldOrdineRegistru");
            $bank_acc = $this->input->post("fieldBankAcc");
            $bank_name = $this->input->post("fieldBankName");
            $address = $this->input->post("fieldAddress");
            $user_id = $this->session->userdata("id");

            $invoice_data = array(
                "user_id" => $user_id,
                "bussiness_name" => $name,
                "cui" => $cui,
                "register_order_nr" => $reg_order,
                "bank_acc" => $bank_acc,
                "bank_name" => $bank_name,
                "invoice_address" => $address,
                "status" => 1
            );

            $invoice_id = $this->Usermod->addInvoice($invoice_data);
        }

        if ($this->input->post("send") == "edit") {
            $name = $this->input->post("fieldDenumireFirma");
            $cui = $this->input->post("fieldCui");
            $reg_order = $this->input->post("fieldOrdineRegistru");
            $bank_acc = $this->input->post("fieldBankAcc");
            $bank_name = $this->input->post("fieldBankName");
            $address = $this->input->post("fieldAddress");
            $user_id = $this->session->userdata("id");
            $invoice_id = $this->input->post("invid");

            $invoice_data = array(
                "user_id" => $user_id,
                "bussiness_name" => $name,
                "cui" => $cui,
                "register_order_nr" => $reg_order,
                "bank_acc" => $bank_acc,
                "bank_name" => $bank_name,
                "invoice_address" => $address,
                "status" => 1
            );


            $invoice_id = $this->Usermod->editInvoice($invoice_id, $user_id, $invoice_data);
        }
        var_dump($this->session->userdata("id"));
        $invoices = $this->Usermod->getInvoicesByUserId($this->session->userdata("id"));

        $popular = $this->Productmod->getPopularProducts();
        $root_categories = $this->Productmod->getRootCategories();
        $contact_details = $this->Misc->getContactDetails();
        $data["invoices"] = $invoices;
        $data["contact_details"] = $contact_details;
        $data["popular"] = $popular;
        $data["rootcats"] = $root_categories;
        $data["base_url"] = base_url();
        $this->parser->parse("invoicedata.tpl", $data);
    }

    public function editAdresses() {
        $this->load->model("Misc");
        $this->load->model("Productmod");
        $this->load->model("Usermod");

        $user_id = $this->session->userdata("id");

        if ($this->input->post("send") == "success") {
            echo "mata";
            $address = $this->input->post("fieldAddress");

            $address_data = array(
                "user_id" => $user_id,
                "address" => $address
            );

            $address_id = $this->Usermod->addAddress($address_data);
        }

        if ($this->input->post("send") == "edit") {
            $address = $this->input->post("fieldAddress");
            $address_id = $this->input->post("addressid");
            $address_data = array(
                "user_id" => $user_id,
                "address" => $address
            );


            $address_id = $this->Usermod->editAddress($address_id, $user_id, $address_data);
        }

        $addresses = $this->Usermod->getAddressesByUserId($this->session->userdata("id"));        
        
        $popular = $this->Productmod->getPopularProducts();
        $root_categories = $this->Productmod->getRootCategories();
        $contact_details = $this->Misc->getContactDetails();
        $data["addresses"] = $addresses;
        $data["contact_details"] = $contact_details;
        $data["popular"] = $popular;
        $data["rootcats"] = $root_categories;
        $data["base_url"] = base_url();
        $this->parser->parse("edit_address.tpl", $data);
    }

    public function checkUserCode($id, $code) {
        $this->load->model("Usermod");

        $activation = $this->Usermod->checkUserCode($id, $code);
        if ($this->Usermod->checkUserCode($id, $code)) {
            if ($activation["code_type"] == "recover_pass") {
                $userdata = $this->Usermod->getUserDetails($id);
                $usersess = array(
                    'nume' => $userdata["nume"],
                    'prenume' => $userdata["prenume"],
                    'email' => $userdata["email"],
                    'level' => $userdata["level"],
                    'logged_in' => $userdata["status"]
                );
                $this->session->set_userdata($usersess);
            }
        }

        redirect("", "refresh");
    }

    public function getInvoiceData($id = '') {
        $this->load->model("Usermod");

        if ($this->input->post("getdata") == "true") {
            $invoice_id = $this->input->post("invoiceid");
            $user_id = $this->session->userdata("id");

            $invoice_data = $this->Usermod->getInvoiceData($user_id, $invoice_id);
            $invoice_data = json_encode($invoice_data);
            echo $invoice_data;
        }
    }

    public function removeInvoice($invoice_id) {
        $this->load->model("Usermod");
        $user_id = $this->session->userdata("id");
        $this->Usermod->removeInvoice($user_id, $invoice_id);
        redirect("User/invoicedata", "refresh");
    }

    public function getAddressData($id = '') {
        $this->load->model("Usermod");

        if ($this->input->post("getdata") == "true") {
            $address_id = $this->input->post("addressid");                        
            $user_id = $this->session->userdata("id");                       
            $address_data = $this->Usermod->getAddressData($user_id, $address_id);
            $address_data = json_encode($address_data); 
            echo $address_data;
        }
    }

    public function removeAddress($address_id) {
        $this->load->model("Usermod");
        $user_id = $this->session->userdata("id");
        $this->Usermod->removeAddress($user_id, $address_id);        
        redirect("User/editAdresses", "refresh");
    }

}

?>
