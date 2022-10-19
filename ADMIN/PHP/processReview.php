<?php
session_start();
require_once("phpMethods.php");

$varUserID = $_SESSION['UserID'];
$varUser = $_SESSION['User'];
$varStarRating = $_POST['star_rating'];
$varMessageReview = $_POST['message_review'];

if(!empty($_SESSION['UserID']) && !empty($_POST['star_rating']) && !empty($_POST['message_review'])){
	//Inserting data
	$sql_insert = "INSERT INTO tbl_review(clientID,reviewStarRating,reviewMessage,clientUsername)
		VALUES('$varUserID','$varStarRating','$varMessageReview','$varUser')";
	setData($sql_insert);
	echo("<script>
		alert('Thank you for your review');
		window.location.href='../DASHBOARD/dashboard.php';
		</script>");
} else{
	echo("<script>
		alert('Please check your review form and try again.');
		</script>");
}
 ?>
