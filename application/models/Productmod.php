<?php

class Productmod extends CI_Model { 
    public function listProd() {
        $this->db->select("*");                
        $query = $this->db->get("products");
        $i=0;
        $res = array();
        foreach ( $query->result()  as $row ) {
            $res[$i]["id"] = $row->id;
            $res[$i]["cat_id"] = $row->cat_id;
            $res[$i]["name"] = $row->name;
            $res[$i]["price"] = $row->price;
            $res[$i]["meta_key"] = $row->meta_keywords;
            $res[$i]["meta_desc"] = $row->meta_desc;
            $i++;
        }
        
        return $res;
    }
    
    public function listProdByCat($catid) {
        $this->db->select("*");
        $this->db->where("cat_id",$catid);
        $query = $this->db->get("products");
        $i=0;
        foreach ( $query->result()  as $row ) {
            $res[$i]["id"] = $row->id;
            $res[$i]["cat_id"] = $row->cat_id;
            $res[$i]["name"] = $row->name;
            $res[$i]["price"] = $row->price;
            $res[$i]["meta_key"] = $row->meta_keywords;
            $res[$i]["meta_desc"] = $row->meta_desc;
            $i++;
        }
        
        return $res;
    }
    
    public function addProduct ($name, $cat_id, $price, $meta_key, $meta_desc, $picture, $description, $subgroup_id, $featured_d, $featured_s, $promo, $special) {
        //var_dump($picture);
        $data = array ("name" => $name,
                       "cat_id" => $cat_id,
                       "price" => $price,
                       "meta_keywords" => $meta_key,
                       "meta_desc" => $meta_desc,
                       "description" => $description,
                       "picture" => $picture,
                       "subprod_id" =>$subgroup_id,
                       "featured_d" => $featured_d,
                       "featured_s" => $featured_s,
                       "promo" => $promo,
                       "specials" => $special);
        
        $this->db->insert('products',$data);
        
        return $this->db->insert_id();
    }
    
    public function getCategories () {
        
        $this->db->select("*");
        $query = $this->db->get("category");
        
        $i=0;
        
        foreach ($query->result() as $row) {
            $res[$i]["id"] = $row->id;
            $res[$i]["name"] = $row->name;
            $res[$i]["parent"] = $row->parent;
            $i++;
        }
        
        return $res;
    }
    
    public function getSubgroups () {
        
        $this->db->select("*");
        $query = $this->db->get("subproducts");
        
        $i=0;
        
        foreach ($query->result() as $row) {
            $res[$i]["id"] = $row->id;
            $res[$i]["subprod_name"] = $row->subprod_name;           
            $i++;
        }
        
        return $res;
    }
    
    public function getRootCategories () {
        $this->db->select("*");
        $this->db->where("parent", 0);
        $query = $this->db->get("category");
        
        $i=0;
        
        foreach ($query->result() as $row) {
            $res[$i]["id"] = $row->id;
            $res[$i]["name"] = $row->name;
            $res[$i]["parent"] = $row->parent;
            $i++;
        }
        
        return $res;
    }
    
    public function addCategory ($name, $parent, $description) {
        $data = array ("name" => $name,
                       "parent" => $parent,
                       "description" => $description);
                       
        $this->db->insert("category",$data);
    }
    
    public function addSubGroup ($name) {
        $data = array ("subprod_name" => $name);
                       
        $this->db->insert("subproducts",$data);
    }
    
    public function getCategoryById ($id) {
        $this->db->select("*");
        $this->db->where("id", $id);
        
        $query = $this->db->get("category");
        
        foreach ($query->result() as $row) {
            $res["id"] = $row->id;            
            $res["name"] = $row->name;
            $res["parent"] = $row->parent;        
            $res["description"] = $row->description;
        }
        
        return $res;
    }
    
    public function updateCategoryById($id, $name, $parent, $description) {        
         $data = array(
               'name' => $name,
               'parent' => $parent,
               'description' => $description
            );

        $this->db->where('id', $id);
        $this->db->update('category', $data);
    }
    
    public function deleteCategoryById ($id) {
        $this->db->where('id', $id);
        
        if ($this->db->delete('category'))
            return 1;
        else
            return 0;
    }
    
