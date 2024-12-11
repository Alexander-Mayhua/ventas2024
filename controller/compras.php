<?php
require_once('../model/comprasModel.php');

require_once('../model/productoModel.php');
require_once('../model/personaModel.php');

$tipo = $_REQUEST['tipo'];
//instancio la clase modeloproducto
$objCompra= new comprasModel();

$objProducto = new productoModel();
$objPersona = new personaModel();
if ($tipo == "registrar") {
    // imagen
   //  print_r($_POST);
    // echo $_FILES['imagen']['name'];

   if ($_POST) {
        $producto  = $_POST['producto'];
        $cantidad  = $_POST['cantidad'];
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

/*$tipo = $_REQUEST['tipo'];
//instanciar la clase  categoria model

$tipo = $_REQUEST['tipo'];
if ($tipo =="listar"){
    //respuestaas
    $arr_Respuesta =array('status'=>false, 'contenido'=>'');
    $arr_productos= $objCompra->obtener_productos();
  if(!empty($arr_producto)){
    //recorremos el array para agregar las opciones de categorias
     for($i=0; $i < count($arr_producto); $i++){
        $id_producto = $arr_productos[$i]->id;
        $producto =$arr_productos[$i]->nombre;
        $opciomes='
        <a href=" class="btn btn-success"><i class="fa fa-pencil"></i></a>';
        $arr_productos[$i]->optiones =$opciomes;
     }
     $arr_Respuesta['status']=true;
     $arr_Respuesta['contenido']=$arr_producto;
  }
   
    echo json_encode($arr_Respuesta);
}*/


$tipo = $_REQUEST['tipo'];

if ($tipo == "listar") {
    // Respuesta inicial
    $arr_Respuesta = array('status' => false, 'contenido' => '');

    // Obtener las compras desde el modelo
    $arr_compras = $objCompra->obtener_compras();

    if (!empty($arr_compras)) {
        // Recorrer el array de compras para agregar detalles adicionales
        for ($i = 0; $i < count($arr_compras); $i++) {
            // Obtener detalles del producto relacionado con la compra
            $id_producto = $arr_compras[$i]->id_producto;
            $r_producto = $objProducto->obtener_producto($id_producto);
            $arr_compras[$i]->producto = $r_producto;

            // Obtener detalles del trabajador que realizó la compra
            $id_trabajador = $arr_compras[$i]->id_trabajador;
            $r_trabajador = $objPersona->obtener_personas($id_trabajador);
            $arr_compras[$i]->trabajador = $r_trabajador;

            // Generar las opciones para cada compra (por ejemplo, editar)
            $id_compra = $arr_compras[$i]->id;
         //localhost/editar-compra/
         $opciomes = '<a href="'.BASE_URL.'editar-compra/'. $id_compra.'" class="btn btn-primary btn-sm">Editar </a>
            
         <button class="btn btn-danger btn-sm"onclick="eliminar_compra('.$id_compra.');">Eliminar</button>
         ';
            $arr_compras[$i]->opciones = $opciomes;
        }
        // Respuesta positiva con los datos obtenidos
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] = $arr_compras;
    }

    // Devolver la respuesta en formato JSON
    echo json_encode($arr_Respuesta);
}

//ver compra para editar//

if ($tipo == "ver") {
    $id_compra = $_POST['id_compra'];
    $arr_Respuesta =$objCompra-> verCompra($id_compra);
    /*print_r($arr_Respuesta);*/
    
    if(empty($arr_Respuesta)){
        $response= array('status'=>false,'mensaje'=>"error, no hay informacion");
    }else{
        $response = array('status'=> true,'mensaje'=>"datos encontrados",'contenido'=>$arr_Respuesta);
    }
    echo json_encode($response);
    
    }

?>