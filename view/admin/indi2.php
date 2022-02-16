<?php
  session_start();

  // Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)

  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 1){
    header('location: ../../index.html');
  }

    require_once "conexion.php";
    $todos = mysqli_query($conexion,'select count(*) as todos from '.$_SESSION['grupo'].';');
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Concentrado General</title>
        <meta charset="utf-8">
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
  <script src="../../js/jquery.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
   
    <style>
        .background {
    width: 540px;
    height: 33px;
    background-color: #F0F0F0;
    padding: 7px;
    margin: 0px 0px 0px 0px;
    border: solid 1px;
    border-color: lightgrey;
    border-radius: 3px;
}            
     
  
            
        .text {
    width: 540px;
    height: 29px;
    padding: 5px;
    color: black;
    position: static; 
    font-size: 12px;
   
}    
    </style>
   
    </head>
    <body>
         <div class="panel panel-default">
                <div class="panel-heading">

                    <h3 class="panel-title">Datos: </h3>
                </div>
                <div class="panel-body">
                    <div class="form-group row">
                             <div class="form-group">  
                            
                                <div class="col-xs-6">
                                <label for="dir">Nombre del Director: </label> 
                               <input type="text" class="form-control input-sm" id="dir" disabled value="Teobaldo López Bello"/>
                                </div>
                                <div class="col-xs-2">
                                <label for="cct"> C.C.T: </label>
                                <input type="text" class="form-control input-sm"id="cct" disabled value="15DPR2273C"/>
                                 </div>
                                 <div class="col-xs-1">
                                <label for="zona"> Zona:</label>
                                <input type="text" class="form-control input-sm" id="zona" disabled value="74"/>
                                 </div>
                                 <div class="col-xs-1">
                                <label for="sec">Sector:</label>
                                <input type="text" class="form-control input-sm" id="sec" disabled value="XI"/>
                                 </div>
                                 <div class="col-xs-2">
                                <label for ="turno"> Turno:</label>
                                <input type="text" class="form-control input-sm" id="turno" disabled value="Vespertino"/>
                                 </div>
                                <div class="col-xs-6">
                                <label for ="profe"> Nombre del Profesor:</label>
                                <div class="text background">&nbsp;
                                
                                <?php
                                  
                                $consulta = "SELECT nombre FROM usuarios where grupo = '".$_SESSION['grupo']."'";

