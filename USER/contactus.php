<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="userStyles.css">
  <link rel="stylesheet" type="text/css" href="FOOTER/footer.css">
  <link rel="stylesheet" type="text/css" href="NAVBAR/header.css">
  <link rel="stylesheet" type="text/css" href="./FRONT_Experiments/experimentalCSS.css">

  <title>Core</title>
</head>
<body>
 
  <?php include('NAVBAR/header.php'); ?>
  <div class="user-view" style="background-image: url('./IMAGES/backgroundtop.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    
</div>
<br>
<br>


<div class="container intro_mar">
    <div class="row">
        <div class="col-md-8 col-sm-8">
           <!--<form method="post" action="" id="contactform" class="contactHelp">-->
            <form method="post" action="./PHP/processContactUs.php">
                <div class="container">
                    <div class="card" id="form-input">
                        <h2 style="text-align:center">
                            Get in touch with us
                        </h2>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" id="name_contact" name="name_contact" placeholder="Enter Name">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" id="email_contact" name="email_contact" class="form-control" placeholder="Enter Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" id="phone_contact" name="phone_contact" class="form-control" placeholder="Enter Phone number">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Subject</label>
                                        <select class="form-control form_select" name="Purpose" id="Purpose">
                                            <option value="Purpose">Purpose</option>
                                            <option value="Complaint">Complaint</option>
                                            <option value="Enquire">Enquire</option>
                                            <option value="Suggestion">Suggestion</option>
                                            <!-- <option value="Data Protection Officer">Data Protection Officer</option> -->
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Message</label>
                                        <textarea rows="5" id="message_contact" name="message_contact" class="form-control" placeholder="Write your message" style="height:200px;"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group contactUsMsg col-md-9" id="contactUsMsg">
                                </div>
                            </div>
                            <button class="btn btn-success text-center" name="send" role="button" id="submit-button">SUBMIT</button>
                        </div>
                    </div>
                </div>
            </form><br><br>
        </div>
        <!-- End col-md-8 -->
        <div class="col-md-4 col-sm-4 margingTop45">
            <div class="box_style_1">
                <span class="tape contact_tape"></span>
                <h4>Address </h4>
                <p>
                    P.O Box 59857 - 00200, Nairobi, Kenya., Ole Sangale Road, off Langata Road, in Madaraka Estate
                </p>
                <br>
                <h4>Help center</h4>
                <p>
                    Get in touch with our enrollment department for any application and admission related queries.
                </p>
                <ul id="contact-info">
                    <li><a href="tel:02076127222">0207 612 7222</a></li>
                    <li>
                        <a href="#">info@coreschoolenrollment.co.ke</a>
                    </li>
                </ul>
                <p>
                    Monday to Friday: 8:00am - 9:00pm<br>
                    Saturday and Sunday: closed
                </p>
            </div>
            

        </div>
</div>
</div>


<?php include('FOOTER/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>