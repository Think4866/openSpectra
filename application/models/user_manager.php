<?php  require_once('connections/spectra.php');


date_default_timezone_set('America/New_York');

$script_tz = date_default_timezone_get();

/*
if (strcmp($script_tz, ini_get('date.timezone'))){
    echo 'Script timezone differs from ini-set timezone.';
} else {
    echo 'Script timezone and ini-set timezone match.';
}
*/

class UserManager {
	function __construct() {

	}
	// validates input
	// public function isValidStudentID($in_STUDENT_ID) {
	// 	if ($in_STUDENT_ID == '' or strlen($in_STUDENT_ID) != 9) {
	// 		return FALSE;
	// 	} else {
	// 		return TRUE;
	// 	}
	// }
	
	public function createAccount (
		$in_STUDENT_ID,
		$in_STUDENT_LASTNAME, 
		$in_STUDENT_INITIAL, 
		$in_STUDENT_FIRSTNAME, 
		$in_EMAIL_ADDRESS, 
		$in_STUDENT_MAJOR, 
		$in_STUDENT_MINOR, 
		$in_CLASS_LEVEL, 
		$in_TERMS_SIGNED, 
		$in_CC_ID_COPIED, 
		$in_CC_EXPDATEMONTH,
		$in_CC_EXPDATEYEAR, 
		$in_FACULTY,
		$in_ADMIN,  
		$in_ACTIVE, 
		$in_PASSWORD
	) {
		//QUICK INPUT VALIDATION
		if ($in_STUDENT_LASTNAME == '' or $in_STUDENT_FIRSTNAME == '' or !$this->isValidStudentID($in_STUDENT_ID)) {
			throw new IncompleteFormException();
		}
		
		//GET A DATABASE CONNECTION WITH WHICH TO WORK
		$conn = $this->getConnection();
		
		//MAKE SURE USER DOESN'T EXIST ALREADY
		try {
			$exists = FALSE;
			$exists = $this->userExists($in_STUDENT_ID);
//, $in_db_conn			
			if ($exists === TRUE) {
//				throw new UserAlreadyExistsException();
				$conn->close();
				return;
			}
			//MAKE SURE PARAMETERS ARE SAFE FOR INSERTION, AND ENCRYPT PASSWORD FOR STORAGE
			$STUDENT_ID = $this->super_escape_string($in_STUDENT_ID, $conn);
			$STUDENT_LASTNAME = $this->super_escape_string($in_STUDENT_LASTNAME, $conn);
			$STUDENT_INITIAL = $this->super_escape_string($in_STUDENT_INITIAL, $conn);
			$STUDENT_FIRSTNAME = $this->super_escape_string($in_STUDENT_FIRSTNAME, $conn);
			$EMAIL_ADDRESS = $this->super_escape_string($in_EMAIL_ADDRESS, $conn);
			$STUDENT_MAJOR = $this->super_escape_string($in_STUDENT_MAJOR, $conn);
			$STUDENT_MINOR = $this->super_escape_string($in_STUDENT_MINOR, $conn);
			$CLASS_LEVEL = $this->super_escape_string($in_CLASS_LEVEL, $conn);
			$TERMS_SIGNED = $this->super_escape_string($in_TERMS_SIGNED, $conn);
			$CC_ID_COPIED = $this->super_escape_string($in_CC_ID_COPIED, $conn);
			$CC_EXPDATEMONTH = $this->super_escape_string($in_CC_EXPDATEMONTH, $conn);
			$CC_EXPDATEYEAR = $this->super_escape_string($in_CC_EXPDATEYEAR, $conn);
			$FACULTY = $this->super_escape_string($in_FACULTY, $conn);
			$ADMIN = $this->super_escape_string($in_ADMIN, $conn);
			$ACTIVE = $this->super_escape_string($in_ACTIVE, $conn);
			$PASSWORD = $in_PASSWORD;
			
			$qstr = 	"INSERT INTO NMINVENTORY.STUDENT (STUDENT_ID, STUDENT_LASTNAME, STUDENT_INITIAL, STUDENT_FIRSTNAME, EMAIL_ADDRESS, STUDENT_MAJOR, STUDENT_MINOR, CLASS_LEVEL, TERMS_SIGNED, CC_ID_COPIED, CC_EXPDATEMONTH, CC_EXPDATEYEAR, FACULTY, ADMIN, ACTIVE, PASSWORD) VALUES ('$STUDENT_ID', '$STUDENT_LASTNAME', '$STUDENT_INITIAL', '$STUDENT_FIRSTNAME', '$EMAIL_ADDRESS', '$STUDENT_MAJOR', '$STUDENT_MINOR', '$CLASS_LEVEL', '$TERMS_SIGNED', '$CC_ID_COPIED', '$CC_EXPDATEMONTH', '$CC_EXPDATEYEAR', '$FACULTY', '$ADMIN', '$ACTIVE', '$PASSWORD')";
			
			//INSERT NEW USER
			$results =  @$conn->query($qstr);
			if ($results === FALSE) {
				throw new DatabaseErrorException($conn->error);
			}
		} catch (Exception $e) {
			if (isset($conn)) {
				$conn->close();
			} throw $e;
		}
		
		// CLEAN UP AND EXIT
		$conn->close();
		return $STUDENT_ID;
	}
	
