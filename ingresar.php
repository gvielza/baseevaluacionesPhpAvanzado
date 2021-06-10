<?php
include("includes/password.php");
$email=$_POST['email'];
$pass=$_POST['clave'];
$bd=mysqli_connect("localhost", "root", "", "agenda_clases") or die ("Error al conectar con la base de datos");
$consulta=mysqli_query($bd, "SELECT claves FROM usuarios_sitio WHERE correo='$email'");
$codificado = mysqli_fetch_array($consulta);
$iguales = password_verify($pass, $codificado['claves']);
if ($iguales&&$email!=null) {
 header("Location: unidad8_2.php?verificado");
} else {
 header("Location: unidad8_2.php?error");
}

?>