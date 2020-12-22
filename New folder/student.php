<?php 

$user = 'root'; 
$password ='Vinay@123'; 

$database = 'a'; 

$servername='localhost'; 
$mysqli = new mysqli($servername, $user, 
				$password, $database); 

if ($mysqli->connect_error) { 
	die('Connect Error (' . 
	$mysqli->connect_errno . ') '. 
	$mysqli->connect_error); 
} 
$a=$_GET['qno']; 
$b=$_GET['no']; 
$sql = "SELECT * FROM quest where qno=$a and no=$b"; 
$result = $mysqli->query($sql); 
$mysqli->close(); 
?> 

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="selquiz.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<style>
	html{
		scroll-behavior: smooth;
	}
	#h1n{
		margin:0px;
		padding-bottom:15px;
	}
		#acc{ 
		background-color: black;
		color : white;
	}
	h2{
		margin-left:4%;
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
	p[id^=p]{
		width: 70%;
		margin-left: 3%;
		padding-left: 2%;
		border: 2px solid blue;
		border-radius: 5px;
		box-shadow:0 0 4px #000000;
		margin-bottom: 2%;
	}
	button{
		cursor:pointer;	
		border-radius:10px;
	}
	</style>
</head>
<body>
	<input type=text id="k" hidden></input>
	<input type=text id="k2" hidden></input>
	<img src ="taskbar.png" width=100% height=80px id="task"></img>
	<img src ="q.jpg" style="position:absolute" width=4% height=7% id="q" class="item"></img>
	<h1 id="h1n" onClick="window.location.replace('studenthome.html')" style="position:absolute;left:6%;bottom:89%;color:blue;cursor:pointer">Quizepp</h1>
	<div onMouseDown="tog()" onMouseUp="tog()" style="position : absolute;left:85%;bottom:93%">
	<input type="checkbox" id="switch"
                    class="checkbox"/> 
	<label for="switch" class="toggle"> 
        </label>
	</div>
	<p id="acc"><pre onClick="window.location.replace('../login.html')" id="acc" style="position:absolute;bottom:91%;left:90%;width:7%;height:3.5%;cursor:pointer">  Sign Out  </pre></p>
	<br>
	<div id="divn">..</div>
	<script>
		function startTimer(duration, display) {
        	var timer = setTimeout(function() {
            		document.getElementById("sub").click();
        	}, 120000);
    		var timer = duration, minutes, seconds;
		setInterval(function () {
        		minutes = parseInt(timer / 60, 10);
        		seconds = parseInt(timer % 60, 10);

        		minutes = minutes < 10 ? "0" + minutes : minutes;
        		seconds = seconds < 10 ? "0" + seconds : seconds;

        		display.textContent = minutes + ":" + seconds;

        		if (--timer < 0) {
            			timer = duration;
        		}
    		}, 1000);
		}
		window.onload = function () {
    			var fiveMinutes = 60 * 2,
        		display = document.querySelector('#time');
    		startTimer(fiveMinutes, display);
		};
		var m=[];
		var j=1;
		var k=1;
		var l=1;
		var u=1;
		var v=1;
		var w=0;
		var x=0;
	<?php 
	#$bb=count($rows);
	while($rows=$result->fetch_assoc())
	{
	?>
		
		var a=document.getElementById('divn');
		var h2=document.createElement('h2');
		a.appendChild(h2);
		var text=document.createTextNode("QUESTION NO "+j);
		h2.appendChild(text);
		var h2attr=document.createAttribute('id');
		h2attr.value="no"+j;
		h2.setAttributeNode(h2attr);
		var p=document.createElement('p');
		a.appendChild(p);
		var text=document.createTextNode("<?php echo $rows['q'];?>");
		p.appendChild(text);
		var pattr=document.createAttribute('id');
		pattr.value="p"+l;
		p.setAttributeNode(pattr);
		console.log(pattr.value);
		var br1=document.createElement('br');
		p.appendChild(br1);
		var but=document.createElement('button');
		p.appendChild(but);
		var text=document.createTextNode("<?php echo $rows['op1'];?>");
		but.appendChild(text);
		var butattr1=document.createAttribute('id');
		butattr1.value=k;
		but.setAttributeNode(butattr1);
		var butattr=document.createAttribute('onclick');
		butattr.value="change(this.id)";
		but.setAttributeNode(butattr);
		k=k+1;
		var but=document.createElement('button');
		p.appendChild(but);
		var text=document.createTextNode("<?php echo $rows['op2'];?>");
		but.appendChild(text);
		var butattr1=document.createAttribute('id');
		butattr1.value=k;
		but.setAttributeNode(butattr1);
		var butattr=document.createAttribute('onclick');
		butattr.value="change(this.id)";
		but.setAttributeNode(butattr);
		k=k+1;
		var br1=document.createElement('br');
		p.appendChild(br1);
		var br2=document.createElement('br');
		p.appendChild(br2);
		var but=document.createElement('button');
		p.appendChild(but);
		var text=document.createTextNode("<?php echo $rows['op3'];?>");
		but.appendChild(text);
		var butattr1=document.createAttribute('id');
		butattr1.value=k;
		but.setAttributeNode(butattr1);
		var butattr=document.createAttribute('onclick');
		butattr.value="change(this.id)";
		but.setAttributeNode(butattr);
		k=k+1;
		var but=document.createElement('button');
		p.appendChild(but);
		var text=document.createTextNode("<?php echo $rows['op4'];?>");
		but.appendChild(text);
		var butattr1=document.createAttribute('id');
		butattr1.value=k;
		but.setAttributeNode(butattr1);
		var butattr=document.createAttribute('onclick');
		butattr.value="change(this.id)";
		but.setAttributeNode(butattr);
		k=k+1;
		var br1=document.createElement('br');
		a.appendChild(br1);
		var br2=document.createElement('br');
		a.appendChild(br2);
		if(j!=1){
			var but=document.createElement('a');
			a.appendChild(but);
			var text=document.createTextNode("PREV");
			but.appendChild(text);
			var butattr=document.createAttribute('id');
			butattr.value="prev"+u;
			but.setAttributeNode(butattr);
			var butattr=document.createAttribute('style');
			butattr.value="width:100px;font-size:25px; margin-left: 45%;";
			but.setAttributeNode(butattr);
			var butattr=document.createAttribute('href');
			z=parseInt(j)-1;
			x="no"+z;
			butattr.value="#"+x;
			console.log(x);
			but.setAttributeNode(butattr);
		
		}
		console.log(w);
		var but=document.createElement('a');
		a.appendChild(but);
		var text=document.createTextNode("NEXT");
		but.appendChild(text);
		
		
		if(j==1){
			var butattr=document.createAttribute('id');
			butattr.value="next"+v;
			but.setAttributeNode(butattr);
			var butattr=document.createAttribute('style');
			butattr.value="font-size:25px;";
			but.setAttributeNode(butattr);
			
		}
		else{
			var butattr=document.createAttribute('id');
			butattr.value="next"+v;
			but.setAttributeNode(butattr);
			var butattr=document.createAttribute('style');
			butattr.value="width:10%;font-size:25px;margin:3%";
			but.setAttributeNode(butattr);
			
		}
		var butattr=document.createAttribute('href');
		z=parseInt(v);
		x="next"+z;
		butattr.value="#"+x;
		but.setAttributeNode(butattr);
		j=j+1;
		l=l+1;
		u=u+1;
		v=v+1;
		m.push(pattr.value);
	<?php		
	}
	?>
	
	o=[];
	localStorage.setItem("o",m);
	</script>
	<!-------------------------------------------- SIDEBAR ------------------------------------------------->
	
	<input type="Submit" value="Submit" onclick="test()" id="sub"></input>
	

	<div style="height:100%;width:24%;position:fixed;left:76%;bottom:0%;background-color:black;z-index:-1;opacity:35%;border-style: groove;border-width: 10px;border-color:grey;box-shadow: -5px 0px 5px grey;"></div>

	
	<script>
	function subquiz(){
	r=0;
	str=localStorage.getItem("o");
	arr=str.split(",");
	for(i=0;i<arr.length;i++){
		var h=document.getElementById(arr[i]);
		question=h.innerHTML.substring(0,h.innerHTML.indexOf("<"));
		if(h.children[1].style.background=="lightblue"){
			alert("ye");
			document.getElementById('k').value+="1";  
		}
		if(h.children[2].style.background=="lightblue"){
			alert("ye");
			document.getElementById('k').value+="2";
		}
		if(h.children[5].style.background=="lightblue"){
			alert("ye");
			document.getElementById('k').value+="5";
		}
		if(h.children[6].style.background=="lightblue"){
			alert("ye");
			document.getElementById('k').value+="6";
		}		
	}
}
	</script>
	<script src="quiz.js"></script>
	<?php 
			$con=mysqli_connect("localhost", "root", "Vinay@123") or die (mysqli_error ());
			mysqli_select_db($con,"a") or die(mysqli_error());
			$strSQL = "SELECT * FROM quest where qno=$a and no=$b" or die(mysql_error($db));
		        $result = mysqli_query($con, $strSQL);
	?>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<script>
	document.getElementById('k2').value+="<?php echo $row["rop"]; ?>";
</script>

<?php
}
?>
<script>
	function goNext(a){
		var b=document.getElementById(a);
		var c=document.getElementById(a+1);
		b.style.href="#c";
	}
	function goPrev(a){
		var b=document.getElementById(a);
		var c=document.getElementById(a-1);
		b.style.href="#c";
	}
