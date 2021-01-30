<?php
/* Database connection start */
	include_once("db_connect.php");
	$error = false;

#fetching the data
$name=$_FILES['file'][''];
$pass=$_POST['pass'];


#checking for existing record 
$sql = "INSERT INTO videos(title, subtitle, duration, rating, size, poster_loc, video_loc) VALUES('$fname','$mname','$lname','$phone','$gender','$email','" . md5($password) . "',1)";
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