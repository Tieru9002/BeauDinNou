<?php /* Smarty version Smarty-3.1.1, created on 2012-01-09 17:04:40
         compiled from "application/views/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70024f0b01fd629ed7-50762389%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09d7ed51d9ea3f1416786de4451669e90a6ee0a1' => 
    array (
      0 => 'application/views/login.tpl',
      1 => 1326125065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70024f0b01fd629ed7-50762389',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_4f0b01fd74177',
  'variables' => 
  array (
    'msg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f0b01fd74177')) {function content_4f0b01fd74177($_smarty_tpl) {?><form action="" method="post">
    Email<input type="text" name="email" value="" onclick="this.value='';">
    Pass<input type="password" name="pass" value="" onclick="this.value='';">    
    <input type="hidden" name="login" value="success">
    <input type="submit" value="login">
</form>

<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
 


<?php }} ?>