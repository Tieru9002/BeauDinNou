<?php

class Products extends CI_Controller {

    public function listProducts() {
        $this->load->model("Productmod");

        $products = $this->Productmod->listProd();
    }

    public function singleProduct($id) {
        $this->load->model("Productmod");
        $this->load->model("Misc");

        if ($this->input->post("addtocart") == "success") {
            $prod_id = $this->input->post("prodid");
            $prodbuy = $this->Productmod->getProductById($prod_id);
            $prod_q = $this->input->post("prod_q");
            $prod_price = $prodbuy["price"];
            $prod_name = $prodbuy["name"];
            //$rowid = $this->input->post("rowid");                        
            $prod_name = quotes_to_entities($prod_name);
            $cartdata = array(
                'id' => $prod_id,
                'qty' => $prod_q,
                'price' => $prod_price,
                'name' => $prod_name,
                'options' => array('picture' => $prodbuy["picture"])
            );

            $haystack = array("\"", "'", "(", ")");
            $cartdata["name"] = str_replace($haystack, " ", $cartdata["name"]);
            //var_dump($cartdata["name"]);
            //var_dump($cartdata); 
            //var_dump($this->cart->contents());
            if (isset($cartdata['options']) AND count($cartdata['options']) > 0) {
                $rowid = md5($prod_id . implode('', $cartdata['options']));
            } else {
                // No options were submitted so we simply MD5 the product ID.
                // Technically, we don't need to MD5 the ID in this case, but it makes
                // sense to standardize the format of array indexes for both conditions
                $rowid = md5($prod_id);
            }
            


            //var_dump($old_q); 
            $all_products = $this->cart->contents();
            if (isset($all_products[$rowid]) AND count($all_products[$rowid]) > 0) {
                $old = $this->cart->all_product_options($rowid);
                if ($cartdata["qty"] != 0) {
                    $new_q = $cartdata["qty"] + $old["qty"];
                    $updatedata = array(
                        'rowid' => $rowid,
                        'qty' => $new_q);
                }
                else
                    $updatedata = array(
                        'rowid' => $rowid,
                        'qty' => 0);
                $this->cart->update($updatedata);
            }
            else
                $rowid = $this->cart->insert($cartdata);
        }

        $cartnritems = $this->cart->total_items();
        $totalprice = $this->cart->total();

        $product_details = $this->Productmod->getProductById($id);

        $subprods = $this->Productmod->getProductsBySubprodId($product_details["subprod_id"]);
        foreach ($subprods as $key => $value) {
            if ($value["id"] == $id) {
                $temp = $subprods[0];
                $subprods[0] = $subprods[$key];
                $subprods[$key] = $temp;
            }
        }
        //var_die($subprods);
//      $this->session->sess_destroy();
        $contact_details = $this->Misc->getContactDetails();
        $data["contact_details"] = $contact_details;
        $data["rootcats"] = $this->Productmod->getRootCategories();
        $data['subprods'] = $subprods;
        $data["product"] = $product_details;
        $data['cartnritems'] = $cartnritems;
        $data['totalprice'] = $totalprice;
        $data['popular'] = $this->Productmod->getPopularProducts();
//      $data['rowid'] = $rowid;
        $data['cartitems'] = $this->cart->contents();
        //echo "<pre>"; var_dump($this->cart->contents()); echo "</pre>";
        $data["base_url"] = base_url();
        $this->parser->parse("singleproduct.tpl", $data);
    }

    public function singleCat($id, $pn = 0) {
        $this->load->model("Productmod");
        $this->load->model("Misc");

        $category_details = $this->Productmod->getCategoryById($id);

        $products = $this->Productmod->getProductsByCategoryId($id, $pn);
        $count = $this->Productmod->countCategoryProducts($id);
        foreach ($products as $key => $value) {
            $products[$key]["price"] = number_format($value["price"], 2);
        }
        $this->load->library('pagination');
        $base_url = base_url();
        $config['base_url'] = $base_url . "index.php/products/singlecat/" . $id;
        $config['total_rows'] = $count["nr_items"];
        $config['per_page'] = 10;
        $config['uri_segment'] = '4';

        $this->pagination->initialize($config);

        $contact_details = $this->Misc->getContactDetails();

        $data = array();
        $data["contact_details"] = $contact_details;
        $data["pagination"] = $this->pagination->create_links();
        $data['cartitems'] = $this->cart->contents();
        $data["products"] = $products;
        $data["category"] = $category_details;
        $data["base_url"] = base_url();
        $data["rootcats"] = $this->Productmod->getRootCategories();
        $data['popular'] = $this->Productmod->getPopularProducts();
        $this->parser->parse("singlecat.tpl", $data);
    }

