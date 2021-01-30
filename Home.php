<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="./files/jquery-3.4.1.min.js"></script>
	<title></title>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#">
			<img class="brand-image" alt="website Logo" src = "./files/img/img.jpg" height="40" width="40">
		</a>
  		<a class="navbar-brand" href="#">TechTube</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>

  		<div class="collapse navbar-collapse" id="navbarSupportedContent">
    		<ul class="navbar-nav ml-auto">
      			<li class="nav-item active">
        			<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      			</li>
      			<li class="nav-item active">
        			<a class="nav-link" href="#">Link</a>
      			</li>
      			<li class="nav-item dropdown">
        			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>

        			<div class="dropdown-menu">
  						  <a class="dropdown-item" href="#">Action</a>
  						  <a class="dropdown-item" href="#">Another action</a>
					   </div>
      			</li>
      			<li class="nav-item active">
        			<a class="nav-link" href="#">Disabled</a>
      			</li>
            <li class="nav-item active" id="check">
              <a class="nav-link" href="#">Upload</a>
            </li>
    		</ul>
    		<form class="form-inline my-2 my-lg-0">
	      		<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      		<button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="btn">Search</button>
    		</form>
  		</div>
	</nav>

	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  		<div class="carousel-inner">
    		<div class="carousel-item active">
      			<img class="d-block w-100" src="./files/img/img1.jpg" alt="First slide">
    		</div>
    		<div class="carousel-item">
      			<img class="d-block w-100" src="./files/img/img2.jpg" alt="Second slide">
    		</div>
    		<div class="carousel-item">
      			<img class="d-block w-100" src="./files/img/img3.jpg" alt="Third slide">
    		</div>
  		</div>
  		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    		<span class="sr-only">Previous</span>
  		</a>
  		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    		<span class="carousel-control-next-icon" aria-hidden="true"></span>
    		<span class="sr-only">Next</span>
  		</a>
	</div><br>

  <script>
    $(document).ready(function(){
        $('#check').hide();
        $('#btn').click(function(){
          $('#check').show();
        });
    });

</script>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</body>
</html>

<?php
  /* Database connection start */
  include_once("db_connect.php");
  $error = false;

  #connection checking
  if ($conn->connect_error) {
    die("Connection failed :".$conn->connect_error);
  }else{
  
    $stmt = "SELECT * FROM videos";
    $run = mysqli_query($conn,$stmt);
    
    while($row = mysqli_fetch_assoc($run)){
      $title1 = $row['title'];
      $video1 = $row['video_loc'];
      $poster1 = $row['poster_loc'];

      if($row = mysqli_fetch_assoc($run)){
        $title2 = $row['title'];
        $video2 = $row['video_loc'];
        $poster2 = $row['poster_loc'];
      }
      if($row = mysqli_fetch_assoc($run)){
        $title3 = $row['title'];
        $video3 = $row['video_loc'];
        $poster3 = $row['poster_loc'];
      }
      if($row = mysqli_fetch_assoc($run)){
        $title4 = $row['title'];
        $video4 = $row['video_loc'];
        $poster4 = $row['poster_loc'];
      }
      echo"<div class='row'>
            <div class='col-sm-6 col-md-3'>
              <div class='latest-movie'>
                <video width='300px' controls poster='img_upload/".$poster1."'>
                  <source src='vid_upload/".$video1."' type='video/webm'>
                </video>
              </div>
            </div>
            <div class='col-sm-6 col-md-3'>
              <div class='latest-movie'>
                <video width='300px' controls poster='img_upload/".$poster2."'>
                  <source src='vid_upload/".$video2."' type='video/webm'>
                </video>
              </div>
            </div>
            <div class='col-sm-6 col-md-3'>
              <div class='latest-movie'>
                <video width='300px' controls poster='img_upload/".$poster3."'>
                  <source src='vid_upload/".$video3."' type='video/webm'>
                </video>
              </div>
            </div>
            <div class='col-sm-6 col-md-3'>
              <div class='latest-movie'>
                <video width='300px' controls poster='img_upload/".$poster4."'>
                  <source src='vid_upload/".$video4."' type='video/webm'>
                </video>
              </div>
            </div><br><br>";
    }
    
  } 
?>