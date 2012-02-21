<?php /* Smarty version Smarty-3.1.1, created on 2012-02-20 18:06:05
         compiled from "application/views/listpromo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103574f426c2cea2838-89150723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d4a91d9e916227872cdf540fc2a2cfdec18b81e' => 
    array (
      0 => 'application/views/listpromo.tpl',
      1 => 1329757348,
      2 => 'file',
    ),
    '0c14622c2fc37205aba1570fe742bfa03cb47831' => 
    array (
      0 => 'application/views/adminheader.tpl',
      1 => 1329757561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103574f426c2cea2838-89150723',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_4f426c2cf1a9b',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f426c2cf1a9b')) {function content_4f426c2cf1a9b($_smarty_tpl) {?>
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
index.php/admin/addpromo">Add Promo</a> </li>


    <table style="border:1px solid;">
        <tr>
           <th>id</th>
           <th>picture</th>
           <th>url</th>           
        </tr>   
        <?php  $_smarty_tpl->tpl_vars['promo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['promo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['promo']->key => $_smarty_tpl->tpl_vars['promo']->value){
$_smarty_tpl->tpl_vars['promo']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['promo']->value['id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['promo']->value['picture'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['promo']->value['url'];?>
</td>            
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/admin/editpromo/<?php echo $_smarty_tpl->tpl_vars['promo']->value['id'];?>
">edit</a> <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/admin/deletepromo/<?php echo $_smarty_tpl->tpl_vars['promo']->value['id'];?>
" onClick="return confirm('Stergeti acest produs?'); return false;">sterge</a></td>
        <tr>
        <?php } ?>
 
</body><?php }} ?>