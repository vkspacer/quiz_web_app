<?php
$user = 'root'; 
$password = 'Vinay@123'; 
 $database = 'a'; 
 
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
$a=$_GET['no']; 
$sql = "SELECT * FROM quest WHERE no=$a ORDER BY qno ASC "; 
$result = $mysqli->query($sql); 
$mysqli->close();
session_start();
?> 
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="selquiz.css">
	<style>
		#acc{ 
		background-color: black;
		color : white;
	}
	#h1n{
		margin:0px;
		padding-bottom:15px;
	}
	#acc:hover{
		color : orange;
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
	</style>
</head>
<body>
	<form id="form_st">
	<img src ="taskbar.png" width=100% height=80px id="task"></img>
	<img src ="q.jpg" style="position:absolute" width=4% height=7% id="q" class="item"></img>
	<h1 id="h1n" onClick="window.location.replace('studenthome.html')" style="position:absolute;left:6%;bottom:89%;color:blue;cursor: pointer;">Quizepp</h1>
	<div onMouseDown="tog()" onMouseUp="tog()" style="position : absolute;left:85%;bottom:93%">
	<input type="checkbox" id="switch"
                    class="checkbox"/> 
	<label for="switch" class="toggle"> 
        </label>
	</div>
	<p id="acc"><pre onClick="window.location.replace('../login.html')" id="acc" style="position:absolute;bottom:91%;left:90%;width:7%;height:3.5%;cursor: pointer;">  Sign Out  </pre></p>
	<br><br>
	<br>

	<h1 id="h11"><?php echo $_GET['cat']?></h1>
	<script>i=0; arr=[];/*
			var e=document.getElementById('h11');
			var div=document.createElement('br');
			e.appendChild(div);		
				*/
	</script>
	<?php while($rows=$result->fetch_assoc())
	{
	?>
		<script>
		arr[i]="<?php echo $rows['qno']?>";
		i=i+1;
		</script>
	<?php
	}
	?>

	<script>
		var a=document.getElementById('h11');
			/*var br1=document.createElement('br');
			a.appendChild(br1);
			var br1=document.createElement('br');
			a.appendChild(br1);
			var br1=document.createElement('br');
			a.appendChild(br1);*/
		arrn=[]
		for(i=0;i<arr.length;i++){
			if(arrn.indexOf(arr[i])===-1){
				arrn.push(arr[i]);
			}
		} 
		var k=0;
		for(i=0;i<arrn.length;i++){

			var a=document.getElementById('h11');
			if(k%4==0){
			var br=document.createElement('br');
			a.appendChild(br);
			var br=document.createElement('br');
			a.appendChild(br);
			var br=document.createElement('br');
			a.appendChild(br);
			var br=document.createElement('br');
			a.appendChild(br);
			
			}
			var anchor=document.createElement('a');
			a.appendChild(anchor);
			var text=document.createTextNode("QUIZ NO"+arrn[i]);
			anchor.appendChild(text);
			var attrid=document.createAttribute('href');
			var f=arrn[i]
			attrid.value="student.php?no=<?php echo $a ?>&qno="+arrn[i];
			anchor.setAttributeNode(attrid);
			var attrid=document.createAttribute('class');
			attrid.value="aid";
			anchor.setAttributeNode(attrid);
			/*k=k+1;
			document.getElementById(this.id).style.margin="2%";*/
			/*var attronclick=document.createAttribute('onclick');
			attronclick.value="alert('hello');";
			but.setAttributeNode(attronclick);*/
			
			k=k+1;
		}
		</script>
	</form>
</body>
</html>