<?php 


//require_once('connections/spectra.php');
require_once('user_manager.php');

session_start();

$USER_USERNAME = '';
$USER_PASSWORD = '';

if(isset($_POST['USERNAME']) && $_POST['USERNAME'] !== '') {
	$USER_USERNAME = $_POST['USERNAME'];
} else if (isset($_POST['NEW_USERNAME']) && $_POST['NEW_USERNAME'] !== '') {
	$USER_USERNAME = $_POST['NEW_USERNAME'];
} else {
	//create error message for empty username in login modal
}

if(isset($_POST['PASSWORD']) && $_POST['PASSWORD'] !== '') {
	$USER_PASSWORD = $_POST['PASSWORD'];
} else if (isset($_POST['NEW_PASSWORD']) && $_POST['NEW_PASSWORD'] !== '') {
	$USER_PASSWORD = $_POST['NEW_PASSWORD'];
} else {
	//create error message for empty password in login modal
}

//VERIFY INPUT

if ($USER_USERNAME == '' || $USER_PASSWORD == '') {
		throw new LoginException();
} else {

		//HAVE USERMANAGER OBJECT PROCESS LOGIN
		$usermgr = new UserManager();
		$usermgr->processLogin($USER_USERNAME, $USER_PASSWORD);
		header('Location: ../views/workspace.php');
}



?>


