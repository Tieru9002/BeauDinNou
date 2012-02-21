<?php /* Smarty version Smarty-3.1.1, created on 2012-01-07 16:47:44
         compiled from "application/views/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55034f057622322a40-81761709%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '952b08e1c05b6aa2a59fd72e80505178858e2957' => 
    array (
      0 => 'application/views/register.tpl',
      1 => 1325950767,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55034f057622322a40-81761709',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_4f0576223a401',
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
    'success' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f0576223a401')) {function content_4f0576223a401($_smarty_tpl) {?><form action="" method="post">
    Email<input type="text" name="email" value="" onclick="this.value='';">
    Pass1<input type="password" name="pass1" value="" onclick="this.value='';">
    Pass2<input type="password" name="pass2" value="" onclick="this.value='';">
    <input type="hidden" name="register" value="success">
    <input type="submit" value="register">
</form>

<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
    <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
<?php } ?>

<?php echo $_smarty_tpl->tpl_vars['success']->value;?>
<?php }} ?>