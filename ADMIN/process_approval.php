<?php
require_once('../approve/connect.php');
if (isset($_POST['approval']))
{
  $ID=$_POST['applicant_id'];
$varFName = $_POST['firstname'];
$varLName = $_POST['lastname'];
$varEmail = $_POST['email'];
$varPhone = $_POST['phone'];
$varCourse=$_POST['course'];
$varLevel= $_POST['edLevel'];


  $sql = "UPDATE applicant_details SET applicantApprovalStatus = 1 WHERE applicant_id=$ID" ;
  $result = updateData ($sql);
  if($result===TRUE)
  {
    
    echo" update success";
  }
   else
   {
                 
       echo "error";
   }
  
}
else if (isset($_POST['disapproval']))
{
    $sql = "UPDATE applicant_details SET applicantApprovalStatus = 2 WHERE applicant_id=$ID" ;
  $result = updateData ($sql);
    
}
?>