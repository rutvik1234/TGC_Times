
<?php
include '../db.php';
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM user_login WHERE username = '$username' AND password = '$password'";
	$query_run = mysqli_query($con,$sql);
	$count = mysqli_num_rows($query_run);

	if ($count == 1) {
		echo "Login Success!";
		header('location : index.php');
	}
	else{
		echo "<script>alert('User not valid');</script>";
	}
}
?>