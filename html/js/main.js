$("#btn-salir").click(function(){
  window.location.href="core/controllers/unlog.php";
});

$(document).ready(function(){
  $("#bienvenido").fadeIn("slow");
  $("#bienvenido").animate({
    fontSize: "50px"
  },2000);

  $("#madre").fadeIn();
});

/*
function Validar(form,opcion){
  var expresion;

  switch (opcion) {
    case "nombre":
    expresion = new RegExp(/^[A-Za-z]{45}&/);
      break;
    case "password":
    expresion = new RegExp(/^[.]{45}&/);
      break;
  }


}*/

function Eliminar(Tabla, Id){
  $.ajax({
    method: "POST",
    url: "core/controllers/"+Tabla+".controller.php",
    data: { Id:Id, M: "3"}
  }).done(function(resp){
    $("body").removeClass("modal-open")
    $("div").removeClass("modal-backdrop fade in");
    $("#fila"+Id).html("<td colspan='2'><div class='alert alert-success'>Se ha eliminado correctamente.</div></td>");
    $("#fila"+Id).fadeOut(3000);
  });

}

function Finalizar(Tabla, Id){
  $.ajax({
    method: "POST",
    url: "core/controllers/"+Tabla+".controller.php",
    data: { Id:Id, M: "4"}
  }).done(function(resp){
    alert("Finalizado correctamente.");
    window.location.reload();
  });

}

function BuscarReportes(){
  var F1 = $("#FechaInicio").val();
  var F2 = $("#FechaFin").val();
  var IN = $("#I").val();

  window.location.href="reportes/definido.reportes.php?F1="+F1+"&F2="+F2+"&I="+IN;

}


function LoadCiudad(){

  var Id = $("#Departamento").val();

  $.ajax({
    method: "POST",
    url: "core/controllers/fincas.controller.php",
    data: { Id:Id, M: "4"}
  }).done(function(resp){
    $("#Ciudad").html(resp);
  });

}

function ReporteHuespedes(){
  window.location.href="reportes/huespedes.reporte.php";
}
function ReporteFincas(){
  window.location.href="reportes/fincas.reporte.php";
}
