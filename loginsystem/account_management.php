<html>
	<head>
		<title>資料庫管理</title>
	</head>
<body>
    
     <?php
     session_start();
     if ($_SESSION['role'] != 0){
         header("Location: http://localhost/index.php");
     }
      echo '請輸入資料'."<p>";
      $_SESSION["email_password_empty"] = false;
      //$_SESSION["passwordisempty"] = false;
      $_SESSION["passnotconfirm"] = false;
     ?>
 	<br>
 	<br>
    <table  border="1">
    <tr>
    	<td>id</td>
        
        <td>帳號</td>
        
        <td>Email</td>
        
        <td>角色</td>
        
        <td>更新帳號資料</td>
              
        <td>刪除帳號</td>
    </tr>

    <?php
    require_once("connnet_db.php");
    
    $sql_query = "SELECT * FROM account ";

    $result = $conn->query($sql_query) or die('MySQL query error');
        
    while($row = mysqli_fetch_array($result)){ //將陣列以欄位名索引   
          $id =$row['id'];
          $username =$row['username'];
          $email=$row['email'];
          $role=$row['role'];
    ?>
        <tr>      
            <td> <?php echo $username;  ?></td>

            <td><?php echo $email;   ?></td> 
            
            <td><?php echo $role; ?></td>       
            
            <td><a href="account_edit.php?id=<?php echo $id; ?>">更新帳號資料</a></td>
                                           	
        	<td><a href="delete.php?id=<?php echo $id; ?>">刪除帳號</a></td>
            
        </tr>
    <?php }   ?>
    
	</table>
	</body>
</html>
