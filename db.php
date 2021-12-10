<?php
$servername = 'localhost';
$username = "root";
$password = "";
$dbb = "tgctimes";

$con = mysqli_connect($servername,$username,$password,$dbb);

if(!$con){
	die("unable to connect to the database");
}
?>