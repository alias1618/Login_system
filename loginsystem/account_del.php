<?php
session_start();
require_once("connnect_db.php");

$id=$_POST['id'];

$sql_query = "DELETE * FROM account id = $id";
$result = $connect->query($sql_query) or die('MySQL query error');
mysqli_free_result($result);
header("Location: account_management.php");