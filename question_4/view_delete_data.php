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

    <title>Login System!</title>
  </head>
  <body>
    <section class="container text-center">
      <div class="jumbotron">
        <h1 class="display-4">All Participants Information</h1>
        <hr class="my-4">
        <p>Hosting By <strong>Md. Raju Shaikh</strong>. ID:181-15-1918. Section:PC-A</p>
      </div>
    </section>
    <section class="container p-5 bg-light">
      <div class="row">
        <div class="col-md-8">
          <h3 class="mb-4 text-info">Participants List</h3>
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php  
                $query = "SELECT * FROM users";
                $select_all_users = mysqli_query($connection, $query);
                $i = 0;
                while ( $row = mysqli_fetch_assoc($select_all_users) )
                {
                  $id      = $row['id'];
                  $name    = $row['name'];
                  $email   = $row['email'];
                  $phone   = $row['phone'];
                  $i++;
                  ?>

              
              <tr>
                <th scope="row"><?php echo $i; ?></th>
                <td><?php echo $name; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $phone; ?></td>
                <td><a href="view_delete_data.php?del=<?php echo $id; ?>" class="btn btn-danger">Delete</a></td>
              </tr>
              <?php }  ?>
            </tbody>
          </table>

          <form method="POST">
            <input type="submit" name="back" value="Back" class="btn btn-primary">
          </form>
        </div>
      </div>
    </section>

    

<?php


if ( isset($_GET['del']) ){
    $del_id   = $_GET['del'];
    $query = "DELETE FROM users WHERE id = '$del_id'";

      $delete_cat = mysqli_query($connection, $query);

      if ( !$delete_cat ){
      die("Query Failed " . mysqli_error($connection));
    }
    else{
      header("Location: index.php");
    }
}

if (isset($_POST['back'])) {
    header("Location: index.php");
}
  
?>

    
 </body>
</html>