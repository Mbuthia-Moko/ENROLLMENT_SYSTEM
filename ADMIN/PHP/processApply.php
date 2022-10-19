<?php 
session_start();
require_once("phpMethods.php");

$varFName = $_POST['firstname'];
$varLName = $_POST['lastname'];
$varEmail = $_POST['email'];
$varPhone = $_POST['phone'];
$varCourse=$_POST['course'];
$varLevel= $_POST['edLevel'];


$varPhone = preg_replace('/[^0-9]/','',$varPhone);
preg_match('/(.*)(\d{4})$/',$varPhone,$matches);
$CardStart = $matches[1];
$LastFour = $matches[2];

$hashedPass = password_hash($LastFour,PASSWORD_DEFAULT);

if(!empty($_POST['email'])){
	//Inserting data
	if(isset($_POST['submitApplication'])){



	$file=$_FILES['certificateNeeded'];
  	print_r($file);
  	$file_path="../DOCUMENTS/";
  	$original_file_name=$_FILES['certificateNeeded']['name'];
  	$file_tmp_location=$_FILES['certificateNeeded']['tmp_name'];
  	if(move_uploaded_file($file_tmp_location, $file_path.$original_file_name)){
	$sql_insert = "INSERT INTO applicant_details(firstname, lastname, email, phone, password, edLevel, course, certificateFileName) 
		VALUES('$varFName','$varLName','$varEmail','$varPhone','$hashedPass','$varLevel','$varCourse','$original_file_name')";

	setData($sql_insert);
	
	header('location:../applicationresponse.php');}

}} else{
	echo("<script>
		window.location.href='./studentinput.php';
		alert('Please check your info and try again.');
		</script>");
}
 ?>
