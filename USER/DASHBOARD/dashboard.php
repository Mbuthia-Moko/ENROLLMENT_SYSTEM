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
                <div class="col-7 title">
                  <big><?php echo($varFName.' '.$varLName); ?></big>
                </div>
                <div class="col-5">
                  <a class="btn btn-outline-info" href="editMyProfile.php" role="button">
                    <i class="far fa-edit">&nbsp;Change Password</i>
                  </a>
                </div>
              </div>
              
              <div class="row my-3">
                <div class="col-3">
                  <strong>Email</strong>
                </div>
                <div class="col-6 float-left">
                  <?php echo($varEmail); ?>
                </div>
              </div>
              <div class="row my-3">
                <div class="col-3">
                  <strong>Phone</strong>
                </div>
                <div class="col-6 float-left">
                  <?php echo($varPhone); ?>
                </div>
              </div>
              <div class="row my-3">
                <div class="col-3">
                  <strong>Level</strong>
                </div>
                <div class="col-6 float-left">
                  <?php echo($varLevel); ?>
                </div>
              </div>

              <div class="row my-3">
                <div class="col-3">
                  <strong>Course</strong>
                </div>
                <div class="col-6 float-left">
                  <?php echo($varCourse); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php include('dashboardClosing.php'); ?>
