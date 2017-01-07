<?php
require_once "../models/departamentos.model.php";

$Metodo = $_POST["M"];
$Departamentos = new Departamentos();

switch ($Metodo) {
  case '1':
    $Nombre = $_POST["Nombre"];
    $Departamentos->Ingresar($Nombre);
    break;
  case '2':
  $Id     = $_POST["Id"];
  $Nombre = $_POST["Nombre"];
  $Departamentos->Actualizar($Id,$Nombre);
    break;
  case '3':
  $Id = $_POST["Id"];
  $Departamentos->Eliminar($Id);
    break;
  default:
    $x = 0;
    break;
}

?>
