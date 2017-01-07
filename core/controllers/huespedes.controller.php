<?php
require_once "../models/huespedes.model.php";

$Metodo = $_POST["M"];
$Huespedes = new Huespedes();

switch ($Metodo) {
  case '1':
      $Nombre = $_POST["Nombre"];
      $Apellidos = $_POST["Apellidos"];
      $Tipo_doc = $_POST["Tipo_doc"];
      $Documento = $_POST["Documento"];
      $Email = $_POST["Email"];
      $Telefono = $_POST["Telefono"];
      $TipoConvenio = $_POST["TipoConvenio"];


    $Huespedes->Ingresar($Nombre,$Apellidos,$Tipo_doc,$Documento,$Email,$Telefono,$TipoConvenio);
    break;
  case '2':
  $Id     = $_POST["Id"];
  $Nombre = $_POST["Nombre"];
        $Apellidos = $_POST["Apellidos"];
        $Documento = $_POST["Documento"];
        $Email = $_POST["Email"];
        $Telefono = $_POST["Tel"];
        $TipoConvenio = $_POST["TipoConvenio"];
  $Huespedes->Actualizar($Id,$Nombre,$Apellidos,$Documento,$Email,$Telefono,$TipoConvenio);
    break;
  case '3':
  $Id = $_POST["Id"];
  $Huespedes->Eliminar($Id);
    break;
  default:
    $x = 0;
    break;
}

?>
