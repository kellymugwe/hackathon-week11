<?php
	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "Users";

$con = mysqli_connect("localhost","root","")
or die('Server Unavailable'); 

mysqli_select_db($con, "Users") or die('Database not found');
session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO `register` (`name` ,`email` ,`password`) VALUES ('".$name."', '".$email."', '".$password."')";
$result = mysqli_query($con, $sql)
or die('Error encountered.');

header('Location:../HotelMng/user.php')
?>