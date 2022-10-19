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
<br>
<br>
<div class="row">
                                <h3 style="text-align: center"> Student Details Input Form</h3>
                            </div>


<div class="container intro_mar">
    <div class="row">
            <form method="post" action="./PHP/processRegister.php" enctype="multipart/form-data">
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
                                        <input type="text" required="true" class="form-control" name ="surname" id="surname" placeholder="Enter Surname">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="othernames" class="form-label">Other names</label>
                                        <input type="text" required="true" class="form-control" name ="othernames" id="othernames" placeholder="Enter Other names">
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
                                        <label for="IDnumber" class="form-label">ID Number</label>
                                    <input type="text" required="true" class="form-control" name="IDnumber" id="IDnumber" placeholder="Enter ID number">
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
                           

                            
  
  
  
                            
                           
                            <button class="btn btn-success text-center" role="button" id="submit-button" name="submitDetails">SUBMIT</button>
                        
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