<?php
session_start();
header('Content-type: image/png');
$width= 100;
$hight= 15;
$code="";
$code_max=4;
$image="";

        for ($i = 0; $i<$code_max; $i++){
            $code.=rand(0,9);
        }
    
    $_SESSION["check_code"]=$code;

    $image = imagecreate($width, $hight);
    $white = imagecolorallocate($image, 255, 255, 255);
    $black = imagecolorallocate($image, 0, 0, 255);
    
    
    imagestring($image, 20, 8, 0, $code, $black);
    
    
    imagepng($image);

    imagedestroy($image);




?>