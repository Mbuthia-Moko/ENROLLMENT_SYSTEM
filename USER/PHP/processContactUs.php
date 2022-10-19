<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
session_start();
require_once("phpMethods.php");


$varFName = $_POST['name_contact'];
$varPhone = $_POST['phone_contact'];
$varEmail = $_POST['email_contact'];
$varPurpose = $_POST['Purpose'];
$varMessage = $_POST['message_contact'];

if(isset($_POST["send"])){
  $mail = new PHPMailer(true);

  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'isprojectcore11@gmail.com'; // Your gmail
  $mail->Password = 'mqmyxbjhhndjaede'; // Your gmail app password
  $mail->SMTPSecure = 'ssl';
  $mail->Port = 465;

  $mail->setFrom('isprojectcore11@gmail.com'); // Your gmail

  $mail->addAddress($_POST["email_contact"]);

  $mail->isHTML(true);

  $mail->Subject = "AUTOMATED RESPONSE FROM CORE's ONLINE ENROLLMENT SYSTEM";

  if ($_POST["Purpose"]=="Enquire") {
  	$mail->Body = "Thank you for your inquiry. We will get back to you as soon as possible.";
  } elseif ($_POST["Purpose"]=="Complaint") {
	$mail->Body = "We are sorry for making this error. We will get back to you as soon as possible to rectify this.";
  }
  elseif ($_POST["Purpose"]=="Suggestion") {
	$mail->Body = "Thank you for your Suggestion. We will get back to you as soon as possible.";
  }
  elseif ($_POST["Purpose"]=="Feedback") {
	$mail->Body = "Thank you for your Feedback. We will get back to you as soon as possible.";
  }
  elseif ($_POST["Purpose"]) {
	$mail->Body = "Thank you for your Feedback. We will get back to you as soon as possible.";
  }

if(!empty($_POST['email_contact']) && !empty($_POST['message_contact']) && !empty($_POST['Purpose'])){
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




  
//   $mail->Body = $_POST["message"];

  $mail->send();

//   echo
//   "
//   <script>
//   alert('Sent Successfully');
//   document.location.href = 'index.php';
//   </script>
//   ";
}
?>
