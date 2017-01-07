<?php

class Conexion{

  public $con;

  public function Conectar(){

    $this->con = new PDO("mysql:host=localhost;dbname=app;charset=utf8","root","");

    return $this->con;

  }


}



?>
