<?php 
session_start();
require_once("phpMethods.php");


$varFName = $_POST['name_contact'];
$varPhone = $_POST['phone_contact'];
$varEmail = $_POST['email_contact'];
$varPurpose = $_POST['Purpose'];
$varMessage = $_POST['message_contact'];

if(!empty($_SESSION['UserID']) && !empty($_POST['email_contact']) && !empty($_POST['message_contact']) && !empty($_POST['Purpose'])){
	//Inserting data
	$sql_insert = "INSERT INTO enquiry(fName,phone,email,purpose,message) 
		VALUES('$varFName','$varPhone','$varEmail','$varPurpose',
		'$varMessage')";
	setData($sql_insert);
	echo("<script>
		alert('Thank you for your inquiry');
		window.location.href='../index.php';
		</script>");
} else{
	echo("<script>
		alert('Please check your inquiry form and try again.');
		</script>");
}
 ?>
