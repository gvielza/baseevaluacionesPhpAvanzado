<?php
include('clases/basededatos.php');
include('clases/carrito.php');
include('contantes.php');
$base=new BasedeDatos(SERVIDOR,USUARIO,PASS,BASE);
$a=new Carrito($base);
$a->eliminar($_GET['id']);
header("Location: vercarrito.php");
?>