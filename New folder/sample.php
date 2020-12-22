// PHP code to establish connection 
// with the localserver 
<?php 

// Username is root 
$user = 'root'; 
$password = 'Vinay@123'; 

// Database name is gfg 
$database = 'a'; 

// Server is localhost with 
// port number 3308 
$servername='localhost'; 
$mysqli = new mysqli($servername, $user, 
				$password, $database); 

// Checking for connections 
if ($mysqli->connect_error) { 
	die('Connect Error (' . 
	$mysqli->connect_errno . ') '. 
	$mysqli->connect_error); 
} 

// SQL query to select data from database 
$sql = "SELECT * FROM quest"; 
$result = $mysqli->query($sql); 
$mysqli->close(); 
?> 
// HTML code to display data in tabular format 
<!DOCTYPE html> 
<html lang="en"> 

<head> 
	<meta charset="UTF-8"> 
	<title>GFG User Details</title> 
	<!-- CSS FOR STYLING THE PAGE --> 
	<style> 
		table { 
			margin: 0 auto; 
			font-size: large; 
			border: 1px solid black; 
		} 

		h1 { 
			text-align: center; 
			color: #006600; 
			font-size: xx-large; 
			font-family: 'Gill Sans', 'Gill Sans MT', 
			' Calibri', 'Trebuchet MS', 'sans-serif'; 
		} 

		td { 
			background-color: #E4F5D4; 
			border: 1px solid black; 
		} 

		th, 
		td { 
			font-weight: bold; 
			border: 1px solid black; 
			padding: 10px; 
			text-align: center; 
		} 

		td { 
			font-weight: lighter; 
		} 
	</style> 
</head> 

<body> 
	<section> 
		<h1>GeeksForGeeks</h1> 
		<!-- TABLE CONSTRUCTION--> 
		<table> 
			<tr> 
				<th>GFG UserHandle</th> 
				<th>Practice Problems</th> 
				<th>Coding Score</th> 
				<th>GFG Articles</th> 
			</tr> 
			<!-- PHP CODE TO FETCH DATA FROM ROWS--> 
			<?php // LOOP TILL END OF DATA 
				while($rows=$result->fetch_assoc()) 
				{ 
			?> 
			<tr> 
				<!--FETCHING DATA FROM EACH 
					ROW OF EVERY COLUMN--> 
				<td><?php echo $rows['no'];?></td> 
				<td><?php echo $rows['qno'];?></td> 
				<td><?php echo $rows['op1'];?></td> 
				<td><?php echo $rows['op2'];?></td> 
			</tr> 
			<?php 
				} 
			?> 
		</table> 
	</section> 
</body> 

</html> 
