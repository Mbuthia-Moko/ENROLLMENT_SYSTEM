<?php 
session_start();
require_once("phpMethods.php");

$varSName = $_POST['name'];
$varPhone = $_POST['phone'];
$varDate= $_POST['interviewdate'];



if(!empty($_POST['interviewdate'])){
	//Inserting data
	
  		

	$sql_insert1 = " INSERT INTO interview_schedule(interviewdate,name, phone) 
		VALUES('$varDate','$varSName','$varPhone')"; 

		// $sql_insert2=" INSERT INTO guardian_details(g_name, g_relation, g_email, g_phone, g_occupation)VALUES('$varGName','$varGRelation','$varGEmail','$varGPhone',
		// '$varGOccupation')";

	 setData($sql_insert1);
	


	header('location:../DASHBOARD/myApplication.php');
} else{
	echo("<script>
		window.location.href='../DASHBOARD/bookinterview.php';
		alert('Please check your info and try again.');
		</script>");
}
 ?>
