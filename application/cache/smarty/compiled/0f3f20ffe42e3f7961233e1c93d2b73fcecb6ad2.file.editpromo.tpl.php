<?php /* Smarty version Smarty-3.1.1, created on 2012-02-21 01:47:05
         compiled from "application/views/editpromo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:233414f4278a9c13d61-81777475%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f3f20ffe42e3f7961233e1c93d2b73fcecb6ad2' => 
    array (
      0 => 'application/views/editpromo.tpl',
      1 => 1329785218,
      2 => 'file',
    ),
    '0c14622c2fc37205aba1570fe742bfa03cb47831' => 
    array (
      0 => 'application/views/adminheader.tpl',
      1 => 1329757561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '233414f4278a9c13d61-81777475',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_4f4278a9c88b9',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f4278a9c88b9')) {function content_4f4278a9c88b9($_smarty_tpl) {?>
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
        <tr class="formitem"><td><label for="url" class="label">url</label></td><td><input type="text" name="url" value="<?php echo $_smarty_tpl->tpl_vars['promo']->value['url'];?>
" id="url"></td></tr>                     

        </td></tr>                        
        <tr class="formitem"><td><label for="file_desc">Picture</label></td><td><input type="file" name="userfile" id="file" /> </td>
        
        <tr class="formitem"><td><input type="submit" value="Edit promo"></td><td></td></tr>           
        <input type="hidden" name="edit" value="success">
    </table>       
    </form>
    <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/uploads/promo_<?php echo $_smarty_tpl->tpl_vars['promo']->value['picture'];?>
" />

</body><?php }} ?>