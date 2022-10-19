<?php
session_start();
require_once("phpMethods.php");

$varUserID = $_SESSION['UserID'];
$varNewPassword = $_POST['new_password'];
$varConfirmPassword = $_POST['confirm_new_password'];

$hashedPass = password_hash($varConfirmPassword,PASSWORD_DEFAULT);

if(!empty($_POST['new_password']) &&
						!empty($_POST['confirm_new_password'])){
							if(($_POST['new_password']) === ($_POST['confirm_new_password'])){
								//Updating data
								$sql_update = "UPDATE applicant_details SET 
									password = '$hashedPass' WHERE applicant_id = '$varUserID'";
								setData($sql_update);
								echo("<script>
								window.location.href='../DASHBOARD/dashboard.php';
								alert('Data updated successfully.');
								</script>");
							}else{
								echo("<script>
									alert('Password mismatch!');
									window.location.href='../DASHBOARD/editMyProfile.php';
									</script>");
							}
} else{
	echo("<script>
		alert('Please check your info and try again.');
		</script>");
}
 ?>
