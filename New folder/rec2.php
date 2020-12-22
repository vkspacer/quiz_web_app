<html>
	<head>
	<title>
	</title>
	<style>
	svg:hover{
	transform:scale(1.15);
}
	html {
  scroll-behavior: smooth;
}
	body{
		margin:0;
		background-image:url('https://www.leadquizzes.com/wp-content/uploads/2019/02/New-blog-graphic.jpg');
		background-repeat: no-repeat;
		background-size: fill;
		background-size: 100% 100%;
		width:100%;
		height:100%;
		background-attachment: fixed;
		overflow:hidden;
	}
	#q{
		position:absolute;
		left:0.5%;
		bottom:91.8%;
    	}
	input[type="Submit"],input[type="button"]{
		position:absolute;
		left:80%;
		bottom:20%;
		width:16%;
		font-size:20px;
		height:10%;
		border:3px solid blue;
		background-image: linear-gradient(to right , violet, lightblue);
		border-radius:10px;
		transition: transform 0.08s;
		position:fixed;
	}
	#add:hover{
		transform:scale(1.2);
		cursor: pointer;
		
	}
	input[type="radio"]{
		width:5%;
	}
	input[type="button"]{
		bottom: 35%;
	}
	input[type="Submit"]:hover{
		  transform: scale(1.2);
		  cursor: pointer;
	}
	#acc{ 
		background-color: black;
		color : white;
	}
	#acc:hover{
		color : orange;
	}
	#cat{
		padding : 3%;
		width : 5.5%;
		height : 2px;
		margin-left: 2%;
		margin-right: 3%;
		background-color: red;
	}
	#cat:hover{
		opacity: 0.5;
		box-shadow: 2px 2px;

	}
	p { 
		color: #7c795d;
		font-family: 'Trocchi', serif; font-size: 20px; 
		font-weight: normal; 
		line-height: 48px; 
		margin: 0; 
	}
	h1{	
		font-family: "Verdana", Courier, monospace;
		color:red;
		text-shadow: 0px 2px 2px grey,
                0px 8px 13px rgba(0,0,0,0.1),
                0px 18px 23px rgba(0,0,0,0.1);
		margin-left : 5px
	}
	h2{
		margin-left : 1%
	}
	.toggle { 
            position : relative ; 
            display : inline-block; 
            width : 40px; 
            height : 20px; 
            background-color: white; 
            border-radius: 30px; 
            border: 2px solid gray; 
        } 
                
        /* After slide changes */ 
        .toggle:after { 
            content: ''; 
            position: absolute; 
            width: 20px; 
            height: 20px; 
            border-radius: 50%; 
            background-color: gray; 
            top: 0px;  
            left: 0px; 
            transition:  all 0.5s; 
		
        } 
                
        /* Toggle text */ 
        #o{ 
            font-family: Arial, Helvetica, sans-serif; 
            font-weight: bold; 
        } 
	        
        /* Checkbox cheked effect */ 
        .checkbox:checked + .toggle::after { 
            left : 20px;  
        } 
                
        /* Checkbox cheked toggle label bg color */ 
        .checkbox:checked + .toggle { 
            background-color: black; 
        } 
                
        /* Checkbox vanished */ 
        .checkbox {  
            display : none; 
        } 
	input[type="text"],select{
		width: 60%;
  		height: 5%;
  		border: double 2px transparent;
  		border-radius: 5px;
  		background-image: linear-gradient(white, white), radial-gradient(circle at top left, lightblue,white);
  		background-origin: border-box;
  		background-clip: content-box, border-box;
		margin-left:2%;
       		box-shadow:0 0 10px #000000;
		font-size:15px;
		transition: transform 0.1s;

	}
	input[id^="Ops"]{
		width:20%;
		height:10%;
		margin-right: 20%;
		font-size:15px;
	}
	submit{
		padding-top:5%;
		width: 5%;
  		height: 5%;
		border: 1px solid red;
	}
	input:hover{
		transform:scale(1.02);
	}
	div[id^=q]{
		width: 70%;
		margin-left: 5%;
		border: 1px solid blue;
		border-radius: 5px;
		box-shadow:0 0 4px #000000;
		margin-bottom: 2%;
	}
	#top{
		width:3%;
		height:6%;
		position:fixed;
		left:86.5%;
		bottom:11%;
		transition: transform 0.2s;
	}
	#top:hover{
		transform:scale(1.6);
		cursor: pointer;		
	}
	anime({
  targets: 'div',
  translateX: 250,
  rotate: '1turn',
  backgroundColor: '#FFF',
  duration: 800
});
	</style>
