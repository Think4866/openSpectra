<?php 
require_once('user_manager.php');
session_start();
$usermgr = new UserManager();
$USER_USERNAME = NULL;
$userloginid = $usermgr->sessionLoggedIn(session_id());


////IF USER ALREADY LOGGED OUT
if ($userloginid === -1) {
	header('Location: ../views/index.html');
	exit;
} else {

///LOG OUT USER
$usermgr->processLogout();
	header('Location: ../views/index.html');
	exit;
}
?>