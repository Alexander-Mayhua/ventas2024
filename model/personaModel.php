<?php
require_once "../librerias/conexion.php";
class personaModel
{
    private $conexion;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    public function registrarPersona($nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $codigo_postal, $direccion, $rol, $password, $estado, $fecha_registro)
    {
        $sql = $this->conexion->query("CALL insertarPersona('{$nro_identidad}','{$razon_social}','{$telefono}','{$correo}','{$departamento}','{$provincia}','{$distrito}','{$codigo_postal}','{$direccion}','{$rol}','{$password}','{$estado}','{$fecha_registro}')");

        $sql = $sql->fetch_object();
        return $sql;
    }


    /* //actualizar imagen
    public function actualizar_imagen($id,$imagen){
        $sql= $this->conexion->query("UPDATE producto set imagen='{$imagen}' where id='{$id}'");
        return 1;
    }*/
    public function buscarPersonaPorDni($nro_identidad)
    {
        $sql = $this->conexion->query("SELECT * FROM persona WHERE
      nro_identidad='{$nro_identidad}'");
        $sql = $sql->fetch_object();
        return $sql;
    }
    /* */
    public function obtener_persona()
    {
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT * FROM persona");

        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
        }
        return $arrRespuesta;
    }

    /* */
    public function obtener_personas($id)
    {
        $respuestas = $this->conexion->query("SELECT * FROM persona where id='{$id}'");
        $objeto = $respuestas->fetch_object();
        return $objeto;
    }


    //ver persona poara editar//

    public function verPersona($id)
    {
        $sql = $this->conexion->query(" SELECT * FROM persona WHERE id=$id");
        $sql = $sql->fetch_object();
        return $sql;
    }





    public function actualizarPersona($id, $nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $codigo_postal, $direccion, $rol)
    {
        $sql = $this->conexion->query("CALL actualizarPersona('{$id}','{$nro_identidad}','{$razon_social}','{$telefono}','{$correo}','{$departamento}','{$provincia}','{$distrito}','{$codigo_postal}','{$direccion}','{$rol}')");

        $sql = $sql->fetch_object();
        return $sql;
    }





    public function eliminarPersona($id)
    {
        $sql = $this->conexion->query("CALL eliminarPersona('{$id}')");

        $sql = $sql->fetch_object();
        return $sql;
    }
}
