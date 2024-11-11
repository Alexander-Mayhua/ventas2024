<?php
require_once "../librerias/conexion.php";


//categoria
class productoListarModel{
    private $conexion ;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    public function obtener_compras(){
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT * FROM producto");

        while($objeto= $respuesta->fetch_object()){
            array_push($arrRespuesta,$objeto);
        }
        return $arrRespuesta;
    }
}
?>