<?php
require_once "../models/pautes.model.php";

$Metodo = $_POST["M"];
$Pautes = new Pautes();

switch ($Metodo) {
  case '1':
    $Nombre = $_POST["Nombre"];
    $Descripcion = $_POST["Descripcion"];
    $Url = $_POST["Url"];
    $Pautes->Ingresar($Nombre,$Descripcion,$Url);
    break;
  case '2':
  $Id     = $_POST["Id"];
  $Nombre = $_POST["Nombre"];
  $Descripcion = $_POST["Descripcion"];
  $Url = $_POST["Url"];
  $Pautes->Actualizar($Id,$Nombre,$Descripcion,$Url);
    break;
  case '3':
  $Id = $_POST["Id"];
  $Pautes->Eliminar($Id);
    break;
  default:
    $x = 0;
    break;
}

?>
