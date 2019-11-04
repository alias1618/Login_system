/**
 * 
 */
<script language="javascript">

function email_check(email){
	if (!((document.getElementById(email).value).match(/^([\w\.\-]){1,20}\@([\w\.\-]){1,20}$/){
		alert("你的email不符合格式"+document.getElementById(email).value));
	}
}

</script>