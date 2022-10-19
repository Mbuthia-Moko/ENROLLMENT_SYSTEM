<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="dashboard2.css">
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
<body>
  <div class="sidebar">
    <div class="logo-details">
      
      <span class="logo_name">Core School Online Enrollment</span>
    </div>
      <ul class="nav-links">
        
        <li>
          <a href="../DASHBOARD/dashboard.php">
            <i class='bx bx-user' ></i>
            <span class="links_name">My Profile</span>
          </a>
        </li>
        <li>
          <a href="../DASHBOARD/myApplication.php">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">My Application</span>
          </a>
        </li>
        
        <li>
          <a href="../contactUs.php">
            <i class="fas fa-headset"></i>
            <span class="links_name">Support</span>
          </a>
        </li>
        <li class="log_out">
          <a href="../PHP/logout.php?logout='1'">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>

  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>

      </div>
      
      <div class="profile-details">
        <i class="far fa-user" style="margin: 0px 15px;"></i>
        <span class="admin_name">Logged in as <?php echo($_SESSION['UserFName']);?></span>
      </div>
    </nav>
