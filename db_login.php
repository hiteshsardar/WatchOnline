<?php
/* Database connection start */
	include_once("db_connect.php");
	$error = false;

#fetching the data
$email=$_POST['email'];
$pass=$_POST['pass'];


#checking for existing record 
$sql = "SELECT email,pass from users where email = '$email' and pass='" . md5($password) . "' ";
$result = $conn->query($sql);
if($result->num_rows > 0)
{ 
    header("Location:Home.php");
    exit;
}
else
{
	echo "email id or password is wrong ";
}

?>