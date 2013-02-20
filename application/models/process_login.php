<?php 

echo 'we got to process_login!';

require_once('connections/spectra.php');
require_once('user_manager.php');

//echo ' ...and the requires... ';

session_start();


//VERIFY INPUT
if (!isset($_POST['USERNAME']) || $_POST['USERNAME'] == ''
	|| !isset($_POST['PASSWORD']) || $_POST['PASSWORD'] == '') {
		throw new LoginException();
} else {
		$USER_USERNAME = $_POST['USERNAME'];
		$USER_PASSWORD = $_POST['PASSWORD'];
		mysql_select_db($database_openSpectra, $openSpectra);

}

//HAVE USERMANAGER OBJECT PROCESS LOGIN
$usermgr = new UserManager();
$usermgr->processLogin($USER_USERNAME, $USER_PASSWORD);

header('Location: ../views/workspace.php');
//echo 'and past the header redirect?';

?>


