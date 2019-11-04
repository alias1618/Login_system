<html>
	<head>
	<title>註冊</title>
		<script>
			function accountCheck() {
				var account = document.getElementById("account").value;
				
				if (account = ""){
					document.getElementById("accountAlert").innerHTML= "<font color=red><b>你的帳號前兩個字母必須大寫</b></font>";
				}
			}
			
			/*
				function account_Check(){
					if (!((document.getElementById("account").value).match(/^[A-Za-z][A-Za-z]+[A-Za-z0-9_.]$/){
						document.getElementById("accountAlert").innerHTML= "<font color=red><b>你的帳號前兩個字母必須大寫</b></font>";
					}
				}
	    		function checkEmail("email") {
	    			email = document.getElementById("email").value;
	    
	    			if (email == "") {
	    				document.getElementById("emailAlert").innerHTML = "<font color=red><b>你必須輸入email</b></font>";
	    			}//else //if (!(email).match(/(^\w+[-+.](\w+))*@[A-Za-z0-9]*\.\w+)$/){
	    				//document.getElementById("emailAlert").innerHTML = "<font color=red><b>email帳號必須符合規定</b></font>";
	    			//}
	    		}
    			//checkPassword() 檢查password是不是空的 and 
				function checkPassword() {
					password = document.getElementById("password").value;
	
					if (password == "") {
						document.getElementById("passwordAlert").innerHTML = "<font color=red><b>you must enter your password!</b></font>";
					}else if (!((password).match(/^\w{6}+[A-Z]{1}$/){
						document.getElementById("passwordAlert").innerHTML = "<font color=red><b>密碼必須符合規定</b></font>";
					}
				}
				//checkTwoPasswords()檢查password和confirm_password是否為一致，沒有一致就出現passwords must match!
				function checkTwoPasswords() {
					password = document.getElementById("password").value;
					confirm_password = document.getElementById("confirm_password").value;
	
					if(password != confirm_password){
						document.getElementById("confirm_passwordAlert").innerHTML = "<font color=red><b>passwords must match!</b></font>";
					}
				}

				nn =;//nation_number
				function number_check(nn, number){
					if ((document.getElementById(nn).value).match(866)){	
						if (!((document.getElementById(number).value).match(/^[9]{1}+[0-9]{8}$/){
							document.getElementById("numberdAlert").innerHTML = "<font color=red><b>你的號碼格式應符合9xxxxxxxx</b></font>";
							//alert("你的號碼格式應符合9xxxxxxxx"+document.getElementById(number).value));
							//台灣號碼格式	9-xxxx-xxxx
						}
					}else if((document.getElementById(nn).value).match(60)){
						if (!((document.getElementById(number).value).match(/^[1]{1}+[0-9]{8}$/){
							document.getElementById("numberdAlert").innerHTML = "<font color=red><b>你的號碼格式應符合1xxxxxxxx</b></font>";
							//alert("你的號碼格式應符合1xxxxxxxx"+document.getElementById(number).value));
							//馬來西亞號碼格式 1-xxxx-xxxx
						}
					}else if((document.getElementById(nn).value).match(81)){
						if (!((document.getElementById(number).value).match(/^[789]{1}+[0]{1}+[0-9]{8}$/){
							document.getElementById("numberdAlert").innerHTML = "<font color=red><b>你的號碼格式應符合70xxxxxxxx, 80xxxxxxxx, 90xxxxxxxx</b></font>";
							//alert("你的號碼格式應符合70-xxxx-xxxx, 80-xxxx-xxxx, 90-xxxx-xxxx"+document.getElementById(number).value));
							//日本號碼格式 70-xxxx-xxxx, 80-xxxx-xxxx, 90-xxxx-xxxx
						}
					}else if((document.getElementById(nn).value).match(66)){
						if (!((document.getElementById(number).value).match(/^[6]{1}|[8-9]{1}+[0-9]{8}$/){
							document.getElementById("numberdAlert").innerHTML = "<font color=red><b>你的號碼格式應符合6xxxxxxxx, 8xxxxxxxx, 9xxxxxxxx</b></font>";
							//alert("你的號碼格式應符合6-xxxx-xxxx, 8-xxxx-xxxx, 9-xxxx-xxxx"+document.getElementById(number).value));
							//泰國號碼格式 6-xxxx-xxxx, 8-xxxx-xxxx, 9-xxxx-xxxx
						}
					}else if((document.getElementById(nn).value).match(86)){
						if (!((document.getElementById(number).value).match(/^[1]{1}+[0-9]{10}$/){
							document.getElementById("numberdAlert").innerHTML = "<font color=red><b>你的號碼格式應符合1xxxxxxxxxx</b></font>";
							//alert("你的號碼格式應符合1-xxxx-xxxx-xx"+document.getElementById(number).value));
							//中國號碼格式 1-xxxx-xxxx-xx
						}
					}
				}
				*/
		</script>
	</head>
<body>
	<?php //session_start();?>
		<form action="registration_insert.php" method="post">
			帳號：<input type="text" id="account" onblur="accountCheck();"/> <?php echo "前2個必須是英文字母";?><br>
			<div id="accountAlert">
			</div>
			<br>
			Email：<input type="text" id="email" onblur="checkEmail();"/> <?php echo "xxx@yyyy.zzz";?><br>
			<div id="emailAlert">
			</div>
			<br>
			密碼：<input type="password" id="password" onblur="checkPassword();"/> <?php echo "至少6個英數混和與一個大寫字母";?><br>
			<div id="passwordAlert"></div>
			<br>
			密碼確認：<input type="password" id="password_check" onblur="checkTwoPasswords();"/> <br>
			<div id="confirm_passwordAlert"></div>
			<br>
			國家代碼：
			<select name="nn" >
				<option value="866">台灣</option>
				<option value="60">馬來西亞</option>
				<option value="81">日本</option>
				<option value="66">泰國</option>
				<option value="86">中國</option>
			</select>
			手機號碼：<input type="number" id="phone_number" onblur="number_check"> <br>
			<div id="numberdAlert"></div>
			<br>
			<!-- 自動設定角色為使用者1 -->
			<input type="hidden" name="role" value="1"> <br>
			<br>
			驗證碼：<input type="number" id="check_code"> &nbsp; <img src="code_born.php" ><br>
			
			<input type="submit" value="送出">
		</form>
</body>
</html>