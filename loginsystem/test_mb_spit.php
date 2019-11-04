<?php


$account = $_SESSION['account'];
$id=$_SESSION['id'];

//$session_id = session_id();
$sql = "SELECT * FROM table_session WHERE id = '$id' AND session_id = '$account'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

if ($row != $session_id ){
    $sql = "UPDATE table_session SET id = '$id' AND session_id = '$session_id'";
    $result = $conn->query($sql_update) or die('MySQL update error');
}else {
    
}
?>