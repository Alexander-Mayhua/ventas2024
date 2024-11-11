<?php

require_once('../model/comprasModel.php');
$tipo = $_REQUEST['tipo'];
//instancio la clase modeloproducto
$objProducto = new comprasModel();
if ($tipo == "registrar") {
    // imagen
   //  print_r($_POST);
    // echo $_FILES['imagen']['name'];
  

   if ($_POST) {
        $producto  = $_POST['codigo'];
        $cantidad  = $_POST['nombre'];
        $precio  = $_POST['precio'];
        $fecha_compra  = $_POST['fecha_compra'];
        $trabajador  = $_POST['trabajador'];
      
        if ($producto == "" || $cantidad == "" || $precio == "" || $fecha_compra  == "" || $trabajador == "" ) {
            //respuesta
            $arr_Respuestas = array('status' => false, 'mensaje' => 'error,campos vacios');
        } else {
            $arrCompra = $objCompra->registrarCompra($producto, $cantidad ,$precio, $fecha_compra, $trabajador);

            if ($arrCompra->id > 0) {
                $arr_Respuestas = array('status' => true, 'mensaje' => 'Registrar Exitoso');
            

             /*   //cargar archivo
                $archivo= $_FILES['imagen']['tmp_name'];
                $destino = './assets/img_producto/';
                $tipoArchivo = strtolower(pathinfo($_FILES["imagen"]["name"],PATHINFO_EXTENSION));
                $nombre = $arrProducto->id.".".$tipoArchivo;
                if(move_uploaded_file($archivo,$destino.$nombre)){
                 $arr_imagen =$objProducto->actualizar_imagen($id,$nombre);
                } else{
                    $arr_Respuestas = array('status'=>true,
                    'mensaje'=>'Registro exitoso, error al subir imagen');
                     }

                      */
                     

            } else {
                $arr_Respuestas = array('status' => false, 'mensaje' => 'Error al Registrar compra');
            }
            echo json_encode($arr_Respuestas);
        }
    }
        
}


?>