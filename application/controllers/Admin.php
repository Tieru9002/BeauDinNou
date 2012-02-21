<?php
class Admin extends CI_Controller {
    
    public function index () {
         
        $this->load->model("Productmod");
        $products = $this->Productmod->listprod();
        
        
        $data["products"] = $products;
        $data["base_url"] = base_url();
        $this->parser->parse("productlist.tpl", $data);
    }
    
    public function addprod () {
        $this->load->model("Productmod");
        
        
        
        $config['upload_path'] = IMG_PATH;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '1001';
        $config['max_width'] = '10241';
        $config['max_height'] = '7681';
        $config['overwrite']=TRUE;

        $this->load->library('upload', $config);
        
        if ($this->input->post("add") == "success")
        {
            $name = $this->input->post("name");
            $cat_id = $this->input->post("cat");            
            $meta_key = $this->input->post("meta_key");
            $meta_desc = $this->input->post("meta_desc"); 
            $featured_d = $this->input->post("featured_d");
            $featured_s = $this->input->post("featured_s");
            $promo = $this->input->post("promo");
            $specials = $this->input->post("specials");
            $price = $this->input->post("price");            
            $price = number_format($price,2,'.','');
              
            if ($specials == "on") $specials = 1; else $specials = 0;
            if ($featured_d == "on") $featured_d = 1; else $featured_d = 0;
            if ($featured_s == "on") $featured_s = 1; else $featured_s = 0;
            //if ($promo == "on") $promo = 1; else $promo = 0;
                        
            if ( !$this->upload->do_upload()) {
                $error = array('error' => $this->upload->display_errors());                  
            }
            
            $upload_data =  $this->upload->data();
            $picture = $upload_data["file_name"];                                             
            
            $prodid = $this->Productmod->addProduct($name, $cat_id, $price, $meta_key, $meta_desc, $picture, $featured_d, $featured_s, $promo, $specials);
        }
        
        $categories = $this->Productmod->getCategories();        
        
        $data["categories"] = $categories;
        $data["base_url"] = base_url();    
        $this->parser->parse("addprod.tpl",$data);
    }
    
    public function listcategories () {
        $this->load->model("Productmod");
        
        if ($this->input->post("add") == "success")
        {
            $name = $this->input->post("name");
            $parent = $this->input->post("parent");
            $description = $this->input->post("description");
            
            $catid = $this->Productmod->addCategory($name, $parent, $description);
        }
        
        $parents = $this->Productmod->getCategories();
        
        //echo "<pre>"; var_dump($parents);
        
        $data["parents"] = $parents;
        $data["base_url"] = base_url();
        $this->parser->parse("addcat.tpl",$data);
    }
    
    public function editcategory ($id) {
        $this->load->model("Productmod");
        
        if ($this->input->post("edit") == "success") {
            $name = $this->input->post("name");
            $parent = $this->input->post("parent");
            $description = $this->input->post("description");
            
            $this->Productmod->updateCategoryById($id, $name, $parent, $description);
            redirect("admin/listcategories", "refresh");
        }
        
        $categories = $this->Productmod->getCategories();
        $category = $this->Productmod->getCategoryById($id);                                        
        
        $data["category"] = $category;
        $data["base_url"] = base_url();
        $data["categories"] = $categories;
        //echo "<pre>"; var_dump($categories); echo "</pre>";
        $this->parser->parse("editcategory.tpl", $data);
    }
    
    public function deletecategory ( $id ) {
        $this->load->model("Productmod");
        
        $this->Productmod->deleteCategoryById($id);
        redirect("admin/listcategories", "refresh");
    }
    
