<?php
   require('database.php');
   $email=$_POST['email'];
   $password=$_POST['password'];
    $sql = "SELECT password from creator where email='$email' ";
    if($result=mysqli_query($conn, $sql)){ 
        if(mysqli_num_rows($result)>0){
            $row = mysqli_fetch_array($result);
            if($row[password]==$password){
                header('location:New folder/home.html');
            }
            else{
                header('location:login.html?error');
            }
        }
        else{
            header('location:login.html?error');
        }
    } else{
    echo "ERROR: Could not execute  $sql. " . mysqli_error($conn);
   }

   mysqli_close($conn);
?>
