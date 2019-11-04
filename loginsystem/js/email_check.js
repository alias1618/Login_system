/**
 * 
 */
<script language="javascript">

function email_check(email){
	if (!((document.getElementById(email).value).match(/(^\w+[-+.](\w+))*@[A-Za-z0-9]*\.\w+)$/){
		alert("你的email不符合格式"+document.getElementById(email).value));
	}
}

</script>