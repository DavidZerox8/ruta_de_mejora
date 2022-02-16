<?php

    session_start();

  // Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)


    if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 2){
    header('location: ../../index.html');
    }

	require_once 'conexion.php';
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Graficas</title>

		<style type="text/css">

		</style>
	</head>
	<body>
	<link href = "../../css/mycss.css" rel = "stylesheet" type = "text/css"> 


<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<table id="datatable" class = "dnone">
    <thead>
        <tr>
            <th>Alumnos</th>
            <th>Alumnos con promedios<br> de calificaciones entre 5 y 6</th>
            <th>Alumnos con promedios<br> de calificaciones entre 7 y 8</th>
			<th>Alumnos con promedios<br> de calificaciones entre 9 y 10</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>Alumnos</th>
            <td><?php 
				$consulta = mysqli_query($conexion,"SELECT count(desempeno) as desempeno FROM ".$_SESSION['grupo']." where desempeno = 1;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['desempeno']; ?>
			
				<?php } ?> </td>
            <td><?php 
				$consulta = mysqli_query($conexion,"SELECT count(desempeno) as desempeno FROM ".$_SESSION['grupo']." where desempeno = 2;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['desempeno']; ?>
			
				<?php } ?></td>
			<td> <?php 
				$consulta = mysqli_query($conexion,"SELECT count(desempeno) as desempeno FROM ".$_SESSION['grupo']." where desempeno = 3;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['desempeno']; ?>
			
				<?php } ?> </td>
				
        </tr>
       
    </tbody>
</table>


		<script type="text/javascript">

Highcharts.chart('container', {
    data: {
        table: 'datatable'
    },
    chart: {
        type: 'column'
    },
    title: {
        text: 'Grafica de Niveles de Desempeño'
    },
    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Alumnos'
        }
    },
    tooltip: {
        formatter: function () {
            return '<b>' + this.series.name + '</b><br/>' +
                this.point.y + ' ' + this.point.name.toLowerCase();
        }
    }
});
		</script>
	</body>
</html>
