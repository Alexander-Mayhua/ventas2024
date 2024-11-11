<?php
class vistaModelo{
protected static function obtener_vistas($vista){
    $palabras_permitidas = ['inicio','carrito','varones','mujeres','perfil','informacion','nuevo-producto','nuevo-categoria','nueva-compra','niños','niñas','usuario','nuevo-usuario','producto','nuevo-persona'];
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