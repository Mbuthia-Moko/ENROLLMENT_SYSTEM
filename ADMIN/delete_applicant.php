<?php
include("./test/connect.php");
$id = $_GET['applicant_id'];

$sql_delete="DELETE FROM applicant_details WHERE applicant_id='".$id."'";

if($conn->query($sql_delete)===TRUE){
    header("location: /index.php?page=enrollment");
}
else {
    echo "ERROR:".$conn->error;
}

 
?>
