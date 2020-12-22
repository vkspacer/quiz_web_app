<?php
   require('database.php');
   $name=$_POST['name'];
   $password=$_POST['password'];
    $sql = "INSERT INTO student(name,password) VALUES ('$name','$password')";
    if(mysqli_query($conn, $sql)){
        header('location:login.html');
    } else{
    echo "ERROR: Could not execute insert $sql. " . mysqli_error($conn);
   }

   
// close connection
   mysqli_close($conn);
?>