</head>
	<body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link rel="stylesheet" href="table.css">
	<!--<form action='test2.php' method="post" id="fo">-->
	<input type="text" id="mytext" hidden name="mytext"/>
	<img src ="taskbar.png" width=100% height=10% id="task"></img>
	<img src ="q.jpg" style="position:absolute" width=4% height=7% id="q" class="item"></img>
	<h1 onClick="window.location.replace('../New Folder/studenthome.html')" style="position:absolute;left:6%;bottom:89%;color:blue;cursor:pointer;">Quizepp</h1>
	<div onMouseDown="tog()" onMouseUp="tog()" style="position : absolute;left:85%;bottom:93%">
	<input type="checkbox" id="switch"
                    class="checkbox"/> 
	<label for="switch" class="toggle"> 
        </label>
	</div>
	<p id="acc"><pre id="acc" onClick="window.location.replace('../login.html')" style="position:absolute;bottom:91%;left:90%;width:7%;height:3.5%;cursor:pointer;">  Sign Out  </pre></p>
	<br>
	<div style="position:absolute;left:78%;height:100%">
	<h3>Search by Category</h3>
	<form method="post" action="rec2.php">
	<select id="ca" name="ca">
		<option value="1">Art and Literature</option>
		<option value="2">General Knowledge</option>
		<option value="3">Geography</option>
		<option value="4">History</option>
		<option value="5">Sports</option>
		<option value="6">Science</option>
	</select>
	<input type="submit" value="Submit" style="height:5%;width:25%;position:static;font-size:15px;"></input>
	</form>
	<form method="post" action="rec.php">
	<h3>Search by Name</h3>
	<input type="text" id="ca" name="n" placeholder="Enter The Name"></input>
	<input type="submit" value="Submit" style="height:5%;width:25%;position:static;font-size:15px;"></input>
	</form>
	</div>
	<input type="button" value="Go To Home" onClick="window.location.replace('../New Folder/studenthome.html')" style="cursor:pointer;"></input>
	<?php 	
		$b=$_POST['ca'];
		 $numbers[1] = "Art & Literature";
         $numbers[2] = "General Knowledge";
         $numbers[3] = "Geography";
         $numbers[4] = "History";
         $numbers[5] = "Sports";
	         $numbers[6] = "Sciensce";
		$a=substr($b,0,-1);
		echo "<br>";
		$dbhost = 'localhost';  
		$dbuser = 'root';
		$dbpass = 'Vinay@123';
		$dbname = 'a';
		$con= mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
		$sql="SELECT * FROM `attempts` WHERE no='$b'  order by score desc;";
		if($result = mysqli_query($con, $sql)){
    			if(mysqli_num_rows($result) > 0){
        			echo '<div class="tbl-header">
    					<table cellpadding="0" cellspacing="0" border="0">
      					<thead>
        				<tr>
          				<th>Name</th>
          				<th>Quiz Category</th>
          				<th>Quiz Number</th>
          				<th>Score</th>
        				</tr>
      					</thead>
    					</table>
  					</div>
					<div class="tbl-content" id="j">
					<table cellpadding="0" cellspacing="0" border="0">
					<tbody>';
        			while($row = mysqli_fetch_array($result)){
            				echo "<tr>";
                			echo "<td>" . $row['name'] . "</td>";
                			echo "<td>" . $numbers[intval($row['no'])] . "</td>";
                			echo "<td>" . $row['qno'] . "</td>";
                			echo "<td>" . $row['score'] . "</td>";
            				echo "</tr>";
  
        			}
        			echo "</table>";
        		mysqli_free_result($result);
    			} 
			else{
        			echo "<p align='center'>No records matching your query were found.</p>";
    			}
		} 
		else{
    			echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
	} 
	?>
	<br><br>
	<div style="height:100%;width:24%;position:fixed;left:76%;bottom:0%;background-color:black;z-index:-1;opacity:35%;border-style: groove;border-width: 10px;border-color:grey;box-shadow: -5px 0px 5px grey;"></div>
	<br><br>
	<br><br>
	</div>
</html>