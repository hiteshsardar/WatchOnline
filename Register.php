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
		width: 800px;
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

	/*for Switch*/
	.switch {
  position: relative;
  display: inline-block;
  width: 40px;
  height: 20px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 13px;
  width: 13px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 100px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(18px);
  -ms-transform: translateX(18px);
  transform: translateX(18px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

/*Select Command*/
select {
    width: 355px;
    height: 40px;
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
    <form action="db_Register.php" method="post" autocomplete="off">
		<h2>Register</h2>
		<p class="hint-text">Create your account. It's free and only takes a minute.</p>
        <div class="form-group">
			<div class="row">
				<div class="col-xs-4">
					<input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" required="required">
					<p id="errfname"></p>
				</div>
				<div class="col-xs-4">
					<input type="text" class="form-control" name="mname" id="mname" placeholder="Middle Name" >
				</div>
				<div class="col-xs-4">
					<input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name" required="required">
					<p id="errlname"></p>
				</div>
			</div>        	
        </div>
        <div class="form-group">
			<p style="color: black; font-size: 15px">Admin :
				<label class="switch">
					<input type="checkbox" id="check1">
					<span class="slider round"></span>
				</label></p>
			
        </div>
        <span class="check">
        	<div class="form-group">
        		<div class="row">
					<div class="col-xs-6">
						<input type="text" class="form-control" name="uid" id="uid" placeholder="Unique ID No">
						<span id="checkuid"></span>
					</div>
	            	<div class="col-xs-6">
	            		<input type="text" class="form-control" name="cuid" id="cuid" placeholder="Confirm UID">
	            		<span id="checkcuid"></span>
	            	</div>
	            </div>
	        </div>
	        <div class="form-group">
        	<div class="row">
				<div class="col-xs-6">
					DOB : <input type="date" style="width:320px; height: 40px" name="bday">
				</div>
				<div class="col-xs-6">
					<select>
					  <option value="Country">Country</option>
					  <option value="A">A</option>
					  <option value="B">B</option>
					  <option value="C">C</option>
					  <option value="D">D</option>
					  <option value="E">E</option>
					  <option value="F">F</option>
					</select>
		  		</div>
	  		</div>
		</div>
        </span>
        <div class="form-group">
        	<div class="row">
				<div class="col-xs-6">
					<input type="text" class="form-control" name="phone" id="phone" placeholder="Phone No" required="required">
					<p id="errphone"></p>
				</div>
				<div class="col-xs-6">
					<select name="gender">
					  <option value="Gender">Gender</option>
					  <option value="Male">Male</option>
					  <option value="Female">Female</option>
					</select>
		  		</div>
	  		</div>
		</div>
        <div class="form-group">
        	<div class="row">
				<div class="col-xs-6">
					<input type="email" class="form-control" name="email" id="email" placeholder="Email" required="required">
				</div>
				<div class="col-xs-6">
					<input type="email" class="form-control" name="cemail" id="cemail" placeholder="Confirm Email"required="required">
					<p id="errcemail"></p>
				</div>
				
			</div> 
		</div>
		<div class="form-group">
        	<div class="row">
				<div class="col-xs-6">
					<input type="password" class="form-control" name="pass" id="pass" placeholder="Password" required="required">
					<p id="errpass"></p>
				</div>
				<div class="col-xs-6">
					<input type="password" class="form-control" name="cpass" id="cpass" placeholder="Confirm Password" required="required">
					<p id="errcpass"></p>
				</div>
				
			</div> 
		</div>  
        <div class="form-group">
			<label class="checkbox-inline">
				<input type="checkbox"  class="check2" required="required"> I accept the <a id="termsof" href="#">Terms of Use</a> &amp; <a id="policy" href="#">Privacy Policy</a>
			</label>
		</div>
		<div class="form-group" id="autohide">
            <p id="terms"><b><u>Terms And Conditions</u></b><br>
            	1.doiufg<br>
            	2.sjldfks<br>
            	3.sdjsdfg<br></p>
            <p id="policies"><b><u>Privacy And Policy</u></b><br>
            	1.doiufg<br>
            	2.sjldfks<br>
            	3.sdjsdfg<br></p>
        </div>
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" id = "btn">Register Now</button>
        </div>
    </form>
	<div class="text-center">Already have an account? <a href="Login.php">Sign in</a></div>
</div>

<script>
    $(document).ready(function(){
        $('.check').hide();
        $('#terms').hide();
        $('#policies').hide();

        var user_err = true;
        var email_err = true;
        var pass_err = true;
        var pahone_err = true;
        var cbox_err = false;

        $('#check1').click(function(){
            if($(this).prop("checked") == true){
                $('.check').show();
            }
            else if($(this).prop("checked") == false){
                $('.check').hide();
            }
        });

        $('#termsof').click(function(){
        	$('#terms').toggle();
        });
        $('#policy').click(function(){
        	$('#policies').toggle();
        });

        $('#fname').keypress(function(key) {
        if((key.charCode < 97 || key.charCode > 122) && (key.charCode < 65 || key.charCode > 90) && (key.charCode != 45)) 
        	return false;
		});

		$('#mname').keypress(function(key) {
        if((key.charCode < 97 || key.charCode > 122) && (key.charCode < 65 || key.charCode > 90) && (key.charCode != 45)) 
        	return false;
		});

		$('#lname').keypress(function(key) {
        if((key.charCode < 97 || key.charCode > 122) && (key.charCode < 65 || key.charCode > 90) && (key.charCode != 45)) 
        	return false;
		});

		$('#phone').keypress(function(key) {
        if(key.charCode < 48 || key.charCode > 57) 
        	return false;
		});

		//*****User First Name Validation*****

		$('#fname').keyup(function(){
			fname_check();
		});
		function fname_check(){
			var user_var = $('#fname').val();
			if (user_var.length == '') {
				$('#errfname').show();
				$('#errfname').html("** First willnot be null");
				$('#errfname').focus();
				$('#errfname').css("color","red");
				user_err = false;
				return false;
			}else{
				$('#errfname').hide();
			}

			if ((user_var.length < 3) || (user_var.length > 12)) {
				$('#errfname').show();
				$('#errfname').html("**  First name must be between 3 and 12");
				$('#errfname').focus();
				$('#errfname').css("color","red");
				user_err = false;
				return false;
			}else{
				$('#errfname').hide();
			}
		}

		//*****User Last Name Validation*****

		$('#lname').keyup(function(){
			lname_check();
		});
		function lname_check(){
			var user_var = $('#lname').val();

			if (user_var.length == '') {
				$('#errlname').show();
				$('#errlname').html("** First name willnot be null");
				$('#errlname').focus();
				$('#errlname').css("color","red");
				user_err = false;
				return false;
			}else{
				$('#errlname').hide();
			}

			if ((user_var.length < 3) || (user_var.length > 12)) {
				$('#errlname').show();
				$('#errlname').html("**  First name must be between 3 and 12");
				$('#errlname').focus();
				$('#errlname').css("color","red");
				user_err = false;
				return false;
			}else{
				$('#errlname').hide();
			}
		}


		//*****Phone Number Validation*****

		$('#phone').keyup(function(){
			phone_check();
		});
		function phone_check(){
			var phone_var = $('#phone').val();

			if (phone_var.length == '') {
				$('#errphone').show();
				$('#errphone').html("** Phone Number willnot be null");
				$('#errphone').focus();
				$('#errphone').css("color","red");
				phone_var = false;
				return false;
			}else{
				$('#errphone').hide();
			}

			if ((phone_var.length < 4) || (phone_var.length > 12)) {
				$('#errphone').show();
				$('#errphone').html("**  Phone Number should be between 4 and 12");
				$('#errphone').focus();
				$('#errphone').css("color","red");
				phone_var = false;
				return false;
			}else{
				$('#errphone').hide();
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

		$('#cemail').keyup(function(){
			cemail_check();
		});
		function cemail_check(){
			var email_var = $('#email').val();
			var cemail_var = $('#cemail').val();

			if ((email_var != cemail_var) || cemail_var == '') {
				$('#errcemail').show();
				$('#errcemail').html("**  Email and Confirm Email Should be same!");
				$('#errcemail').focus();
				$('#errcemail').css("color","red");
				email_err = false;
				return false;
			}else{
				$('#errcemail').hide();
			}

			if (cemail_var == '') {
				email_err = false;
				return false;
			}

		}


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

		$('#cpass').keyup(function(){
			cpass_check();
		});
		function cpass_check(){
			var cpass_var = $('#cpass').val();
			var pass_var = $('#pass').val();

			if (cpass_var.length == '') {
				$('#errcpass').show();
				$('#errcpass').html("** password willnot be null");
				$('#errcpass').focus();
				$('#errcpass').css("color","red");
				pass_err = false;
				return false;
			}else{
				$('#errcpass').hide();
			}

			if ((cpass_var.length < 6) || (cpass_var.length > 20)) {
				$('#errcpass').show();
				$('#errcpass').html("**  Password must be between 6 and 20");
				$('#errcpass').focus();
				$('#errcpass').css("color","red");
				pass_err = false;
				return false;
			}else{
				$('#errcpass').hide();
			}
			if (cpass_var != pass_var) {
				$('#errcpass').show();
				$('#errcpass').html("**  Password are not Matched!");
				$('#errcpass').focus();
				$('#errcpass').css("color","red");
				pass_err = false;
				return false;
			}else{
				$('#errcpass').hide();
			}
		}

	// ***** Privacy ploicy Check *****

		$('.check2').click(function(){
			cbox_check();
		});
		function cbox_check(){
            if($('.check2').prop('checked') == true){
            	cbox_err = true;			
				return true;
            }
        }


        // ***** Button Click Function *****
		$('#btn').click(function(){
			user_err = true;
        	email_err = true;
        	pass_err = true;
        	phone_err = true;
        	cbox_err = false;

        	fname_check();
        	lname_check();
        	pass_check();
        	cpass_check();
        	cemail_check();
        	email_check();
        	phone_check();
        	cbox_check();
        	//alert(cbox_err);
        	if((user_err == true) && (email_err == true) && (pass_err == true) && (phone_err == true) && (cbox_err == true)){
				swal("Register Successful!", "Now You Can redirect to Homepage!", "success");
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