    public function viewCart() {
        $this->load->model("Productmod");
       
        $item_ids = "";
        foreach ($this->cart->contents() as $item) {
            $item_ids[] = $item["id"];
        }

        if ($this->input->post("updatecart") == "success") {
            $i = 0;

            foreach ($this->cart->contents() as $value) {
                $post_name = "qty" . $i;
                $new_q = $this->input->post($post_name);
                $updatedata = array(
                    'rowid' => $value["rowid"],
                    'qty' => $new_q);
                $this->cart->update($updatedata);
                $i++;
            }
        }

        //echo "<pre>"; var_dump($this->cart->contents());
        $cart_products = $this->Productmod->getItemsByIds($item_ids);

//        echo "<pre>";
//        var_dump($this->cart->contents());
//        echo "</pre>";
        //echo "<pre>";
        //var_dump($this->cart->contents());
        $cartnritems = $this->cart->total_items();
        $totalprice = $this->cart->total();
        //echo "<pre>";var_dump($cart_products);
        //var_dump($item_ids);
        //echo "<pre>"; var_dump($cart_products); echo "</pre>";
        $popular = $this->Productmod->getPopularProducts();
        $root_categories = $this->Productmod->getRootCategories();
        $data["rootcats"] = $root_categories;
        $data["popular"] = $popular;
        $data['cartnritems'] = $cartnritems;
        $data['totalprice'] = $totalprice;
        //$data["cart_products"] = $cart_products;
        $data['cartitems'] = $this->cart->contents();
        $data["base_url"] = base_url();
        //$data["cart_products"] = $cart_products;
        $data["base_url"] = base_url();
        $this->parser->parse("cart.tpl", $data);
    }

    public function removeFromCart($id) {
        $this->load->model("Productmod");
        //$cartdata = $this->cart->contents();
        $product = $this->Productmod->getProductById($id);     
        
        
        $rowid = md5($id.$product["picture"]);               
        
        $updatedata = array(
            'rowid' => $rowid,
            'qty' => 0);

        $this->cart->update($updatedata);

        redirect("products/viewcart", "refresh");
    }

    public function checkout() {
        $this->load->model("Productmod");
        $this->load->model("Usermod");

        $popular = $this->Productmod->getPopularProducts();
        $root_categories = $this->Productmod->getRootCategories();
       
        if ($this->input->post("sendorder") == "success") {
            $cart_id = $this->Productmod->generateCart();
            if (!$this->session->userdata('user_id')) {
                $new_user_id = $this->Usermod->generateUser("0726989460");
                $address_id = $this->Usermod->generateAddress($new_user_id, "Adresa dummy");
                $order_value = $this->cart->total();
                $order_id = $this->Productmod->generateOrder($cart_id, $new_user_id, $order_value);
            } else {
                $order_value = $this->cart->total();
                $order_id = $this->Productmod->generateOrder($cart_id, $this->session->userdata('user_id'), $order_value);
            }

            foreach ($this->cart->contents() as $key => $value) {
                $this->Productmod->generatePurchase($cart_id, $value["id"], $value["qty"]);
            }
            echo "1";
            $this->cart->destroy();
        }
        $data["totalprice"] = $this->cart->total();
        $data['cartitems'] = $this->cart->contents();
        $data["popular"] = $popular;
        $data["rootcats"] = $root_categories;
        $data["base_url"] = base_url();
        $this->parser->parse("checkout.tpl", $data);
    }

    public function search($query) {
        
    }
        

}

?>
