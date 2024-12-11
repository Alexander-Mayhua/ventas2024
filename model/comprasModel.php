<?php
require_once "../librerias/conexion.php";
class comprasModel
{
    private $conexion;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    public function registrarCompra($producto, $cantidad, $precio, $fecha_compra, $trabajador)
    {
        $sql = $this->conexion->query("CALL insertarCompra('{$producto}','{$cantidad}','{$precio}',
                                                     '{$fecha_compra}','{$trabajador}')");

        $sql = $sql->fetch_object();
        return $sql;
    }


    /*//actualizar imagen
    public function actualizar_imagen($id,$imagen){
        $sql= $this->conexion->query("UPDATE producto set imagen='{$imagen}' where id='{$id}'");
        return 1;
    }*/

    /*listar producto */
    public function obtener_producto($id)
    {
        $respuestas = $this->conexion->query("SELECT * FROM producto where id='{$id}'");
        $objeto = $respuestas->fetch_object();
        return $objeto;
    }



    /* */


    public function obtener_compras()
    {
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT * FROM compras");

        // Recorrer el resultado de la consulta y almacenar cada compra en el arreglo
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
        }

        return $arrRespuesta;
    }
    //ver compra poara editar//
    public function verCompra($id)
    {
        $sql = $this->conexion->query(" SELECT * FROM compras WHERE id='$id'");
        $sql = $sql->fetch_object();
        return $sql;
    }


















    public function eliminarCompra($id){
        $sql = $this->conexion->query("CALL eliminarCompra('{$id}')");
        
        $sql = $sql->fetch_object() ;
        return $sql;    
        }
      
    
}
