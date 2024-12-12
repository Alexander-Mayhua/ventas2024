<?php
require_once "../librerias/conexion.php";


//categoria
class categoriaModel
{
    private $conexion;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    public function obtener_categoria()
    {
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT * FROM categoria");

        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
        }
        return $arrRespuesta;
    }


    public function registrarCategoria($nombre, $detalle)
    {
        $sql = $this->conexion->query("CALL insertarCategoria('{$nombre}','{$detalle}')");

        $sql = $sql->fetch_object();
        return $sql;
    }


    /*para mostra  categoria*/

    public function obtener_categorias($id)
    {
        $respuestas = $this->conexion->query("SELECT * FROM categoria where id='{$id}'");
        $objeto = $respuestas->fetch_object();
        return $objeto;
    }




    //ver categoria poara editar//

    public function verCategoria($id)
    {
        $sql = $this->conexion->query(" SELECT * FROM categoria WHERE id='$id'");
        $sql = $sql->fetch_object();
        return $sql;
    }




    
    public function actualizarCategoria($id,  $nombre, $detalle)
    {
        $sql = $this->conexion->query("CALL actualizarCategoria('{$id}','{$nombre}','{$detalle}')");

        $sql = $sql->fetch_object();
        return $sql;
    }


    public function eliminarCategoria($id)
    {
        $sql = $this->conexion->query("CALL eliminarCategoria('{$id}')");

        $sql = $sql->fetch_object();
        return $sql;
    }
}
