<?php
include('../PHP/phpMethods.php');
session_start();
if (isset($_GET['logout'])) {
    $varUID = $_SESSION['UserID'];
    $logBool = 'false';
    $sql_update = "UPDATE applicant_details SET logStatus = '$logBool' WHERE applicant_id=$varUID" ;
    setData($sql_update);
    session_destroy();
    unset($_SESSION['User']);
    unset($_SESSION['UserID']);
    echo("<script>
      alert('Successfully logged out.');
      </script>");
    header("location:../login.php");
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Logout Confirmation</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../DASHBOARD/dashboard2.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!--Font awesome-->
    <script src="https://kit.fontawesome.com/d30f67c531.js" crossorigin="anonymous"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/d30f67c531.js" crossorigin="anonymous"></script>

    <!-- GoogleFonts -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   </head>
  <body><br><br><br><br>
    <div class="container text-center">
      <h1><?php echo($_SESSION['UserFName']); ?>, are you sure you<br> want to log out<br> of your session?</h1>
      <big><a class="btn btn-outline-success text-center" href="../FRONT/landingpage.php" style="text-decoration: none;">Keep Browsing</a></big>
      <big><a class="btn btn-outline-danger text-center" href="../PHP/logout.php?logout='1'" style="text-decoration: none;">Logout</a></big>
    </div>
  </body>
</html>
<?php //  if (isset($_SESSION['User'])) : ?>

  <!--<!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title></title>
    </head>
    <body>

    </body>
  </html>-->

    <?php //endif ?>
