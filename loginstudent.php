<?php
   require('database.php');
   $name=$_POST['name'];
   $password=$_POST['password'];
    $sql = "SELECT password from student where name='$name' ";
    if($result=mysqli_query($conn, $sql)){ 
        if(mysqli_num_rows($result)>0){
            $row = mysqli_fetch_array($result);
            if($row["password"]==$password){
                header('location:New Folder/studenthome.html?name='.$name);
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
