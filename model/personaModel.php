<?php
require_once "../librerias/conexion.php";
class personaModel{
    private $conexion ;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    public function registrarPersona($nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $codigo_postal,$direccion,$rol,$password,$estado,$fecha_registro){
     $sql = $this->conexion->query("CALL insertarPersona('{$nro_identidad}','{$razon_social}','{$telefono}','{$correo}','{$departamento}','{$provincia}','{$distrito}','{$codigo_postal}','{$direccion}','{$rol}','{$password}','{$estado}','{$fecha_registro}')");

           $sql = $sql->fetch_object() ;
           return $sql;                                         
    }


   /* //actualizar imagen
    public function actualizar_imagen($id,$imagen){
        $sql= $this->conexion->query("UPDATE producto set imagen='{$imagen}' where id='{$id}'");
        return 1;
    }*/
   public function buscarPersonaPorDni($nro_identidad){
        $sql= $this->conexion->query("SELECT * FROM persona WHERE
      nro_identidad='{$nro_identidad}'");
      $sql =$sql->fetch_object();
      return $sql;


    }
}
?>