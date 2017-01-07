<?php
require_once "conexion.php";

class Ciudades extends Conexion{

    public $con;

    public function __construct(){

      $this->con = $this->Conectar();

    }

    public function Listar(){

      $query = $this->con->prepare("SELECT * FROM ciudades");
      $query->execute();

      return $query;

    }

    public function ObtenerDep($Id){

      $query = $this->con->prepare("SELECT * FROM departamentos WHERE Id='$Id'");
      $query->execute();

      foreach ($query as $Departamento) {
        $Nombre = $Departamento["Nombre"];
      }

      return $Nombre;

    }

    public function ListarDep(){

      $query = $this->con->prepare("SELECT * FROM departamentos");
      $query->execute();

      return $query;

    }

    public function ListarDepto($Id){

      $query = $this->con->prepare("SELECT * FROM departamentos WHERE Id<>'$Id'");
      $query->execute();

      return $query;

    }

    public function Ingresar($Nombre,$Departamento){

    $Nombre = $this->Validar($Nombre);
    $Departamento = $this->Validar($Departamento);

    $query = $this->con->prepare("INSERT INTO ciudades (Nombre, Departamento) VALUES ('$Nombre','$Departamento')");

      if($query->execute()){
        ?>
        <script>
          alert("Insertado correctamente.");
          window.location.href="../../index.php?view=actualizar_ciudades";
        </script>
        <?php
      }else{
        ?>
        <script>
          alert("Ha ocurrido un error.");
          window.location.href="../../index.php?view=aciudades";
        </script>
        <?php
      }

    }

    public function Actualizar($Id,$Nombre,$Departamento){

    $Nombre = $this->Validar($Nombre);

    $query = $this->con->prepare("UPDATE ciudades SET Nombre='$Nombre', Departamento='$Departamento' WHERE Id='$Id'");

      if($query->execute()){
        ?>
        <script>
          alert("Actualizado correctamente.");
          window.location.href="../../index.php?view=actualizar_ciudades";
        </script>
        <?php
      }else{
        ?>
        <script>
          alert("Ha ocurrido un error.");
          window.location.href="../../index.php?view=aciudades";
        </script>
        <?php
      }

    }

    public function Eliminar($Id){

      $query = $this->con->prepare("DELETE FROM ciudades WHERE Id='$Id'");

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
