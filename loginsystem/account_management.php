<html>
	<head>
		<title>資料庫管理</title>
	</head>
<body>
    
     <?php
     session_start();
     require_once("connect_db.php");
     if (empty($_SESSION['role'])){
         header("location:index.php");
     }else if ($_SESSION['role'] != 0){
         header("Location:index.php");
     }
     ?>
 	<br>
 	<br>
    <table  border="1">
    <tr>
        <td>帳號</td>
        
        <td>Email</td>
        
        <td>角色</td>
        
        <td>更新帳號資料</td>
              
        <td>刪除帳號</td>
    </tr>

    <?php
    
    
    $sql_query = "SELECT * FROM account ";

    $result = $conn->query($sql_query) or die('MySQL query error');
        
    while($row = mysqli_fetch_array($result)){ //將陣列以欄位名索引   
          $id =$row['id'];
          $username =$row['username'];
          $email=$row['email'];
          $role=$row['role'];
    ?>
        <tr>      
            <td><?php echo $username;  ?></td>

            <td><?php echo $email;   ?></td> 
            
            <td><?php echo $role; ?></td>       
            
            <td><a href="account_edit.php?id=<?php echo $id; ?>">更新帳號資料</a></td>
                                           	
        	<td><a href="delete.php?id=<?php echo $id; ?>">刪除帳號</a></td>
            
        </tr>
    <?php }   ?>
    
	</table>
	</body>
</html>