var compareNum=0
function test(){
	r=0;
	str=localStorage.getItem("o");
	arr=str.split(",");
	for(i=0;i<arr.length;i++){
		var h=document.getElementById(arr[i]);
		question=h.innerHTML.substring(0,h.innerHTML.indexOf("<"));
		if(h.children[1].style.background=="lightblue"){
			document.getElementById('k').value+="1";  
		}
		if(h.children[2].style.background=="lightblue"){
			document.getElementById('k').value+="2";
		}
		if(h.children[5].style.background=="lightblue"){
			document.getElementById('k').value+="5";
		}
		if(h.children[6].style.background=="lightblue"){
			document.getElementById('k').value+="6";
		}		
	}
var string1 = document.getElementById("k").value;
var string2 = document.getElementById("k2").value;
	for(i=0; i<string1.length ; i++)
	{
		if (string1.charAt(i) == string2.charAt(i))
			{
			        compareNum++;	
			}
  
	};
	window.location.replace("comp.html?no=<?php echo $b ?>?qno=<?php echo $a ?>?score="+compareNum);
}
</script>
<h2><label for="vol" style="position:fixed;left: 80%;top: 20%; color:red"><div id="tim">Time Remaining<br><span id="time">02:00</span> minutes!</div></label></h2>

</body>
</html>