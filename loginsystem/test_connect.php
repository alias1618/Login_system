<?php
$servername = "localhost";
$username = "login20190909";
$password = "!@20190909";
$db_name = "login_db";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>