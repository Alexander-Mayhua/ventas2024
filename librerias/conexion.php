<<?php
require_once "./config/config.php";
class Conexion{
public static function connect(){
    $msql = new mysqli(BD_HOST,BD_NAME, BD_USER,BD_PASSWORD);
    $msql->set_charset( BD_CHARSET );
    if (mysqli_connect_errno()){
        echo "error de conexion:".
        mysqli_connect_errno();
    }
    return $msql;
}

}
?>