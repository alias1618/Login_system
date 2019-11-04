/**
 * 
 */
<script language="javascript">

function account_check(account){
	if (!((document.getElementById(account).value).match(/^[A-Z][A-Z]+[A-Za-z0-9_.]$/){
		alert("你的帳號前兩個字母必須大寫"+document.getElementById(account).value));
	}
}

</script>