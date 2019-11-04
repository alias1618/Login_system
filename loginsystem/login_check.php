<?php
session_start();
require_once("connect_db.php");     

if (empty($_SESSION['role'])){
    header("location:index.php");
}

if ($_POST["typecode"] != $_SESSION["check_code"]){
    header("Location: index.html");
}


if ($_POST["account"]) {
    $username = $_POST["account"];
    $_SESSION['account'] = $_POST["account"];
}

if ($_POST["password"]) {
    $password = $_POST["password"];
}

if (($username != "") && ($password != "")) {

    
    $sql = "SELECT * FROM account WHERE username = '$username' AND password = '$password'";
    
    $result = mysqli_query($conn, $sql);
    $row_cnt = mysqli_num_rows($result);
    
    if ($row_cnt == false) {
        
        header("Location: index.php");
         
    }else {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $row["id"];
        $_SESSION['role'] = $row["role"];
        header("Location: test_time.php");
        /*
        if ($_SESSION['role'] == 0){
            header("Location: account_management.php");
        }else if ($_SESSION['role'] == 1){
            header("Location: login_success.php");
        }else if ($_SESSION['role'] == 2){
            header("Location: index.php");
        }
        */
    }
}else {
    header("Location: index.php");
}
?>