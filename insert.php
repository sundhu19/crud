<?php

include 'conn.php';

if(isset($_POST['done'])){

  $username = $_POST['username'];
  $last_name = $_POST['last_name'];
 $password = $_POST['password'];
 $email = $_POST['email'];
 $q = " INSERT INTO `cruddtable`(`username`, `last_name`,`password`,`email`) VALUES ( '$username','$last_name' ,'$password', '$email' )";

  $query = mysqli_query($con,$q);
}
?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Insert Operation </h1>
 </div><br>

  <label> Username: </label>
 <input type="text" name="username" class="form-control"> <br>

<label> last_name: </label>
 <input type="text" name="last_name" class="form-control"> <br>

  <label> Password: </label>
 <input type="text" name="password" class="form-control"> <br>


 <label> email: </label>
 <input type ="text" name= "text" class="form-control"> <br>

 <label> 

  <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

  </div>
 </form>
 </div>
</body>
</html>