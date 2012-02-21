<?php /* Smarty version Smarty-3.1.1, created on 2012-02-20 20:09:20
         compiled from "application/views/addcat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120794f153d33127c11-74465840%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11802847ccaddf4b94e2ab35afa8c15e2c15c81d' => 
    array (
      0 => 'application/views/addcat.tpl',
      1 => 1329764955,
      2 => 'file',
    ),
    '0c14622c2fc37205aba1570fe742bfa03cb47831' => 
    array (
      0 => 'application/views/adminheader.tpl',
      1 => 1329757561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120794f153d33127c11-74465840',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_4f153d3322160',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f153d3322160')) {function content_4f153d3322160($_smarty_tpl) {?>
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






    <form enctype="multipart/form-data" method="post">
        <table>
            <tr class="formitem"><td><label for="name">Nume</label></td><td><input type="text" name="name" id="name"></td></tr>
            <tr class="formitem"><td><label for="parent">Parinte</label></td><td>           
            <select name="parent">
                <option value="0">Categorie root</option>
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
            <tr class="formitem"><td><label for="description">Descriere</label></td><td><textarea name="description" id="description"></textarea></td></tr>
        </table>
        <input type="hidden" name="add" value="success">
        <input type="submit" value="Adauga categorie">
    </form>

    <table border=1 >
        <tr>
            <th>id</th>
            <th>nume</th>
            <th>parent level 1</th>
            <th>actiuni</th>
         </tr>
         <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['parents']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
         <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['category']->value['parent'];?>
</td>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/admin/editcategory/<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
">edit</a> <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/admin/deletecategory/<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" onClick="return confirm('Stergeti aceasta categorie?'); return false;">sterge</a></td>
         </tr>
         <?php } ?>
    </table>


</body><?php }} ?>