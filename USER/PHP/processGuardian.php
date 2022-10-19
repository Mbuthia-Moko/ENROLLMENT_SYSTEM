<?php 
session_start();
require_once("phpMethods.php");

$varGName = $_POST['g_name'];
$varGRelation = $_POST['g_relation'];
$varGEmail = $_POST['g_email'];
$varGPhone = $_POST['g_phone'];
$varGOccupation = $_POST['g_occupation'];



	 if(!empty($_POST['g_name'])){
	//Inserting data
		if(isset($_POST['submitGDetails'])){
	
		$sql_insert1 = " INSERT INTO guardian_details(g_name, g_relation, g_email, g_phone,g_occupation) 
		VALUES('$varGName','$varGRelation','$varGEmail','$varGPhone','$varGOccupation')"; 

		

	 setData($sql_insert1);


		header('location:../DASHBOARD/enrollmentresponse.php');
 	}else{
	echo("<script>
		window.location.href='../DASHBOARD/guardianinput.php';
		alert('Please check your info and try again.');
		</script>");
}}
 ?>
