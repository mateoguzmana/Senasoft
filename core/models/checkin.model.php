<?php
require_once "conexion.php";

class Checkin extends Conexion{

    public $con;

    public function __construct(){

      $this->con = $this->Conectar();

    }

    public function ConsultaMultiple($I,$FechaInicio,$FechaFin){

      if($I==1){
        $q = "SELECT alojamientos.Costo, checkin.Checkin, checkin.Checkout, checkin.Huesped FROM checkin INNER JOIN alojamientos ON checkin.Alojamiento=alojamientos.Id WHERE checkin.Checkin BETWEEN '$FechaInicio' AND '$FechaFin'";
      } else{
        $q = "SELECT * FROM checkin WHERE Checkin BETWEEN '$FechaInicio' AND '$FechaFin'";
      }

      $query = $this->con->prepare($q);
      $query->execute();

      return $query;

    }

    public function TotalCostos($I,$FechaInicio,$FechaFin){

        $q = "SELECT alojamientos.Costo, checkin.Checkin, checkin.Checkout, checkin.Huesped FROM checkin INNER JOIN alojamientos ON checkin.Alojamiento=alojamientos.Id WHERE checkin.Checkin BETWEEN '$FechaInicio' AND '$FechaFin'";
        $query = $this->con->prepare($q);
        $query->execute();

        $Pr = 0;

        foreach ($query as $Precios) {
          $Pr= intval($Pr+$Precios["Costo"]);
        }



        return $Pr;

    }

    public function Listar(){

      $query = $this->con->prepare("SELECT * FROM checkin");
      $query->execute();

      return $query;

    }

    public function ListarFincas(){

      $query = $this->con->prepare("SELECT * FROM fincas");
      $query->execute();

      return $query;

    }

    public function ListarHuespedes(){

      $query = $this->con->prepare("SELECT * FROM huespedes");
      $query->execute();

      return $query;

    }

    public function ListarAlojamientos(){

      $query = $this->con->prepare("SELECT * FROM alojamientos");
      $query->execute();

      return $query;

    }

    public function Ingresar($Finca,$Huesped,$Alojamiento){

    $Checkin  = date("Y-m-d");

    $query = $this->con->prepare("INSERT INTO checkin (Checkin,Finca,Huesped,Alojamiento) VALUES ('$Checkin','$Finca','$Huesped','$Alojamiento')");

      if($query->execute()){
        ?>
        <script>
          alert("Insertado correctamente.");
          window.location.href="../../index.php?view=actualizar_checkin";
        </script>
        <?php
      }else{
        ?>
        <script>
          alert("Ha ocurrido un error.");
          window.location.href="../../index.php?view=acheckin";
        </script>
        <?php
      }

    }

    public function Actualizar($Id,$Finca,$Huesped,$Alojamiento){

    $query = $this->con->prepare("UPDATE checkin SET Finca='$Finca', Huesped='$Huesped', Alojamiento='$Alojamiento' WHERE Id='$Id'");

      if($query->execute()){
        ?>
        <script>
          alert("Actualizado correctamente.");
          window.location.href="../../index.php?view=actualizar_checkin";
        </script>
        <?php
      }else{
        ?>
        <script>
          alert("Ha ocurrido un error.");
          window.location.href="../../index.php?view=acheckin";
        </script>
        <?php
      }

    }

    public function Eliminar($Id){

      $query = $this->con->prepare("DELETE FROM checkin WHERE Id='$Id'");

      if($query->execute()){
        echo "1";
      }else{
        echo "2";
      }

    }

    public function Finalizar($Id){

      $Checkout = date("Y-m-d");

      $query = $this->con->prepare("UPDATE checkin SET Checkout='$Checkout' ,Estado='2' WHERE Id='$Id'");

      if($query->execute()){
        echo "1";
      }else{
        echo "2";
      }

    }

    public function Reportes($FechaInicio,$FechaFin){

      $query = $this->con->prepare("SELECT * FROM checkin WHERE Checkin BETWEEN '$FechaInicio' AND '$FechaFin'");
      $query->execute();

      return $query;
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
