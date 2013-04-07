<?php 
require_once('user_manager.php');

session_start();

//-------------------- COLLECT FORM DATA -------------------------------------- //
$PREFIX = isset($_POST['prefix']) ? $_POST['prefix'] : '';
$FNAME = isset($_POST['fname']) ? $_POST['fname'] : '';
$LNAME = isset($_POST['lname']) ? $_POST['lname'] : '';  //here is the code to redirect if field not completed?
$SUFFIX = isset($_POST['suffix']) ? $_POST['suffix'] : '';
$INSTITUTION = isset($_POST['institution']) ? $_POST['institution'] : '';
$EMAIL = isset($_POST['email']) ? $_POST['email'] : '';
$UNAME = isset($_POST['unamenew']) ? $_POST['unamenew'] : '';
//$PASSWORD1 = 'turing0101';
//$PASSWORD = md5($PASSWORD1);
$PASSWD = md5($_POST['passwdnew']);

$usermgr = new UserManager();

//make sure username is available
$result_username_check = $usermgr->userExists($UNAME);

//$username_available = true;

if ($result_username_check == true) {
	//$username_available = false;
	echo '{ "username_available": "false", "pass_uname": "", "pass_passwd": "" }';
	exit;
} else {
	$usermgr->createAccount($PREFIX, $FNAME, $LNAME, $SUFFIX, $INSTITUTION, $EMAIL, $UNAME, $PASSWD);
	//echo $username_available;
	//require_once('process_login.php');
	echo json_encode(array("pass_uname" => $UNAME, "pass_passwd" => $_POST['passwdnew']));
	exit;
}


?>