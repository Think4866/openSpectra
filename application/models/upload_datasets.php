<?php


require_once('connections/spectra.php');
require_once('user_manager.php');
//require_once('user_manager.php');
require_once('page.php');


mysql_select_db($database_openSpectra, $openSpectra);

//check for file uploads

if ($_FILES["origfile_url"]["error"] > 0) {
  echo "Error: " . $_FILES["origfile_url"]["error"] . "<br />";
} else {
  	//check the database for the next origfile and origcalib autoinc values
	$query = mysql_query("SHOW TABLE STATUS LIKE 'DATASETS'"); 
	$row = mysql_fetch_assoc($query); 
	$next_inc_value = $row['Auto_increment'];
	  
	$origfile_url_destination = "data-" . $next_inc_value . "-" . $_FILES['origfile_url']['name'];
  	$origfile_url_destination_file = $_FILES['origfile_url']['tmp_name'];
  	
  	//create a new bucket  
	$s3->putBucket("spectraview-rawfiles-data", S3::ACL_PUBLIC_READ);
	  
	//move the file  
	if ($s3->putObjectFile($origfile_url_destination_file, "spectraview-rawfiles-data", $origfile_url_destination, S3::ACL_PUBLIC_READ)) {  
	    echo "We successfully uploaded your file.";  
	} else{  
	    echo "Something went wrong while uploading your file... sorry.";  
	}
	
	//if calibration set added, upload it
	if ($_FILES['origcalib_url']["error"] == 4) {
		//do nothing
	} else if ($_FILES['origcalib_url']["error"] > 0) {
	  echo "Error: " . $_FILES["origcalib_url"]["error"] . "<br />";
	} else {
	  	$origcalib_url_destination = "calib-" . $next_inc_value . "-" . $_FILES['origcalib_url']['name'];
	  	$origcalib_url_destination_file = $_FILES['origcalib_url']['tmp_name'];
	  	
		//create a new bucket  
		$s3->putBucket("spectraview-rawfiles-calib", S3::ACL_PUBLIC_READ);
		  
		//move the file  
		if ($s3->putObjectFile($origcalib_url_destination_file, "spectraview-rawfiles-calib", $origcalib_url_destination, S3::ACL_PUBLIC_READ)) {  
		    echo "We successfully uploaded your file.";  
		} else{  
		    echo "Something went wrong while uploading your file... sorry.";  
		}		
	} 
} 

//echo "got through file upload";


//prep the form inputs for entry into database
$FNAME = isset($_POST['fname']) ? $_POST['fname'] : '';			//required
$MATERIAL = isset($_POST['material']) ? $_POST['material'] : '';			//required
$MOLECULARFORMULA = isset($_POST['formula']) ? $_POST['formula'] : '';			//required
$ISOTOPE = isset($_POST['isotope']) ? $_POST['isotope'] : '';			//required
$PUBLIC = isset($_POST['public']) ? $_POST['public'] : '1';			//required
$DATE_COLLECTED = isset($_POST['date_collected']) ? $_POST['date_collected'] : '';			//required
$DESCRIPTION = isset($_POST['description']) ? $_POST['description'] : '';			//required
$ORIGFILE_URL = isset($origfile_url_destination) ? $origfile_url_destination : '';  	//change to URL for item photo
$ORIGCALIB_URL = isset($origcalib_url_destination) ? $origcalib_url_destination : '';  	//change to URL for item photo


$queryGetID = "SELECT * FROM USER WHERE USERNAME='" . $FNAME . "' LIMIT 0, 1";
$selectUserID = mysql_query($queryGetID, $openSpectra) or die(mysql_error());
$row_GetID = mysql_fetch_assoc($selectUserID);
$USER_ID = $row_GetID['USER_ID'];
$FNAME = $USER_ID;



//reformat the text items for insertion into db
/*
$MATERIAL = GetSQLValueString($MATERIAL, "text");
$MOLECULARFORMULA = GetSQLValueString($MOLECULARFORMULA, "text");
$ISOTOPE = GetSQLValueString($ISOTOPE, "text");
$DATE_COLLECTED = GetSQLValueString($DATE_COLLECTED, "text");
$DESCRIPTION = GetSQLValueString($DESCRIPTION, "text");
$ORIGFILE_URL = GetSQLValueString($ORIGFILE_URL, "text");
$ORIGCALIB_URL = GetSQLValueString($ORIGCALIB_URL, "text");
*/

//echo "fname = " . $FNAME . " and material = " . $MATERIAL;

//add the new dataset to database

$qstr = "INSERT INTO DATASETS (USER_ID, MATERIAL, MOLECULARFORMULA, ISOTOPE, PUBLIC, DATE_COLLECTED, DESCRIPTION, ORIGFILE_URL, ORIGCALIB_URL) VALUES ('" . $FNAME . "', '" . $MATERIAL . "', '" . $MOLECULARFORMULA . "', '" . $ISOTOPE . "', '" . $PUBLIC . "', '" . $DATE_COLLECTED . "', '" . $DESCRIPTION . "', '" . $ORIGFILE_URL . "', '" . $ORIGCALIB_URL . "')";

$addNewDataset = mysql_query($qstr, $openSpectra) or die(mysql_error());
//echo "new row should be added!";

header('Location: ../views/workspace.php');
?>
