<?php
require_once "../models/ciudades.model.php";

$Metodo = $_POST["M"];
$Ciudades = new Ciudades();

switch ($Metodo) {
  case '1':
    $Departamento = $_POST["Departamento"];
    $Nombre = $_POST["Nombre"];
    $Ciudades->Ingresar($Nombre,$Departamento);
    break;
  case '2':
  $Id     = $_POST["Id"];
  $Nombre = $_POST["Nombre"];
  $Departamento = $_POST["Departamento"];
  $Ciudades->Actualizar($Id,$Nombre,$Departamento);
    break;
  case '3':
  $Id = $_POST["Id"];
  $Ciudades->Eliminar($Id);
    break;
  default:
    $x = 0;
    break;
}

?>
