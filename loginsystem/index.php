<!DOCTYPE html>
<?php session_start();
//<?php $_SESSION["check_code"] 
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Insert title here</title>

	</head>
	<body>
		<form name="login_form" action="login_check.php" method="post">
			帳號：<input type="text" name="account" id="account"><br>
			<br>
			密碼：<input type="password" name="password" id="password"> <br>
			<br>
			
			驗證碼： <input type="text" name="typecode" id="typecode" />&nbsp;<img src="code_born.php" >
			<div id="typecodeAlert"></div>    
					
			<p><input type="submit" value="送出" ></p>
			<input type="button" value="註冊" onclick="location.href='registration.php'">
		</form>
		
	</body>
</html>