<?php

require_once('user_manager.php');

//add variable that you want to use for the amazon s3 processed url and set it equal to $argv[1]

$MUGL_URL = $argv[1];
$SET_ID = $argv[2];

//add the new dataset to database

$qstr = "UPDATE DATASETS SET MUGL_URL = '" . $MUGL_URL . "' WHERE SET_ID = '" . $SET_ID . "'";

$updateNewRow = mysqli_query($conn, $qstr) or die(mysqli_error($conn));

header('Location: ../views/workspace.php');

?>