<?php
require_once('../model/proveedorModel.php');

$tipo = $_REQUEST['tipo'];

// Instanciar la clase proveedorModel
$objproveedor = new proveedorModel();

if ($tipo == "listar") {
    // Respuestas
    $arr_Respuesta = array('status' => false, 'contenido' => '');
    $arr_proveedores = $objproveedor->obtener_proveedor();
    
    if (!empty($arr_proveedores)) {
        // Recorremos el array para agregar las opciones de proveedores
        for ($i = 0; $i < count($arr_proveedores); $i++) {
            $id_proveedor = $arr_proveedores[$i]->id;
            $proveedor = $arr_proveedores[$i]->razon_social;
            $opciomes = '<a href="#" class="btn btn-success"><i class="fa fa-pencil"></i></a>';
            $arr_proveedores[$i]->opciones = $opciomes; // Cambié 'optiones' a 'opciones' para corregir la ortografía
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] = $arr_proveedores;
    }
    
    echo json_encode($arr_Respuesta);
}
?>