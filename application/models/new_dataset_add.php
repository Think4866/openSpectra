<?php

require_once('upload_datasets.php');

//add variable that you want to use for the amazon s3 processed url and set it equal to $argv[1]

$MUGL_URL = $argv[1];

$queryGetID = "SELECT * FROM USER WHERE USERNAME='" . $FNAME . "' LIMIT 0, 1";
$selectUserID = mysqli_query($conn, $queryGetID) or die(mysqli_error($conn));
$row_GetID = mysqli_fetch_assoc($selectUserID);
$USER_ID = $row_GetID['USER_ID'];
$FNAME = $USER_ID;



//add the new dataset to database

$qstr = "INSERT INTO DATASETS (USER_ID, MATERIAL, MOLECULARFORMULA, ISOTOPE, PUBLIC, DATE_COLLECTED, DESCRIPTION, ORIGFILE_URL, ORIGCALIB_URL, MUGL_URL) VALUES ('" . $FNAME . "', '" . $MATERIAL . "', '" . $MOLECULARFORMULA . "', '" . $ISOTOPE . "', '" . $PUBLIC . "', '" . $DATE_COLLECTED . "', '" . $DESCRIPTION . "', '" . $ORIGFILE_URL . "', '" . $ORIGCALIB_URL . "', '" . $MUGL_URL . "')";

$addNewDataset = mysqli_query($conn, $qstr) or die(mysqli_error($conn));
//echo "new row should be added!";

header('Location: ../views/workspace.php');

?>