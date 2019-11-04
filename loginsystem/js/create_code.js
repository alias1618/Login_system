/**
 * 
 */

var code;
window.onload = function(){
	create_code();
}

function create_code(){
	code = "";
	var code_max = 4;
	var check_code = document.getElementById("check_code");
	//check_code.value = "";
	var random = new Array(0,1,2,3,4,5,6,7,8,9);
	for(var i = 0; i < code_max; i++){
		var new_code = random[Math.floor(Math.random() * 10)];
		code += new_code;
	}
	check_code.value = code;
	
	document.getElementById("discode").style.fontFamily = "Fixedays";
	document.getElementById("discode").style.letterSpacing = "5px";
	document.getElementById("discode").style.color = "#795548";
	document.getElementById("discode").innerHTML = code.toUpperCase();
}



function code_check(){
	var type = document.getElementById("type_code").value;
	if(type != code){
		alert("驗證碼輸入錯誤");
		createcode();
		document.getElementById("type_code").value = "";
	} else {
		
	}
}
