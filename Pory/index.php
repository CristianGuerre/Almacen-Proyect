<?php

require_once "controladores/plantillaControlador.php";
require_once "controladores/formulariosControlador.php";
require_once "modelos/formulariosModel.php";


$plantilla = new ControladorPlantilla();
$plantilla -> ctrTraerPlantilla();

?>