<?php /* Smarty version Smarty-3.1.1, created on 2012-01-17 10:07:34
         compiled from "application/views/listcat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:195014f153a56220f71-42353345%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07665fc754fcfc0f1a525728dbbd897a78fdaba1' => 
    array (
      0 => 'application/views/listcat.tpl',
      1 => 1326791197,
      2 => 'file',
    ),
    '0c14622c2fc37205aba1570fe742bfa03cb47831' => 
    array (
      0 => 'application/views/adminheader.tpl',
      1 => 1326790696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195014f153a56220f71-42353345',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_4f153a562b03b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f153a562b03b')) {function content_4f153a562b03b($_smarty_tpl) {?>
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
</ul>






    <form enctype="multipart/form-data" method="post">
        <table>
            <tr class="formitem"><td><label for="name">Nume</label></td><td><input type="text" name="name" id="name"></td></tr>
            <tr class="formitem"><td><label for="parent">Parinte</label></td><td>
            <select name="parent">
                <?php  $_smarty_tpl->tpl_vars['parent'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['parent']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['parents']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['parent']->key => $_smarty_tpl->tpl_vars['parent']->value){
$_smarty_tpl->tpl_vars['parent']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['parent']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['parent']->value['name'];?>
</option>
                <?php } ?>
            </select>
            </td></tr>
        </table>
    </form>


</body><?php }} ?>