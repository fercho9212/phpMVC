<?php
    require_once("models/personas_model.php");
    $per=new personasModel();
    $datos=$per->getPersonas();
    require_once("views/personas.html");


