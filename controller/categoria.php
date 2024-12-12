<?php
require_once('../model/categoriaModel.php');
/* */

require_once('../model/personaModel.php');
$tipo = $_REQUEST['tipo'];
//instanciar la clase  categoria model

$objCategoria = new categoriaModel();

$tipo = $_REQUEST['tipo'];
if ($tipo == "listar") {
  //respuestaas
  $arr_Respuesta = array('status' => false, 'contenido' => '');
  $arr_categorias = $objCategoria->obtener_categoria();
  if (!empty($arr_categorias)) {
    //recorremos el array para agregar las opciones de categorias
    for ($i = 0; $i < count($arr_categorias); $i++) {
      
    


      $id_categoria = $arr_categorias[$i]->id;
      $categoria = $arr_categorias[$i]->nombre;
      $opciomes = '<a href="'.BASE_URL.'editar-categoria/'. $id_categoria.'" class="btn btn-primary btn-sm">Editar </a>
            
      <button class="btn btn-danger btn-sm"onclick="eliminar_categoria('.$id_categoria.');">Eliminar</button>
      ';
      $arr_categorias[$i]->opciones = $opciomes;
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
      $arrCategorias = $objCategoria->registrarCategoria($nombre, $detalle);

      if ($arrCategorias->id > 0) {
        $arr_Respuesta = array('status' => true, 'mensaje' => 'Registrar Exitoso');
      } else {
        $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al Registrar categoria');
      }
      echo json_encode($arr_Respuesta);
    }
  }
}





//ver persona poara editar//

if ($tipo == "ver") {
  $id_categoria = $_POST['id_categoria'];
  $arr_Respuesta =$objCategoria-> verCategoria($id_categoria);
  /*print_r($arr_Respuesta);*/
  
  if(empty($arr_Respuesta)){
      $response= array('status'=>false,'mensaje'=>"error, no hay informacion");
  }else{
      $response = array('status'=> true,'mensaje'=>"datos encontrados",'contenido'=>$arr_Respuesta);
  }
  echo json_encode($response);
  
  }



  if ($tipo == "actualizar") {
    /*print_r($_POST);
print_r($_FILES['imagen']['tpm_name']);*/

    $id_categoria  = $_POST['id_categoria'];
    $nombre  = $_POST['nombre'];
    $detalle  = $_POST['detalle'];
 
    if ($nombre == "" || $detalle == "") {
        //respuesta
        $arr_Respuesta = array('status' => false, 'mensaje' => 'error,campos vacios');
    } else {
        $arrCategorias = $objCategoria->actualizarCategoria($id_categoria, $nombre, $detalle);
        if ($arrCategorias->p_id > 0) {
            $arr_Respuesta = array('status' => true, 'mensaje' => 'Actualizado Correctamente');

        } else {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al actualizar producto');
        }
    }
    echo json_encode($arr_Respuesta);
}




  if ($tipo == "eliminar") {
    $id_categoria = $_POST['id_categoria'];
    $arr_Respuesta = $objCategoria->eliminarCategoria($id_categoria);
    /*print_r($arr_Respuesta);*/

    if (empty($arr_Respuesta)) {
        $response = array('status' => false);
    } else {
        $response = array('status' => true);
    }
    echo json_encode($response);
}

?>