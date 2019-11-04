<?php
session_start();
$checkcode="";

//檢查要求使用者所輸入的值是不是為空的
//檢查驗證碼
if (empty($_POST["type_code"])){
    echo "<script>alert('驗證碼空白');location.href='registration.php';</script>";
    //header("location:registration.php");
}else{
    $checkcode = $_POST["type_code"];
    if($_SESSION["check_code"] != $checkcode){
        echo "<script>alert('驗證碼錯誤');location.href='registration.php';</script>";
    }
}
//echo "001";

//檢查帳號
$preg_a = ((preg_match("/^[A-Za-z][A-Za-z]+[A-Za-z0-9_.]{1,10}$/", $_POST['account'])));

if ((empty($_POST['account'])) || ($preg_a == 0)){
    echo "<script>alert('帳號錯誤');location.href='registration.php';</script>";
    $_SESSION["account"]=$_POST['account'];
    //header("location:registration.php");
}else {
    $_SESSION["account"]=$_POST['account'];
}

/*
//echo "002";
//檢查密碼和確認密碼是相同
if ($_POST['password'] != $_POST['password_check']){
    header("location:registration.php");
}

//echo "003";
/*
//檢查密碼
$preg_p = ((preg_match("/^[A-Za-z0-9]{6,18}[A-Z]{1}$/", $_POST['password'])));

if ((empty($_POST['password'])) || ($preg_p == 0)){
    header("location:registration.php");
}else{
    $_SESSION["password"]=$_POST['password'];
}
//echo "004";

//檢查email
$preg_e = ((preg_match("/^[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/", $_POST['email'])));

if ((empty($_POST['email'])) || ($preg_e == 0)){
    header("location:registration.php");
    //echo "email不正確";
}else{
    $_SESSION["email"]=$_POST['email'];
    //echo "email正確";
}
//echo "005";

if (empty($_POST["phone_number"])){
    header("location:registration.php");
}else{
    $_SESSION["phone_number"]= $_POST["phone_number"];
}
//echo "006";
        //這邊要檢查手機號碼
        $_SESSION["nn"]= $_POST["nn"];
        if ($_SESSION["nn"] == 886){
           $preg_866 = (preg_match("/^[9]{1}+[0-9]{8}$/", $_SESSION["phone_number"]));
           if( $preg_866 == 0){
               header("location:registration.php");
               echo "007-1";
            }else{
                header('location:registration_insert.php');
                echo "007-2";
            }
        }
        
        if ($_SESSION["nn"] == 60){
            $preg_60 = (preg_match("/^[1]{1}+[0-9]{8}$/", $_SESSION["phone_number"]));
            if( $preg_60 == 0){
                header("location:registration.php");
            }else{
                header('location:registration_insert.php');
            }
        }
        
        if ($_SESSION["nn"] == 81){
            $preg_81 = (preg_match("/^[7-9]{1}+[0]{1}+[0-9]{8}$/", $_SESSION["phone_number"]));
            if( $preg_81 == 0){
                header("location:registration.php");
            }else{
                header('location:registration_insert.php');
            }
        }
        
        if ($_SESSION["nn"] == 66){
            $preg_81 = (preg_match("/^[6]{1}|[8-9]{1}+[0-9]{8}$/", $_SESSION["phone_number"]));
            if( $preg_81 == 0){
                header("location:registration.php");
            }else{
                header('location:registration_insert.php');
            }
        }
        
        if ($_SESSION["nn"] == 86){
            $preg_81 = (preg_match("/^[1]{1}+[0-9]{10}$/", $_SESSION["phone_number"]));
            if( $preg_81 == 0){
                header("location:registration.php");
            }else{
                header('location:registration_insert.php');
            }
        }
