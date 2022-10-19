
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

<div id="courses">
  <h4 style="text-align:center">Diploma Courses</h4><hr>
  <ul>
   <?php
        require_once("./PHP/phpMethods.php");
        $query = "SELECT section FROM level_section WHERE level='Diploma'";
        $test = getDataRows($query);
        $rows= array();
        foreach ($test as $key => $rows) {
            ?>
                       
              <li><?php echo $rows["section"]?></li>
                
                          
    
          <?php }
          ?>
  </ul>
  <br>

  
<a class="btn btn-success text-center" href="apply.php" role="button" id="submit-button">APPLY NOW</a>
   <br>
</div>
<br>

<div id="courses">
  <h4 style="text-align:center">Undergraduate Courses</h4><hr>
  <ul>
   <?php
        require_once("./PHP/phpMethods.php");
        $query = "SELECT section FROM level_section WHERE level='Undergraduate'";
        $test = getDataRows($query);
        $rows= array();
        foreach ($test as $key => $rows) {
            ?>
                       
              <li><?php echo $rows["section"]?></li>
                
                          
    
          <?php }
          ?>
  </ul>
  <br>

<a class="btn btn-success text-center" href="apply.php" role="button" id="submit-button">APPLY NOW</a>
   <br>
</div>
<br>

<div id="courses">
  <h4 style="text-align:center">Graduate Courses</h4><hr>
  <ul>
   <?php
        require_once("./PHP/phpMethods.php");
        $query = "SELECT section FROM level_section WHERE level='Graduate'";
        $test = getDataRows($query);
        $rows= array();
        foreach ($test as $key => $rows) {
            ?>
                       
              <li><?php echo $rows["section"]?></li>
                
                          
    
          <?php }
          ?>
  </ul>
  <br>


   <a class="btn btn-success text-center" href="apply.php" role="button" id="submit-button">APPLY NOW</a>
   <br>

</div>
<br>
        



 


<?php include('FOOTER/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>