<?php
	$bInc=isset($bInc)?$bInc:0; if(!$bInc) exit("<div class='alert alert-danger' role='alert' style='text-align:center;'><i class='fa fa-warning fa-lg'></i> Direct Access not Permitted !!!.</div>");	//fix
	$sPath=(is_file("system/center/ini_set.php")?"":(is_file("../system/center/ini_set.php")?"../":(is_file("../../system/center/ini_set.php")?"../../":"../../../")));

	define('path',$sPath.'system');
 	include_once(path."/center/db_lib.php");
	include_once(path."/center/db_fn.php");
	include_once(path."/center/dt_lib.php");
	include_once(path."/center/pub_lib.php");
	include_once(path."/center/fn_browser.php");
	include_once(path."/center/f_dateTime.php");
/*
	include_once(path."/center/fn_guard.php");
	include_once(path."/center/page_lib.php");
	include_once(path."/center/fn_get_running_no.php");
 	include_once(path."/center/str_fn.php");
	include_once($sPath."/include/define.inc.php");
*/
	error_reporting(E_ALL);

?>