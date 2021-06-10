<?php
class Carrito{
    private $bd;
    public function __construct($base)
    {
      $this->bd=$base;  
    }
    public function agregarProducto($producto,$descripcion,$precio){
    $respuesta=$this->bd->enviarConsulta("INSERT INTO carrito VALUES (DEFAULT,'$producto','$descripcion','$precio')");
    return $respuesta;
    }
    public function eliminar($id){
        $respuesta=$this->bd->enviarConsulta("DELETE FROM carrito WHERE codigo=$id");
        return $respuesta;
    }
    public function listarproductoscarrito(){
       $respuesta=$this->bd->enviarConsulta("SELECT * FROM carrito");
       return $respuesta;
    }
    public function listarproductos(){
      $respuesta=$this->bd->enviarConsulta("SELECT * FROM productos");
      return $respuesta;
          }
          public function getProducto($id){
            $res=$this->bd->enviarConsulta("SELECT * FROM productos WHERE codigo=$id");
            return $res;
          }
          public function agregarAlCarrito($id){
$respuesta=$this->bd->enviarConsulta("INSERT INTO carrito VALUES ");
return $respuesta;
          }
}
?>