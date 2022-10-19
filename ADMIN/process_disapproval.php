<?php
include('./PHP/phpMethods.php');
$varUserID = $_GET['applicant_id'];
$sql="SELECT * FROM applicant_details where applicant_id = '".$varUserID."'";
$result = getData($sql);


if (isset($_POST['disapprove']))
{
 $varFName = $_POST['firstname'];
$varLName = $_POST['lastname'];
$varEmail = $_POST['email'];
$varPhone = $_POST['phone'];
$varCourse=$_POST['course'];
$varLevel= $_POST['edLevel'];
$varApplicantApprovalStatus = $_POST['applicantApprovalStatus'];

  $sql = "UPDATE applicant_details SET applicantApprovalStatus = 2 WHERE applicant_id=$varUserID" ;
  $result = setData($sql);

  if($result===TRUE)
  {
    
    echo" update success";
  }
   else
   {
                 
       echo "error";
   }
  
}

?>