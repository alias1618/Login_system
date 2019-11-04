<!DOCTYPE html>
<?php 
session_start();
//require_once("connect_db.php");
//<?php $_SESSION["check_code"] 

?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Insert title here</title>
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
	</head>
	<body>
		<form name="login_form" action="login_check.php" method="post">
			帳號：<input type="text" name="account" id="account"><br>
			<br>
			密碼：<input type="password" name="password" id="password"> <br>
			<br>
			
						<div>
			驗證碼:
			<input type="text" id="in" />&nbsp;
			<div id="out"></div>	<input type="button" onclick="sj()" value=看不清楚驗證碼>
			</div>
			<!--  
			驗證碼： <input type="text" name="typecode" id="typecode" />&nbsp;<img src="code_born.php" >
			<div id="typecodeAlert"></div>    
			-->		
			<p><input type="submit" value="送出" ></p>
			<p><input type="button" value="註冊" onclick="location.href='registration.php'"></p>
		</form>
		
	</body>
	<script type="text/javascript">
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
	
	</script>
</html>