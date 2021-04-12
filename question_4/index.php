<?php

include ("connection.php");

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >

    <title>Registration System</title>
  </head>
  <body>
      <div class="row mt-5">
        
        <div class="col-md-3"></div>

        <div class="col-md-6">
          <center><h3 class="mb-4 text-info">ICPC Registration</h3> </center>
          
          <form method="POST">
            <div class="form-group">
              <label for="inputAddress">Full Name</label>
              <input type="text" class="form-control" name="reg_name" id="inputAddress" placeholder="Name">
            </div>
            <div class="form-group ">
              <label for="inputEmail4">Email</label>
              <input type="email" class="form-control" name="reg_em" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="inputPassword4">Password</label>
              <input type="password" class="form-control" name="reg_pass" id="inputPassword4" placeholder="Password">
            </div>
            <div class="form-group">
              <label for="inputAddress">Phone Number</label>
              <input type="number" class="form-control" name="reg_phn" id="inputAddress" placeholder="Phone">
            </div>
            <input type="submit" name="register" value="Register" class="btn btn-primary">

            <input type="submit" name="view_delete" value="View Participents" class="btn btn-success" style="position: absolute; right: 15px;">
          </form>
        </div>

        <div class="col-md-3">  </div>

      </div>
          

<?php

if (isset($_POST['register'])) {
    $reg_name   = $_POST['reg_name']; 
    $reg_em     = $_POST['reg_em']; 
    $reg_pass   = $_POST['reg_pass']; 
    $reg_phn    = $_POST['reg_phn'];

    $query = "INSERT INTO users (name, email, pass, phone) VALUES ( '$reg_name', '$reg_em', '$reg_pass', '$reg_phn' )";

      $add_new_user = mysqli_query($connection, $query);

      if ( !$add_new_user ){
        die("Query Failed ". mysqli_error($connection));
      }
      else{
        header("Location: index.php");
      }
}

if (isset($_POST['view_delete'])) {
    header("Location: view_delete_data.php");
}

?>





    
  </body>
</html>