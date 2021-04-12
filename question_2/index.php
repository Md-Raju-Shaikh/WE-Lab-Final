<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

 	<!-- CSS only -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	
</head>

<style>
	
	
	#signup{
		width: 60%;
		border-radius: 30px;
	}

	#signup:hover{
		background-color: #72D563;
	}
	#login{
		width: 60%;
		border: 1px solid #1da1f2;
		border-radius: 30px;
	}

	#login:hover{
		width: 60%;
		background-color: #77A7FF;
		border: 2px solid #1da1f2;
		border-radius: 30px;
	}
	

</style>

<body>
	

	<div class="container-fluid">


		<div class="col-sm-12">
				<div class="border border-5 border-mute px-5 py-4 m-auto" style="width: 50%;">
					<div>
						<h3 class="text-center mb-5" style=""><strong>Login System Using Session</strong></h3>
					</div>

					<div class="">
						<form action="" method="post">
							<input type="email" name="email" placeholder="Email" class="form-control input-md">
							<br>

							<div class="">
								<input id="password-field" type="password" name="password" placeholder="password" class="form-control input-md">

							</div>


							<br><br><br>

							<center><button id="login" class="btn btn-primary btn-lg" name="login">Login</button></center>


							<center>
						       <button id="signup" class="btn btn-success btn-lg mt-3 text-center"name="signup">Sign up</button>
					        </center>

							

							<?php
							
						       if(isset($_POST['signup'])){
							      echo "<script>window.open('signup.php','_self')</script>";
						       }
					        ?>

					        <?php include("login.php"); ?>

						</form>
					</div>
				</div>
			</div>

	</div>
	
</body>
</html>