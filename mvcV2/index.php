<?php

require_once 'config/global.php';

require_once 'core/ControllerBase.php';

require_once 'core/ControllerFron.func.php';

//Cargamos controladores y acciones
if(isset($_GET["controller"])){
    $controllerObj=cargarControlador($_GET["controller"]);
    lanzarAccion($controllerObj);
}else{
    $controllerObj=cargarControlador(CONTROLADOR_DEFECTO);
    lanzarAccion($controllerObj);
}
lanzarAccion($controllerObj);