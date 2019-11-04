<!DOCTYPE html>
<html>
<?php session_start();
?>
	
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>註冊</title>
		<head>
			<?php if(isset($_POST['submit'])){
			    accountCheck();
			}
			 ?>
			<script>
			
				//檢查帳號
    			function accountCheck(){
    				var account = document.getElementById("account").value;
    				var accountpatten = new RegExp(/^[A-Za-z][A-Za-z]+[A-Za-z0-9_.]{1,10}$/);
    				
    				if (account == ""){
    					//顯示帳號錯誤在文字下方
    					//document.getElementById("accountAlert").innerHTML= "<font color=red><b>不能為空白</b></font>";
    					//跳出顯示"不能為空白"
    					alert('帳號不能為空白');
						return false;
    				}else if (!(account.match(accountpatten))){
    					//顯示帳號錯誤在文字下方
    					//document.getElementById("accountAlert").innerHTML= "<font color=red><b>帳號錯誤</b></font>";
    					//跳出顯示"帳號錯誤"
    					alert('帳號格式錯誤');
						return false;
    					}
    					return true;
    			}
    			//檢查email
	    		function checkEmail() {
	    			email = document.getElementById("email").value;
	    			var emailpatten = new RegExp(/^[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/);
	    			
	    			if (email == "") {
	    				//顯示email錯誤在文字下方
	    				//document.getElementById("emailAlert").innerHTML = "<font color=red><b>你必須輸入email</b></font>";
	    				alert('email不能為空白');
						return false;
	    			}else if(!(email.match(emailpatten))){
	    				alert('email格式錯誤');
						return false;
		    			}
	    				return true;
    			}
	    		
				//檢查密碼
				function checkPassword() {
					password = document.getElementById("password").value;
					var passwordpatten = new RegExp(/^[A-Za-z0-9]{6,18}[A-Z]{1}$/);
					
					if (password == "") {
						//document.getElementById("passwordAlert").innerHTML = "<font color=red><b>你必須輸入密碼</b></font>";
						alert('密碼不能為空白');
						return false;
					}else if(!(password.match(passwordpatten))){
	    				alert('密碼格式錯誤');
						return false;
	    			}
						return true;
				}
				
				//檢查密碼兩次輸入是否正確
				function checkTwoPasswords() {
					password = document.getElementById("password").value;
					confirm_password = document.getElementById("password_check").value;
	
					if(password != confirm_password){
						//document.getElementById("confirm_passwordAlert").innerHTML = "<font color=red><b>密碼必須相符合</b></font>";
						alert('兩個密碼必須相同');
						return false;
					}
						return true;
				}
				
				
				function nnShow()	{
				
					var value = document.getElementById("nn").value;
    					switch(value){
    					
    					case "886":
    						document.getElementById("nnAlert").innerHTML = "<font color=red><b>台灣手機號碼格式9-xxxx-xxxx</b></font>";
    						break;
    					case "60":
    						document.getElementById("nnAlert").innerHTML = "<font color=red><b>馬來西亞手機號碼格式1-xxxx-xxxx</b></font>";
    						break;
        				case "81":
        					document.getElementById("nnAlert").innerHTML = "<font color=red><b>日本手機號碼格式[7,8,9]x-xxxx-xxxx</b></font>";
        					break;
        				case "66":
        					document.getElementById("nnAlert").innerHTML = "<font color=red><b>泰國手機號碼格式[6,8,9]-xxxx-xxxx</b></font>";
        					break;
        				case "86":
        					document.getElementById("nnAlert").innerHTML = "<font color=red><b>中國手機號碼格式1xx-xxxx-xxxx</b></font>";
        					break;
        				}
				};

        			
    				function checkPhone() {
        				var n = document.getElementById("nn").value;
        				var phonenumber = document.getElementById("phonenumber").value;
        				if (phonenumber == ""){
        					alert('請填入手機號碼');
            				}
    					if (n == 886) {
							//台灣手機號碼檢查
    						var patten = new RegExp(/^[9]{1}-[0-9]{4}-[0-9]{4}$/);
							if (!(phonenumber.match(patten))){
    							//document.getElementById("confirm_passwordAlert").innerHTML = "<font color=red><b>不符合台灣手機格式</b></font>";
    							alert('不符合台灣手機格式');
    							return false;
							}else{
								return true;
							}
        				}else if(n == 60){
    						var patten = new RegExp(/^[1]{1}-[0-9]{4}-[0-9]{4}$/);
    						if (!(phonenumber.match(patten))){
    							//document.getElementById("confirm_passwordAlert").innerHTML = "<font color=red><b>不符合馬來西亞手機格式</b></font>";
    							alert('不符合馬來西亞手機格式');
    							return false;
    						}else{
								return true;
							}
        				}else if(n == 81){
    						var patten = new RegExp(/^[7,8,9]{1}[0-9]{1}-[0-9]{4}-[0-9]{4}$/);
    						if (!(phonenumber.match(patten))){
    							//document.getElementById("confirm_passwordAlert").innerHTML = "<font color=red><b>不符合日本手機格式</b></font>";
    							alert('不符合日本手機格式');
    							return false;
    						}else{
								return true;
							}
        				}else if(n == 66){
    						var patten = new RegExp(/^[6,8,9]{1}-[0-9]{4}-[0-9]{4}$/);
    						if (!(phonenumber.match(patten))){
    							//document.getElementById("confirm_passwordAlert").innerHTML = "<font color=red><b>不符合泰國手機格式</b></font>";
    							alert('不符合泰國手機格式');
    							return false;
    						}else{
								return true;
							}
        				}else if(n == 86){
    						var patten = new RegExp(/^[1]{1}[0-9]{2}-[0-9]{4}-[0-9]{4}$/);
    						if (!(phonenumber.match(patten))){
    							//document.getElementById("confirm_passwordAlert").innerHTML = "<font color=red><b>不符合中國手機格式</b></font>";
    							alert('不符合中國手機格式');
    							return false;
    						}else{
								return true;
							}
        				}
    				}
    				/*
				function codeCheck(){
					var typeCode = document.getElementById("typeCode").value;
					var sessionCode = "<?php //echo $_SESSION["check_code"]?>";
					alert(typeCode);
					alert(sessionCode);

					/*
					if (typeCode != sessionCode){
							alert('驗證碼錯誤');
						}else{
							alert('驗證碼正確');
						}
					*/
					//}
					
		</script>
	</head>
	<body>
<!-- onsubmit="return accountCheck(),checkEmail(),checkPassword(),checkTwoPasswords(),checkPhone();" -->
		<form name="reg_form" action="registration_check.php" method="post" >
			帳號：<input type="text" name="account" id="account"    
    			value=<?php if (isset($_SESSION['account'])){
                echo $_SESSION['account'];
    			}?> /> 
                <?php echo "前2個必須是英文字母";?><br>
			<div id="accountAlert">
			</div>
			<br>
			Email：<input type="text" name="email" id="email" 
			value=<?php if (isset($_SESSION['email'])){
			    echo $_SESSION['email'];
			}?> /> 
			    <?php echo "xxx@yyyy.zzz";?><br>
			<div id="emailAlert">
			</div>
			<br>
			密碼：<input type="password" name="password" id="password" > <?php echo "至少6個英數混和與一個大寫字母";?><br>
			<div id="passwordAlert"></div>
			<br>
			密碼確認：<input type="password" name="password_check" id="password_check" > <br>
			<div id="confirm_passwordAlert"></div>
			<br>
			國家代碼：
			<select name="nn" id="nn" onchange="nnShow()">
				<option value="xx"></option>
				<option value="886">台灣</option>
				<option value="60">馬來西亞</option>
				<option value="81">日本</option>
				<option value="66">泰國</option>
				<option value="86">中國</option>
			</select>
			手機號碼：<input type="text" name="phonenumber" id="phonenumber" 
			value=<?php if (isset($_SESSION['number'])){
			    echo $_SESSION['number'];
			}?>> <br>
			
			<div id="nnAlert"></div>			
			<div id="numberdAlert"></div>
			<br>
			<!-- 自動設定角色為使用者1為使用者 -->
			<input type="hidden" name="role" value="1"> <br>
			
			驗證碼：<input type="text" name="typeCode" id="typeCode"> &nbsp; <img src="code_born.php" ><br>
			<!--  
			<input type="hidden" name="sessionCode" id="sessionCode" 
			value=
			<?php //if(isset($_SESSION["check_code"])){
			     // echo $_SESSION["check_code"];
			 //}?> >
			 -->
			<!-- accountCheck(),checkEmail(),checkPassword(),checkTwoPasswords(),checkPhone()-->
			<p><input type="button" onclick="accountCheck(),checkEmail(),checkPassword(),checkTwoPasswords(),checkPhone()" value="送出"></p>
		</form>
	</body>
</html>