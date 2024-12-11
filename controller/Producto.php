<?php

require_once('../model/productoModel.php');
/* */
require_once('../model/categoriaModel.php');
require_once('../model/personaModel.php');

require_once('../model/proveedorModel.php');
$tipo = $_REQUEST['tipo'];
//instancio la clase modeloproducto
$objProducto = new ProductoModel();
/* */
$objCategoria = new categoriaModel();
$objPersona = new personaModel();
$objProveedor = new proveedorModel();
/* */
if ($tipo == "listar") {

    //respuestaas
    $arr_Respuesta = array('status' => false, 'contenido' => '');
    $arr_productos = $objProducto->obtener_productos();
    if (!empty($arr_productos)) {
        //recorremos el array para agregar las opciones de categorias
        for ($i = 0; $i < count($arr_productos); $i++) {
            /** */
            $id_categoria = $arr_productos[$i]->id_categoria;
            $r_categoria = $objCategoria->obtener_categorias($id_categoria);
            $arr_productos[$i]->categoria = $r_categoria;

            $id_proveedor = $arr_productos[$i]->id_proveedor;
            $r_proveedor = $objProveedor->obtener_proveedores($id_proveedor);
            $arr_productos[$i]->proveedor = $r_proveedor;


            $id_producto = $arr_productos[$i]->id;
            $producto = $arr_productos[$i]->nombre;
            //localhost/editar-producto/
            $opciomes = '<a href="' . BASE_URL . 'editar-producto/' . $id_producto . '"class="btn btn-primary btn-sm" >Editar </a>
            
            <button class="btn btn-danger btn-sm" onclick="eliminar_producto(' . $id_producto . ');">Eliminar</button>
            ';

            $arr_productos[$i]->opciones = $opciomes;
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] = $arr_productos;
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
                $archivo = $_FILES['imagen']['tmp_name'];
                $destino = './assets/img_productos/';
                $tipoArchivo = strtolower(pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION));
                $nombre = $arrProducto->id . "." . $tipoArchivo;



                if (move_uploaded_file($archivo, $destino . '' . $nombre)) {
                } else {
                    $arr_Respuesta = array('status' => true, 'mensaje' => 'Registro Exitoso, error al subir imagen');
                }
            } else {
                $arr_Respuestas = array('status' => false, 'mensaje' => 'Error al Registrar Producto');
            }
            echo json_encode($arr_Respuestas);
        }
    }
}

//ver producto poara editar//

if ($tipo == "ver") {
    $id_producto = $_POST['id_producto'];
    $arr_Respuesta = $objProducto->verProducto($id_producto);
    /*print_r($arr_Respuesta);*/

    if (empty($arr_Respuesta)) {
        $response = array('status' => false, 'mensaje' => "error, no hay informacion");
    } else {
        $response = array('status' => true, 'mensaje' => "datos encontrados", 'contenido' => $arr_Respuesta);
    }
    echo json_encode($response);
}


if ($tipo == "actualizar") {
    /*print_r($_POST);
print_r($_FILES['imagen']['tpm_name']);*/

    $id_producto  = $_POST['id_producto'];
    $img  = $_POST['img'];
    $nombre  = $_POST['nombre'];
    $detalle  = $_POST['detalle'];
    $precio  = $_POST['precio'];
    $categoria  = $_POST['categoria'];
    $proveedor = $_POST['proveedor'];
    if ($nombre == "" || $detalle == "" || $precio == "" || $categoria == "" || $proveedor == "") {
        //respuesta
        $arr_Respuestas = array('status' => false, 'mensaje' => 'error,campos vacios');
    } else {
        $arrProducto = $objProducto->actualizarProducto($id_producto, $nombre, $detalle, $precio,$categoria,$proveedor);
        if ($arrProducto->id > 0) {
            $arr_Respuestas = array('status' => true, 'mensaje' => 'Actualizado Correctamente');

            if ($_FILES['imagen']['tmp_name'] != "") {
                unlink('../assets/img_producto/' . $img);


                //cargar archivos
                $archivo = $_FILES['imagen']['tmp_name'];
                $destino = '../assets/img_producto/';
                $tipoArchivo = strtolower(pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION));
                if (move_uploaded_file($archivo, $destino . '' . $id_producto . '.' . $tipoArchivo)) {
                }
            }
        } else {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al actualizar producto');
        }
    }
    echo json_encode($arr_Respuesta);
}



if ($tipo == "eliminar") {
    $id_producto = $_POST['id_producto'];
    $arr_Respuesta = $objProducto->eliminarProducto($id_producto);
    /*print_r($arr_Respuesta);*/

    if (empty($arr_Respuesta)) {
        $response = array('status' => false);
    } else {
        $response = array('status' => true);
    }
    echo json_encode($response);
}
