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

    print_r($arr_categorias);
}
?>