	private function getConnection() {
		$conn = new mysqli("localhost", "ewatson", "E-wma1spe", "openSpectra");
		if (mysqli_connect_errno() !== 0) {
			throw new DatabaseErrorException(mysqli_connect_error());
		}
		return $conn;
	}
	
	function super_escape_string (
		$in_string,
		$in_conn,
		$in_removePct = FALSE
	) {
		$str = $in_conn->real_escape_string($in_string);
		if ($in_removePct) {
			$str = ereg_replace('(%)', '\\\1', $str);
		}
		return $str;
	}
	
	//SEE IF USER ALREADY EXISTS
	public function userExists (
		$in_STUDENT_ID,
		$in_db_conn = NULL
	) {
		if ($in_STUDENT_ID == '') {
			throw new InvalidArgumentException();
		}
		if ($in_db_conn === NULL) {
			$conn = $this->getConnection();
		} else {
			$conn = $in_db_conn;
		}
		try {
			$STUDENT = $this->super_escape_string($in_STUDENT_ID, $conn);
			$qstr = "SELECT STUDENT_ID FROM STUDENT WHERE STUDENT_ID = '$STUDENT'";
			$results = @$conn->query($qstr);
			if ($results === FALSE) {
				throw new DatabaseErrorException($conn->error);
			}
			//SEE IF WE FOUND AN EXISTING RECORD
			$user_exists = FALSE;
			while (($row = @$results->fetch_assoc()) !== NULL) {
				if ($row['STUDENT_ID'] == $in_STUDENT_ID) {
					$user_exists = TRUE;
					break;
				}
			}
		} catch (Exception $e) {
			//CLEAN UP AND RE-THROW THE EXCEPTION
			if ($in_db_conn === NULL and isset($conn)) {
				$conn->close();
			} throw $e;
		}
		
		//ONLY CLEAN UP WHAT WE ALLOCATED
		$results->close();
		if ($in_db_conn === NULL) {
			$conn->close();
		} 
		return $user_exists;
	}
	
	//PROCESS LOGIN
	
	public function processLogin($in_USER_USERNAME, $in_USER_PASSWORD) {
		// INTERNAL ARG CHECKING
		if ($in_USER_USERNAME == '' || $in_USER_PASSWORD == '') {
			throw new InvalidArgumentException();
		}
		//GET DB CONNECTION
		$conn = $this->getConnection();
		
		try {
			$userloginid = $this->confirmUserNamePassword($in_USER_USERNAME, $in_USER_PASSWORD, $conn);
			$sessionid = session_id();
			
			//CLEAR EXISTING ENTRIES IN LOGIN TABLE
			$this->clearLoginEntriesForUser($userloginid);
			
			//LOG THE USER INTO THE TABLE
			$query = "INSERT INTO SESSIONS(USER_ID, SESSION_ID, LAST_ACCESS) VALUES('" . $userloginid . "', '" . $sessionid . "', NOW() )";
			
			$result = @$conn->query($query);
			if ($result === FALSE) {
				throw new DatabaseErrorException($conn->error);  //change to DatabaseErrorException after errors.php created
			}
		} catch (Exception $e) {
			if (isset($conn)) {
				$conn->close();
			} throw $e;
		}
		
		$conn->close();
	}
	
