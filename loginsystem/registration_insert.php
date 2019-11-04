<!DOCTYPE html>
<html>
<head>
</head>
    <body>
        <?php
            session_start();
            require_once("connect_db.php");
            $account=$_POST['account'];
            if(isset($account))
            $email =$_POST['email'];
            $password =$_POST['password'];
            $checkcode = $_POST["check_code"];
            $nn = $_POST["nn"];
            $number = $_POST[""];
            $role =$_POST['role'];
            $rule_account ="/^[A-Z][A-Z]+[A-Za-z0-9_.]$/";
            $rule_password ="/(^\w+[-+.](\w+))*@[A-Za-z0-9]*\.\w+)$/";

            //這邊要檢查帳號，密碼，驗證碼
            
            if (!($account).match($rule_account)){
                header('location:registration.php');
            }
            if (!($password).match($rule_password)){
                 header('location:registration.php');
            }
            if (($checkcode) != ($_SESSION["check_code"])){
                 header('location:registration.php');
            }
            //這邊要檢查手機號碼
            if ($nn == 866){
                if(!($number.match("/^[9]{1}+[0-9]{8}$/"))){
                    header("location:registration.php");
                }
            }else if ($nn == 60){
                if(!($number.match("/^[1]{1}+[0-9]{8}$/"))){
                     header("location:registration.php");
                }
            }else if ($nn == 81){
                if(!($number.match("/^[7-9]{1}+[0]{1}+[0-9]{8}$/"))){
                    header("location:registration.php");
                }
            }else if ($nn == 66){
                if(!($number.match("/^[6]{1}|[8-9]{1}+[0-9]{8}$/"))){
                    header("location:registration.php");
                }
            }else if ($nn == 86){
                if(!($number.match("/^[1]{1}+[0-9]{10}$/"))){
                    header("location:registration.php");
                }
            }

            
            //先查詢DB檢查email有沒有重複，沒有才能insert進入DB
            $sql_query = "SELECT email FROM account ";
            
            $result = $conn->query($sql_query) or die('MySQL query error');
            
            while($row = mysqli_fetch_array($result)){ //將陣列以欄位名索引

                $db_email=$row['email'];
                              
                if($email = $db_email) {
                    header('location:index.html');
                }
            }
            $sql_insert = "INSERT INTO account(email, password, role) VALUES ('$email','$password','$role')";
            $result = $connect->query($sql_insert) or die('MySQL insert error');
            mysqli_close($connect); //關閉資料庫連結
            
            header('location:index.html');  //回index   
         ?>
    </body>
</html>