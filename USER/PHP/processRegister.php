<?php 
session_start();
require_once("phpMethods.php");

$varSName = $_POST['surname'];
$varOName = $_POST['othernames'];
$varPhone = $_POST['phone'];
$varEmail = $_POST['email'];
$varResidence = $_POST['residence'];
$varNatId = $_POST['nationalID'];





if(!empty($_POST['email'])){
	//Inserting data
	if(isset($_POST['submitDetails'])){
	$file=$_FILES['certificateMedic'];
  	print_r($file);
  	$file_path="../DOCUMENTS/";
  	$original_file_name=$_FILES['certificateMedic']['name'];
  	$file_tmp_location=$_FILES['certificateMedic']['tmp_name'];
  	if(move_uploaded_file($file_tmp_location, $file_path.$original_file_name)){
  		

	$sql_insert1 = " INSERT INTO student_details(surname, othernames, phone, email,nationalID, residence, documentFileName) 
		VALUES('$varSName','$varOName','$varPhone','$varEmail','$varNatId',
		'$varResidence','$original_file_name')"; 

		

	 setData($sql_insert1);
	


	header('location:../DASHBOARD/guardianinput.php');
} }else{
	echo("<script>
		window.location.href='../DASHBOARD/studentinput.php';
		alert('Please check your info and try again.');
		</script>");
}}
 ?>
