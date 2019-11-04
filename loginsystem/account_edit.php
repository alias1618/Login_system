<?php
require_once("connnect_db.php");
session_start();
/*
if ($_SESSION['role'] != 0){
    header("Location: http://localhost/index.html");
}
$role=""; $email=""; //$password="";
*/
$id=$_GET['id'];//取得ID

if(isset($_POST['update'])){
    
}
else {
    $sql_query = "SELECT * FROM account WHERE id=$id";
    $result = $connect->query($sql_query) or die('MySQL query error');
    $row = mysqli_fetch_array($result); 
    //$username =$row['username'];
    $email=$row['email'];
    $password=$row['password'];
    $role=$row['role'];
    mysqli_free_result($result);
}

?>
<html>
	<head>
		<script>
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
				confirm_password = document.getElementById("confirm_password").value;

				if(password != confirm_password){
					document.getElementById("confirm_passwordAlert").innerHTML = "<font color=red><b>密碼必須相同</b></font>";
				}
			}
			
		</script>
	</head>
	<body>
        <form action="account_update.php" method="post" >
        
        	<label for="id"> id:</label><?php echo $id?>
        	<br>
        	<input type="hidden" name="id" value="<?php echo $id?>" />
        	<br>

             <label for="email">Email:</label>
             <Input Type="text" Name="email" id="email"value="<?php echo $email?>" onblur="checkEmail();"/><br>
             <div id="emailAlert">
             </div>        
             <br>
         
             <label for="password">Password:</label>
             <Input Type="text" Name="password" id="password" value="<?php echo $password?>" onblur="checkPassword();"/><br>
             <div id="passwordAlert">
             </div>
             <br>
             
        	 <label for="confirm password">Confirm Password:</label>
             <Input Type="text" Name="confirm_password" id="confirm_password" onblur="checkTwoPasswords();"/><br>
             <div id="confirm_passwordAlert">
             </div>
             
             <br>
             <br>
             Role：
             <input type="checkbox" name="role[]" value="0"> 管理者
             <input type="checkbox" name="role[]" value="1"> 使用者
             <input type="checkbox" name="role[]" value="2"> 帳號封鎖
             <br>         
             <br>
        
             <input type="submit" value="Update" name="update" />
             <input type="button" value="Cancel" onclick="location.href='account_management.php'">
        </form>
    </body>
</html>