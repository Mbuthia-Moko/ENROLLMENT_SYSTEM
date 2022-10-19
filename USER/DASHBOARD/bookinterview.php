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
                <form method="post" action="../PHP/processInterview.php" enctype="multipart/form-data">
                <div class="form-group">
                  <h5>Book Interview</h5>
                  <div class="row">
                                <div class="col-md-6 col-sm-6">

                                    <div class="form-group">
                                        <label for="name" class="form-label">Name</label>
                                        <input disabled type="text" required="true" class="form-control" name ="name" id="name" value="<?php echo($varFName)?> <?php echo($varLName)?>">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                       <label for="Phone" class="form-label">Phone</label>
                                    <input disabled type="text" required="true" class="form-control" name="phone" id="phone" value="<?php echo( $varPhone); ?>">
                                    </div>
                                </div>
                            </div>
    <label for="date">Date</label>
    <input type="date" class="form-control" id="date" name="interviewdate" placeholder="Enter Date">
  </div>

  <button class="btn btn-success text-center" role="button" id="submit-button" name="submitDetails">SUBMIT</button>
            </form>    

    </div>
  </div>
</div>
</div>
</div>
</div>

<?php include('dashboardClosing.php'); ?>
