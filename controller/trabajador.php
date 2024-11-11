<?php
require_once('../model/trabajadorModel.php');

$tipo = $_REQUEST['tipo'];

// Instanciar la clase trabajadorModel
$objtrabajador = new trabajadorModel();

if ($tipo == "listar") {
    // Respuestas
    $arr_Respuesta = array('status' => false, 'contenido' => '');
    $arr_trabajador = $objtrabajador->obtener_trabajador();
    
    if (!empty($arr_trabajador)) {
        // Recorremos el array para agregar las opciones de proveedores
        for ($i = 0; $i < count($arr_trabajador); $i++) {
            $id_trabajador = $arr_trabajador[$i]->id;
            $trabajador = $arr_trabajador[$i]->razon_social;
            $opciomes = '<a href="#" class="btn btn-success"><i class="fa fa-pencil"></i></a>';
            $arr_trabajador[$i]->opciones = $opciomes; // Cambié 'optiones' a 'opciones' para corregir la ortografía
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] = $arr_trabajador;
    }
    
    echo json_encode($arr_Respuesta);
}
?>