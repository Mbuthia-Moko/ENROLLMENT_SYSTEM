<?php include('dashboardOpening.php');
include('../PHP/phpMethods.php');
$varUserID = $_SESSION['UserID'];

$sql2="SELECT * FROM applicant_details where applicant_id = '".$varUserID."'";
$result2 = getData($sql2);
if(!empty($result2)){
  if(count($result2) != 0){
    $varCertificateFileName = $result2['certificateFileName'];
    $varApplicantApprovalStatus = $result2['applicantApprovalStatus'];
    $varCourse=$result2['course'];
  }
}else{

  $varApplicantApprovalStatus = 'Pending';
  
}
?>
<br><br><br>
  <div class="container-fluid" id="hero-2">
    <div class="container py-4">
      <div class="row my-4">
        <div class="container">
          <div class="row">
            <div class="col-lg-2">
              <button type="button" class="col-12 btn btn-outline-info btn-lg btn-block" data-toggle="collapse" data-target="#multiCollapseExample" aria-expanded="true" aria-controls="multiCollapseExample">
                <span class="one-line-blocks">
                  <h5>
                  Documents
                  </h5>
                  <!-- This is for the arrow glow -->
                  <i class="fas fa-angle-right fa-2x"></i>
                </span>
              </button>

              <button type="button" class="col-12 btn btn-outline-info btn-lg btn-block" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="true" aria-controls="multiCollapseExample2">
                <span class="one-line-blocks">
                  <h5>
                  Admission Status
                  </h5>
                  <!-- This is for the arrow glow -->
                  <i class="fas fa-angle-right fa-2x"></i>
                </span>
              </button>
            </div>
            <div class="col-lg-10">
              <div class="accordion collapse multi-collapse" id="multiCollapseExample">
                
                <div class="row my-4">
                  <div class="col-12">
                    <div class="row">
                      <div class="card mb-3 text-center">
                        <div class="card-body">
                        <a href="../DOCUMENTS/<?php echo($varCertificateFileName); ?>" title="Certificate"> Certificate</a>
                
                        </div>
                          
                          <form action="../PHP/processUpload.php" method="post" enctype="multipart/form-data">
                            <label for="passportImage">To upload additional documents, click the button below.</label><br>
                            <input type="file" name="passportImage" required><br>
                            <input class="btn btn-success text-center" role="button" id="submit-button" type="submit" name="submitImage">
                          </form>
                        </div>
                      </div>
			              </div>
                  </div>
                </div>
              

            <div class="accordion collapse multi-collapse" id="multiCollapseExample2">
             <div class="row my-4">
                  <div class="col-12">
                    <div class="home-content">
                      <div class="sales-boxes">
                        <div class="recent-sales box">
                            <div class="row">
                              <div class="col-12 float-left">
                                <div class="title">
                                  <big>Admission Details</big></div>
                                    <h5 class="card-title">Admission Status: <?php
                          if($varApplicantApprovalStatus == 'Pending'){
                            ?><button class="btn btn-warning" disabled><?php echo($varApplicantApprovalStatus);
                          }elseif($varApplicantApprovalStatus == 'Denied'){
                            ?><button class="btn btn-danger" disabled><?php echo($varApplicantApprovalStatus);
                          }elseif($varApplicantApprovalStatus == 'Approved'){
                            ?><button class="btn btn-success" disabled><?php echo($varApplicantApprovalStatus);}?>
                        </button></h5>
                        <?php
                        if($varApplicantApprovalStatus == 'Approved'){
                            ?>
                            <div>
                              Congratulations! You have been accepted into our <?php echo($varCourse) ?> program.Click Next to enter your details.<br>
                               <a class="btn btn-info text-center" href="studentinput.php" role="button" id="submit-button" >Next</a>
                            </div>
                            <?php
                          }elseif($varApplicantApprovalStatus == 'Pending'){
                            ?>
                            <div>
                              Select a date to visit the school for an interview and entrance exam.(Both the interview and entrance exam are done on the same day).<br>
                              Click Next to enter your details.<br>
                               <a class="btn btn-info text-center" href="bookinterview.php" role="button" id="submit-button" >Next</a>
                            </div>
                            <?php
                          }
                          ?>
                         
                        
                  
                            </div>
                        </div>
            
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>




          
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script>
    less = {
      env: 'development'
    };
  </script>
  <script src="less.js"></script>
  <script>
    less.watch();
  </script>
<?php include('dashboardClosing.php'); ?>


 

                                

                   