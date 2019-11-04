<!DOCTYPE html>
<html>
<?php session_start();
$account ="";
$email = "";
$phonenumber = "";
?>

		<head>	
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>註冊</title>
		<style type="text/css">
		 #out{
		      
		      width:60px;
		      height:40px;
		      line-height:50px;
		      background: -webkit-linear-gradient(left,green,yellow);
              background: -o-linear-gradient(right,green,yellow);
              background: -moz-linear-gradient(right,green,yellow);
              background: linear-gradient(to right,green,yellow);
		      text-align:center;
		      color:blue;
		 }
		 p{
		      float:left;
		      width:75px;
		      height:20px;    
		 }
		</style>
		
		<!--  
		<style type="text/css">
		#code{
    		font-family:Arial; 
            font-style:italic; 
            font-weight:bold; 
            border:0; 
            letter-spacing:2px; 
            color:blue; 
		 }
		 
		</style>
		-->
		<!-- onload="sj()" -->
	</head>
	<body >
<!-- onsubmit="return accountCheck(),checkEmail(),checkPassword(),checkTwoPasswords(),checkPhone();" -->
<!--onsubmit="return allCheck();"-->
		<form name="reg_form" action="registration_insert.php" method="post" onsubmit="return allCheck();" >
			帳號：<input type="text" name="account" id="account"    
    			value=<?php echo $account;?>> 
                <?php echo "前2個必須是英文字母";?><br>
			<div id="accountAlert">
			</div>
			<br>
			Email：<input type="text" name="email" id="email" 
			value=<?php echo $email;?>> 
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
			value=<?php echo $phonenumber?>> <br>
			
			<div id="nnAlert"></div>			
			<div id="numberdAlert"></div>

			<!-- 自動設定角色為使用者1為使用者 -->
			<br>
			<!--<p id="code"></p> -->
			
			<div>
			驗證碼:
			<input type="text" id="in" />&nbsp;
			<div id="out"></div>
			<input type="button" onclick="sj()" value=看不清楚驗證碼>
			</div>
<!-- 
			<input type="hidden" name="role" value="1"> <br>
			<p>驗證碼:</p><div id="login"></div><input type="button" onclick="show()" value=看不清楚驗證碼><br><br>
			<input type="text" name="checkcode" id="checkcode"> <!--&nbsp;   <img src="code_born.php" ><br>-->

			<!--  
			<input type="hidden" name="sessionCode" id="sessionCode" 
			value=
			<?php //if(isset($_SESSION["check_code"])){
			     // echo $_SESSION["check_code"];
			 //}?> >
			 
			 </div>
			 -->
			<!-- accountCheck(),checkEmail(),checkPassword(),checkTwoPasswords(),checkPhone()-->
			<p><input type="submit" value="送出"> <!--  type="submit"--> </p>
		</form>
					<script>
					//document.getElementById("out").addEventListener("load", function sj);
					//addLoadEvent(function sj())
					/*
					function addLoadEvent(){
							window.addEventListener("load", function sj);
						}
					*/
					window.onload(sj())
					function sj()
					{
					var sjs=Math.floor(Math.random()*9000)+1000;
					document.getElementById("out").innerHTML=sjs;
					};

					//驗證隨機數的函數
					function check()
					{
						var sr=document.getElementById("in").value;
						var sc=document.getElementById("out").innerHTML;
						if(sr==sc){
    						//alert('驗證碼輸入正確');
    						return true;
						}else{
    						alert('驗證碼輸入有誤');
    						sj();
						return false;
						}
					};
					
					
					/*
						var code = "";
						function code(n){
							var code = "";
							var a ="0123456879";
							var b ="";
    						for (var i= 0;i<n; i++){
    							var index=Math.floor(Math.random()*10);
    							b+=a.charAt(index);	
    						}
    						return b;
    						//code.value = b;
    						};
    						function show(){
    							var code =code(4);
    							document.getElementById("login").innerHTML = code.value;	
						}
    					window.onload=show;	

            			function valiDate(){ 
                			var inputCode = document.getElementById("checkcode").value; //取得輸入的驗證碼並轉化為大寫
                			var test =code();
                    			if(inputCode.length <= 0) { //若輸入的驗證碼長度為0 
                    			alert("請輸入驗證碼！"); //則彈出請輸入驗證碼 
                    			} 
                			else if(inputCode != test ) { //若輸入的驗證碼與產生的驗證碼不一致時 
                    			alert(test); //則彈出驗證碼輸入錯誤 
                    			alert(inputCode);
                    			show();//重新整理驗證碼 
                    			document.getElementById("checkcode").value = "";//清空文字框 
                    			} 
                			else { //輸入正確時 
                    			alert("^-^"); //彈出^-^ 
                    			} 
            			}
					*/
			
				function allCheck(){
					if (accountCheck() == false){
						return false;
					}else	if (checkEmail() == false) {
						return false;
					}else 	if (checkPassword() == false) {
						return false;
					}else	if (checkTwoPasswords() == false) {
						return false;
					}else	if (checkPhone() == false) {
						return false;
					}else	if (check() == false) {
						return false;
					}
					return true;
					};
			
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
    			};
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
    			};
	    		
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
				};
				
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
				};
				
				
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
        					return false;
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
    				};
    				
/*
    				var code ; //在全域性定義驗證碼 
    				//產生驗證碼 
        			function createCode(){ 
        				code = ""; 
        				var codeLength = 4;//驗證碼的長度 
        				var random = new Array(0,1,2,3,4,5,6,7,8,9);//隨機數 
        				for(var i = 0; i < codeLength; i  ) {//迴圈操作 
        				var index = Math.floor(Math.random()*36);//取得隨機數的索引（0~35） 
        				code  = random[index];//根據索引取得隨機數加到code上 
    					} 
    				} 
        			//校驗驗證碼 
        			function validate(){ 
            			var inputCode = document.getElementById("input").value; //取得輸入的驗證碼並轉化為大寫 
            			var test = code;
                			if(inputCode.length <= 0) { //若輸入的驗證碼長度為0 
                			alert("請輸入驗證碼！"); //則彈出請輸入驗證碼 
                			} 
            			else if(inputCode != code ) { //若輸入的驗證碼與產生的驗證碼不一致時 
                			alert("驗證碼輸入錯誤！@_@"); //則彈出驗證碼輸入錯誤 
                			createCode();//重新整理驗證碼 
                			document.getElementById("input").value = "";//清空文字框 
                			} 
            			else { //輸入正確時 
                			alert("^-^"); //彈出^-^ 
                			} 
        			}
 */       			
		</script>
	</body>
</html>