/**
 * 
 */
<script language="javascript">
nn =;//nation_number
function number_check(var_nn, number){
	if ((document.getElementById(nn).value).match(866)){	
		if (!((document.getElementById(number).value).match(/^[9]{1}+[0-9]{8}$/){
			alert("你的號碼格式應符合9xxxxxxxx"+document.getElementById(number).value));
			//台灣號碼格式	9-xxxx-xxxx
		}
	}else if((document.getElementById(nn).value).match(60)){
		if (!((document.getElementById(number).value).match(/^[1]{1}+[0-9]{8}$/){
			alert("你的號碼格式應符合1xxxxxxxx"+document.getElementById(number).value));
			//馬來西亞號碼格式 1-xxxx-xxxx
		}
	}else if((document.getElementById(nn).value).match(81)){
		if (!((document.getElementById(number).value).match(/^[789]{1}+[0]{1}+[0-9]{8}$/){
			alert("你的號碼格式應符合70-xxxx-xxxx, 80-xxxx-xxxx, 90-xxxx-xxxx"+document.getElementById(number).value));
			//日本號碼格式 70-xxxx-xxxx, 80-xxxx-xxxx, 90-xxxx-xxxx
		}
	}else if((document.getElementById(nn).value).match(66)){
		if (!((document.getElementById(number).value).match(/^[6]{1}|[8-9]{1}+[0-9]{8}$/){
			alert("你的號碼格式應符合6-xxxx-xxxx, 8-xxxx-xxxx, 9-xxxx-xxxx"+document.getElementById(number).value));
			//泰國號碼格式 6-xxxx-xxxx, 8-xxxx-xxxx, 9-xxxx-xxxx
		}
	}else if((document.getElementById(nn).value).match(86)){
		if (!((document.getElementById(number).value).match(/^[1]{1}+[0-9]{10}$/){
			alert("你的號碼格式應符合1-xxxx-xxxx-xx"+document.getElementById(number).value));
			//中國號碼格式 1-xxxx-xxxx-xx
		}
	}
}

</script>