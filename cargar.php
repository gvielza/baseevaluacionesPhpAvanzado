<?php
session_start();
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$consulta = $_POST['consulta'];
include('conexion.php');
if($_POST['codigo']==$_SESSION['captcha']){
    mysqli_query($conexion_bd, "INSERT INTO consultas VALUES('$nombre', '$apellido', DEFAULT,'$email','$consulta' )");
    header("Location:unidad5.php?ok");
}if($_POST['codigo']!=$_SESSION['captcha']){
    header("Location:unidad5.php?error");   
}
?>