    public function editproduct ( $id ) {
        $this->load->model("Productmod");
                
        $config['upload_path'] = IMG_PATH;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '10241';
        $config['max_width'] = '10241';
        $config['max_height'] = '7681';
        $config['overwrite']=TRUE;

        $this->load->library('upload', $config);
        
        if ($this->input->post("edit") == "success") {
            $name = $this->input->post("name");
            $cat_id = $this->input->post("cat");
            $price = $this->input->post("price");
            $description = $this->input->post("description");
            $meta_key = $this->input->post("meta_key");
            $meta_desc = $this->input->post("meta_desc");
            $featured_d = $this->input->post("featured_d");
            $featured_s = $this->input->post("featured_s");
            $promo  = $this->input->post("promo");
            $specials = $this->input->post("specials");
            $price = number_format($price,2,'.','');
            
            if ($featured_d == "on") $featured_d = 1; else $featured_d = 0;
            if ($featured_s == "on") $featured_s = 1; else $featured_s = 0;
            if ($promo == "on") $promo = 1; else $promo = 0;
            if ($specials == "on") $specials = 1; else $specials = 0;
            
            if ( !$this->upload->do_upload()) {
                $error = array('error' => $this->upload->display_errors());                    
                var_die($error);
            }
                                    
            $upload_data =  $this->upload->data();
            $picture = $upload_data["file_name"];                                             
            if ($picture != "")  $this->ImageProcessor($picture);
            
            $this->Productmod->updateProductById($id, $name, $cat_id, $price, $description, $meta_key, $meta_desc, $picture, $featured_d, $featured_s, $promo, $specials);
        }        
        
        $product = $this->Productmod->getProductById($id);
        
        $categories = $this->Productmod->getCategories();                 
        //echo "<pre>"; var_dump($product);
        $categories = $this->Productmod->getCategories();       
        $data["product"] = $product;
        $data["categories"] = $categories;
        $data["base_url"] = base_url();        
        $this->parser->parse("editprod.tpl",$data);
    }
    
    public function deleteProduct($id) {
        
        $this->load->model("Productmod");        
        $this->Productmod->deleteProductById($id);
        
           redirect("admin", "refresh");
    }
    
    public function ImageProcessor ($img) {
        $image_size = getimagesize (IMG_PATH.$img);
        
       $img_dimensions["promo"] = array("width"=>"710", "height"=>"300");
       $img_dimensions["slider"] = array ("width" => "235","height" => "120");
       $img_dimensions["menu_small"] = array("width" =>"100","height" => "100");
       $img_dimensions["specials"] = array("width"=>"205", "height" => "120");
       
       $this->load->library('image_lib');
        foreach ($img_dimensions as $key=>$value) {              
            $config['image_library'] = 'gd2';
            $config['source_image'] = IMG_PATH.$img;
            $config['create_thumb'] = FALSE;
            $config['new_image'] = IMG_PATH.$key."_".$img;
            $config['maintain_ratio'] = TRUE;
            $config['width'] = $value["width"];
           
            $config['height'] = $value["height"];            
            $width_ratio = $image_size[0] / $config['width'];
            $height_ratio = $image_size[1] / $config['height'];                 
           
            //echo "<pre>";var_dump($config);
            if ($width_ratio > $height_ratio) {                   
                $config['master_dim'] = "height";
                $this->image_lib->initialize($config);
                $this->image_lib->resize();                  
                $new_image_size = getimagesize(IMG_PATH.$key."_".$img);
                $config['source_image'] = IMG_PATH.$key."_".$img;                            
                $config['maintain_ratio'] = FALSE;               
                $config['x_axis'] = round(($new_image_size[0] - $config['width'])/2);
                $config['y_axis'] = '0';
                $this->image_lib->initialize($config);
                $this->image_lib->crop();
                unset($config);
            }
            else {                
                $config['master_dim'] = "width";
                
                $this->image_lib->initialize($config);
                $this->image_lib->resize();                
                $new_image_size = getimagesize(IMG_PATH.$key."_".$img);
                $config['source_image'] = IMG_PATH.$key."_".$img;             
                $config['maintain_ratio'] = FALSE;
                $config['x_axis'] = '0';                
                $config['y_axis'] = round(($new_image_size[1] - $config['height'])/2);
                $this->image_lib->initialize($config);
                $this->image_lib->crop();   
                unset($config);
                
            }
        }
        
        
        
                
        

        

    }
    
//public function ImageProcessor1 ($img = "lata.jpg") {
//        $this->load->library("Imageprocessor");
//        
//        $image_size = getimagesize (IMG_PATH.$img);
//        
//        $height = $image_size[1];
//        $width = $image_size[0];
//        $img_type = substr($image_size["mime"],6,4);
////      var_die($img_type);
//        $img_dimensions["slider"] = array ("width" => "235","height" => "120");
//        $img_dimensions["menu_small"] = array("width" =>"100","height" => "100");
//        //var_dumP($height); var_die($width);
//        foreach ($img_dimensions as $key => $value) {                      
//            if ($height > $width) {                
//                                
//                $image = new ImageProcessor();
//                $filename = IMG_PATH."$img";       
//                $image->load($filename);
//                $image->resizeToWidth($value["width"]);
//                $image->save(IMG_PATH.$key."_".$img);
//                var_dump(IMG_PATH.$key."_".$img);
//                unset($image);
//                
//                
//                }
//                else {
//                 
//                $image = new ImageProcessor();                
//                $filename = IMG_PATH.$img;
//                $image->load($filename);
//                $image->resizeToHeight($value["height"]);
//                $image->save(IMG_PATH.$key."_".$img);
//                unset($image);
//                
//            }            
//            $image = IMG_PATH.$key."_".$img; // the image to crop
//            $dest_image = IMG_PATH.$key."_".$img; // make sure the directory is writeable
//            $new_img = imagecreatetruecolor($value["width"],$value["height"]);
//            $org_img = imagecreatefromjpeg($image);
//            $ims = getimagesize($image);
//           
//            if ($height > $width) {
//                $new_height = getimagesize (IMG_PATH.$img.'_'.$key.".".$img_type);
//                $coord = round(($new_height[1] - $value["height"]) / 2);
//                imagecopy($new_img,$org_img, 0, 0, 0, $coord, $value["width"], $value["height"]);
//                imagejpeg($new_img,$dest_image,90);
//               
//            }
//            else {                
//                $new_width = getimagesize (IMG_PATH.$img.'_'.$key.".".$img_type);
//                $coord = round(($new_width[0] - $value["width"]) / 2);                
//                imagecopy($new_img,$org_img, 0, 0, $coord, 0, $value["width"], $value["height"]);
//                
//                imagejpeg($new_img,$dest_image,90);                
//                        
//            }
//             
//
//        }                           
//    }
    
