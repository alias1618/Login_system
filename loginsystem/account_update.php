<?php
require_once("connect_db.php");
session_start();

if ($_SESSION['role'] ==""){
    header("location:index.php");
}else if ($_SESSION['role'] != 0){
    header("Location:index.php");
}
//檢查密碼和確認密碼是相同
if ($_POST['password'] != $_POST['password_check']){
    header("location:account_edit.php");
}

$id=$_POST['id'];
$email=$_POST['email'];
$password=$_POST['password'];
$rolearray =$_POST['role'];
$role = implode(",",$rolearray);

$sql_update="UPDATE account SET role='$role',email='$email', password='$password' WHERE id='$id'";  //更新資料
$result = $conn->query($sql_update) or die('MySQL update error');
mysqli_close($conn); //關閉資料庫連結
header( 'location:account_management.php');  //回index.php
?>