<?php
require_once "../models/checkin.model.php";

$Metodo = $_POST["M"];
$Checkin = new Checkin();

switch ($Metodo) {
  case '1':
    $Finca  = $_POST["Finca"];
    $Huesped= $_POST["Huesped"];
    $Alojamiento = $_POST["Alojamiento"];
    $Checkin->Ingresar($Finca,$Huesped,$Alojamiento);
    break;
  case '2':
  $Id     = $_POST["Id"];
  $Finca  = $_POST["Finca"];
  $Huesped= $_POST["Huesped"];
  $Alojamiento = $_POST["Alojamiento"];
  $Checkin->Actualizar($Id,$Finca,$Huesped,$Alojamiento);
    break;
  case '3':
  $Id = $_POST["Id"];
  $Checkin->Eliminar($Id);
    break;
  case '4':
  $Id = $_POST["Id"];
  $Checkin->Finalizar($Id);
    break;
  default:
    $x = 0;
    break;
}

?>
