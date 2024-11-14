<?php

require_once('../model/personaModel.php');
$tipo = $_REQUEST['tipo'];
//instancio la clase modeloproducto
$objPersona = new personaModel();
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
        || $codigo_postal==""|| $direccion==""|| $rol==""|| $password_hash==""|| $estado==""|| $fecha_registro=="") {
            //respuesta
            $arr_Respuestas = array('status' => false, 'mensaje' => 'error,campos vacios');
        } else {
            $arrPersona = $objPersona->registrarPersona($nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $codigo_postal,$direccion,$rol,$password,$estado,$fecha_registro);

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


?>