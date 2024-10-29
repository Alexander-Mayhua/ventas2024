<?php
require_once('../model/categoriaModel.php');
$tipo = $_REQUEST['tipo'];
//instanciar la clase  categoria model

$objcategoria=new categoriaModel();

$tipo = $_REQUEST['tipo'];
if ($tipo =="listar"){
    //respuestaas
    $arr_Respuesta =array('status'=>false, 'contenido'=>'');
    $arr_categorias = $objcategoria->obtener_categoria();
  if(!empty($arr_categorias)){
    //recorremos el array para agregar las opciones de categorias
     for($i=0; $i < count($arr_categorias); $i++){
        $id_categoria = $arr_categorias[$i]->id;
        $categoria =$arr_categorias[$i]->nombre;
        $opciomes='
        <a href=" class="btn btn-success"><i class="fa fa-pencil"></i></a>';
        $arr_categorias[$i]->optiones =$opciomes;
     }
     $arr_Respuesta['status']=true;
     $arr_Respuesta['contenido']=$arr_categorias;
  }
   
    echo json_encode($arr_Respuesta);
}


?>