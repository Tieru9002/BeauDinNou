<?php /* Smarty version Smarty-3.1.1, created on 2012-02-20 20:14:57
         compiled from "application/views/editcategory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87804f22a473ef4377-44964875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03c45fbae4e0af4433d93abbad9410347b4ba3c5' => 
    array (
      0 => 'application/views/editcategory.tpl',
      1 => 1329765285,
      2 => 'file',
    ),
    '0c14622c2fc37205aba1570fe742bfa03cb47831' => 
    array (
      0 => 'application/views/adminheader.tpl',
      1 => 1329757561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87804f22a473ef4377-44964875',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_4f22a474084d6',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f22a474084d6')) {function content_4f22a474084d6($_smarty_tpl) {?>
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
        <tr class="formitem"><td><label for="name" class="label">Nume</label></td><td><input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
" id="name"></td></tr>        

        <tr class="formitem"><td><label for="parent">Parent</label></td><td>
        
        <select name="parent">
            <option value="0" <?php if (($_smarty_tpl->tpl_vars['category']->value['parent']==0)){?> SELECTED <?php }?> > Root </option>
            <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>                
                <option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['cat']->value['id']==$_smarty_tpl->tpl_vars['category']->value['parent']){?> SELECTED <?php }?>  ><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</option>
            <?php } ?>
        </select>

        </td></tr>     
        <tr class="formitem"><td><label for="description">Descriere</label></td><td><textarea name="description" id="description"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</textarea></td></tr>
        
        <tr class="formitem"><td><input type="submit" value="Add category"></td><td></td></tr>        
        <input type="hidden" name="edit" value="success">
    </table>       
    </form>

</body><?php }} ?>