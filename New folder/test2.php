<?php
 
       $servername = "localhost";  
       $username = "root";  
       $password = "Vinay@123";  
       $con = mysqli_connect ($servername , $username , $password) or die("unable to connect to host");  
       $sql = 'use a';
	if ($con->query($sql) === TRUE) {
		echo "Database connected successfully";
	} 
	else {
		echo "Error creating database: " . $conn->error;}
$a=$_POST["mytext"];	
	echo $a;
$sql2="select max(qno) as maxi from quest where no=$_POST[noo]";
$sql=mysqli_query($con,$sql2);
$row = mysqli_fetch_assoc($sql); 
echo $row['maxi'];
$row['maxi']=$row['maxi']+1;
if($a[1]>=1){
$sql="INSERT INTO Quest (no, qno,q,op1,op2,op3,op4,rop)

VALUES

('$_POST[noo]','$row[maxi]','$_POST[Ques1]','$_POST[11]','$_POST[12]','$_POST[13]','$_POST[14]','$_POST[r1]')";

 

if (!mysqli_query($con,$sql))

  {

  die('Error: ' . mysqli_error($con));

  }

echo "1 record added";
}
$a=$_POST["mytext"];	
if($a[1]>=2){
$sql="INSERT INTO Quest (no, qno,q,op1,op2,op3,op4,rop)

VALUES

('$_POST[noo]','$row[maxi]','$_POST[Ques2]','$_POST[21]','$_POST[22]','$_POST[23]','$_POST[24]','$_POST[r2]')";

 

if (!mysqli_query($con,$sql))

  {

  die('Error: ' . mysqli_error($con));

  }

echo "2 record added";
}
$a=$_POST["mytext"];	
if($a[1]>=3){
$sql="INSERT INTO Quest (no, qno,q,op1,op2,op3,op4,rop)

VALUES

('$_POST[noo]','$row[maxi]','$_POST[Ques3]','$_POST[31]','$_POST[32]','$_POST[33]','$_POST[34]','$_POST[r3]')";

 

if (!mysqli_query($con,$sql))

  {

  die('Error: ' . mysqli_error($con));

  }

echo "3 record added";
}
$a=$_POST["mytext"];	
if($a[1]>=4){
$sql="INSERT INTO Quest (no, qno,q,op1,op2,op3,op4,rop)

VALUES

('$_POST[noo]','$row[maxi]','$_POST[Ques4]','$_POST[41]','$_POST[42]','$_POST[43]','$_POST[44]','$_POST[r4]')";

 

if (!mysqli_query($con,$sql))

  {

  die('Error: ' . mysqli_error($con));

  }

echo "4 record added";
}
$a=$_POST["mytext"];	
if($a[1]>=5){
$sql="INSERT INTO Quest (no, qno,q,op1,op2,op3,op4,rop)

VALUES

('$_POST[noo]','$row[maxi]','$_POST[Ques5]','$_POST[51]','$_POST[52]','$_POST[53]','$_POST[54]','$_POST[r5]')";

 

if (!mysqli_query($con,$sql))

  {

  die('Error: ' . mysqli_error($con));

  }

echo "5 record added";
}
$a=$_POST["mytext"];	
if($a[1]>=6){
$sql="INSERT INTO Quest (no, qno,q,op1,op2,op3,op4,rop)

VALUES

('$_POST[noo]','$row[maxi]','$_POST[Ques6]','$_POST[61]','$_POST[62]','$_POST[63]','$_POST[64]','$_POST[r6]')";

 

if (!mysqli_query($con,$sql))

  {

  die('Error: ' . mysqli_error($con));

  }

echo "6 record added";
}
$a=$_POST["mytext"];	
if($a[1]>=7){
$sql="INSERT INTO Quest (no, qno,q,op1,op2,op3,op4,rop)

VALUES

('$_POST[noo]','$row[maxi]','$_POST[Ques7]','$_POST[71]','$_POST[72]','$_POST[73]','$_POST[74]','$_POST[r7]')";

 

if (!mysqli_query($con,$sql))

  {

  die('Error: ' . mysqli_error($con));

  }

echo "7 record added";
}
$a=$_POST["mytext"];	
if($a[1]>=8){
$sql="INSERT INTO Quest (no, qno,q,op1,op2,op3,op4,rop)

VALUES

('$_POST[noo]','$row[maxi]','$_POST[Ques8]','$_POST[81]','$_POST[82]','$_POST[83]','$_POST[84]','$_POST[r8]')";

 

if (!mysqli_query($con,$sql))

  {

  die('Error: ' . mysqli_error($con));

  }

echo "8 record added";
}
$a=$_POST["mytext"];	
if($a[1]>=9){
$sql="INSERT INTO Quest (no, qno,q,op1,op2,op3,op4,rop)

VALUES

('$_POST[noo]','$row[maxi]','$_POST[Ques9]','$_POST[91]','$_POST[92]','$_POST[93]','$_POST[94]','$_POST[r9]')";

 

if (!mysqli_query($con,$sql))

  {

  die('Error: ' . mysqli_error($con));

  }

echo "9 record added";
}
$a=$_POST["mytext"];	
if($a=='q10'){
$sql="INSERT INTO Quest (no, qno,q,op1,op2,op3,op4,rop)

VALUES

('$_POST[noo]','$row[maxi]','$_POST[Ques10]','$_POST[101]','$_POST[102]','$_POST[103]','$_POST[104]','$_POST[r10]')";

 

if (!mysqli_query($con,$sql))

  {

  die('Error: ' . mysqli_error($con));

  }

echo "10 record added";
}
$b=substr($a,1);
$sql="INSERT INTO Quiz2 (no, qno,time,tot)

VALUES

('$_POST[noo]','$row[maxi]','$_POST[vol]',$b)";


if (!mysqli_query($con,$sql))

  {

  die('Error: ' . mysqli_error($con));

  }
echo $_POST[noo];
header('Location: page4.html');

?>