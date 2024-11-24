<?php
session_start();
class vistaModelo{
protected static function obtener_vistas($vista){
    $palabras_permitidas = ['inicio','carrito','varones','mujeres','detalles',
<<<<<<< HEAD
<<<<<<< Updated upstream
    'perfil','informacion','nuevo-producto','nuevo-categoria','nueva-compra','niños','niñas','usuario','login','nuevo-usuario','producto','nuevo-persona'];
   if(!isset($_SESSION['sesion_ventas_id'])){ //si no existe la variable sesion returna a login
=======
    'perfil','informacion','nuevo-producto','nuevo-categoria','nueva-compra','niños','niñas','usuario','nuevo-usuario','producto','nuevo-persona'];
  /* if(!isset($_SESSION['sesion_ventas_id'])){ //si no existe la variable sesion returna a login
>>>>>>> Stashed changes
=======
    'perfil','informacion','nuevo-producto','nuevo-categoria','nueva-compra','niños','niñas','usuario','login','nuevo-usuario','productos','nuevo-persona'];
   /*if(!isset($_SESSION['sesion_ventas_id'])){ //si no existe la variable sesion returna a login
>>>>>>> e7445f610f1031ce2bf3024d1d60c568bb0a4ca8
  return "login";
   }*/
    if (in_array($vista,$palabras_permitidas)){
        if(is_file("./views/".$vista.".php")){
            $contenido = "./views/".$vista.".php";

        } else{
            $contenido ="404";
        }

        }elseif ($vista=="login" || $vista=="index"){
            $contenido ="login";
        
        }else{
            $contenido = "404";
        }
        return $contenido;

        #code 
    }

}

?>