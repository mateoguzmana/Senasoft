<?php
require_once "conexion.php";

class TipoConvenio extends Conexion{

    public $con;

    public function __construct(){

      $this->con = $this->Conectar();

    }

    public function Listar(){

      $query = $this->con->prepare("SELECT * FROM tipo_convenio");
      $query->execute();

      return $query;

    }

    public function Ingresar($Nombre){

    $Nombre = $this->Validar($Nombre);

    $query = $this->con->prepare("INSERT INTO tipo_convenio (Nombre) VALUES ('$Nombre')");

      if($query->execute()){
        ?>
        <script>
          alert("Insertado correctamente.");
          window.location.href="../../index.php?view=actualizar_tipo_convenio";
        </script>
        <?php
      }else{
        ?>
        <script>
          alert("Ha ocurrido un error.");
          window.location.href="../../index.php?view=tipo_convenio";
        </script>
        <?php
      }

    }

    public function Actualizar($Id,$Nombre){

    $Nombre = $this->Validar($Nombre);

    $query = $this->con->prepare("UPDATE tipo_convenio SET Nombre='$Nombre' WHERE Id='$Id'");

      if($query->execute()){
        ?>
        <script>
          alert("Actualizado correctamente.");
          window.location.href="../../index.php?view=actualizar_tipo_convenio";
        </script>
        <?php
      }else{
        ?>
        <script>
          alert("Ha ocurrido un error.");
          window.location.href="../../index.php?view=tipo_convenio";
        </script>
        <?php
      }

    }

    public function Eliminar($Id){

      $query = $this->con->prepare("DELETE FROM tipo_convenio WHERE Id='$Id'");

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