    public function getProductById($id) {
        $this->db->select("*");
        $this->db->where("id", $id);
        
        $query = $this->db->get("products");
        
        foreach ($query->result() as $row) {
            $res["id"] = $row->id;
            $res["cat_id"] = $row->cat_id;
            $res["name"] = $row->name;
            $res["price"] = $row->price;
            $res["description"] = $row->description;
            $res["meta_key"] = $row->meta_keywords;
            $res["meta_desc"] = $row->meta_desc;
            $res["picture"] = $row->picture;
            $res["subprod_id"] = $row->subprod_id;
            $res["featured_d"] = $row->featured_d;
            $res["featured_s"] = $row->featured_s;
            $res["promo"] = $row->promo;
            $res["specials"] = $row->specials;
        }
        
        return $res;
    }
    
//    public function getProductByCatId($id) {
//        $this->db->select("*");
//        $this->db->where("cat_id", $id);
//        
//        $query = $this->db->get("product");
//        
//        foreach ($query->result() as $row) {
//            $res["id"] = $row->id;
//            $res["cat_id"] = $row->cat_id;
//            $res["name"] = $row->name;
//            $res["price"] = $row->price;
//            $res["description"] = $row->description;
//            $res["meta_key"] = $row->meta_keywords;
//            $res["meta_desc"] = $row->meta_desc;
//            $res["picture"] = $row->picture;
//            $res["subprod_id"] = $row->subprod_id;
//            $res["featured_d"] = $row->featured_d;
//            $res["featured_s"] = $row->featured_s;
//            $res["promo"] = $row->promo;
//            $res["specials"] = $row->specials;
//        }
//        
//        return $res;
//    }
    
    public function getPopularProducts () {
        $this->db->select("*");
        $this->db->order_by("count", "desc");
        $this->db->limit(5);
        
        $query = $this->db->get("products");
        $i=0;
        foreach ($query->result() as $row) {
            $res[$i]["id"] = $row->id;
            $res[$i]["cat_id"] = $row->cat_id;
            $res[$i]["name"] = $row->name;
            $res[$i]["price"] = $row->price;
            $res[$i]["meta_key"] = $row->meta_keywords;
            $res[$i]["meta_desc"] = $row->meta_desc;
            $res[$i]["picture"] = $row->picture;
            $i++;
        }
        
        return $res;
    }
    
    public function updateProductById($id, $name, $cat_id, $price, $description, $meta_key, $meta_desc, $picture, $subgroup_id, $featured_d, $featured_s, $promo, $specials) {        
        $data = array(
               'name' => $name,
               'cat_id' => $cat_id,
               'price' => $price,
               'description' => $description,
               'meta_keywords' => $meta_key,
               "subprod_id" =>$subgroup_id,
               'meta_desc' => $meta_desc,
               'featured_d' => $featured_d,
               'featured_s' => $featured_s,
               'promo' => $promo,
               'specials' => $specials
            );
        
        if ($picture != "")
            $data["picture"] = $picture;
        
        $this->db->where('id', $id);
        $this->db->update('products', $data);

    }
    
    public function deleteProductById($id) {
        
        $this->db->where('id', $id);
        
        if ($this->db->delete('products'))
            return 1;
        else
            return 0;

    }
    
    public function getProductsBySubprodId ($id) {
        $this->db->select("*");        
        $this->db->where("subprod_id", $id);
        $query = $this->db->get("products");
        $i=0;
                
        foreach ($query->result() as $row) {
            $res[$i]["id"] = $row->id;            
            $res[$i]["name"] = $row->name;
            $res[$i]["price"] = $row->price;
            $res[$i]["picture"] = $row->picture;   
            $i++;
        }
        
        return $res;
    }
    
    public function getItemsByIds ($ids) {
        $this->db->select("*");
        $this->db->where_in("id",$ids);

        $query = $this->db->get("products");
        $i=0;
        $res = array();
        foreach ($query->result() as $row) {
            $res[$i]["id"] = $row->id;
            $res[$i]["cat_id"] = $row->cat_id;
            $res[$i]["name"] = $row->name;
            $res[$i]["price"] = $row->price;
            $res[$i]["description"] = $row->description;
            $res[$i]["picture"] = $row->picture;
            $i++;
        }
        
        return $res;
        
    }
    
    public function getFeatured_d() {
        $this->db->select("*");        
        $this->db->where("featured_d", 1);
        $query = $this->db->get("products");
        $i=0;
                        
        foreach ($query->result() as $row) {
            $res[$i]["id"] = $row->id;            
            $res[$i]["name"] = $row->name;
            $res[$i]["price"] = $row->price;
            $res[$i]["picture"] = $row->picture;   
            $i++;
        }
        
        return $res;
    }
    