	//CONFIRM USERNAME AND PASSWORD
	private function confirmUserNamePassword (
		$in_USER_USERNAME,
		$in_USER_PASSWORD,
		$in_db_conn = NULL
		) {
			if ($in_db_conn == NULL) {
				$conn = $this->getConnection();
			} else {
				$conn = $in_db_conn;
			}
			try {
				//MAKE SURE INCOMING USERNAME IS SAFE FOR QUERIES
				$USERNAME = $this->super_escape_string($in_USER_USERNAME, $conn);
				//GET RECORD WITH MATCHING USERNAME
				$querystr = "SELECT * FROM USER WHERE USERNAME = '" . $USERNAME . "'";
				$results = @$conn->query($querystr);
				if ($results === FALSE) {
					throw new DatabaseErrorException($conn->error);
				}
				//RECONFIRM NAME AND PW MATCH
				$login_ok = FALSE;
				while (($row = @$results->fetch_assoc()) !== NULL) {
					//might have to say 'nminventory' instead? 
					if (strcasecmp($USERNAME, $in_USER_USERNAME) == 0) {
						//GOOD, NAME MATCHED...DOES PW?
						if (md5($in_USER_PASSWORD) == $row['PASSWORD']) {
							$login_ok = TRUE;
							$userloginid = $row['USER_ID'];
						} else {
							$login_ok = FALSE;
						}
						break;
					}
				}
				$results->close();
			} catch (Exception $e) {
				if ($in_db_conn === NULL and isset($conn)) {
					$conn->close();
				} throw $e;
			}
			
			//ONLY CLEAN UP WHAT WE ALLOCATED
			if ($in_db_conn === NULL) {
				$conn->close();
			}
			
			//THROW ON FAILURE, OR RETURN THE USER ID ON SUCCESS
			if ($login_ok === FALSE) {
				throw new LoginException();
			}
			return $userloginid;	
	}
	
	//REMOVE EXISTING ENTRIES FOR GIVEN USERNAME
	private function clearLoginEntriesForUser (
		$in_userloginid, 
		$in_db_conn = NULL
		) {
			//INTERNAL ARG CHECKING
//			if (!is_int($in_userloginid)) {
//				throw new InvalidArgumentException();
//			}
			//MAKE SURE WE HAVE A DB CONNECTION
			if ($in_db_conn == NULL) {
				$conn = $this->getConnection();
			} else {
				$conn = $in_db_conn;
			}
			
			try {
				//DELETE ANY ROWS FOR THIS USER IN LOGGEDINUSERS
				$querystr = "DELETE FROM SESSIONS WHERE USER_ID = '" . $in_userloginid . "'";
				$results = @$conn->query($querystr);
				if ($results === FALSE) {
					throw new DatabaseErrorException($conn->error);
				}
			} catch (Exception $e) {
				if ($in_db_conn === NULL and isset($conn)) {
					$conn->close();
				} 
				throw $e;
			}
			
			//CLEAN UP AND RETURN
			if ($in_db_conn === NULL) {
				$conn->close();
			}
	}
	
	
	//FIND RECORDS IN LOGGEDINUSERS TABLE WITH GIVEN SESSION ID
	public function sessionLoggedIn($in_sid) {
		//INTERNAL ARG CHECKING
		if ($in_sid == '') {
			throw new InvalidArgumentException();
		}
		//GET DB CONNECTION
		$conn = $this->getConnection();
		
		try {
			$sess_id = $this->super_escape_string($in_sid, $conn);
			$query = "SELECT * FROM SESSIONS WHERE SESSION_ID = '" . $sess_id . "'";
			$result = @$conn->query($query);
			if ($result === FALSE) {
				throw new DatabaseErrorException($conn->error);
			} else {
				//LOOK THROUGH RESULTS FOR GIVEN SESSION ID
				$userloginid = -1;
				while (($row = @$result->fetch_assoc()) !== NULL) {
					if ($row['SESSION_ID'] == $sess_id) {
						//UPDATE LAST ACCESS TIME FOR LOGGED IN USER
						$this->updateSessionActivity($sess_id, $conn);
						$_SESSION['USER_ID'] = $row['USER_ID'];
						$userloginid = $row['USER_ID'];
						break;
					}
				}
			}
		}
		catch (Exception $e) {
			if (isset($conn)) {
				$conn->close();
			}
			throw $e;
		}
		//CLEAN UP
		$result->close();
		$conn->close();
		return $userloginid;
	}
	
	//SET LAST_ACCESS FIELD TO CURRENT TIME SO USER LOGIN DOES NOT EXPIRE
	private function updateSessionActivity ($in_sessid, $in_db_conn) {
		if ($in_db_conn == NULL) {
			$conn = $this->getConnection();
		} else {
			$conn = $in_db_conn;
		}
		
		try {
			//UPDATE THE ROW FOR THIS SESSION
			$sessid = $this->super_escape_string($in_sessid, $conn);
			$querystr = "UPDATE SESSIONS SET LAST_ACCESS = NOW() WHERE SESSION_ID = '" . $sessid ."'";
			$results = @$conn->query($querystr);
			if ($results === FALSE) {
				throw new DatabaseErrorException($conn->error);
			} 
		}
		catch (Exception $e) {
			if ($in_db_conn === NULL and isset($conn)) {
				$conn->close();
			}
			throw $e;
		}
		//CLEAN UP
		if ($in_db_conn === NULL) {
			$conn->close();
		}
	}
	
