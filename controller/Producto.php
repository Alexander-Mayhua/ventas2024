<?php

require_once('../model/productoModel.php');
/* */
require_once('../model/categoriaModel.php');
require_once('../model/personaModel.php');
$tipo = $_REQUEST['tipo'];
//instancio la clase modeloproducto
$objProducto = new ProductoModel();
/* */
$objCategoria = new categoriaModel();
$objPersona= new personaModel();
/* */
if ($tipo == "listar") {
  
        //respuestaas
        $arr_Respuesta =array('status'=>false, 'contenido'=>'');
        $arr_productos = $objProducto->obtener_productos();
      if(!empty($arr_productos)){
        //recorremos el array para agregar las opciones de categorias
         for($i=0; $i < count($arr_productos); $i++){
           /** */
           $id_categoria=$arr_productos[$i]->id_categoria;
           $r_categoria=$objCategoria->obtener_categorias($id_categoria);
           $arr_productos[$i]->categoria=$r_categoria;

            $id_producto = $arr_productos[$i]->id;
            $producto =$arr_productos[$i]->nombre;
            $opciomes='
            <a href=" class="btn btn-success"><i class="fa fa-pencil"></i></a>';
            $arr_productos[$i]->optiones =$opciomes;
         }
         $arr_Respuesta['status']=true;
         $arr_Respuesta['contenido']=$arr_productos;
      }
        echo json_encode($arr_Respuesta);
    }



if ($tipo == "registrar") {
    // imagen
   //  print_r($_POST);
    // echo $_FILES['imagen']['name'];
   if ($_POST) {
        $codigo  = $_POST['codigo'];
        $nombre  = $_POST['nombre'];
        $detalle  = $_POST['detalle'];
        $precio  = $_POST['precio'];
        $stock  = $_POST['stock'];
        $categoria  = $_POST['categoria'];
        $imagen  = 'imagen';
        $proveedor = $_POST['proveedor'];

        if ($codigo == "" || $nombre == "" || $detalle == "" || $precio == "" || $stock == "" || $categoria == "" || $imagen == "" || $proveedor == "") {
            //respuesta
            $arr_Respuestas = array('status' => false, 'mensaje' => 'error,campos vacios');
        } else {
            $arrProducto = $objProducto->registrarProducto($codigo, $nombre, $detalle, $precio, $stock, $categoria, $imagen, $proveedor);

            if ($arrProducto->id > 0) {
                $arr_Respuestas = array('status' => true, 'mensaje' => 'Registrar Exitoso');
            

                //cargar archivo
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


                     

            } else {
                $arr_Respuestas = array('status' => false, 'mensaje' => 'Error al Registrar Producto');
            }
            echo json_encode($arr_Respuestas);
        }
    }
        
}


?>