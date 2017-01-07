<?php
session_start();
require_once "conexion.php";

class Usuarios extends Conexion{

    public $con;

    public function __construct(){

      $this->con = $this->Conectar();

    }

    public function Listar(){

      $query = $this->con->prepare("SELECT * FROM usuarios");
      $query->execute();

      return $query;

    }

    public function Loguear($User,$Password){

    $x = 0;

    $query = $this->con->prepare("SELECT * FROM usuarios WHERE Usuario='$User' AND Password='$Password'");
    $query->execute();

    foreach ($query as $Usuario) {
      $x++;
      $Users = $Usuario["Usuario"];
    }

      if($x>0){
        $_SESSION["Usuario"] = $Users;
        ?>
        <script>
          window.location.href="../../index.php";
        </script>
        <?php
      }else{
        ?>
        <script>
          window.location.href="../../index.php?E=1";
        </script>
        <?php
      }

    }



}





?>
