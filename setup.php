<?php
/*
 * Created on Mar 12, 2012
 */

require('define.php');

include_once(LIB . DS . "vendor" . DS . "Smarty.class.php");

$time = microtime();

//$ip = getenv("REMOTE_ADDR");
$ip = Array('simon', 'test');
$smarty = new Smarty();
$smarty->template_dir = "template";

$smarty->assign('title','setup');
$smarty->assign('time',$ip);
$smarty->display('setup.html');

//require_once(LIB . DS . 'util.php');
//require_once(LIB . DS . 'function.php');
//require_once(LIB . DS . 'class.php');
//
//
//# create database
//
//$db = new Database(DB . DS . "dev.db", 0666, $err_msg);
//if(empty($err_msg)){
//	$db->query("CREATE TABLE ims (name varchar(10));");
//}else{
//	die($err_msg);
//}

# drop database




?>
