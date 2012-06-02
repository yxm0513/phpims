<?php
/*
 * Created on Mar 18, 2012
 *
 */
require('define.php');

if (isset($_POST['submitted'])){
	if (isset($_POST['user']) and isset($_POST['password'])){
		echo "User: " . $_POST['user'] . " Password: " . $_POST['password'];
	} else{
		echo "no user logined! <a href=\"login.php\"> Login </a>";
	}
}else{
	include_once(LIB . DS . "vendor" . DS . "Smarty.class.php");

	$smarty = new Smarty();
	$smarty->template_dir = "template";

	$smarty->assign('title','Login');
	$smarty->display('user/login.html');


}

?>
