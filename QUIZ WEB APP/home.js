function student(){
	window.location="login.html";
}
function form1(){
	document.getElementById("form1").style.display="block";
	document.getElementById("form2").style.display="none";
	document.getElementById("butform1").style.backgroundColor="black";
	document.getElementById("butform1").style.color="white";
	document.getElementById("butform2").style.backgroundColor="white";
	document.getElementById("butform2").style.color="black";
}
function form2(){
	document.getElementById("form1").style.display="none";
	document.getElementById("form2").style.display="block";
	document.getElementById("butform2").style.backgroundColor="black";
	document.getElementById("butform2").style.color="white";
	document.getElementById("butform1").style.backgroundColor="white";
	document.getElementById("butform1").style.color="black";
}

/*function displayform($entity) {
	document.getElementById("butforms").style.display="none";
	if($entity=='creator')
	{
		document.getElementById("studentform").style.display="none";
		document.getElementById("creatorform").style.display="block";
	}
	else
	{
		document.getElementById("studentform").style.display="block";
		document.getElementById("creatorform").style.display="none";
	}
}*/

