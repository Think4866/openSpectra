<?php  
//include the S3 class                
if (!class_exists('S3'))require_once('S3.php');  
  
//AWS access info  
if (!defined('awsAccessKey')) define('awsAccessKey', 'AKIAJVBRXK5LM42MBCGQ');  
if (!defined('awsSecretKey')) define('awsSecretKey', '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');  
  
//instantiate the class  
$s3 = new S3(awsAccessKey, awsSecretKey);  
  
//we'll continue our script from here in step 4!  
  
?>