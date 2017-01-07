<?php
require_once "conexion.php";

class Fincas extends Conexion{

    public $con;

    public function __construct(){

      $this->con = $this->Conectar();

    }

    public function Listar(){

      $query = $this->con->prepare("SELECT * FROM fincas");
      $query->execute();

      return $query;

    }

    public function ListarCiudades($Id){

      $query = $this->con->prepare("SELECT * FROM ciudades WHERE Departamento='$Id'");
      $query->execute();

      foreach ($query as $Ciudades) {
        ?>
        <option value="<?=$Ciudades["Id"]?>"><?=$Ciudades["Nombre"]?></option>
        <?php
      }



    }

    public function ListarDepartamentos(){

      $query = $this->con->prepare("SELECT * FROM departamentos");
      $query->execute();

      return $query;

    }

    public function Ingresar($Razon,$Nit,$Direccion,$Ciudad,$Departamento,$Regional,$Capacidad){

    $query = $this->con->prepare("INSERT INTO fincas (Razon,Nit,Direccion,Ciudad,Departamento,Regional,Capacidad) VALUES ('$Razon','$Nit','$Direccion','$Ciudad','$Departamento','$Regional','$Capacidad')");

      if($query->execute()){
        ?>
        <script>
          alert("Insertado correctamente.");
          window.location.href="../../index.php?view=actualizar_fincas";
        </script>
        <?php
      }else{
        ?>
        <script>
          alert("Ha ocurrido un error.");
          window.location.href="../../index.php?view=afincas";
        </script>
        <?php
      }

    }

    public function Actualizar($Id,$Razon,$Nit,$Direccion,$Ciudad,$Departamento,$Regional,$Capacidad){

    $Nombre = $this->Validar($Nombre);

    $query = $this->con->prepare("UPDATE fincas SET $Id,$Razon,$Nit,$Direccion,$Ciudad,$Departamento,$Regional,$Capacidad WHERE Id='$Id'");

      if($query->execute()){
        ?>
        <script>
          alert("Actualizado correctamente.");
          window.location.href="../../index.php?view=actualizar_fincas";
        </script>
        <?php
      }else{
        ?>
        <script>
          alert("Ha ocurrido un error.");
          window.location.href="../../index.php?view=fincas";
        </script>
        <?php
      }

    }

    public function Eliminar($Id){

      $query = $this->con->prepare("DELETE FROM fincas WHERE Id='$Id'");

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