    public function listPromo () {
        $this->load->model("Productmod");        
        $list = $this->Productmod->listPromo();   
        
        $data = array();
        $data["base_url"] = base_url();
        $data["list"] = $list;
        $this->parser->parse("listpromo.tpl", $data);
    }
    
    public function addPromo () {        
        $this->load->model("Productmod");
        
        $config['upload_path'] = IMG_PATH;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '1010';
        $config['max_width'] = '10124';
        $config['max_height'] = '7618';
        $config['overwrite']=TRUE;
        
        if ($this->input->post("add") == "success") {
            $url = $this->input->post("url");
            $this->load->library('upload', $config);
            
            if ( !$this->upload->do_upload()) {
                $error = array('error' => $this->upload->display_errors());                  
            }
            
            $upload_data =  $this->upload->data();
            $picture = $upload_data["file_name"];
            
            if ($picture != "")  $this->ImageProcessor($picture);
            
            $promoid = $this->Productmod->addPromo($picture, $url);
        }
        $data["base_url"] = base_url(); 
        $this->parser->parse("addpromo.tpl", $data);
        
    }
    
    public function editPromo ($id) {
        $this->load->model("Productmod");
        
        $config['upload_path'] = IMG_PATH;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '10102';
        $config['max_width'] = '10124';
        $config['max_height'] = '7618';
        $config['overwrite']=TRUE;
        if ($this->input->post("edit") == "success") {
            
            $this->load->library('upload', $config);
            $url = $this->input->post("url");
            
            if ( !$this->upload->do_upload()) {
                $error = array('error' => $this->upload->display_errors());                  
            }
            
            $upload_data =  $this->upload->data();
            $picture = $upload_data["file_name"];
            
            if ($picture != "")  $this->ImageProcessor($picture);
            
            $this->Productmod->updatePromoById($id, $picture, $url);
        }
        
        $promo = $this->Productmod->getPromoById($id);
        
        $data["base_url"] = base_url();
        $data["promo"] = $promo;
        $this->parser->parse("editpromo.tpl", $data);
        
    }
    
    public function deletePromo($id) {
        
           
        $this->load->model("Productmod");        
        $this->Productmod->deletePromoById($id);
        
        redirect("admin/listpromo", "refresh");        
    }
}
?>
