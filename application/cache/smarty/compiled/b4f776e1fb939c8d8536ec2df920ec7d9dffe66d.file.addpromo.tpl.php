<?php /* Smarty version Smarty-3.1.1, created on 2012-02-21 19:19:46
         compiled from "application/views/addpromo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192814f426f95447925-52585460%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4f776e1fb939c8d8536ec2df920ec7d9dffe66d' => 
    array (
      0 => 'application/views/addpromo.tpl',
      1 => 1329753835,
      2 => 'file',
    ),
    '0c14622c2fc37205aba1570fe742bfa03cb47831' => 
    array (
      0 => 'application/views/adminheader.tpl',
      1 => 1329757561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192814f426f95447925-52585460',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_4f426f954aa39',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f426f954aa39')) {function content_4f426f954aa39($_smarty_tpl) {?>
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
        <tr class="formitem"><td><label for="file_desc">Picture</label></td><td><input type="file" name="userfile" id="file" /> </td>
        <tr class="formitem"><td><label for="url">Url</label></td><td><input type="text" name="url" /> </td>            
        <tr class="formitem"><td><input type="submit" value="Add promo"></td><td></td></tr>        
        <input type="hidden" name="add" value="success">
    </table>       
    </form>

</body><?php }} ?>