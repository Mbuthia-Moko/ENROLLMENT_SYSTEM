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
               

                <div class="row">
            <form method="post" action="../PHP/processGuardian.php" enctype="multipart/form-data">
                <div class="container">
                    <div class="card" id="studentinput-form">
                        
                        <div class="card-body">

                        <div class="row">
                                <h6> Parent's/Guardian's details</h6>
                            </div>


                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="g_name" class="form-label">Parent/Guardian's name</label>
                                        <input type="text" required="false" class="form-control" name ="g_name" id="g_name" >
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="g_relation" class="form-label">Parent/Guardian's relation</label>
                                        <select class="form-control form_select" name="g_relation" id="g_relation" >
                                            <option value="Father">Father</option>
                                            <option value="Mother">Mother</option>
                                            <option value="Guardian">Guardian</option>
                                        </select>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="g_email" class="form-label">Parent/Guardian's email</label>
                                        <input type="email" required="false" class="form-control" name="g_email" id="g_email">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="g_phone" class="form-label">Parent/Guardian's Phone Number</label>
                                    <input type="text" required="true" class="form-control" name="g_phone" id="g_phone" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                 <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="g_occupation" class="form-label"> Parent/Guardian's Ocupation</label>
                                        <input type="text" required="false" class="form-control" name ="g_occupation" id="guardianoccupation" >
                                    </div>
                                </div>
                                
                            </div>

                            
                           
                            <button class="btn btn-success text-center" role="button" id="submit-button" name="submitGDetails">SUBMIT</button>
                        
                    </div>
                </div>
            </div>
            

            </form><br><br>
        </div>
                
      </div>
    </div>
<?php include('dashboardClosing.php'); ?>
