<?php

require_once "./model/vistas_model.php";
class vistasControlador extends vistaModelo
{
    public function obtenerPlantillaControlador()
    {
        return require_once "./views/plantilla.php";
    }
    public function obtenerVistaControlador()
    {
        if (isset ($_GET['views'])) {
            $ruta = explode("/", $_GET['views']);
            $respuestas = vistaModelo::obtener_vistas($ruta[0]);
        } else {
            $respuestas = "login";
        }
        return $respuestas;
    }
}
