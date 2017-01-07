<?php
require_once "../models/usuarios.model.php";

$Usuario = $_POST["Usuario"];
$Password= $_POST["Password"];

$Usuario  = md5($Usuario);
$Password = md5($Password);

$Usuarios = new Usuarios();
$User = $Usuarios->Loguear($Usuario,$Password);

?>
