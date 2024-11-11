<?php
require_once "../librerias/conexion.php";
class comprasModel{
    private $conexion ;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    public function registrarProducto($producto,$cantidad,$precio,$fecha_compra,$trabajador){
     $sql = $this->conexion->query("CALL insertarCompra('{$producto}','{$cantidad}','{$precio}',
                                                     '{$fecha_compra}','{$trabajador}')");

           $sql = $sql->fetch_object() ;
           return $sql;                                         
    }


    /*//actualizar imagen
    public function actualizar_imagen($id,$imagen){
        $sql= $this->conexion->query("UPDATE producto set imagen='{$imagen}' where id='{$id}'");
        return 1;
    }*/
}
?>