<?php
    $server="127.0.0.1:8081";
    $db_name="login_db";
    $db_user="login20190909";
    $db_password="Hh20190909!";
    
    $connect = mysqli_connect($server, $db_user, $db_password, $db_name);
    
    if (mysqli_connect_error()){
        echo("連線失敗".mysqli_connect_error());
    }

?>