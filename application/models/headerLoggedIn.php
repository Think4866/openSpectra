<?php
require_once('user_manager.php');
session_start();
$usermgr = new UserManager();
$USER_USERNAME = NULL;
$userloginid = $usermgr->sessionLoggedIn(session_id());

mysql_select_db($database_openSpectra, $openSpectra);
$queryGetName = "SELECT * FROM USER WHERE USER_ID='" . $userloginid . "' LIMIT 0, 1";
$getName = mysql_query($queryGetName, $openSpectra) or die(mysql_error());
$row_GetName = mysql_fetch_assoc($getName);
$USER_NAME = $row_GetName['FIRSTNAME'] . "&nbsp;" . $row_GetName['LASTNAME'];
$CC_USER_NAME = mb_convert_case($USER_NAME, MB_CASE_TITLE, "UTF-8");
$USER_USERNAME = $row_GetName['USERNAME'];
$USER_INSTITUTION = $row_GetName['INSTITUTION'];


if ($userloginid === -1) {
	//WE'RE NOT LOGGED IN--GO TO LOGIN PAGE
	header('Location: ../views/index.html');
    exit;
} 