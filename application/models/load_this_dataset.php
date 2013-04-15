<?php
require_once('user_manager.php');
session_start();
$usermgr = new UserManager();
$USER_USERNAME = NULL;
$userloginid = $usermgr->sessionLoggedIn(session_id());


if (isset($_GET['whichSet'])) {

$setID = $_GET['whichSet'];

	$querySelectSet = "SELECT t1.*, t2.PREFIX, t2.FIRSTNAME, t2.LASTNAME, t2.SUFFIX, t2.INSTITUTION FROM DATASETS AS t1 INNER JOIN USER AS t2 ON t1.USER_ID = t2.USER_ID WHERE t1.SET_ID = '" . $setID . "'";

	
	$selectSet = mysqli_query($conn, $querySelectSet) or die(mysqli_error($conn));
	$row_selectSet = mysqli_fetch_assoc($selectSet);

	$row_selectSet['PREFIX'] = mb_convert_case($row_selectSet['PREFIX'], MB_CASE_TITLE, "UTF-8");
	$row_selectSet['FIRSTNAME'] = mb_convert_case($row_selectSet['FIRSTNAME'], MB_CASE_TITLE, "UTF-8");
	$row_selectSet['LASTNAME'] = mb_convert_case($row_selectSet['LASTNAME'], MB_CASE_TITLE, "UTF-8");
	$row_selectSet['SUFFIX'] = mb_convert_case($row_selectSet['SUFFIX'], MB_CASE_TITLE, "UTF-8");
	$row_selectSet['INSTITUTION'] = mb_convert_case($row_selectSet['INSTITUTION'], MB_CASE_TITLE, "UTF-8");
	$row_selectSet['DESCRIPTION'] = mb_convert_case($row_selectSet['DESCRIPTION'], MB_CASE_TITLE, "UTF-8");
	

	echo json_encode($row_selectSet);
	exit;

} else {
	$queryError = "not receiving the variable";
	echo $queryError;
	exit;
}


?>