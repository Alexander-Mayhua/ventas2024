<?php
require_once('../model/productoListarModel.php');

$tipo = $_REQUEST['tipo'];
//instanciar la clase  categoria model

$objcompras=new productoListarModel();

$tipo = $_REQUEST['tipo'];
if ($tipo =="listar"){
    //respuestaas
    $arr_Respuesta =array('status'=>false, 'contenido'=>'');
    $arr_compras = $objcompras->obtener_compras();
  if(!empty($arr_compras)){
    //recorremos el array para agregar las opciones de categorias
     for($i=0; $i < count($arr_compras); $i++){
        $id_compras = $arr_compras[$i]->id;
        $compras =$arr_compras[$i]->nombre;
        $opciomes='
        <a href=" class="btn btn-success"><i class="fa fa-pencil"></i></a>';
        $arr_compras[$i]->optiones =$opciomes;
     }
     $arr_Respuesta['status']=true;
     $arr_Respuesta['contenido']=$arr_compras;
  }
   
    echo json_encode($arr_Respuesta);
}

?>