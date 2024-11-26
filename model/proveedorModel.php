<?php
require_once "../librerias/conexion.php";

class proveedorModel {
    private $conexion;

    function __construct() {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    public function obtener_proveedor() {
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT * FROM persona where rol='proveedor'");

        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
        }
        return $arrRespuesta;
    }
/* */
    public function obtener_proveedores($id){
        $respuestas= $this->conexion->query("SELECT * FROM persona where rol='proveedor'");
        $objeto=$respuestas->fetch_object();
        return $objeto;
        
           }
}
?>