<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="./files/jquery-3.4.1.min.js"></script>
<style type="text/css">

  body{
    color: #fff;
    background: #63738a;
    font-family: 'Roboto', sans-serif;
  }
    .form-control{
    height: 40px;
    box-shadow: none;
    color: #969fa4;
  }
  .form-control:focus{
    border-color: #5cb85c;
  }
    .form-control, .btn{        
        border-radius: 3px;
    }
  .signup-form{
    width: 600px;
    margin: 0 auto;
    padding: 30px 0;
  }
  .signup-form h2{
    color: #636363;
        margin: 0 0 15px;
    position: relative;
    text-align: center;
    }
  .signup-form h2:before, .signup-form h2:after{
    content: "";
    height: 2px;
    width: 30%;
    background: #d4d4d4;
    position: absolute;
    top: 50%;
    z-index: 2;
  } 
  .signup-form h2:before{
    left: 0;
  }
  .signup-form h2:after{
    right: 0;
  }
    .signup-form .hint-text{
    color: #999;
    margin-bottom: 30px;
    text-align: center;
  }
    .signup-form form{
    color: #999;
    border-radius: 3px;
      margin-bottom: 15px;
        background: #f2f3f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
  .signup-form .form-group{
    margin-bottom: 20px;
  }
  .signup-form input[type="checkbox"]{
    margin-top: 3px;
  }
  .signup-form .btn{        
        font-size: 16px;
        font-weight: bold;    
    min-width: 140px;
        outline: none !important;
    }
  .signup-form .row div:first-child{
    padding-right: 10px;
  }
  .signup-form .row div:last-child{
    padding-left: 10px;
  }     
    .signup-form a{
    color: #fff;
    text-decoration: underline;
  }
    .signup-form a:hover{
    text-decoration: none;
  }
  .signup-form form a{
    color: #5cb85c;
    text-decoration: none;
  } 
  .signup-form form a:hover{
    text-decoration: underline;
  }  

/* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 650px) {
  .col {
    width: 100%;
    margin-top: 0;
  }
  /* hide the vertical line */
  .vl {
    display: none;
  }
  /* show the hidden text on small screens */
  .hide-md-lg {
    display: block;
    text-align: center;
  }
}
</style>
</head>
<body>
<div class="signup-form">
    <form action="db_login.php" method="post" autocomplete="off">
      <h2>Log In</h2><br>
    
      <div class="form-group">
        <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="required">
        <span id="erremail"></span>
      </div>

      <div class="form-group">
        <input type="password" class="form-control" name="pass" id="pass" placeholder="Password" required="required">
        <span id="errpass"></span>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-success btn-lg btn-block" id="btn">Log In</button>
      </div>
    </form>
  <div class="text-center">Already have an account? <a href="Register.php">Sign up</a>&nbsp&nbsp OR &nbsp&nbsp<a href="Forgotpass.php">Forgot Password</a></div>
</div>

<script>
  $(document).ready(function(){
    var pass_err = true;
    var email_err = true;

    //*****Password Validation*****

    $('#pass').keyup(function(){
      pass_check();
    });
    
    function pass_check(){
      var pass_var = $('#pass').val();

      if (pass_var.length == '') {
        $('#errpass').show();
        $('#errpass').html("** password willnot be null");
        $('#errpass').focus();
        $('#errpass').css("color","red");
        pass_err = false;
        return false;
      }else{
        $('#errpass').hide();
      }

      if ((pass_var.length < 6) || (pass_var.length > 20)) {
        $('#errpass').show();
        $('#errpass').html("**  Password must be between 6 and 20");
        $('#errpass').focus();
        $('#errpass').css("color","red");
        pass_err = false;
        return false;
      }else{
        $('#errpass').hide();
      }
    }

    //*****Mail ID Validation*****
    
    $('#email').keyup(function(){
      email_check();
    });

    function email_check(){
      var email_var = $('#email').val();
      if (email_var == '') {
        email_err = false;
        return false;
      }
    }

    // ***** Button Click Function *****
    $('#btn').click(function(){
      email_err = true;
      pass_err = true;
        
      pass_check();
      email_check();
        
      //alert(cbox_err);
      if((email_err == true) && (pass_err == true)){
        return true;
      }else{
        swal("Please Fill All Fields!", "Try Again!", "error");
        return false;
      }
          
    });

  });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</body>
</html>                          