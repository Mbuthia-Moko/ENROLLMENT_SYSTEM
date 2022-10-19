<?php
$conn= new mysqli("localhost","root","","enrollment_db");



// $sql = "CREATE DATABASE food_web";

// if ($conn->query($sql) === TRUE) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . $conn->error;
// }

if ($conn->connect_error) {
	die("Not connected".$conn->connect_error);
}



 // $sql = "CREATE TABLE Customers (
 // id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 // firstname VARCHAR(30) NOT NULL,
 // lastname VARCHAR(30) NOT NULL,
 // email VARCHAR(50) NOT NULL,
 // tel INT(10) NOT NULL,
 // address VARCHAR(10) NOT NULL,
 // userpassword VARCHAR(8) NOT NULL
 // )";

 // if ($conn->query($sql) === TRUE) {
 //  echo "Table Customers created successfully";
 // } else {
 //   echo "Error creating table: " . $conn->error;
 // }




?>