<?php
session_start();
$checkcode = $_POST["check_code"];

$_SESSION["account"]=$_POST['account'];
$_SESSION["password"]=$_POST['password'];
$_SESSION["email"]=$_POST['email'];
$_SESSION["nn"]= $_POST["nn"];
$_SESSION["phone_number"]= $_POST["phone_number"];
//$role =$_POST['role'];
//$rule_account ="/^[A-Z][A-Z]+[A-Za-z0-9_.]$/";
//$rule_password ="/(^\w+[-+.](\w+))*@[A-Za-z0-9]*\.\w+)$/";


//header('location:registration.php');
//echo "003";
$preg_a = ((preg_match("/^[A-Za-z][A-Za-z]+[A-Za-z0-9_.]{1,10}$/", $account)));
$preg_p = ((preg_match("/^[A-Za-z0-9]{6,18}[A-Z]{1}$/", $password)));
$preg_e = ((preg_match("/^[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/", $email)));

if (($checkcode == $_SESSION["check_code"])){
    if (($preg_a == 0)||($preg_p == 0)||($preg_e == 0)){
        //這邊要檢查手機號碼
        if ($nn == 866){
            if(!(preg_match("/^[9]{1}+[0-9]{8}$/", $number))){
                //header("location:registration.php");
                echo "004";
            }
        }else if ($nn == 60){
            if(!(preg_match("/^[1]{1}+[0-9]{8}$/", $number))){
                //header("location:registration.php");
                echo "005";
            }
        }else if ($nn == 81){
            if(!(preg_match("/^[7-9]{1}+[0]{1}+[0-9]{8}$/", $number))){
                //header("location:registration.php");
                echo "006";
            }
        }else if ($nn == 66){
            if(!(preg_match("/^[6]{1}|[8-9]{1}+[0-9]{8}$/", $number))){
                //header("location:registration.php");
                echo "007";
            }
        }else if ($nn == 86){
            if(!(preg_match("/^[1]{1}+[0-9]{10}$/", $number))){
                //header("location:registration.php");
                echo "008";
            }
        }
        echo "001";
    }header('location:registration_insert.php');
    /*
     echo $checkcode;
     echo "002";
     echo $_SESSION["check_code"];
    */
}

/*
 //這邊要檢查帳號，密碼，驗證碼
 if (($checkcode) == ($_SESSION["check_code"])){
 if ((preg_match("/^[A-Za-z][A-Za-z]+[A-Za-z0-9_.]$/", $account))){
 if ((preg_match("/^\w{6}+[A-Z]{1}$/", $password))){
 if ((preg_match("/^([\w\.\-]){1,20}\@([\w\.\-]){1,20}$/", $email))){
 }
 }
 }
 }else {
 header('location:registration.php');
 }
 */

/*
 if (!(preg_match("/^[A-Za-z][A-Za-z]+[A-Za-z0-9_.]$/", $account))){
 
 echo "101";
 echo "<script>alert('帳號前兩個字母必須是英文字母');
 location.href = 'registration.php';</script>";
 header('location:registration.php');
 }else  if (!(preg_match("/^\w{6}+[A-Z]{1}$/", $password))){
 //header('location:registration.php');
 echo "001";
 }
 if (!(preg_match("/^([\w\.\-]){1,20}\@([\w\.\-]){1,20}$/", $email))){
 //header('location:registration.php');
 echo "002";
 }
 if (($checkcode) != ($_SESSION["check_code"])){
 //header('location:registration.php');
 echo "003";
 }
 */
/*
//這邊要檢查手機號碼
if ($nn == 866){
    if(!(preg_match("/^[9]{1}+[0-9]{8}$/", $number))){
        //header("location:registration.php");
        echo "004";
    }
}else if ($nn == 60){
    if(!(preg_match("/^[1]{1}+[0-9]{8}$/", $number))){
        //header("location:registration.php");
        echo "005";
    }
}else if ($nn == 81){
    if(!(preg_match("/^[7-9]{1}+[0]{1}+[0-9]{8}$/", $number))){
        //header("location:registration.php");
        echo "006";
    }
}else if ($nn == 66){
    if(!(preg_match("/^[6]{1}|[8-9]{1}+[0-9]{8}$/", $number))){
        //header("location:registration.php");
        echo "007";
    }
}else if ($nn == 86){
    if(!(preg_match("/^[1]{1}+[0-9]{10}$/", $number))){
        //header("location:registration.php");
        echo "008";
    }
}
*/
?>
<!-- 
<html>
<head>
</head>
    <body>
        <form action="registration_insert.php" method="post">
            <input type="hidden" name="account" value="<?php //echo $account?>" />
        	<input type="hidden" name="password" value="<?php //echo $password?>" />
        	<input type="hidden" name="email" value="<?php //echo $email?>" />
        	<input type="hidden" name="nn" value="<?php //echo $nn?>" />
        	<input type="hidden" name="number" value="<?php //echo $number?>" />
        	
        </form>
    </body>
</html>
 -->