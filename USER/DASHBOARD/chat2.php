<?php include'../DASHBOARD/dashboardOpening.php'; ?>
<div class="home-content">
  	<div class="sales-boxes">
    	<div class="recent-sales box">
        	<div id="wrapper">
            	<div id="menu">
                	<p class="welcome">Welcome, <b><?php echo $_SESSION['UserFName']; ?></b></p>
                	<p class="logout"><a id="exit" href="#">Exit Chat</a></p>
            	</div>
 
            	<div id="chatbox"></div>
 
            	<form name="message" action="">
                	<input name="usermsg" type="text" id="usermsg" />
                	<input name="submitmsg" type="submit" id="submitmsg" value="Send" />
            	</form>
        	</div>
    	</div>
	</div>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    //If user wants to end session
    $("#exit").click(function(){
        var exit = confirm("Are you sure you want to end the session?");
        if(exit==true){window.location = '../DASHBOARD/dashboard.php?logout=true';}      
    });
});
</script>
<script src="../DASHBOARD/chatJS.js"></script>
<?php
	if(isset($_GET['logout'])){
	    $logout_message = "<div class='msgln'><span class='left-info'>User <b class='user-name-left'>". $_SESSION['UserFName'] ."</b> has left the chat session.</span><br></div>";
	    file_put_contents("log.html", $logout_message, FILE_APPEND | LOCK_EX);
	     
	    session_destroy();
	    header("Location: ../DASHBOARD/dashboard.php"); //Redirect the user
	}
?>
<?php include'../DASHBOARD/dashboardClosing.php'; ?>