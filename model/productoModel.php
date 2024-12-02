<?php
require_once "../librerias/conexion.php";
class ProductoModel{
    private $conexion ;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
/** */
    public function obtener_productos(){
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT * FROM producto ");

        while($objeto= $respuesta->fetch_object()){
            array_push($arrRespuesta,$objeto);
        }
        return $arrRespuesta;
    
    }
    

    public function registrarProducto($codigo,$nombre,$detalle,$precio,$stock,$categoria,$imagen,$proveedor){
     $sql = $this->conexion->query("CALL insertarProducto('{$codigo}','{$nombre}','{$detalle}','{$precio}','{$stock}',
                                                     '{$categoria}','{$imagen}','{$proveedor}')");

           $sql = $sql->fetch_object() ;
           return $sql;                                         
    }


    //actualizar imagen
    public function actualizar_imagen($id,$imagen){
        $sql= $this->conexion->query("UPDATE producto set imagen='{$imagen}' where id='{$id}'");
        return 1;
    }


    
    public function obtener_producto($id){
        $respuestas= $this->conexion->query("SELECT * FROM producto where id='{$id}'");
        $objeto=$respuestas->fetch_object();
        return $objeto;
        
           }



public function verProducto($id){
$sql = $this->conexion->query(" SELECT * FROM producto WHERE id=$id");
$sql = $sql->fetch_object();
return $sql;
}


}
?>