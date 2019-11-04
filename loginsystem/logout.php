<?php
session_start();
require_once("connect_db.php");
$id = $_SESSION['id'];
$sql_delete = "DELETE FROM table WHERE id = '$id'";
$result = $conn->query($sql_delete) or die('MySQL delete error');
mysqli_close ($conn);

session_destory();


header("location:index.php");
?>