<?php
   require('database.php');
   $email=$_POST['email'];
   $password=$_POST['password'];
    $sql = "INSERT INTO creator(email,password) VALUES ('$email','$password')";
    if(mysqli_query($conn, $sql)){
        header('location:login.html');
    } else{
    echo "ERROR: Could not execute insert $sql. " . mysqli_error($conn);
   }

   
// close connection
   mysqli_close($conn);
?>
