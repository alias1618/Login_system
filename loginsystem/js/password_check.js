/**
 * 
 */
<script language="javascript">

function password_check(password){
	if (!((document.getElementById(password).value).match(/^\w{6}+[A-Z]{1}$/){
		alert("你的密碼必須包含6個英文和數字和一個大寫字母"+document.getElementById(password).value));
	}
}

</script>