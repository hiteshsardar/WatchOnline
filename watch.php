<?php

	/* Database connection start */
  	include_once("db_connect.php");
  	$error = false;
  	if ($conn->connect_error) {
	    die("Connection failed :".$conn->connect_error);   
	  }else{
	  	if(isset($_GET['id'])){

			$title = $_GET['id'];
			$q = "SELECT video_loc,poster_loc FROM videos where title = '$title'";
		    $run = mysqli_query($conn,$q);
		
		    if($run == true){
		    	while($row = mysqli_fetch_assoc($run)){
			      $video = $row['video_loc'];
			      $poster = $row['poster_loc'];
			      echo "You are watching ".$title."<br>";
			      echo "<video width='800px' controls poster='img_upload/".$poster."'>
		                  <source src='vid_upload/".$video."' type='video/webm'>
		                  <a href = 'watch.php?id=$title'>$video</a><br>
		                </video>";
			    }  
		    }else{
		    	echo "ERROR!";
		    }
		    
		}else{
			echo "ERROR!";
		}
	  }


?>