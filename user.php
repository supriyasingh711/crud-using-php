<?php
include 'connect.php';
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $password=$_POST['password'];
  $sql="insert into `crud`(name,email,phone,password) values ('$name','$email','$phone','$password')";
  $result=mysqli_query($con,$sql);
  if($result){
    echo "data inserted ";
  }else{
    die(mysqli_error($con));
  }
}



?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    <title>Crud Operation</title>
  </head>
  <body>
  <div class="container my-5">

  <form method="post">


    
  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control" name="name"  autocomplete="off"  placeholder="Enter your name">

  </div>
  <div class="form-group">
    <label >Email</label>
    <input type="email" class="form-control" name="email"  placeholder="Enter your email">

  </div>
  <div class="form-group">
    <label >Phone number</label>
    <input type="text" class="form-control" name="phone"  placeholder="Enter your phone number">

  </div>
  <div class="form-group">
    <label >Password</label>
    <input type="text" class="form-control" name="password"  placeholder="Enter your password">

  </div>
  
  <button type="submit"  name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
  </body>
</html>