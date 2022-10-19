<?php 
session_start();
require_once("phpMethods.php");

$varSName = $_POST['surname'];
$varOName = $_POST['othernames'];
$varPhone = $_POST['phone'];
$varEmail = $_POST['email'];
$varResidence = $_POST['residence'];

$varGName = $_POST['g_name'];
$varGRelation = $_POST['g_relation'];
$varGEmail = $_POST['g_email'];
$varGPhone = $_POST['g_phone'];
$varGOccupation = $_POST['g_occupation'];



if(!empty($_POST['email'])){
	//Inserting data
	if(isset($_POST['submitDetails'])){
	$file=$_FILES['certificateMedic'];
  	print_r($file);
  	$file_path="../DOCUMENTS/";
  	$original_file_name=$_FILES['certificateMedic']['name'];
  	$file_tmp_location=$_FILES['certificateMedic']['tmp_name'];
  	if(move_uploaded_file($file_tmp_location, $file_path.$original_file_name)){
  		

	$sql_insert1 = " INSERT INTO student_details(surname, othernames, phone, email, residence, documentFileName) 
		VALUES('$varSName','$varOName','$varPhone','$varEmail',
		'$varResidence','$original_file_name'); INSERT INTO guardian_details(g_name, g_relation, g_email, g_phone, g_occupation)VALUES('$varGName','$varGRelation','$varGEmail','$varGPhone',
		'$varGOccupation')";

	setData($sql_insert1);
	


	header('location:../enrollmentresponse.php');
} }else{
	echo("<script>
		window.location.href='./studentinput.php';
		alert('Please check your info and try again.');
		</script>");
}}
 ?>
