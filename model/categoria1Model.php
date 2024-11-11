<?php
require_once "../librerias/conexion.php";
class categoria1Model{
    private $conexion ;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    public function registrarCategoria1($nombre,$detalle){
     $sql = $this->conexion->query("CALL insertarCategoria('{$nombre}','{$detalle}')");

           $sql = $sql->fetch_object() ;
           return $sql;                                         
    }


 /*   //actualizar imagen
    public function actualizar_imagen($id,$imagen){
        $sql= $this->conexion->query("UPDATE producto set imagen='{$imagen}' where id='{$id}'");
        return 1;
    }*/
}
?>