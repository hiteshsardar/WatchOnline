<?php
	/* Database connection start */
	include_once("db_connect.php");
	$error = false;
	
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$phone = $_POST['phone'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];


	if ($conn->connect_error){
		die("Connect failed: ".$conn->connect_error);
	}else{
		$stmt = "INSERT INTO users(fname, mname, lname, phone, gender,email,pass, status) VALUES('$fname','$mname','$lname','$phone','$gender','$email','" . md5($password) . "',1)";
		
		$run = mysqli_query($conn,$stmt);

		if ($run == true) {
			# code...
			header("Location:Home.php");
    		exit;
			
		}else {
			echo "Error in registering...Please try again later!";
		}
	}
	
?>                          