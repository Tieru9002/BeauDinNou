<?php /* Smarty version Smarty-3.1.1, created on 2012-01-03 23:34:14
         compiled from "application/views/inheritancetest.tpl" */ ?>
<?php /*%%SmartyHeaderCode:315144f0381e03c2757-76593760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ed134b2ef32918f241eb5b7ab70b37d0943f205' => 
    array (
      0 => 'application/views/inheritancetest.tpl',
      1 => 1325630053,
      2 => 'file',
    ),
    'b35bf86dbf0d9b06eae13c4ee8ac6a8136b60463' => 
    array (
      0 => 'application/views/master.tpl',
      1 => 1319404754,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '315144f0381e03c2757-76593760',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_4f0381e0417b0',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f0381e0417b0')) {function content_4f0381e0417b0($_smarty_tpl) {?><html>
<head>
    <title>
    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

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