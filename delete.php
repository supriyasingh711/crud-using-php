<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from `crud` where id=$id";
    $r=mysqli_query($con,$sql);
    if($r){
        // echo "Deleted Successfully";
            header('location:display.php');
    }
    else{
        die(mysqli_error($con));

    }

}



?>