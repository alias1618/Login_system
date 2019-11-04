<?php
session_start();
require_once("connnect_db.php");
if (empty($_SESSION['role'])){
    header("location:index.php");
}else if ($_SESSION['role'] != 0){
    header("Location:index.php");
}

$id=$_POST['id'];

$sql_query = "DELETE * FROM account id = $id";
$result = $conn->query($sql_query) or die('MySQL query error');
mysqli_free_result($result);
header("Location: account_management.php");
?>