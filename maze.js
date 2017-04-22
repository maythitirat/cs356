var state = "false";
function move() {
    var box = document.querySelectorAll(".boundary");

    for(var i=0 ; i<box.length ;i++){
    	box[i].style.backgroundColor = "yellow";
    }
 
}

function clearCoor() {
	var box = document.querySelectorAll(".boundary");

    for(var i=0; i<box.length;i++){
    	box[i].style.backgroundColor = "#eeeeee";
    }
}
function click(){
	state = "true";
	var box = document.querySelectorAll(".boundary");

	for(var i=0; i<box.length;i++){
		box[i].onmousemove = move;
		box[i].onmouseout = clearCoor;
	}
	// move();
	// clearCoor();
}