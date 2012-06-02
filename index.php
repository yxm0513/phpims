<?php
/*
 * Created on Mar 11, 2012
 *
 */
require('define.php');

# get config settings
if(file_exists(CONF . DS . 'user.config.php')){
	require_once(CONF . DS . 'user.config.php');
}else {
	require_once(CONF . DS . 'default.config.php');
}
if (isset($timezone)){
	date_default_timezone_set($timezone);
} else{
	date_default_timezone_set('UTC');
}

require_once(LIB . DS . 'util.php');
require_once(LIB . DS . 'function.php');
require_once(LIB . DS . 'class.php');

$log = new Log("test.log");

$db = new Database(DB . DS . "dev.db", 0666, $err_msg);
if(empty($err_msg)){
	$db->query("INSERT INTO ims (name) VALUES ('simon');");
	$db->query("INSERT INTO ims (name) VALUES ('test');");
}else{
	die($err_msg);
}

$ret = $db->query("SELECT DISTINCT * FROM ims;");




?>
