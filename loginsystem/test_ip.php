<?php
/*

time();

echo time();
*/

session_id();
//
If (!isset($_SESSION['login_time'])){
	$_SESSION['login_time'] = time();
	$login_time= $_SESSION['login_time'];
	$session_id = session_id();
	$Sql_insert = "INSERT INTO table (id, login_time, session_id) VALUES ('$id', '$login_time', '$session_id')";
	$result = $conn->query($sql_insert) or die('MySQL insert error');
	mysqli_close($conn);
	//沒有任何登入紀錄
}else if(time()-$_SESSION['login_time'] > 1200 ){
    //假如目前時間減掉login_time時間大於20分鐘，表示在閒置
    header("location:logout.php");
}else{
    //有login_time但是沒有閒置超過20分鐘，這時要檢查重複登入
    $sql_query = "SELECT * FROM table WHERE id=$id";
    $result = $conn->query($sql_query) or die('MySQL query error');
    $row = mysqli_fetch_array($result); 
    $id =$row['id'];
    $login_time =$row['login_time'];
    $session_id =$row['session_id'];
    if ($session_id != session_id()){
        header("location:index.php");
    }
}


?> 