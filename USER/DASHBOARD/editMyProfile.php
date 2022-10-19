<?php include('dashboardOpening.php');
  include('../PHP/phpMethods.php');
  $varUserID = $_SESSION['UserID'];
  $sql="SELECT * FROM applicant_details where applicant_id= '".$varUserID."'";
  $result = getData($sql);
  if(count($result) != 0){
     $varUID = $result["applicant_id"];
    $varFName = $result["firstname"];
    $varLName = $result["lastname"];
   $varEmail = $result["email"];
    $varPhone = $result["phone"];
    $varCourse=$result['course'];
    $varPassword=$result['password'];
  }
?>
<div class="home-content">
  <div class="sales-boxes">
    <div class="recent-sales box">
      <form method="post" action="../PHP/updateMyProfile.php">
        <div class="row">
          <!--<div class="col-3 text-center">
            <img src="../IMAGES/male-user.png" class="img-fluid my-3 male-user-icon" alt="User image">
            <a class="btn btn-outline-success" href="#" role="button">
              <i class="far fa-edit">&nbsp;Edit Picture</i>
            </a>
          </div>-->
          <div class="col-12 float-left">
            <div class="title">
              <big>Change Password</big>
            </div>
            
          
          <div class="col-12 form-group">
            <label for="exampleInputPassword1">New Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="new_password" required>
          </div>
          <div class="col-12 form-group">
            <label for="exampleInputPassword1">Confirm New Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="confirm_new_password" required>
          </div>
          <div class="col-12">
            <input class="btn btn-info text-center" role="button" id="submit-button" type="submit"></input>
          </div>
        </div>
      </form>
    </div>
  </div>
</div><br>
<?php include('dashboardClosing.php'); ?>
