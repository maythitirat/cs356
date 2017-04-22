//Name: Thitirat Thongthaew
//student ID : 5709612120
var a;
var x = null;
var y = null;
window.onload = function(){
	
	var rect = document.getElementById("rectanglearea");
	rect.ondragover=allowDrop; 
	rect.ondrop = droptarget;

	for(var i=0;i<50;i++){
		 a = document.createElement("div");
		a.className = "rectangle";
		a.id = i;
		a.onclick = remove;
		a.draggable = "true";
		a.ondragstart = drag;
		a.ondragend = run_dragend;
		rect.appendChild(a);
	}
}


function remove(e){
	e.target.parentNode.removeChild(e.target);
}
function allowDrop(ev){
	ev.preventDefault();
}
function drag(ev){
	ev.dataTransfer.setData("text/plain",ev.target.id);
}
function run_dragend(ev){
	
	
}
function droptarget(event){
	event.preventDefault();
	var data = event.dataTransfer.getData("text/plain");
		
		
	event.target.appendChild(document.getElementById(data));
	
}

function color(){
	var box = document.querySelectorAll("#rectanglearea .rectangle");
	for(var i=0;i<50;i++){
		var hue = 'rgb(' + (Math.floor(Math.random() * 256)) + ',' +
		 (Math.floor(Math.random() * 256)) + ',' + 
		 (Math.floor(Math.random() * 256)) + ')';
		 box[i].style.backgroundColor = hue;
	}

	
}
function move(){
	var box = document.querySelectorAll("#rectanglearea .rectangle");
	for(var i=0;i<50;i++){
		box[i].style.position = 'absolute';
		var posx = ((Math.random()*450));
		var posy = ((Math.random()*650));
		box[i].style.top = posx+'px';
		box[i].style.left = posy+'px';

	}
}
var timer = null;
function dance(){
	var text = document.getElementById("dance");
	

	if(timer === null){
		timer = setInterval(both,20);
		text.innerHTML = "=Stop="

	}else{
		clearInterval(timer);
		timer = null;
		text.innerHTML = "let's Dance!!!";
	}
}
function both(){
	color();
	move();
}
