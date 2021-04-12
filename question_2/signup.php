<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSS only -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


</head>
<style>
	body{
		overflow-x: hidden;
	}
	.main-content{
		width: 50%;
		margin: 10px auto;
		background-color: #fff;
		border: 2px solid #e6e6e6;
		padding: 40px 50px;
	}
	.header{
		border: 0px solid #000;
		margin-bottom: 5px;
	}
	
	#signup{
		width: 80%;
		border-radius: 30px;
	}

</style>
<body>
<div class="row">
	
</div>
<div class="row">
	<div class="col-sm-12">
		<div class="main-content">
	
			<div class="">
				<form action="" method="post">

					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
						<input type="text" class="form-control" placeholder="Enter Full Name" name="name" required="required">
					</div><br>

					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input id="email" type="email" class="form-control" placeholder="Email" name="email" required="required">
					</div><br>

					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input id="password" type="password" class="form-control" placeholder="Password" name="password" required="required">
					</div><br>

					

					<a style="text-decoration: none; float: right; color: #187FAB;" data-toggle="tooltip" title="Signin" href="index.php">Already have an account?</a><br><br>

					<center><button id="signup" class="btn btn-primary btn-lg" name="sign_up">Signup</button></center>

					<?php include("insert_user.php"); ?>

				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>