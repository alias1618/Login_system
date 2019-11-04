<meta charset="utf-8">
<?php
session_start();
if($_SESSION['check_code']==$_POST['checkcode']){
    $_SESSION['check_code']="";
    header("Location: http://localhost.xxxxxxxxxx");
}else{
    
}
?>