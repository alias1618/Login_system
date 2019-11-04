<?php
    $server="localhost";
    $db_user="login20190909";
    $db_password="!@20190909";
    $db_name="login_db";
    
    $conn = mysqli_connect($server, $db_user, $db_password, $db_name);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
?>