<!DOCTYPE html>
<html>
<?php session_start();
?>
	
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>註冊</title>
		<head>
			<script>
    			function accountCheck(){
    				var account = document.getElementById("account").value;
    				if (account == ""){
    					document.getElementById("accountAlert").innerHTML= "<font color=red><b>不能為空白</b></font>";
    				}
    			}
			
	    		function checkEmail() {
	    			email = document.getElementById("email").value;
	    
	    			if (email == "") {
	    				document.getElementById("emailAlert").innerHTML = "<font color=red><b>你必須輸入email</b></font>";
	    			}
	    		}

				function checkPassword() {
					password = document.getElementById("password").value;
	
					if (password == "") {
						document.getElementById("passwordAlert").innerHTML = "<font color=red><b>你必須輸入密碼</b></font>";
					}
				}

				function checkTwoPasswords() {
					password = document.getElementById("password").value;
					confirm_password = document.getElementById("password_check").value;
	
					if(password != confirm_password){
						document.getElementById("confirm_passwordAlert").innerHTML = "<font color=red><b>密碼必須相符合</b></font>";
					}
				}
		</script>
	</head>
	<body>
<?php 
if (isset($_SESSION['account'])){
    $account = $_SESSION['account'];
}
?>
		<form name="reg_form" action="registration_check.php" method="post">
			帳號：<input type="text" name="account" id="account"   onblur="accountCheck();" value=<?php echo $account?> /> <?php echo "前2個必須是英文字母";?><br>
			<div id="accountAlert">
			</div>
			<br>
			Email：<input type="text" name="email" id="email" onblur="checkEmail();"> <?php echo "xxx@yyyy.zzz";?><br>
			<div id="emailAlert">
			</div>
			<br>
			密碼：<input type="password" name="password" id="password" onblur="checkPassword();"> <?php echo "至少6個英數混和與一個大寫字母";?><br>
			<div id="passwordAlert"></div>
			<br>
			密碼確認：<input type="password" name="password_check" id="password_check" onblur="checkTwoPasswords();"> <br>
			<div id="confirm_passwordAlert"></div>
			<br>
			國家代碼：
			<select name="nn" >
				<option value="886">台灣</option>
				<option value="60">馬來西亞</option>
				<option value="81">日本</option>
				<option value="66">泰國</option>
				<option value="86">中國</option>
			</select>
			手機號碼：<input type="number" name="phone_number" id="phone_number" onblur="number_check"> <br>
			<div id="numberdAlert"></div>
			<br>
			<!-- 自動設定角色為使用者1為使用者 -->
			<input type="hidden" name="role" value="1"> <br>
			
			驗證碼：<input type="text" name="type_code" id="type_code"> &nbsp; <img src="code_born.php" ><br>
			
			<p><input type="submit" value="送出"></p>
		</form>
	</body>
</html>