<?php
include ('basededatos.php');
include ('../contantes.php');
include ('carrito.php');
$base=new BasedeDatos(SERVIDOR,USUARIO,PASS,BASE);
class Producto{
    private $codigo;
    private $producto;
    private $descripcion;
    private $precio;

   function __construct($codigo,$producto,$descripcion,$precio)
   {
       $this->codigo=$codigo;
       $this->producto=$producto;
       $this->descripcion=$descripcion;
       $this->precio=$precio;
   }

}

?>