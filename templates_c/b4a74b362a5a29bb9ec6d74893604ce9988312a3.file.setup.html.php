<?php /* Smarty version Smarty-3.1.8, created on 2012-03-18 15:41:37
         compiled from "template\setup.html" */ ?>
<?php /*%%SmartyHeaderCode:204474f5d6a23546ca3-77182734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4a74b362a5a29bb9ec6d74893604ce9988312a3' => 
    array (
      0 => 'template\\setup.html',
      1 => 1332081389,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204474f5d6a23546ca3-77182734',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f5d6a236808c8_84007521',
  'variables' => 
  array (
    'title' => 0,
    'time' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f5d6a236808c8_84007521')) {function content_4f5d6a236808c8_84007521($_smarty_tpl) {?><html>
<head>
	<title> Setup IMS -- <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 </title>
	<link rel="stylesheet" href="/phpims/static/css/setup.css" type="text/css" />
</head>
<body>
	<h1>Here, we will start to setup the IMS.</h1>
	<p>
		<?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['time']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value){
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
		<li>time is <?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
 </li>
		<?php } ?>
		<br>
		somthing in here ... <br>
	</p>
</body>
</html><?php }} ?>