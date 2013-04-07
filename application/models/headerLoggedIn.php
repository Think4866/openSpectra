<?php
require_once('user_manager.php');
//require_once('connections/spectra.php');
session_start();
$usermgr = new UserManager();
$USER_USERNAME = NULL;
$userloginid = $usermgr->sessionLoggedIn(session_id());

//mysql_select_db($database_openSpectra, $openSpectra);
$queryGetName = "SELECT * FROM USER WHERE USER_ID='" . $userloginid . "' LIMIT 0, 1";
$getName = mysqli_query($conn, $queryGetName) or die(mysqli_error($conn));
//echo 'reached headerLoggedIn after query conducts  = ' . $queryGetName . ' in connection ' . $conn;
$row_GetName = mysqli_fetch_assoc($getName);
//echo 'reached headerLoggedIn after query results  = ' . $row_GetName;
$USER_ID = $row_GetName['USER_ID'];
$USER_FIRST_NAME = mb_convert_case($row_GetName['FIRSTNAME'], MB_CASE_TITLE, "UTF-8");
$USER_LAST_NAME = mb_convert_case($row_GetName['LASTNAME'], MB_CASE_TITLE, "UTF-8");
$CC_USER_NAME = $USER_FIRST_NAME . "&nbsp;" . $USER_LAST_NAME;
$USER_USERNAME = $row_GetName['USERNAME'];
$USER_INSTITUTION = $row_GetName['INSTITUTION'];



$queryGetData = "SELECT * FROM DATASETS";
$getData = mysqli_query($conn, $queryGetData) or die(mysqli_error($conn));
$row_GetData = mysqli_fetch_assoc($getData);
$ORIGFILE_URL = $row_GetData['ORIGFILE_URL'];


if ($userloginid === -1) {
	//WE'RE NOT LOGGED IN--GO TO LOGIN PAGE
	header('Location: ../views/index.html');
    exit;
} 