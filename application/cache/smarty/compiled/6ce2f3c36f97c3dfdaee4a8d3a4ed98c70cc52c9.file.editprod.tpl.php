<?php /* Smarty version Smarty-3.1.1, created on 2012-02-21 01:03:02
         compiled from "application/views/editprod.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144994f1540e5d609a3-15346375%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ce2f3c36f97c3dfdaee4a8d3a4ed98c70cc52c9' => 
    array (
      0 => 'application/views/editprod.tpl',
      1 => 1329782577,
      2 => 'file',
    ),
    '0c14622c2fc37205aba1570fe742bfa03cb47831' => 
    array (
      0 => 'application/views/adminheader.tpl',
      1 => 1329757561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144994f1540e5d609a3-15346375',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_4f1540e5de9f8',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f1540e5de9f8')) {function content_4f1540e5de9f8($_smarty_tpl) {?>
<html>
<head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/css/adminstyle.css" type="text/css" media="screen"/>
    </head>
<body>

<ul class="navadmin" >
<li> <a style="text-decoration:none;" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/admin/listusers">Users ||</a> </li>
<li> <a style="text-decoration:none;" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/admin/listcategories">Categories ||</a> </li>
<li> <a style="text-decoration:none;" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/admin"> Products ||</a> </li>
<li> <a style="text-decoration:none;" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/admin/listpromo"> Promo ||</a> </li>
</ul>





    <form method="POST" action="" enctype="multipart/form-data">
    <table>
        <tr class="formitem"><td><label for="name" class="label">Nume</label></td><td><input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
" id="name"></td></tr>        

        <tr class="formitem"><td><label for="cat">Categorie</label></td><td>
        
        <select name="cat">
            <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['cat']->value['id']==$_smarty_tpl->tpl_vars['product']->value['cat_id']){?> SELECTED <?php }?> ><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</option>
            <?php } ?>
        </select>

        </td></tr>                
        <tr class="formitem"><td><label for="price">Pret</span></label></td><td><input type="text" name="price" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
" id="price"></td></tr>        
        <tr class="formitem"><td>Descriere produs</td><td><textarea name="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</textarea></td>
        <tr class="formitem"><td><label for="meta_key">Meta keywords</label></td><td><input type="textarea" name="meta_key" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['meta_key'];?>
" id="meta_key"></td></tr>        
        <tr class="formitem"><td><label for="meta_desc">Meta description</label></td><td><input type="textarea" name="meta_desc" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['meta_desc'];?>
" id="meta_desc"></td></tr>        
        <tr class="formitem"><td><label for="file_desc">Picture</label></td><td><input type="file" name="userfile" id="file" /> </td>
        <tr class="formitem"><td><label for="promo">Promo</label></td><td><input type="checkbox" name="promo" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['product']->value['promo'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1==1){?> checked="yes" <?php }?>> 
        <tr class="formitem"><td><label for="featured_d">Featured Dinamic</label></td><td><input type="checkbox" name="featured_d" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['product']->value['featured_d'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2==1){?> checked="yes" <?php }?>>     
        <tr class="formitem"><td><label for="featured_s">Featured Static</label></td><td><input type="checkbox" name="featured_s" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['product']->value['featured_s'];?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3==1){?> checked="yes" <?php }?>>                                                                                         
        <tr class="formitem"><td><label for="featured_s">Speciale</label></td><td><input type="checkbox" name="specials" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['product']->value['specials'];?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4==1){?> checked="yes" <?php }?>>
        <tr class="formitem"><td><input type="submit" value="Edit product"></td><td></td></tr>           
        <input type="hidden" name="edit" value="success">
    </table>       
    </form>
    <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/uploads/menu_small_<?php echo $_smarty_tpl->tpl_vars['product']->value['picture'];?>
" />

</body><?php }} ?>