<?php

require_once('../model/categoriaModel.php');
/* */

require_once('../model/personaModel.php');
$tipo = $_REQUEST['tipo'];
//instanciar la clase  categoria model

$objPersona = new personaModel();

$tipo = $_REQUEST['tipo'];
if ($tipo == "listar") {
  //respuestaas
  $arr_Respuesta = array('status' => false, 'contenido' => '');
  $arr_personas = $objPersona->obtener_persona();
  if (!empty($arr_personas)) {
    //recorremos el array para agregar las opciones de categorias
    for ($i = 0; $i < count($arr_personas); $i++) {
      

      $id_persona = $arr_personas[$i]->id;
     /* $persona = $arr_personas[$i]->nombre;*/
    //localhost/editar-persona/
    $opciomes = '<a href="'.BASE_URL.'editar-persona/'. $id_persona.'">Editar </a>
            
    <button onclick="eliminar_persona('.$id_persona.');">Eliminar</button>
    ';
      $arr_personas[$i]->opciones = $opciomes;
    }
    $arr_Respuesta['status'] = true;
    $arr_Respuesta['contenido'] = $arr_personas;
  }

  echo json_encode($arr_Respuesta);
}









$tipo = $_REQUEST['tipo'];
//instancio la clase modeloproducto

if ($tipo == "registrar") {
    // imagen
   //  print_r($_POST);
    // echo $_FILES['imagen']['name'];
  

   if ($_POST) {
        $nro_identidad  = $_POST['nro_identidad'];
        $razon_social  = $_POST['razon_social'];
        $telefono  = $_POST['telefono'];
        $correo  = $_POST['correo'];
        $departamento  = $_POST['departamento'];
        $provincia  = $_POST['provincia'];
        $distrito  = $_POST['distrito'];
        $codigo_postal = $_POST['codigo_postal'];
        $direccion = $_POST['direccion'];
        $rol = $_POST['rol'];
        $password = $_POST['password'];
        
        $estado = $_POST['estado'];
        $fecha_registro	 = $_POST['fecha_registro'];
        $secure_password=password_hash($password,PASSWORD_DEFAULT);
       


        if ($nro_identidad==""|| $razon_social=="" || $telefono=="" || $telefono==""|| $correo=="" || $departamento==""|| $provincia==""|| $distrito=="" 

        || $codigo_postal==""|| $direccion==""|| $rol==""|| $secure_password==""|| $estado==""|| $fecha_registro=="") {

            //respuesta
            $arr_Respuestas = array('status' => false, 'mensaje' => 'error,campos vacios');
        } else {
            $arrPersona = $objPersona->registrarPersona($nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $codigo_postal,$direccion,$rol,$secure_password,$estado,$fecha_registro);

            if ($arrPersona->id > 0) {
                $arr_Respuestas = array('status' => true, 'mensaje' => 'Registrar Exitoso');
            

               /* //cargar archivo
                $archivo= $_FILES['imagen']['tmp_name'];
                $destino = './assets/img_producto/';
                $tipoArchivo = strtolower(pathinfo($_FILES["imagen"]["name"],PATHINFO_EXTENSION));
                $nombre = $arrProducto->id.".".$tipoArchivo;
                if(move_uploaded_file($archivo,$destino.$nombre)){
                 $arr_imagen =$objProducto->actualizar_imagen($id,$nombre);
                } else{
                    $arr_Respuestas = array('status'=>true,
                    'mensaje'=>'Registro exitoso, error al subir imagen');
                     }*/


            } else {
                $arr_Respuestas = array('status' => false, 'mensaje' => 'Error al Registrar persona');
            }
            echo json_encode($arr_Respuestas);
        }
    }
        
}




//ver persona poara editar//

if ($tipo == "ver") {
  $id_persona = $_POST['id_persona'];
  $arr_Respuesta =$objPersona-> verPersona($id_persona);
  /*print_r($arr_Respuesta);*/
  
  if(empty($arr_Respuesta)){
      $response= array('status'=>false,'mensaje'=>"error, no hay informacion");
  }else{
      $response = array('status'=> true,'mensaje'=>"datos encontrados",'contenido'=>$arr_Respuesta);
  }
  echo json_encode($response);
  
  }

  if ($tipo == "eliminar") {
    $id_persona = $_POST['id_persona'];
    $arr_Respuesta = $objPersona->eliminarPersona($id_persona);
    /*print_r($arr_Respuesta);*/

    if (empty($arr_Respuesta)) {
        $response = array('status' => false);
    } else {
        $response = array('status' => true);
    }
    echo json_encode($response);
}


?>
