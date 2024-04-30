<?php
	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "hotel_users";

	
	$con = mysqli_connect("localhost","root","")
or die('Server Unavailable'); 

	mysqli_select_db($con, "Users") or die('Database not found');

	$name = mysqli_real_escape_string($con, $_POST['username']);
	$password = mysqli_real_escape_string($con, $_POST['password']);

	$dbcon = mysqli_connect("localhost", "root", "", "hotel_users");

	$query = "SELECT *FROM register WHERE name = '$username' and password = '$password'";

	$result = mysqli_query($con, $query);

	if(mysqli_num_rows($result) == 1) {
		session_start();
		$_SESSION['register'] = 'true';
		header('Location:../HotelMng/room.php');
	}
	else {
		$_SESSION['register'] = 'false';
		echo 'Wrong username or password';
	}
	

?>