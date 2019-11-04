<?php
session_start();
require_once("connect_db.php");
if ($_SESSION['role'] != 0){
    header("Location:index.php");
}
$id = $_GET['id'];

$sql_delete = "DELETE FROM account WHERE id = '$id'";
$result = $conn->query($sql_delete) or die('MySQL delete error');
mysqli_close ($conn);
header("location:account_management.php");
?>