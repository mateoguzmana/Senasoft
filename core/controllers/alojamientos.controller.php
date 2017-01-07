<?php
require_once "../models/alojamientos.model.php";

$Metodo = $_POST["M"];
$Alojamientos = new Alojamientos();

switch ($Metodo) {
  case '1':
    $Tipo = $_POST["Tipo"];
    $Camas = $_POST["Camas"];
    $Costo = $_POST["Costo"];
    $Alojamientos->Ingresar($Tipo,$Camas,$Costo);
    break;
  case '2':
    $Id     = $_POST["Id"];
    $Tipo   = $_POST["Tipo"];
    $Camas = $_POST["Camas"];
    $Costo = $_POST["Costo"];
    $Alojamientos->Actualizar($Id,$Tipo,$Camas,$Costo);
    break;
  case '3':
  $Id = $_POST["Id"];
  $Alojamientos->Eliminar($Id);
    break;
  default:
    $x = 0;
    break;
}

?>
