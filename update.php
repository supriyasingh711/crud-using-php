<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$phone=$row['phone'];
$password=$row['password'];


if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $password=$_POST['password'];
  $sql="update `crud` set id=$id,name='$name',email='$email',phone='$phone',password='$password' where id=$id";
  $result=mysqli_query($con,$sql);
  if($result){
    // echo "updated successfully ";
            header('location:display.php');
        
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
    <input type="text" class="form-control" name="name" value="<?php
    echo $name;
    ?>"  autocomplete="off"  placeholder="Enter your name">

  </div>
  <div class="form-group">
    <label >Email</label>
    <input type="email" class="form-control" name="email" value="<?php
    echo $email;
    ?>" placeholder="Enter your email">

  </div>
  <div class="form-group">
    <label >Phone number</label>
    <input type="text" class="form-control" name="phone" value="<?php
    echo $phone;
    ?>"  placeholder="Enter your phone number">

  </div>
  <div class="form-group">
    <label >Password</label>
    <input type="text" class="form-control" name="password" 
    value="<?php
    echo $password;
    ?>"  placeholder="Enter your password">

  </div>
  
  <button type="submit"  name="submit" class="btn btn-primary">Update</button>
</form>
</div>
  </body>
</html>