    public function getFeatured_s() {
        $this->db->select("*");        
        $this->db->where("featured_s", 1);
        $query = $this->db->get("products");
        $i=0;
        
        foreach ($query->result() as $row) {
            $res[$i]["id"] = $row->id;            
            $res[$i]["name"] = $row->name;
            $res[$i]["price"] = $row->price;
            $res[$i]["picture"] = $row->picture;   
            $i++;
        }
        
        return $res;
    }
    
    public function listPromo() {
        $this->db->select("*");                
        $query = $this->db->get("promo");
        $i=0;
        
        foreach ($query->result() as $row) {
            $res[$i]["id"] = $row->id;            
            $res[$i]["picture"] = $row->picture;
            $res[$i]["url"] = $row->url;            
            $i++;
        }
        
        return $res;
    }
    
    public function addPromo ($picture, $url) {
        
        $data = array ("picture" => $picture,
                       "url" => $url);
        
        $this->db->insert('promo',$data);
        
        return $this->db->insert_id();
    }
    
    public function updatePromoById($id, $picture, $url) {        
        $data = array(
               'url' => $url
            );
        
        if ($picture != "")
            $data["picture"] = $picture;
        
        $this->db->where('id', $id);
        $this->db->update('promo', $data);

    }
    
    public function getPromoById ($id) {
        $this->db->select("*");
        $this->db->where("id", $id);
        $query = $this->db->get("promo");
        
        foreach ($query->result() as $row) {
            $res["id"] = $row->id;            
            $res["picture"] = $row->picture;
            $res["url"] = $row->url;                        
        }
        
        return $res;
    }
    
    public function getAllPromo () {
        $this->db->select("*");
        $this->db->limit(3);
        $query = $this->db->get("promo");
        
        $i=0;
        
        foreach ($query->result() as $row) {
            $res[$i]["id"] = $row->id;            
            $res[$i]["picture"] = $row->picture;
            $res[$i]["url"] = $row->url;     
            $i++;
        }
        
        return $res;
    }
    
    public function deletePromoById ($id) {
        $this->db->where('id', $id);
        
        if ($this->db->delete('promo'))
            return 1;
        else
            return 0;
        
    }
    
    public function getProductsByCategoryId ($id, $offset=0) {
        
        $this->db->select("*");        
        $this->db->where("cat_id", $id);
        $this->db->limit(10, $offset);
        $query = $this->db->get("products");
        $i=0;
                
        foreach ($query->result() as $row) {
            $res[$i]["id"] = $row->id;            
            $res[$i]["name"] = $row->name;
            $res[$i]["price"] = $row->price;
            $res[$i]["picture"] = $row->picture;   
            $res[$i]["description"] = $row->description;
            $i++;
        }
        
        return $res;
    }
    
    public function countCategoryProducts ($id) {
        $this->db->select("COUNT(id) as nr_items");        
        $this->db->where("cat_id", $id);        
        $query = $this->db->get("products");        
                
        foreach ($query->result() as $row) {
            $res["nr_items"] = $row->nr_items;                        
        }
        
        return $res;
    }
    
    public function getSpecials () {
        $this->db->select("*");        
        $this->db->where("specials", "1");
        $query = $this->db->get("products");
        $i=0;
        
        foreach ($query->result() as $row) {
            $res[$i]["id"] = $row->id;            
            $res[$i]["name"] = $row->name;
            $res[$i]["price"] = $row->price;
            $res[$i]["picture"] = $row->picture;   
            $res[$i]["description"] = $row->description;
            $i++;
        }
        
        return $res;
    }
    
    public function generateCart () {
        
        $data = array ("status" => 1);        
        $this->db->insert('generated_carts',$data);
        
        return $this->db->insert_id();        
    }
    
    public function generatePurchase ($cart_id, $prod_id, $qty) {
        $data = array ("cart_id" => $cart_id,
                       "prod_id" => $prod_id,
                       "qty"     => $qty);        
        $this->db->insert('purchases',$data);
        
        return $this->db->insert_id();        
    }
    
    public function generateOrder($cart_id, $userid, $order_value) {
        
        $data = array ("cart_id" => $cart_id,
                       "user_id" => $userid,
                       "total_value" => $order_value
                      );        
        
        $this->db->insert('orders',$data);
        
        return $this->db->insert_id();        
    }
    
   
}
?>
