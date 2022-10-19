<?php

//For tips and tricks, see '../PHP/phpTipsAndTricks.php'
//NOTE: to specify port number, see 'dbPortInfo' method.



function connect(){
	$dbserver = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "enrollment_db";
	
	$link=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname) or die("Could not connect".mysqli_connect_error());
	return ($link);
}

function setData($sql){
	$link=connect();
	if (mysqli_query($link,$sql)) {
	/*	echo("<script>
			alert('Data inserted successfully.');
			</script>");*/
		return true;
	} else {
		//echo("Error".mysqli_error($link));
		echo("<script>
			alert('Error '".mysqli_error($link).");
			</script>");
		return false;
	}
}

function setData2($sql){
	$link=connect();
	if (mysqli_multi_query($link,$sql)) {
	/*	echo("<script>
			alert('Data inserted successfully.');
			</script>");*/
		return true;
	} else {
		//echo("Error".mysqli_error($link));
		echo("<script>
			alert('Error '".mysqli_error($link).");
			</script>");
		return false;
	}
}

function getData($sql){
	$link=connect();
	$result=mysqli_query($link,$sql);
	$rows = array();
	while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
		$rows=$row;
		return $rows;
	}
	#return $rows;
}

function getDataRows($sql){
	$link=connect();
	$result=mysqli_query($link,$sql);
	while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
		$rows[]=$row;
	}
	return $rows;
}

function destroyCookie($cookieName){
	$expired = time() -1;
	setcookie($cookieName, "", $expired);
}

function verifyUser($varEmail, $varPassword){
	$dbserver = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "enrollment_db";
	
	$conn = new mysqli($dbserver,$dbuser,$dbpass,$dbname);

	$sql="SELECT * FROM applicant_details where email = '".$varEmail."'";
	$result= $conn->query($sql);
	if (mysqli_num_rows($result)==0) {
		
			echo '<script>alert("User not found! Try logging in again.");
			window.location.href = "../login.php";</script>';
		
	} else{
		while($res = mysqli_fetch_array($result)) {
			$hashedPass = $res['password'];
			$verify = password_verify($varPassword, $hashedPass);
		  	if ($verify) {
				$_SESSION['User']=$res['email'];
				$_SESSION['UserID']=$res['applicant_id'];
				$_SESSION['UserFName']=$res['firstname'];

				$varUID = $res['applicant_id'];
				$logBool = 'true';
				$sql_update = "UPDATE applicant_details SET logStatus = '$logBool' WHERE applicant_id=$varUID" ;
			  setData($sql_update);

				echo("<script>
					window.location.href='../DASHBOARD/dashboard.php';
					alert('Login Successful');
					</script>");
		  	} else {
		  		echo("<script>
					window.location.href='../login.php';
					alert('Please check your info and try again.');
					</script>");
		  	}
		}
	}
}
 ?>
