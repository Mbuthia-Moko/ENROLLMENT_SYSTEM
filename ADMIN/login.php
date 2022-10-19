<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Login | Enrollment System</title>
 	

<?php include('./header.php'); ?>
<?php 
session_start();
if(isset($_SESSION['login_id']))
header("location:index.php?page=home");
?>

</head>
<style>
	#login-form {
	width: 75%;
	border: 3px solid black;
	font-weight: bold;
	margin-top: 150px;
}
.view{
	padding-top:50px;
	padding-bottom: 150px;
}
.control-label{
	color: #007BFF;
}
h3{
	color: #007BFF;
}
</style>

<body>


  <div class="view" style="background-image:linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)) , url('background3.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
	
  <div class="col-6 offset-md-4 justify-content-center">
<form class="row g-3" id="login-form" >
  <a href="index.php"><button type="button" class="btn-close" aria-label="Close"></button></a>
  <h3 style="text-align: center;">SIGN IN</h3>
  			<div class="mb-3">

  							<label for="username" class="control-label">Username</label>
  							<input type="text" id="username" name="username" class="form-control">
  					<br>
  					
  							<label for="password" class="control-label">Password</label>
  							<input type="password" id="password" name="password" class="form-control">
  						<br>

  						<center><button class="btn-sm btn-block btn-wave col-md-4 btn-primary">Login</button></center>
  						<br>
  					</div>
  					</form>
  				</div>
  			</div>
  		</div>
  	

   

  


</body>
<script >
	$('#login-form').submit(function(e){
		e.preventDefault()
		$('#login-form button[type="button"]').attr('disabled',true).html('Logging in...');
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'ajax.php?action=login',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
		$('#login-form button[type="button"]').removeAttr('disabled').html('Login');

			},
			success:function(resp){
				if(resp == 1){
					location.reload('index.php?page=home');
				}else{
					$('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
					$('#login-form button[type="button"]').removeAttr('disabled').html('Login');
				}
			}
		})
	})
</script>	
</html>