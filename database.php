<?php
   $dbhost = 'localhost';  
   $dbuser = 'root';
   $dbpass = 'Vinay@123';
   $dbname = 'quiz';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);    
   if(! $conn ) {
      die('Could not connect: ' . mysqli_connect_error());
   }
   else{
   		echo "successfully connected";
   }
?>