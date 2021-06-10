<?php
session_start();
header("Content-type: image/jpeg");
$imagen=imagecreate(110,40);
$color_fondo=imagecolorallocate($imagen,143, 235, 101);
$color_texto=imagecolorallocate($imagen,28, 2, 4);
$color_linea=imagecolorallocate($imagen,99, 91, 92);
imageline($imagen,100,30,28,10,$color_linea);
imagestring($imagen,5,20,10,$_SESSION['captcha'],$color_texto);
imagejpeg($imagen);
?>