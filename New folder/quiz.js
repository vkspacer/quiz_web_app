/*$('#but1').click(function(){
	$(this).css({"background":"red","color":"white"});
	alert("hello");
});
$('button').click(function(){
	$(this).css({"background":"red","color":"white"});
	alert("hello");
})
*/
function change(valid){
	arr=localStorage.getItem("o");
	var a=document.getElementById(valid).parentNode;
	a.children[1].style.background="violet";
	a.children[2].style.background="violet";
	a.children[5].style.background="violet";
	a.children[6].style.background="violet";
	document.getElementById(valid).style.background="lightblue";
}


/*$('#but2').toggle(function(){
	$(this).css({"background":"red","color":"white"});
},
	function(){
		$(this).css({"background":"grey","color":"black"});
	}
);
$('#but3').toggle(function(){
	$(this).css({"background":"red","color":"white"});
},
	function(){
		$(this).css({"background":"grey","color":"black"});
	}
);
$('#but4').toggle(function(){
	$(this).css({"background":"red","color":"white"});
},
	function(){
		$(this).css({"background":"grey","color":"black"});
	}
);
*/