if ($resultado = $conexion->query($consulta)) {

    /* obtener el array de objetos */
    while ($fila = $resultado->fetch_row())
    {
        printf ("%s\n", ucwords($fila[0]));
    }

    /* liberar el conjunto de resultados */
    $resultado->close();
}
                                                                                                 
                                ?>
                                </div>
                                                             
                                 </div>
                                
                                
                                 </div>
                                 
                                 <!-- -->
                                 
                                  <?php
                                    
                                    if($_SESSION['grupo'] == '1A' || $_SESSION['grupo'] == '1a')
                                    {
                                       echo('<div class="col-xs-2">
                                    <label for="grado"> Grado: </label>
                                    <select class="form-control input-sm" id="grado" name="grado" disabled>
                                        <option value ="1" selected> Primero </option>
                                        <option value ="2"> Segundo </option>
                                        <option value ="3"> Tercero </option>
                                        <option value ="4"> Cuarto </option>
                                        <option value ="5"> Quinto </option>
                                        <option value ="6"> Sexto </option>
                                    </select>
                                </div>
                                <div class="col-xs-1">
                                    <label for="grupo"> Grupo: </label>
                                    <select class="form-control input-sm" id=grupo name="grupo" disabled>
                                        <option value ="A" selected> A </option>
                                        <option value ="B"> B </option>
                                        <option value ="C"> C </option>
                                    </select>
                                </div>'); 
                                    }
                                 
                                    if($_SESSION['grupo'] == '1B' || $_SESSION['grupo'] == '1b')
                                    {
                                        echo('<div class="col-xs-2">
                                    <label for="grado"> Grado: </label>
                                    <select class="form-control input-sm" id="grado" name="grado" disabled>
                                        <option value ="1" selected> Primero </option>
                                        <option value ="2"> Segundo </option>
                                        <option value ="3"> Tercero </option>
                                        <option value ="4"> Cuarto </option>
                                        <option value ="5"> Quinto </option>
                                        <option value ="6"> Sexto </option>
                                    </select>
                                </div>
                                <div class="col-xs-1">
                                    <label for="grupo"> Grupo: </label>
                                    <select class="form-control input-sm" id=grupo name="grupo" disabled>
                                        <option value ="A"> A </option>
                                        <option value ="B" selected> B </option>
                                        <option value ="C"> C </option>
                                    </select>
                                </div>');    
                                    }
                                 
                                    if($_SESSION['grupo'] == '2A' || $_SESSION['grupo'] == '2a')
                                    {
                                        echo('<div class="col-xs-2">
                                    <label for="grado"> Grado: </label>
                                    <select class="form-control input-sm" id="grado" name="grado" disabled>
                                        <option value ="1"> Primero </option>
                                        <option value ="2" selected> Segundo </option>
                                        <option value ="3"> Tercero </option>
                                        <option value ="4"> Cuarto </option>
                                        <option value ="5"> Quinto </option>
                                        <option value ="6"> Sexto </option>
                                    </select>
                                </div>
                                <div class="col-xs-1">
                                    <label for="grupo"> Grupo: </label>
                                    <select class="form-control input-sm" id=grupo name="grupo" disabled>
                                        <option value ="A" selected> A </option>
                                        <option value ="B"> B </option>
                                        <option value ="C"> C </option>
                                    </select>
                                </div>');     
                                    }
                                 
                                    if($_SESSION['grupo'] == '2B' || $_SESSION['grupo'] == '2b')
                                    {
                                        echo('<div class="col-xs-2">
                                    <label for="grado"> Grado: </label>
                                    <select class="form-control input-sm" id="grado" name="grado" disabled>
                                        <option value ="1"> Primero </option>
                                        <option value ="2" selected> Segundo </option>
                                        <option value ="3"> Tercero </option>
                                        <option value ="4"> Cuarto </option>
                                        <option value ="5"> Quinto </option>
                                        <option value ="6"> Sexto </option>
                                    </select>
                                </div>
                                <div class="col-xs-1">
                                    <label for="grupo"> Grupo: </label>
                                    <select class="form-control input-sm" id=grupo name="grupo" disabled>
                                        <option value ="A"> A </option>
                                        <option value ="B" selected> B </option>
                                        <option value ="C"> C </option>
                                    </select>
                                </div>');    
                                    }
                                 
                                    if($_SESSION['grupo'] == '3A' || $_SESSION['grupo'] == '3a')
                                    {
                                        echo('<div class="col-xs-2">
                                    <label for="grado"> Grado: </label>
                                    <select class="form-control input-sm" id="grado" name="grado" disabled>
                                        <option value ="1"> Primero </option>
                                        <option value ="2"> Segundo </option>
                                        <option value ="3" selected> Tercero </option>
                                        <option value ="4"> Cuarto </option>
                                        <option value ="5"> Quinto </option>
                                        <option value ="6"> Sexto </option>
                                    </select>
                                </div>
                                <div class="col-xs-1">
                                    <label for="grupo"> Grupo: </label>
                                    <select class="form-control input-sm" id=grupo name="grupo" disabled>
                                        <option value ="A" selected> A </option>
                                        <option value ="B"> B </option>
                                        <option value ="C"> C </option>
                                    </select>
                                </div>');   
                                    }
                                 
                                    if($_SESSION['grupo'] == '3B' || $_SESSION['grupo'] == '3b')
                                    {
                                        echo('<div class="col-xs-2">
                                    <label for="grado"> Grado: </label>
                                    <select class="form-control input-sm" id="grado" name="grado" disabled>
                                        <option value ="1"> Primero </option>
                                        <option value ="2"> Segundo </option>
                                        <option value ="3" selected> Tercero </option>
                                        <option value ="4"> Cuarto </option>
                                        <option value ="5"> Quinto </option>
                                        <option value ="6"> Sexto </option>
                                    </select>
                                </div>
                                <div class="col-xs-1">
                                    <label for="grupo"> Grupo: </label>
                                    <select class="form-control input-sm" id=grupo name="grupo" disabled>
                                        <option value ="A"> A </option>
                                        <option value ="B" selected> B </option>
                                        <option value ="C"> C </option>
                                    </select>
                                </div>');       
                                    }
                                 
                                    if($_SESSION['grupo'] == '4A' || $_SESSION['grupo'] == '4a')
                                    {
                                       echo('<div class="col-xs-2">
                                    <label for="grado"> Grado: </label>
                                    <select class="form-control input-sm" id="grado" name="grado" disabled>
                                        <option value ="1"> Primero </option>
                                        <option value ="2"> Segundo </option>
                                        <option value ="3"> Tercero </option>
                                        <option value ="4" selected> Cuarto </option>
                                        <option value ="5"> Quinto </option>
                                        <option value ="6"> Sexto </option>
                                    </select>
                                </div>
                                <div class="col-xs-1">
                                    <label for="grupo"> Grupo: </label>
                                    <select class="form-control input-sm" id=grupo name="grupo" disabled>
                                        <option value ="A" selected> A </option>
                                        <option value ="B"> B </option>
                                        <option value ="C"> C </option>
                                    </select>
                                </div>');  
                                    }
                                 
                                    if($_SESSION['grupo'] == '4B' || $_SESSION['grupo'] == '4b')
                                    {
                                        echo('<div class="col-xs-2">
                                    <label for="grado"> Grado: </label>
                                    <select class="form-control input-sm" id="grado" name="grado" disabled>
                                        <option value ="1"> Primero </option>
                                        <option value ="2"> Segundo </option>
                                        <option value ="3"> Tercero </option>
                                        <option value ="4" selected> Cuarto </option>
                                        <option value ="5"> Quinto </option>
                                        <option value ="6"> Sexto </option>
                                    </select>
                                </div>
                                <div class="col-xs-1">
                                    <label for="grupo"> Grupo: </label>
                                    <select class="form-control input-sm" id=grupo name="grupo" disabled>
                                        <option value ="A"> A </option>
                                        <option value ="B" selected> B </option>
                                        <option value ="C"> C </option>
                                    </select>
                                </div>');  
                                    }
                                 
                                    if($_SESSION['grupo'] == '5A' || $_SESSION['grupo'] == '5a')
                                    {
                                        echo('<div class="col-xs-2">
                                    <label for="grado"> Grado: </label>
                                    <select class="form-control input-sm" id="grado" name="grado" disabled>
                                        <option value ="1"> Primero </option>
                                        <option value ="2"> Segundo </option>
                                        <option value ="3"> Tercero </option>
                                        <option value ="4"> Cuarto </option>
                                        <option value ="5" selected> Quinto </option>
                                        <option value ="6"> Sexto </option>
                                    </select>
                                </div>
                                <div class="col-xs-1">
                                    <label for="grupo"> Grupo: </label>
                                    <select class="form-control input-sm" id=grupo name="grupo" disabled>
                                        <option value ="A" selected> A </option>
                                        <option value ="B"> B </option>
                                        <option value ="C"> C </option>
                                    </select>
                                </div>'); 
                                    }
                                 
                                    if($_SESSION['grupo'] == '5B' || $_SESSION['grupo'] == '5b')
                                    {
                                        echo('<div class="col-xs-2">
                                    <label for="grado"> Grado: </label>
                                    <select class="form-control input-sm" id="grado" name="grado" disabled>
                                        <option value ="1"> Primero </option>
                                        <option value ="2"> Segundo </option>
                                        <option value ="3"> Tercero </option>
                                        <option value ="4"> Cuarto </option>
                                        <option value ="5" selected> Quinto </option>
                                        <option value ="6"> Sexto </option>
                                    </select>
                                </div>
                                <div class="col-xs-1">
                                    <label for="grupo"> Grupo: </label>
                                    <select class="form-control input-sm" id=grupo name="grupo" disabled>
                                        <option value ="A"> A </option>
                                        <option value ="B" selected> B </option>
                                        <option value ="C"> C </option>
                                    </select>
                                </div>');   
                                    }
                                 
                                    if($_SESSION['grupo'] == '5C' || $_SESSION['grupo'] == '5c')
                                    {
                                        echo('<div class="col-xs-2">
                                    <label for="grado"> Grado: </label>
                                    <select class="form-control input-sm" id="grado" name="grado" disabled>
                                        <option value ="1"> Primero </option>
                                        <option value ="2"> Segundo </option>
                                        <option value ="3"> Tercero </option>
                                        <option value ="4"> Cuarto </option>
                                        <option value ="5" selected> Quinto </option>
                                        <option value ="6"> Sexto </option>
                                    </select>
                                </div>
                                <div class="col-xs-1">
                                    <label for="grupo"> Grupo: </label>
                                    <select class="form-control input-sm" id=grupo name="grupo" disabled>
                                        <option value ="A"> A </option>
                                        <option value ="B"> B </option>
                                        <option value ="C" selected> C </option>
                                    </select>
                                </div>');  
                                    }
                                 
                                    if($_SESSION['grupo'] == '6A' || $_SESSION['grupo'] == '6a')
                                    {
                                        echo('<div class="col-xs-2">
                                    <label for="grado"> Grado: </label>
                                    <select class="form-control input-sm" id="grado" name="grado" disabled>
                                        <option value ="1"> Primero </option>
                                        <option value ="2"> Segundo </option>
                                        <option value ="3"> Tercero </option>
                                        <option value ="4"> Cuarto </option>
                                        <option value ="5"> Quinto </option>
                                        <option value ="6" selected> Sexto </option>
                                    </select>
                                </div>
                                <div class="col-xs-1">
                                    <label for="grupo"> Grupo: </label>
                                    <select class="form-control input-sm" id=grupo name="grupo" disabled>
                                        <option value ="A" selected> A </option>
                                        <option value ="B"> B </option>
                                        <option value ="C"> C </option>
                                    </select>
                                </div>'); 
                                    }
                                 
                                    if($_SESSION['grupo'] == '6B' || $_SESSION['grupo'] == '6b')
                                    {
                                        echo('<div class="col-xs-2">
                                    <label for="grado"> Grado: </label>
                                    <select class="form-control input-sm" id="grado" name="grado" disabled>
                                        <option value ="1"> Primero </option>
                                        <option value ="2"> Segundo </option>
                                        <option value ="3"> Tercero </option>
                                        <option value ="4"> Cuarto </option>
                                        <option value ="5"> Quinto </option>
                                        <option value ="6" selected> Sexto </option>
                                    </select>
                                </div>
                                <div class="col-xs-1">
                                    <label for="grupo"> Grupo: </label>
                                    <select class="form-control input-sm" id=grupo name="grupo" disabled>
                                        <option value ="A"> A </option>
                                        <option value ="B" selected> B </option>
                                        <option value ="C"> C </option>
                                    </select>
                                </div>');    
                                    }
                                 
                                    if($_SESSION['grupo'] == '6C' || $_SESSION['grupo'] == '6c')
                                    {
                                        echo('<div class="col-xs-2">
                                    <label for="grado"> Grado: </label>
                                    <select class="form-control input-sm" id="grado" name="grado" disabled>
                                        <option value ="1"> Primero </option>
                                        <option value ="2"> Segundo </option>
                                        <option value ="3"> Tercero </option>
                                        <option value ="4"> Cuarto </option>
                                        <option value ="5"> Quinto </option>
                                        <option value ="6" selected> Sexto </option>
                                    </select>
                                </div>
                                <div class="col-xs-1">
                                    <label for="grupo"> Grupo: </label>
                                    <select class="form-control input-sm" id=grupo name="grupo" disabled>
                                        <option value ="A"> A </option>
                                        <option value ="B"> B </option>
                                        <option value ="C" selected> C </option>
                                    </select>
                                </div>');     
                                    }
                                 
                                ?>
                                 
                                 <!-- -->
                                 
                                  <div class="col-xs-3">
                                <label for ="total"> Total de alumnos en grupo:</label>
                                <?php
				                    while($row = mysqli_fetch_array($todos))
				                    {
			                             ?> <input type="text" class="form-control input-sm" id="total" maxlength="2" value="<?php echo $row['todos']; ?>" disabled/>
			
				                    <?php } ?>
                                 </div>
                                                                  
                                 
                        </div>   
                        </div>
                        </div>
                    </div>       
<div class="container">
  <h2>Concentrado General</h2>
    <table class="table">
        <th rowspan="4" class="active">Asistencia</th>
            <tr class="danger">
                <td>Alumnos que faltan varias clases (+ de 5 faltas a la fecha)</td>
                  <td style="vertical-align:middle" align="center">
                     <?php 
				$consulta = mysqli_query($conexion,"SELECT count(asistencia) as asistencia FROM ".$_SESSION['grupo']." where asistencia = 1;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['asistencia']; ?>
			
				<?php } ?> </td>
            </tr>
            <tr class="warning">
                <td>Alumnos que faltan algunos días (hasta 5 faltas)</td>
                <td style="vertical-align:middle" align="center">
                     <?php 
				$consulta = mysqli_query($conexion,"SELECT count(asistencia) as asistencia FROM ".$_SESSION['grupo']." where asistencia = 2;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['asistencia']; ?>
			
				<?php } ?> </td>
            </tr>
            <tr class="success">
                <td>Alumnos que no han faltado</td>
                <td style="vertical-align:middle" align="center">
                     <?php 
				$consulta = mysqli_query($conexion,"SELECT count(asistencia) as asistencia FROM ".$_SESSION['grupo']." where asistencia = 3;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['asistencia']; ?>
			
				<?php } ?> </td>
            </tr>
        <th rowspan="4" class="active">Participación en Clase</th>
            <tr class="danger">
                <td>Alumnos que no participan en clase</td>
                 <td style="vertical-align:middle" align="center">
                     <?php 
				$consulta = mysqli_query($conexion,"SELECT count(participacion) as participacion FROM ".$_SESSION['grupo']." where participacion = 1;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['participacion']; ?>
			
				<?php } ?> </td>
            </tr>
            <tr class="warning">
                <td>Alumnos que participan algunas veces</td>
                 <td style="vertical-align:middle" align="center">
                     <?php 
				$consulta = mysqli_query($conexion,"SELECT count(participacion) as participacion FROM ".$_SESSION['grupo']." where participacion = 2;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['participacion']; ?>
			
				<?php } ?> </td>
            </tr>
            <tr class="success">
                <td>Alumnos que participan constantemente</td>
                 <td style="vertical-align:middle" align="center">
                     <?php 
				$consulta = mysqli_query($conexion,"SELECT count(participacion) as participacion FROM ".$_SESSION['grupo']." where participacion = 3;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['participacion']; ?>
			
				<?php } ?> </td>
            </tr>
          <th rowspan="4" class="active">Niveles de Desempeño</th>
            <tr class="danger">
                <td>Alumnos con promedio de calificaciones entre 5 y 6</td>
                <td style="vertical-align:middle" align="center">
                     <?php 
				$consulta = mysqli_query($conexion,"SELECT count(desempeno) as desempeno FROM ".$_SESSION['grupo']." where desempeno = 1;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['desempeno']; ?>
			
				<?php } ?> </td>
            </tr>
            <tr class="warning">
                <td>Alumnos con promedio de calificaciones entre 7 y 8</td>
                <td style="vertical-align:middle" align="center">
                     <?php 
				$consulta = mysqli_query($conexion,"SELECT count(desempeno) as desempeno FROM ".$_SESSION['grupo']." where desempeno = 2;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['desempeno']; ?>
			
				<?php } ?> </td>
            </tr>
            <tr class="success">
                <td>Alumnos con promedio de calificaciones entre 9 y 10</td>
                <td style="vertical-align:middle" align="center">
                     <?php 
				$consulta = mysqli_query($conexion,"SELECT count(desempeno) as desempeno FROM ".$_SESSION['grupo']." where desempeno = 3;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['desempeno']; ?>
			
				<?php } ?> </td>
            </tr>
                  <th rowspan="5" class="active">Comprensión Lectora</th>
            <tr class="danger">
                <td>Alumnos que siempre requieren apoyo adicional</td>
                <td style="vertical-align:middle" align="center">
                     <?php 
                    $consulta = mysqli_query($conexion,"SELECT count(lectura) as lectura FROM ".$_SESSION['grupo']." where lectura = 1;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['lectura']; ?>
			
				<?php } ?> </td>
            </tr>
            <tr class="info">
                <td>Alumnos que casi siempre requieren apoyo adicional</td>
                 <td style="vertical-align:middle" align="center">
                     <?php 
                    $consulta = mysqli_query($conexion,"SELECT count(lectura) as lectura FROM ".$_SESSION['grupo']." where lectura = 2;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['lectura']; ?>
			
				<?php } ?> </td>
            </tr>
            <tr class="warning">
                <td>Alumnos que en ocasiones requieren apoyo adicional</td>
                 <td style="vertical-align:middle" align="center">
                     <?php 
                    $consulta = mysqli_query($conexion,"SELECT count(lectura) as lectura FROM ".$_SESSION['grupo']." where lectura = 3;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['lectura']; ?>
			
				<?php } ?> </td>
            </tr>
            <tr class="success">
                <td>Alumnos que no requieren apoyo adicional</td>
                 <td style="vertical-align:middle" align="center">
                     <?php 
                    $consulta = mysqli_query($conexion,"SELECT count(lectura) as lectura FROM ".$_SESSION['grupo']." where lectura = 4;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['lectura']; ?>
			
				<?php } ?> </td>
            </tr>
             <th rowspan="4" class="active">Competencia Matemática</th>
            <tr class="danger">
                <td>Alumnos con promedio de calificaciones entre 5 y 6</td>
                 <td style="vertical-align:middle" align="center">
                     <?php 
                    $consulta = mysqli_query($conexion,"SELECT count(c_matematica) as c_matematica FROM ".$_SESSION['grupo']." where c_matematica = 1;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['c_matematica']; ?>
			
				<?php } ?> </td>
            </tr>
            <tr class="warning">
                <td>Alumnos con promedio de calificaciones entre 7 y 8</td>
                 <td style="vertical-align:middle" align="center">
                     <?php 
                    $consulta = mysqli_query($conexion,"SELECT count(c_matematica) as c_matematica FROM ".$_SESSION['grupo']." where c_matematica = 2;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['c_matematica']; ?>
			
				<?php } ?> </td>
            </tr>
            <tr class="success">
                <td>Alumnos con promedio de calificaciones entre 9 y 10</td>
                 <td style="vertical-align:middle" align="center">
                     <?php 
                    $consulta = mysqli_query($conexion,"SELECT count(c_matematica) as c_matematica FROM ".$_SESSION['grupo']." where c_matematica = 1;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['c_matematica']; ?>
			
				<?php } ?> </td>
            </tr>
             <th rowspan="4" class="active">Convivencia Escolar</th>
            <tr class="danger">
                <td>Alumnos que constantemente agreden a sus compañeros</td>
                 <td style="vertical-align:middle" align="center">
                     <?php 
                    $consulta = mysqli_query($conexion,"SELECT count(convivencia) as convivencia FROM ".$_SESSION['grupo']." where convivencia = 1;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['convivencia']; ?>
			
				<?php } ?> </td>
            </tr>
            <tr class="warning">
                <td>Alumnos que en ocasiones agreden a sus compañeros</td>
                <td style="vertical-align:middle" align="center">
                     <?php 
                    $consulta = mysqli_query($conexion,"SELECT count(convivencia) as convivencia FROM ".$_SESSION['grupo']." where convivencia = 2;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['convivencia']; ?>
			
				<?php } ?> </td>
            </tr>
            <tr class="success">
                <td>Alumnos que nunca agreden a sus compañeros</td>
                <td style="vertical-align:middle" align="center">
                     <?php 
                    $consulta = mysqli_query($conexion,"SELECT count(convivencia) as convivencia FROM ".$_SESSION['grupo']." where convivencia = 3;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['convivencia']; ?>
			
				<?php } ?> </td>
            </tr>
            <th rowspan="5" class="active">Escritura</th>
            <tr class="danger">
                <td>Alumnos que siempre requieren apoyo adicional</td>
                <td style="vertical-align:middle" align="center">
                     <?php
                    $consulta = mysqli_query($conexion,"SELECT count(escritura) as escritura FROM ".$_SESSION['grupo']." where escritura = 1;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['escritura']; ?>
			
				<?php } ?> </td>
                    </tr>
            <tr class="info">
                <td>Alumnos que casi siempre requieren apoyo adicional</td>
                <td style="vertical-align:middle" align="center">
                     <?php
                    $consulta = mysqli_query($conexion,"SELECT count(escritura) as escritura FROM ".$_SESSION['grupo']." where escritura = 2;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['escritura']; ?>
			
				<?php } ?> </td>
            </tr>
            <tr class="warning">
                <td>Alumnos que en ocasiones requieren apoyo adicional</td>
               <td style="vertical-align:middle" align="center">
                     <?php
                    $consulta = mysqli_query($conexion,"SELECT count(escritura) as escritura FROM ".$_SESSION['grupo']." where escritura = 3;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['escritura']; ?>
			
				<?php } ?> </td>
            </tr>
            <tr class="success">
                <td>Alumnos que no requieren apoyo adicional</td>
                <td style="vertical-align:middle" align="center">
                     <?php
                    $consulta = mysqli_query($conexion,"SELECT count(escritura) as escritura FROM ".$_SESSION['grupo']." where escritura = 4;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['escritura']; ?>
			
				<?php } ?> </td>
            </tr>
            <?php 
            $consulta = mysqli_query($conexion, "SELECT nombre FROM ".$_SESSION['grupo']." WHERE riesgo = 1" );
            ?>
            <th rowspan="5" class="active">Alumnos en Riesgo</th>
              <tr class='danger'>
                    <td>
                <?php 
                WHILE($row = mysqli_fetch_array($consulta)){
                    $nombre = $row["nombre"];
                  
                    echo"<p> $nombre </p>";
                    
                }
                ?>
                  </td>
                  
                   <td style="vertical-align:middle" align="center">
                      <?php 
				$consulta2 = mysqli_query($conexion,"SELECT count(riesgo) as riesgo FROM ".$_SESSION['grupo']." where riesgo = 1;");
				while($row = mysqli_fetch_array($consulta2))
				{
			 echo $row['riesgo']; ?>
			
				<?php } ?>
                  </td>

        </tr>
    </table>
        </div>
    </body>
</html>