	//LOG OUT USERS
	public function processLogout() {
		$this->clearLoginEntriesForSessionID(session_id());
	}
	
	private function clearLoginEntriesForSessionID($in_sid, $in_db_conn = NULL) {
		if ($in_db_conn == NULL) {
			$conn = $this->getConnection();
		} else {
			$conn = $in_db_conn;
		}
		//CREATE AND EXECUTE THE QUERY TO DO THE CLEANUP
		try {
			$sessid = $this->super_escape_string($in_sid, $conn);
			$query = "DELETE FROM SESSIONS WHERE SESSION_ID = '$sessid'";
			$results = @$conn->query($query);
			if ($results === FALSE or $results === NULL) {
				throw new InvalidArgumentException($conn->error);
			}
		} catch (Exception $e) {
			if($in_db_conn === NULL and isset($conn)) {
				$conn->close();
			} throw $e;
		}
		//CLEAN UP
		if ($in_db_conn === NULL) {
			$conn->close();
		}
	}
	
	
	///DELETING USERS
	public function deleteAccount($in_STUDENT_ID)
	{
		// VERIFY PARAMETERS
	//	if (!is_int($in_userloginid)) {
	//		throw new InvalidArgumentException();
	//	}
		
		$conn = $this->getConnection();
		try {
	//		$this->clearLoginEntriesForSessionID(session_id());
			$qstr = "DELETE FROM STUDENT WHERE STUDENT_ID = '" . $in_STUDENT_ID . "'";
			$result = @$conn->query($qstr);
			if ($result === FALSE) {
				throw new DatabaseErrorException($conn->error);
			}
		} catch (Exception $e) {
			if (isset($conn)) {
				$conn->close();
			} throw $e;
		}
		$conn->close();
	}
		

}


//////////////ERRORS/////////////////////////////////

function my_error_handler
	(
		$in_errno,
		$in_errstr,
		$in_errfile,
		$in_errline,
		$in_errcontext
	) {
		$errs = array(
		2 => 'E_WARNING',
		8 => 'E_NOTICE',
		256 => 'E_USER_ERROR',
		512 => 'E_USER_WARNING',
		1024 => 'E_USER_NOTICE',
		);
		
		$err_type = '';
		foreach ($errs as $val => $errstr) {
			if (($in_errno & $val) != 0) {
				$err_type .= "$errstr ";
			}
		}

echo '	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"> ';
echo '	<html> ';
echo '	<head> ';
echo '	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> ';
echo '	<title>New Media Equipment Checckout</title> ';
echo '	<link rel="stylesheet" type="text/css" href="../styleNMinventory.css"> ';
echo '</head> ';

echo '	<body> ';
	echo '<br /><br /> <p>We\'re sorry, but an error has occurred.  Please use your browser\'s back button and try your request again.</p><p>If you encounter this message repeatedly, please notify the department assistant.</p> ';
	echo '<span class="permissions">';
	echo $err_type;
	echo ':</span> ( ';
	echo $in_errfile;
	echo ', line ';
	echo $in_errline;
	echo ')<br /> ';
	echo $in_errstr;
	echo '<br /> </body></html>';
	
	//EXIT ON ERRORS, CONTINUE OTHERWISE
	if ($in_errno == E_USER_ERROR) {
		exit;
	}
}

set_error_handler('my_error_handler');


//
//class InvalidArgumentException extends Exception {
//	function __construct($in_type, $in_expected) {
//		parent::__construct("Expected: " . $in_expected . ', Received: ' . $in_type);
//	}
//}

class DatabaseErrorException extends Exception {
	function __construct($in_type, $in_expected) {
		$msg = "Something went wrong in the database.  (Expected: " . $in_expected . ", Received: " . $in_type .")";
		parent::__construct($msg);
	}
}
		
class LoginException extends Exception {
	function __construct($in_type, $in_expected) {
		$msg = "Your username and/or password were not found in the database.  Please try again.  (Expected: " . $in_expected . ", Received: " . $in_type .")";
		parent::__construct($msg);
		if (isset($conn)) {
			$conn->close();
		}
		header('Location: ../views/index.html');
	}
}

class IncompleteFormException extends Exception {
	function __construct() {
		$msg = "Required fields have not been completed.  Please try again.";
		parent::__construct($msg);
		if (isset($conn)) {
			$conn->close();
		}
		$incompleteForm == TRUE;
		return $incompleteForm;
	}
}
	
	
	
?>
