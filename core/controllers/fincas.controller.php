<?php
require_once "../models/fincas.model.php";

$Metodo = $_POST["M"];
$Fincas = new Fincas();

switch ($Metodo) {
  case '1':
      $Razon = $_POST["Razon"];
      $Departamento = $_POST["Departamento"];
      $Direccion = $_POST["Direccion"];
      $Regional = $_POST["Regional"];
      $Nit      = $_POST["Nit"];
      $Ciudad   = $_POST["Ciudad"];
      $Capacidad = $_POST["Capacidad"];

    $Fincas->Ingresar($Razon,$Nit,$Direccion,$Ciudad,$Departamento,$Regional,$Capacidad);
    break;
  case '2':
      $Id     = $_POST["Id"];
      $Razon = $_POST["Razon"];
      $Departamento = $_POST["Departamento"];
      $Direccion = $_POST["Direccion"];
      $Regional = $_POST["Regional"];
      $Nit      = $_POST["Nit"];
      $Ciudad   = $_POST["Ciudad"];
      $Capacidad = $_POST["Capacidad"];

  $Fincas->Actualizar($Id,$Razon,$Nit,$Direccion,$Ciudad,$Departamento,$Regional,$Capacidad);
    break;
  case '3':
  $Id = $_POST["Id"];
  $Fincas->Eliminar($Id);
    break;
  case '4':
    $Id = $_POST["Id"];
    $Fincas->ListarCiudades($Id);
    break;
  default:
    $x = 0;
    break;
}

?>
