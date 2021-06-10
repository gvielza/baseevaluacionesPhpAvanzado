<?php
class BasedeDatos{
    private $conexion;
    public $error;

    function __construct($servidor, $usuario,$pass,$base)
    {
        if(!$this->_connect($servidor,$usuario,$pass,$base)){
        	$this->error=$this->conexion->connect_error;
        }
    }
    public function __destruct(){
    	$this->conexion->close();
    }
    public function _connect($servidor,$usuario,$pass,$base){
        $this->conexion= new mysqli($servidor,$usuario,$pass,$base);
        if(!$this->conexion->connect_errno){
            $this->error=$this->conexion->connect_error;
            return false;
}
    }
    public function enviarConsulta($query){
        $tipo=strtoupper(substr($query, 0,6));
        switch ($tipo) {
            case 'INSERT':
                $resultado=$this->conexion->query($query);
                return $resultado;
                break;
            case 'SELECT':
                $resultado=$this->conexion->query($query);
                while($fila=$resultado->fetch_assoc()){
                    $array_result[]=$fila;
                }
            return $array_result;
            break;
            case 'UPDATE':
            case 'DELETE':
                $resultado=$this->conexion->query($query);
                return $this->conexion->affected_rows;
                break;
            default:
               $this->error='Codigo incorrecto';
                break;
        }
    }
}
?>