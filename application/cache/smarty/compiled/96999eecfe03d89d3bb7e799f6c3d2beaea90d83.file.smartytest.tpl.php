<?php /* Smarty version Smarty-3.1.1, created on 2012-01-03 23:31:41
         compiled from "application/views/smartytest.tpl" */ ?>
<?php /*%%SmartyHeaderCode:282274f03805bdc2a33-95121160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96999eecfe03d89d3bb7e799f6c3d2beaea90d83' => 
    array (
      0 => 'application/views/smartytest.tpl',
      1 => 1325629877,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '282274f03805bdc2a33-95121160',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_4f03805be0035',
  'variables' => 
  array (
    'title' => 0,
    'body' => 0,
    'test' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f03805be0035')) {function content_4f03805be0035($_smarty_tpl) {?><html>
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
    <?php echo $_smarty_tpl->tpl_vars['body']->value;?>


<?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['test']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value){
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
    <li><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</li>
<?php } ?>
</body>
</html><?php }} ?>