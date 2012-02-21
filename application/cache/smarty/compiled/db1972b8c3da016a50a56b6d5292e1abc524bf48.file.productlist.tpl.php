<?php /* Smarty version Smarty-3.1.1, created on 2012-02-20 18:06:03
         compiled from "application/views/productlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139034f151cea52c7a8-89202843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db1972b8c3da016a50a56b6d5292e1abc524bf48' => 
    array (
      0 => 'application/views/productlist.tpl',
      1 => 1326795715,
      2 => 'file',
    ),
    '0c14622c2fc37205aba1570fe742bfa03cb47831' => 
    array (
      0 => 'application/views/adminheader.tpl',
      1 => 1329757561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139034f151cea52c7a8-89202843',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_4f151cea60f89',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f151cea60f89')) {function content_4f151cea60f89($_smarty_tpl) {?>
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


<ul class="subnav" >
<li> <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/admin/addprod">Add Product</a> </li>


    <table style="border:1px solid;">
        <tr>
           <th>id</th>
           <th>nume</th>
           <th>pret</th>
           <th>categorie</th>
           <th>actiuni</th>
        </tr>
    <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['product']->value['cat_id'];?>
</td>        
        <td><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/admin/editproduct/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">edit</a> <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/admin/deleteProduct/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" onClick="return confirm('Stergeti acest produs?'); return false;">sterge</a></td>
    <tr>



    <?php } ?>
    </table>

</body><?php }} ?>