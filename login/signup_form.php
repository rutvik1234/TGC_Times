<?php
session_start();
include "signup.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>SignUp Form</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <img src="../img/logo1.png" alt="Logo" class="logoimg">
	<img class="wave" src="../img/wave.png">
	<div class="container">
		<div class="img">
			<img src="../img/bg2.svg">
		</div>
		<div class="login-content">
			<form action="signup_form.php" method="POST">
				<img src="../img/avatar.svg">
				<h2 class="title">Sign Up</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" name="username">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="password">
            	   </div>
            	</div>
                <div class="input-div pass">
                    <div class="i"> 
                         <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                         <h5>Re-Type Password</h5>
                         <input type="password" class="input" name="repassword">
                 </div>
              </div>
				<a href="login_form.php">Already Have An Account? Log In</a>
            	<input type="submit" class="btn" value="submit" name="submit">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="../js/main.js"></script>
</body>
</html>
