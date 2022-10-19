<?php
session_start();
require_once("../PHP/phpMethods.php");

$varUserID = $_SESSION['UserID'];
$varStatus = 'Pending';
$sql="SELECT * FROM tbl_passport where clientID = '".$varUserID."'";
$result = getData($sql);
if(!empty($result)){
  if(count($result) != 0){
    if(isset($_POST['submitImage'])){
    	$file=$_FILES['passportImage'];
    	print_r($file);
    	$file_path="../PASSPORTS/";
    	$original_file_name=$_FILES['passportImage']['name'];
    	$file_tmp_location=$_FILES['passportImage']['tmp_name'];
    	if(move_uploaded_file($file_tmp_location, $file_path.$original_file_name)){
        $sql_update = "UPDATE tbl_passport SET passportFileName = '$original_file_name', passportApprovalStatus = '$varStatus' WHERE clientID = '$varUserID'";
        setData($sql_update);
    		header('location:../DASHBOARD/myDocuments.php');
    	}
    }
  }
}else{
  if(isset($_POST['submitImage'])){
  	$file=$_FILES['passportImage'];
  	print_r($file);
  	$file_path="../PASSPORTS/";
  	$original_file_name=$_FILES['passportImage']['name'];
  	$file_tmp_location=$_FILES['passportImage']['tmp_name'];
  	if(move_uploaded_file($file_tmp_location, $file_path.$original_file_name)){
      $sql_update = "UPDATE tbl_passport SET passportFileName = '$original_file_name', passportApprovalStatus = '$varStatus' WHERE clientID = '$varUserID'";
      setData($sql_update);

      $sql="INSERT INTO tbl_passport(clientID, passportFileName, passportApprovalStatus) VALUES('$varUserID','$original_file_name','$varStatus')";
  		setData($sql);
  		header('location:../DASHBOARD/myDocuments.php');
  	}
  }
}

 ?>
