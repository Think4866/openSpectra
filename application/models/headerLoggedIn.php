<?php
require_once('user_manager.php');
session_start();
$usermgr = new UserManager();
$USER_USERNAME = NULL;
$userloginid = $usermgr->sessionLoggedIn(session_id());

mysql_select_db($database_openSpectra, $openSpectra);
$queryGetName = "SELECT LASTNAME, FIRSTNAME FROM USER WHERE USER_ID='" . $userloginid . "' LIMIT 0, 1";
$getName = mysql_query($queryGetName, $openSpectra) or die(mysql_error());
$row_GetName = mysql_fetch_assoc($getName);
$USER_NAME = "&nbsp" . $row_GetName['FIRSTNAME'] . "&nbsp;" . $row_GetName['LASTNAME'];
$CC_USER_NAME = mb_convert_case($USER_NAME, MB_CASE_TITLE, "UTF-8");
$ORIGFILE_URL = 


if ($userloginid === -1) {
	//WE'RE NOT LOGGED IN--GO TO LOGIN PAGE
	header('Location: ../views/index.html');
    exit;
} 