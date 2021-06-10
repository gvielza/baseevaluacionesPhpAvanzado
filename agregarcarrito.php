<?php
include('clases/basededatos.php');
include('contantes.php');
include('clases/carrito.php');
$base=new BasedeDatos(SERVIDOR,USUARIO,PASS,BASE);
$carrito=new Carrito($base);
$prod=$carrito->getProducto($_GET['id']);
$carrito->agregarProducto($prod[0]['producto'],$prod[0]['descripcion'],$prod[0]['precio']);
header("Location: unidad7.php");
?>