<?php
require_once('../model/categoriaModel.php');
/* */

require_once('../model/personaModel.php');
$tipo = $_REQUEST['tipo'];
//instanciar la clase  categoria model

$objcategoria = new categoriaModel();

$tipo = $_REQUEST['tipo'];
if ($tipo == "listar") {
  //respuestaas
  $arr_Respuesta = array('status' => false, 'contenido' => '');
  $arr_categorias = $objcategoria->obtener_categoria();
  if (!empty($arr_categorias)) {
    //recorremos el array para agregar las opciones de categorias
    for ($i = 0; $i < count($arr_categorias); $i++) {
      
    


      $id_categoria = $arr_categorias[$i]->id;
      $categoria = $arr_categorias[$i]->nombre;
      $opciomes = '
        <a href=" class="btn btn-success"><i class="fa fa-pencil"></i></a>';
      $arr_categorias[$i]->optiones = $opciomes;
    }
    $arr_Respuesta['status'] = true;
    $arr_Respuesta['contenido'] = $arr_categorias;
  }

  echo json_encode($arr_Respuesta);
}


/* registrar categoria */

$tipo = $_REQUEST['tipo'];
//instancio la clase modelocategoria
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
      $arrCategorias = $objCategorias->registrarCategoria($nombre, $detalle);

      if ($arrCategorias->id > 0) {
        $arr_Respuesta = array('status' => true, 'mensaje' => 'Registrar Exitoso');
      } else {
        $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al Registrar categoria');
      }
      echo json_encode($arr_Respuesta);
    }
  }
}
?>