<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="userStyles.css">
  <link rel="stylesheet" type="text/css" href="FOOTER/footer.css">
  <link rel="stylesheet" type="text/css" href="NAVBAR/header.css">
  
  <title>Core</title>
</head>
<body>
  <?php include('NAVBAR/header.php'); ?>
  <div class="user-view" style="background-image: url('./IMAGES/backgroundtop.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    
</div>
<br><br>

<div class="container intro_mar">
    <div class="row">
            <form method="post" action="./PHP/processApply.php" enctype="multipart/form-data">
                <div class="container">
                    <div class="card" id="form-input">
                        <div class="row" id="smalltitle">
                                <h4> Apply Now</h4>
                            </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="firstname" class="form-label">Firstname</label>
                                        <input type="text" required="true" class="form-control" name ="firstname" id="firstname" placeholder="Enter Firstname">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="lastname" class="form-label">Lastname</label>
                                        <input type="text" required="true" class="form-control" name ="lastname" id="lastname" placeholder="Enter Lastname">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="email" class="form-label">email</label>
                                        <input type="email" required="true" class="form-control" name="email" id="email" placeholder="Enter email address">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="Phone" class="form-label">Phone</label>
                                    <input type="text" required="true" class="form-control" name="phone" id="phone" placeholder="Enter phone number (+254123456789)">
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Level</label>
                                        <select class="form-control form_select" name="edLevel" id="edLevel">
                                            <option value="Diploma">Diploma</option>
                                            <option value="Undergraduate">Undergraduate</option>
                                            <option value="Graduate">Graduate</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Course</label><br>
                                        <select name="course">
            <ul>
   <?php
        require_once("./PHP/phpMethods.php");
        $query = "SELECT section FROM level_section ";
        $test = getDataRows($query);
        $rows= array();
        foreach ($test as $key => $rows) {
            ?>
                       
              <option><?php echo $rows["section"]?></option>
                
                          
    
          <?php }
          ?>
  </ul>
  <br>

        </select>
                                        
                                    </div>
                                </div>
                            </div>


<div class="row">
    <label class="form-label" for="customFile">Upload Certificate</label>
    <p>*For Diploma and Undergraduate, upload your K.C.S.E Certificate</p>
    <p>*For Graduate upload your Degree or Masters Certificate</p>
    
<input type="file" class="form-control" name="certificateNeeded" /><br>

</div>
                                
                           

                            
  
  
  
                            
                           
                            <button class="btn btn-success text-center" role="button" id="submit-button" name="submitApplication">APPLY</button>
                        
                    </div>
                </div>
            </div>

            </form><br><br>
        </div>
    </div>
    <br><br>
        
        




<?php include('FOOTER/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>