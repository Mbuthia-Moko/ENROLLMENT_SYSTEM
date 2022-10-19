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
            <form method="post" action="../PHP/processRegister.php" enctype="multipart/form-data">
                <div class="container">
                    <div class="card" id="studentinput-form">
                        
                        <div class="card-body">
                             <div class="row">
                                <h6> Student's details</h6>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="surname" class="form-label">Surname</label>
                                        <input type="text" required="true" class="form-control" name ="surname" id="surname" value="<?php echo( $varLName); ?>">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="othernames" class="form-label">Other names</label>
                                        <input type="text" required="true" class="form-control" name ="othernames" id="othernames " value="<?php echo( $varFName); ?> ">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="email" class="form-label">email</label>
                                        <input type="email" required="true" class="form-control" name="email" id="email" value="<?php echo( $varEmail); ?>" >
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="Phone" class="form-label">Phone</label>
                                    <input type="text" required="true" class="form-control" name="phone" id="phone" value="<?php echo( $varPhone); ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="IDnumber" class="form-label">ID Number</label>
                                    <input type="text" required="true" class="form-control" name="nationalID" id="IDnumber" placeholder="Enter ID number">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="residence" class="form-label">Residence</label>
                                        <input type="text" required="true" class="form-control" name ="residence" id="residence" placeholder="Enter Residence">
                                    </div>
                                </div>                                
                           </div>
                           <div class="row">
                            <h6>Documents</h6>
                            
<label class="form-label" for="customFile">Upload Medical Report</label>
<input type="file" class="form-control" name="certificateMedic" /><br>


                               
                           </div>

                           <hr>
  
                            <button class="btn btn-success text-center" role="button" id="submit-button" name="submitDetails">SUBMIT</button>
                        
                    </div>
                </div>
            </div>
            

            </form><br><br>
        </div>
                
      </div>
    </div>
<?php include('dashboardClosing.php'); ?>
