<?php
require_once "conexion.php";

class Alojamientos extends Conexion{

    public $con;

    public function __construct(){

      $this->con = $this->Conectar();

    }

    public function Listar(){

      $query = $this->con->prepare("SELECT * FROM alojamientos");
      $query->execute();

      return $query;

    }

    public function Ingresar($Tipo,$Camas,$Costo){


    $query = $this->con->prepare("INSERT INTO alojamientos (Tipo,Camas,Costo) VALUES ('$Tipo','$Camas','$Costo')");

      if($query->execute()){
        ?>
        <script>
          alert("Insertado correctamente.");
          window.location.href="../../index.php?view=actualizar_alojamientos";
        </script>
        <?php
      }else{
        ?>
        <script>
          alert("Ha ocurrido un error.");
          window.location.href="../../index.php?view=aalojamientos";
        </script>
        <?php
      }

    }

    public function Actualizar($Id,$Tipo,$Camas,$Costo){


    $query = $this->con->prepare("UPDATE alojamientos SET Tipo='$Tipo', Camas='$Camas', Costo='$Costo' WHERE Id='$Id'");

      if($query->execute()){
        ?>
        <script>
          alert("Actualizado correctamente.");
          window.location.href="../../index.php?view=actualizar_alojamientos";
        </script>
        <?php
      }else{
        ?>
        <script>
          alert("Ha ocurrido un error.");
          window.location.href="../../index.php?view=alojamientos";
        </script>
        <?php
      }

    }

    public function Eliminar($Id){

      $query = $this->con->prepare("DELETE FROM alojamientos WHERE Id='$Id'");

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
