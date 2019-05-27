window.onload = start;

function start(){
	//Funktionen welche beim laden der Seite ausgeführt werden sollen
	markSolution();
}

function markSolution(){
	var solution = document.getElementById("solution").value;
	var Elem = document.getElementById(solution);
	Elem.style.cssText = "background: lightgreen; border-radius: 5px; ";

	console.log("Solution = " + solution);
	console.log("Element = " + Elem.style.color);
}

function checkInputFields(){
	var inputU = document.getElementById("U").value;
	var inputR = document.getElementById("R").value;
	var inputI = document.getElementById("I").value;
	var counter = 0;

	var U = document.getElementById("U"); 
	var I = document.getElementById("I"); 
	var R = document.getElementById("R"); 
	if (inputU.trim() != '') {
		counter = counter + 1;
	}
	if (inputR.trim() != '') {
		counter = counter + 1;
	}
	if (inputI.trim() != '') {
		counter = counter + 1;
	}
	if(counter == 2){
		if (inputU.trim() == ''){
			U.setAttribute("disabled", "");
		}else if (inputR.trim() == ''){
			R.setAttribute("disabled", "");
		}else if (inputI.trim() == ''){
			I.setAttribute("disabled", "");
		}
	}else{
		if(U.hasAttribute("disabled")){
			U.removeAttribute("disabled");
		}
		if(R.hasAttribute("disabled")){
			R.removeAttribute("disabled");
		}
		if(I.hasAttribute("disabled")){
			I.removeAttribute("disabled");
		}
	}
}



