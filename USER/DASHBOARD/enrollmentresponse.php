<?php include('dashboardOpening.php');
  include('../PHP/phpMethods.php');
  $varUserID = $_SESSION['UserID'];
  $sql="SELECT * FROM applicant_details where applicant_id = '".$varUserID."'";
  $result = getData($sql);
  if(count($result) != 0){
    $varUID = $result["applicant_id"];
    $varFName = $result["firstname"];
    $varLName = $result["lastname"];
   $varEmail = $result["email"];
    $varPhone = $result["phone"];
    $varLevel= $result['edLevel'];
    $varCourse=$result['course'];
    
  }
?>
<div class="home-content">
      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="row">
            <!--<div class="col-3 text-center" style="align-self: center;">
              <img src="../IMAGES/male-user.png" class="img-fluid my-3 male-user-icon" alt="User image">
            </div>-->
            <div class="col-12 float-left">
              <div class="row my-3">
                <div class="form-group">
                  <h5>Book Interview</h5>
   
<div class="alert alert-success" role="alert">
  You have successfully been enrolled for a course in <?php echo($varCourse) ?> at our university!.
  <br>
                
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
<?php include('dashboardClosing.php'); ?>
