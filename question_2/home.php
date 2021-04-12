<!DOCTYPE html>
<?php
	
	include("session.php");
?>


<html>
<head>
	<title>Home</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

<?php
   include("connection.php");
?>
<nav class="container navbar navbar-default">

	      <ul class="nav navbar-nav">

	      	<?php 
			$user = $_SESSION['email'];

			$get_user = "select * from users where email='$user'"; 
			$run_user = mysqli_query($con,$get_user);
			$row=mysqli_fetch_array($run_user);
					
			
			$user_name = $row['name'];
			$user_pass = $row['password'];
			$user_email = $row['email'];
			?>

	        <li style="margin-top: 15px;"> <h3><?php echo "$user_name" ?></h3> </li>
	       	<li style="position: absolute; right: 50px;"><a href="logout.php"><h3>Logout</h3></a></li>
			

		  </ul>
</nav>

<br><br>

<center><h4>Hello, I am <?php echo"$user_name" ?> </h4></div></center>
<center><h4>Contact with me via <?php echo"$user_email" ?> </h4></div></center>
	
	
</body>
</html>