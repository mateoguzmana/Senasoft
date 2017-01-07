<?php
require_once "../models/tipo_convenio.model.php";

$Metodo = $_POST["M"];
$TipoConvenio = new TipoConvenio();

switch ($Metodo) {
  case '1':
    $Nombre = $_POST["Nombre"];
    $TipoConvenio->Ingresar($Nombre);
    break;
  case '2':
  $Id     = $_POST["Id"];
  $Nombre = $_POST["Nombre"];
  $TipoConvenio->Actualizar($Id,$Nombre);
    break;
  case '3':
  $Id = $_POST["Id"];
  $TipoConvenio->Eliminar($Id);
    break;
  default:
    $x = 0;
    break;
}

?>
