<?php
include '../db.php';
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$repassword = $_POST['repassword'];

	if(empty($username) || empty($password) || empty($repassword)){
		echo "<script>alert('Please fill all field');</script>";
		
	}

	if (strlen($password) < 9) {
		echo " <script>alert('Password must be 9 char');</script>";
		exit();
	}

	if (strlen($repassword) < 9) {
		echo " <script>alert('RePassword must be 9 char');</script>";
		exit();
	}

	if ($password != $repassword) {
		echo "<script> alert('Password and re password does not match');</script>";
		exit();
	}

	$sql = "SELECT uid FROM `user_login` WHERE username = '$username' LIMIT 1";
	$run_query = mysqli_query($con,$sql);
	$count = mysqli_num_rows($run_query);

	if ($count > 0) {
		echo " <script>alert('User already reister login!');</script>";
	}
	else{
		$sql = "INSERT INTO user_login (username, password, repassword) VALUES ('$username','$password','$repassword')";
		$run_query = mysqli_query($con,$sql);
		if ($run_query) {
			// header('location : ../index.php');
			echo "hiiiiiiiii";
		}
		else{
			echo "<script>alert('cannot able to register');</script>";
		}
	}

	
}
?>