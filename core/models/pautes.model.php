<?php
require_once "conexion.php";

class Pautes extends Conexion{

    public $con;

    public function __construct(){

      $this->con = $this->Conectar();

    }

    public function Listar(){

      $query = $this->con->prepare("SELECT * FROM pautes");
      $query->execute();

      return $query;

    }

    public function ListarIzquierdo(){

      $query = $this->con->prepare("SELECT * FROM pautes  ORDER BY Id DESC LIMIT 3");
      $query->execute();

      return $query;

    }

    public function ListarDerecho(){

      $query = $this->con->prepare("SELECT * FROM pautes ORDER BY Id DESC LIMIT 3,6 ");
      $query->execute();

      return $query;

    }


    public function Ingresar($Nombre,$Descripcion,$Url){

    $Nombre      = $this->Validar($Nombre);
    $Descripcion = $this->Validar($Descripcion);
    $Url         = $this->Validar($Url);

    $query = $this->con->prepare("INSERT INTO pautes (Nombre,Descripcion,Url) VALUES ('$Nombre','$Descripcion','$Url')");

      if($query->execute()){
        ?>
        <script>
          alert("Insertado correctamente.");
          window.location.href="../../index.php?view=actualizar_pautas";
        </script>
        <?php
      }else{
        ?>
        <script>
          alert("Ha ocurrido un error.");
          window.location.href="../../index.php?view=paute";
        </script>
        <?php
      }

    }

    public function Actualizar($Id,$Nombre,$Descripcion,$Url){

    $Nombre = $this->Validar($Nombre);
    $Descripcion = $this->Validar($Descripcion);
    $Url = $this->Validar($Url);

    $query = $this->con->prepare("UPDATE pautes SET Nombre='$Nombre', Descripcion='$Descripcion', Url='$Url' WHERE Id='$Id'");

      if($query->execute()){
        ?>
        <script>
          alert("Actualizado correctamente.");
          window.location.href="../../index.php?view=actualizar_pautas";
        </script>
        <?php
      }else{
        ?>
        <script>
          alert("Ha ocurrido un error.");
          window.location.href="../../index.php?view=pautes";
        </script>
        <?php
      }

    }

    public function Eliminar($Id){

      $query = $this->con->prepare("DELETE FROM pautes WHERE Id='$Id'");

      if($query->execute()){
        echo "1";
      }else{
        echo "2";
      }

    }

    public function Validar($str){

      if(!empty($str)){
        $str = strip_tags($str);
        $str = htmlspecialchars($str);
      }

      return $str;

    }

}





?>
