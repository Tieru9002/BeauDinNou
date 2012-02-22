<?php


class Products extends CI_Controller {
    public function listProducts () {
        $this->load->model("Productmod");
        
        $products = $this->Productmod->listProd();        
    }
    
    public function singleProduct ($id) {
        $this->load->model("Productmod");
        //$this->cart->destroy();
         if ($this->input->post("addtocart") == "success") {
            $prod_id = $this->input->post("prodid");
            $prodbuy = $this->Productmod->getProductById($prod_id);
            $prod_q = $this->input->post("prod_q");
            $prod_price =  $prodbuy["price"];
            $prod_name = $prodbuy["name"];                        
            //$rowid = $this->input->post("rowid");            
            
            $cartdata = array(
               'id'      => $prod_id,
               'qty'     => $prod_q,
               'price'   => $prod_price,
               'name'    => $prod_name,
               'options' => array('picture' => $prodbuy["picture"])
            );            
            
            $haystack = array("\"","'","(", ")");
            $cartdata["name"]  = str_replace($haystack," ", $cartdata["name"]);            
            //var_dump($cartdata["name"]);
 
            //var_dump($cartdata); 
           //var_dump($this->cart->contents());
            if (isset($cartdata['options']) AND count($cartdata['options']) > 0)
		{
			$rowid = md5($prod_id.implode('', $cartdata['options']));
		}
		else
		{
			// No options were submitted so we simply MD5 the product ID.
			// Technically, we don't need to MD5 the ID in this case, but it makes
			// sense to standardize the format of array indexes for both conditions
			$rowid = md5($prod_id);
		}
            
            
            
            //var_dump($old_q); 
            $all_products = $this->cart->contents();
            if (isset($all_products[$rowid]) AND count($all_products[$rowid]) > 0) {
            $old = $this->cart->all_product_options($rowid);
            if ($cartdata["qty"] != 0 ) {
                $new_q = $cartdata["qty"] + $old["qty"];    
                    $updatedata = array(
                                'rowid' =>$rowid,
                                'qty'   => $new_q);
            }
            else
                $updatedata = array(
                                'rowid' =>$rowid,
                                'qty'   => 0);
            $this->cart->update($updatedata); 
            }
            else                                                             
                $rowid = $this->cart->insert($cartdata);                                                                               
        }
        
        $cartnritems = $this->cart->total_items();
        $totalprice = $this->cart->total();
        //var_dump()
        $product_details = $this->Productmod->getProductById($id);
        
        $subprods = $this->Productmod->getProductsBySubprodId($product_details["subprod_id"]);                 
        //echo "<pre>";var_dump($subprods);
        $data["rootcats"] = $this->Productmod->getRootCategories();
        $data['subprods'] = $subprods;
        $data["product"] = $product_details;
        $data['cartnritems'] = $cartnritems;
        $data['totalprice'] = $totalprice;
        $data['popular'] = $this->Productmod->getPopularProducts();
//        $data['rowid'] = $rowid;
        $data['cartitems'] = $this->cart->contents();
       //echo "<pre>"; var_dump($this->cart->contents()); echo "</pre>";
        $data["base_url"] = base_url();                
        $this->parser->parse("singleproduct.tpl",$data);
        
    }
    
    public function singleCat ($id, $pn=0) {
        $this->load->model("Productmod");                
        
        $category_details = $this->Productmod->getCategoryById($id);               
        
        $products = $this->Productmod->getProductsByCategoryId($id, $pn);                                                
        $count = $this->Productmod->countCategoryProducts($id);        
        $this->load->library('pagination');
        $base_url = base_url();
        $config['base_url'] = $base_url."index.php/products/singlecat/".$id;
        $config['total_rows'] = $count["nr_items"];
        $config['per_page'] = 10;
        $config['uri_segment'] = '4'; 

        $this->pagination->initialize($config);

        
        
        $data = array();
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
        //var_dump($this->cart->contents() );
        
        $item_ids = "";
        foreach ($this->cart->contents() as $item) {
            $item_ids[] = $item["id"];
            
        }   
       
        if ($this->input->post("updatecart") == "success") {
            $i=0;
            
            foreach ($this->cart->contents() as $value) {
                $post_name = "qty".$i;    
                $new_q = $this->input->post($post_name);                         
                    $updatedata = array(
                                    'rowid' =>$value["rowid"],
                                    'qty'   => $new_q);             
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
        $this->parser->parse("cart.tpl",$data);
    }
    
    public function removeFromCart($id) {
        $this->load->model("Productmod");
        
        if (isset($cartdata['options']) AND count($cartdata['options']) > 0)
            {
                    $rowid = md5($id.implode('', $cartdata['options']));
            }
            else
            {
                    // No options were submitted so we simply MD5 the product ID.
                    // Technically, we don't need to MD5 the ID in this case, but it makes
                    // sense to standardize the format of array indexes for both conditions
                    $rowid = md5($id);
            }
        
        $updatedata = array(
                            'rowid' =>$rowid,
                            'qty'   => 0);

        $this->cart->update($updatedata); 
        
        redirect ("products/viewcart", "refresh");
    }
    
    public function checkout() {
        $this->load->model("Productmod");
        $popular = $this->Productmod->getPopularProducts();
        $root_categories = $this->Productmod->getRootCategories();
        $data["popular"] = $popular;
        $data["rootcats"] = $root_categories; 
        $data["base_url"] = base_url();
        $this->parser->parse("checkout.tpl", $data);
    }
    

    
    
}

?>
