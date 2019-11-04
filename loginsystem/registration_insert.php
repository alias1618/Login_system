<!DOCTYPE html>
<html>
<head>
</head>
    <body>
        <?php
            session_start();
            require_once("connect_db.php");
            $account=$_SESSION["account"];
            $password =$_SESSION["password"];
            $email =$_SESSION["email"];
            //$checkcode = $_POST["check_code"];
            $nn = $_SESSION["nn"];
            $number = $_SESSION["phone_number"];
            $role ="1";

            
            //先查詢DB檢查email有沒有重複，沒有才能insert進入DB
            $sql_query = "SELECT * FROM account WHERE email = '$email'";
            $result = $conn->query($sql_query) or die('MySQL query error');
            $row = mysqli_fetch_array($result); //將陣列以欄位名索引
            $db_email=$row['email'];
                              
            if($email == $db_email) {
                header('location:index.php');
                //echo "失敗";
            }else { 
            $sql_insert = "INSERT INTO account(username, email, password, number, role) VALUES ('$account','$email','$password', '$number','$role')";
            $result = $conn->query($sql_insert) or die('MySQL insert error');
            mysqli_close($conn); //關閉資料庫連結
            
            header('location:index.php');  //回index 
            //echo "成功";
            }
         ?>
    </body>
</html>