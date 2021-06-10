<?php
include("caract_usuarios.php");
class Usuario{
private $nombre;
private $apellidos;
private $fecha_nacimiento;
   
public function __construct($nombre, $apellidos, $fecha_nacimiento){
$this->nombre = $nombre;
$this->apellidos = $apellidos;
$this->fecha_nacimiento = $fecha_nacimiento;
}
private function calcular_edad(){
    $fecha_actual=date("d-m-Y");
    $resta=strtotime($fecha_actual) - strtotime($this->fecha_nacimiento);    

		$edad=intval($resta/86400/365);

      	echo "Su edad es: ".$edad."<br/>"."<br/>";
}
public function imprime_carcteristicas(){
echo "Su nombre es: ".$this->nombre."<br/>";
echo "Su apellido es: ".$this->apellidos."<br/>";
$this->calcular_edad();

}
    }
  ?>