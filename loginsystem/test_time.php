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
    }
    elseif(!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
        $cip = $_SERVER["HTTP_X_FORWARDED_FOR"];
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
echo $ip;

$sql_insert = "INSERT INTO info_time(id, user_ip, user_time, user_day) VALUES ('$id','$ip','$new_time','$new_day')";
$result = $conn->query($sql_insert) or die('MySQL insert error');
mysqli_close($conn); //關閉資料庫連結


if ($_SESSION['role'] == 0){
    header("Location: account_management.php");
}else if ($_SESSION['role'] == 1){
    header("Location: login_success.php");
}else if ($_SESSION['role'] == 2){
    header("Location: index.php");
}
?>