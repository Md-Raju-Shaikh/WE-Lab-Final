<?php
include("connection.php");

	if(isset($_POST['sign_up'])){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];


		

		$check_email = "select * from users where email='$email'";
		$run_email = mysqli_query($con ,$check_email);

		$check = mysqli_num_rows($run_email);

		if($check == 1){
			echo "<script>alert('Email already exist, Please try using another email')</script>";
			echo "<script>window.open('signup.php', '_self')</script>";
			exit();
		}

		


		$insert = "insert into users (name , email , password)
		values('$name' , '$email' , '$password')";
		
		$query = mysqli_query($con, $insert);

		if($query){
			echo "<script>alert('Account successfully created!')</script>";
			echo "<script>window.open('index.php', '_self')</script>";
		}
		else{
			echo "<script>alert('Registration failed, please try again!')</script>";
			echo "<script>window.open('signup.php', '_self')</script>";
		}
	}
?>