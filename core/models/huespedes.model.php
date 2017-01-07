<?php
require_once "conexion.php";

class Huespedes extends Conexion{

    public $con;

    public function __construct(){

      $this->con = $this->Conectar();

    }

    public function Listar(){

      $query = $this->con->prepare("SELECT * FROM huespedes");
      $query->execute();

      return $query;

    }

    public function Ingresar($Nombre,$Apellidos,$Tipo_doc,$Documento,$Email,$Telefono,$TipoConvenio){

    $query = $this->con->prepare("INSERT INTO huespedes (Nombre,Apellidos,Tipo_doc,Documento,Email,Tel,TipoConvenio) VALUES ('$Nombre','$Apellidos','$Tipo_doc','$Documento','$Email','$Telefono','$TipoConvenio')");

      if($query->execute()){
        ?>
        <script>
          alert("Insertado correctamente.");
          window.location.href="../../index.php?view=actualizar_huespedes";
        </script>
        <?php
      }else{
        ?>
        <script>
          alert("Ha ocurrido un error.");
          window.location.href="../../index.php?view=ahuespedes";
        </script>
        <?php
      }

    }

    public function Actualizar($Id,$Nombre,$Apellidos,$Documento,$Email,$Telefono,$TipoConvenio){

    $query = $this->con->prepare("UPDATE huespedes SET Nombre='$Nombre',Apellidos='$Apellidos', Documento='$Documento',Email='$Email',Tel='$Telefono',TipoConvenio='$TipoConvenio' WHERE Id='$Id'");

      if($query->execute()){
        ?>
        <script>
          alert("Actualizado correctamente.");
          window.location.href="../../index.php?view=actualizar_huespedes";
        </script>
        <?php
      }else{
        ?>
        <script>
          alert("Ha ocurrido un error.");
          window.location.href="../../index.php?view=huespedes";
        </script>
        <?php
      }

    }

    public function Eliminar($Id){

      $query = $this->con->prepare("DELETE FROM huespedes WHERE Id='$Id'");

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
