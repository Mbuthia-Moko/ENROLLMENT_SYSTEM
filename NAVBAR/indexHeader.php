<?php 
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Packages Module</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Colo Shop Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- font Awesome Cdn -->
  <script src="https://kit.fontawesome.com/e48d166edc.js" crossorigin="anonymous"></script>

  <!-- Bootstrap cdn -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


  <!-- CSS File -->
  <link rel="stylesheet" type="text/css" href="header.css">
  <link rel="stylesheet" href="https://fontawesome.com/">
  <link rel="stylesheet" href="https://fontawesome.com/v4.7/icons/">

</head>

<body>

 <div class="main">
    <!-- Header -->

    <header class="header trans_300">

       <!-- main Navigation -->

       <div class="main_nav_container">
         <div class="container">
           <div class="row">
             <div class="col-lg-12 text-right">
               <div class="logo_container">
                 <nav class="navbar">
                   <ul class="navbar_menu">
                      
                     <li><a href="#">Home</a></li>
                     <li><a href="#">About Us</a></li>
                     <li><a href="#">Contacts</a></li>
                     <li><a href="../FRONT/login.php">Login</a></li>
                   </ul>

                   <ul class="navbar_user">
                    <li><a href="#"><i class="fa fa-search" arial-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-user" arial-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>

                    <li class="checkout">
                      <a href="#">
                        <i class="fa fa-bell" aria-hidden="true"></i>
                          <span id="checkout_items" class="checkout_items"></span>
                      </a>
                      
                    </li>
                    

                   </ul>

                 </nav>
               </div>
             </div>
           </div>
         </div>
       </div>
    </header>
<br><br><br>
</div>
</body>
</html>