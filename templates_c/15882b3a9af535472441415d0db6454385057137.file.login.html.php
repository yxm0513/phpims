<?php /* Smarty version Smarty-3.1.8, created on 2012-03-20 16:13:22
         compiled from "template\user\login.html" */ ?>
<?php /*%%SmartyHeaderCode:34124f65f4636adcb2-46726135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15882b3a9af535472441415d0db6454385057137' => 
    array (
      0 => 'template\\user\\login.html',
      1 => 1332256395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34124f65f4636adcb2-46726135',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f65f4636eabd2_44995754',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f65f4636eabd2_44995754')) {function content_4f65f4636eabd2_44995754($_smarty_tpl) {?><html>
<head>
	<title> Login </title>
	<link rel="stylesheet" href="/phpims/static/css/setup.css" type="text/css" />
	<script type="text/javascript" src="/phpims/static/js/jquery-1.7.1.js"></script>
	<!--
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script>
	 -->
	<script type="text/javascript" src="/phpims/static/js/base.js"></script>
</head>
<body>
	<form method="post" action="login.php">
	  <fieldset>
	    <legend> Login </legend>
	    <input type='hidden' name='submitted' id='submitted' value='1'/>
	    <label for='user' >User: </label>
	    <input name="user" type="text" /><br/>
	    <label for='password' >Password: </label>
	    <input name="password" type="password"/><br/>
    	<input type="submit" value="Login" /> <br/>
  		</div>
	  </fieldset>
	</form>
	<div id="mydiv"></div>
	<button type="button" onClick="add_ajax_message()">Click Me!</button>

	<div id="simon1"> show me your name </div>
	<div id="simon2"> Hello Simon </div>
</body>
</html><?php }} ?>