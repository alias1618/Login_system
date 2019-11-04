<?php
session_start();
require_once("connect_db.php");

if ($_POST["typecode"] != $_SESSION["check_code"]){
    header("Location: index.html");
}


if ($_POST["account"]) {
    $username = $_POST["account"];
}

if ($_POST["password"]) {
    $password = $_POST["password"];
}

if (($username != "") && ($password != "")) {

    
    $sql = "SELECT * FROM account WHERE username = '$username' AND password = '$password'";
    
    $result = mysqli_query($connect, $sql);
    $row_cnt = mysqli_num_rows($result);
    
    if ($row_cnt == false) {
        
        header("Location: index.html");
         
    }else {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $row["id"];
        $_SESSION['role'] = $row["role"];
        if ($_SESSION['role'] == 0){
            header("Location: account_management.php");
        }else if ($_SESSION['role'] == 1){
            header("Location: login_success.html");
        }else if ($_SESSION['role'] == 2){
            header("Location: index.php");
            /* 要顯示帳號被封鎖*/
        }
    }
}else {
    header("Location: index.html");
}
?>