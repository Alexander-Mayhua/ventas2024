<?php

require_once('../model/categoria1Model.php');
$tipo = $_REQUEST['tipo'];
//instancio la clase modelocategoria
$objCategoria1 = new categoria1Model();
if ($tipo == "registrar") {
    // imagen
   //  print_r($_POST);
    // echo $_FILES['imagen']['name'];
  

   if ($_POST) {
        $nombre  = $_POST['nombre'];
        $detalle  = $_POST['detalle'];
       

        if ($nombre == "" || $detalle == "") {
            //respuesta
            $arr_Respuestas = array('status' => false, 'mensaje' => 'error,campos vacios');
        } else {
            $arrCategoria1 = $objCategoria1->registrarCategoria1($nombre, $detalle);

            if ($arrCategoria1->id > 0) {
                $arr_Respuestas = array('status' => true, 'mensaje' => 'Registrar Exitoso');
            

            } else {
                $arr_Respuestas = array('status' => false, 'mensaje' => 'Error al Registrar categoria');
            }
            echo json_encode($arr_Respuestas);
        }
    }
        
}


?>