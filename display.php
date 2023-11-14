<?php
include 'connect.php';



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    
    <title>Crud Opeartions</title>
</head>
<body>
<div class="container">
    <button class="btn btn-primary my-5">
        <a href="user.php" class="text-light">Add User</a>
    </button>
        
        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Sl. no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>

    </tr>
  </thead>
  <tbody>
    <?php
    $sql="select * from `crud`";
    $r=mysqli_query($con,$sql);
    if($r){
        while($row=mysqli_fetch_assoc($r)){
            $id=$row['id'];
            $name=$row['name'];
            $email=$row['email'];
            $phone=$row['phone'];
            $password=$row['password'];
            echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$phone.'</td>
            <td>'.$password.'</td>
            <td><button class="btn btn-primary"><a class="text-light" href="update.php?updateid='.$id.'">UpDate</a></button>
            <button class="btn btn-danger"><a class="text-light" 
            href="delete.php?deleteid='.$id.'">Delete</a></button></td>
      
          </tr>';
        }
        
    }
    
    
    
    ?>
    
  </tbody>
</table>


</table>


</div>
    
</body>
</html>