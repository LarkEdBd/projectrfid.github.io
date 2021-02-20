<?php
/* Database connection settings */
    date_default_timezone_set('Asia/Dhaka');
	$servername = "sql312.unaux.com";
    $username = "unaux_27973499";		//put your phpmyadmin username.(default is "root")
    $password = "u6ud9w6lw70";			//if your phpmyadmin has a password put it here.(default is "root")
    $dbname = "unaux_27973499_rfidattendance";
    
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }
?>