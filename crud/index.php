<?php
  session_start();

  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 2){
    header('location: ../index.html');
  }

?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Actualizar Informaci&oacute;n</title>
		<link rel="shortcut icon" type="image/x-icon" href="../img/closed-lock.png"/>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
		<link rel="stylesheet" href="../css/sweetalert.css">
    <script src="../js/sweetalert.min.js"></script>
    <script src="../js/notificaciones.js"></script> 
		 <style>
        #modalc
        {
            width: 95% !important;
        }
    </style>
	</head>
	<body>
	<?php include "php/navbar.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-12">
		<h2>Alumnos Registrados</h2>
<!-- Button trigger modal -->
<form class="form-inline" role="search" id="buscar">
      <div class="form-group">
        <input type="text" name="s" class="form-control" placeholder="Buscar">
      </div>
      <button type="submit" class="btn btn-default">&nbsp;<i class="glyphicon glyphicon-search"></i>&nbsp;</button>
  
    </form>
    <br>
    <form action="php/eliminar.php" method="post">
        <p>¿Deseas eliminar todos los registros?</p><label>Si</label>&nbsp; <input type="radio" value="Si" id="todos" name="todos">
        <br><button class="btn btn-primary" type="submit" value="Aceptar"> Aceptar</button>
    </form>

<br>
  

<div id="tabla"></div>


</div>
</div>
</div>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script>

function loadTabla(){
  $('#editModal').modal('hide');

  $.get("./php/tabla.php","",function(data){
    $("#tabla").html(data);
  })

}

$("#buscar").submit(function(e){
  e.preventDefault();
  $.get("./php/busqueda.php",$("#buscar").serialize(),function(data){
    $("#tabla").html(data);
  $("#buscar")[0].reset();
  });
});

loadTabla();

</script>

	</body>
</html>