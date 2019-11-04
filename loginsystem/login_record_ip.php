<?php
session_start();
require_once("connect_db.php");
$id=$_SESSION['id'];
//$role=$_SESSION['role'];
date_default_timezone_set("Asia/Taipei");
//$d=mktime(year,day,month,hour,minute,second);
//$d=mktime(hour,minute,second,month,day,year);
//echo "時間".date("Y-m-d ");
//echo "時間".date("H:i:s ");
$day = date("Y-m-d");
$time = date("H:i:s ");
$new_day = str_replace("-","","$day");
$new_time = str_replace(":","","$time");

function GetIP(){
    if(!empty($_SERVER["HTTP_CLIENT_IP"])){
        $cip = $_SERVER["HTTP_CLIENT_IP"];
        //代理端的IP
    }
    elseif(!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
        $cip = $_SERVER["HTTP_X_FORWARDED_FOR"];
        //使用者是在哪個IP使用的代理
    }
    elseif(!empty($_SERVER["REMOTE_ADDR"])){
        $cip = $_SERVER["REMOTE_ADDR"];
    }
    else{
        $cip = "無法取得IP位址！";
    }
    return $cip;
}

$ip = GetIP();


$sql_insert = "INSERT INTO info_time(id, user_ip, user_time, user_day) VALUES ('$id','$ip','$new_time','$new_day')";
$result = $conn->query($sql_insert) or die('MySQL insert error');
/*
//檢查重複登入
if (($_SESSION['login_time'] == "")){
    $_SESSION['login_time'] = time();
    $login_time = $_SESSION['login_time'];
    $session_id = session_id();
    $sql_insert = "INSERT INTO session_table(id, session_id, login_time) VALUES ('$id','$session_id','$login_time')";
    $result = $conn->query($sql_insert) or die('MySQL insert error');

    //沒有任何登入紀錄
}else if(time()-$_SESSION['login_time'] > 1200 ){
    //假如目前時間減掉login_time時間大於20分鐘，表示在閒置
    header("location:logout.php");
    //echo 1200;
}else{
    //有login_time但是沒有閒置超過20分鐘，這時要檢查重複登入
    $sql_query = "SELECT * FROM session_table WHERE id = '$id'";
    $result = $conn->query($sql_query) or die('MySQL query error');
    $row = mysqli_fetch_array($result);
    $id =$row['id'];
    $login_time =$row['login_time'];
    $session_id =$row['session_id'];
    if ($session_id != session_id()){
        header("location:index.php");
    }
}
*/

if ($_SESSION['role'] == 0){
    header("Location: account_management.php");
}else if ($_SESSION['role'] == 1){
    header("Location: login_success.php");
}else if ($_SESSION['role'] == 2){
    header("Location: index.php");
}
?>