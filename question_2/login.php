<?php
session_start();

include("connection.php");

	if (isset($_POST['login'])) {

		$user_email = $_POST['email'];
		$user_password =  $_POST['password'];

		$select_user = "select * from users where email='$user_email' AND password='$user_password'";
		
		$query= mysqli_query($con, $select_user);
		$check_user = mysqli_num_rows($query);

		if($check_user == 1){
			$_SESSION['email'] = $user_email;

			echo "<script>window.open('home.php', '_self')</script>";

		}else{
			echo"<script>alert('Your Email or Password is incorrect')</script>";
		}
	}
?>