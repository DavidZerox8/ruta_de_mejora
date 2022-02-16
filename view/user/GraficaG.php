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
		<title>Highcharts Example</title>

		<style type="text/css">

		</style>
	</head>
	<body>


<div id="container" style="min-width: 500px; height: 550px; margin: 0 auto"></div>

		<script type="text/javascript">

Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Grafica General del Grupo <?php echo strtoupper($_SESSION['grupo']); ?>'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        type: 'category',
        labels: {
            rotation: -90,
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Alumnos'
        }
    },
    legend: {
        enabled: false
    },
    tooltip: {
        allowDecimals: false,
        pointFormat: '<b>{point.y:.0f} Alumnos</b>'
    },
    series: [{
        name: 'Population',
        data: [
            ['Alumnos que faltan varias clases <br> (mas de 5 faltas a la fecha)', <?php 
				$consulta = mysqli_query($conexion,"SELECT count(asistencia) as asistencia FROM ".$_SESSION['grupo']." where asistencia = 1;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['asistencia']; ?>
			
				<?php } ?> ],
            ['Alumnos que faltan algunos días <br> (hasta 5 faltas)', <?php 
				$consulta = mysqli_query($conexion,"SELECT count(asistencia) as asistencia FROM ".$_SESSION['grupo']." where asistencia = 2;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['asistencia']; ?>
			
				<?php } ?>],
            ['Alumnos que no han faltado',  <?php 
				$consulta = mysqli_query($conexion,"SELECT count(asistencia) as asistencia FROM ".$_SESSION['grupo']." where asistencia = 3;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['asistencia']; ?>
			
				<?php } ?> ],
            ['Alumnos que no participan <br> en clase', <?php 
				$consulta = mysqli_query($conexion,"SELECT count(participacion) as participacion FROM ".$_SESSION['grupo']." where participacion = 1;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['participacion']; ?>
			
				<?php } ?> ],
            ['Alumnos que participan algunas <br> veces', <?php 
				$consulta = mysqli_query($conexion,"SELECT count(participacion) as participacion FROM ".$_SESSION['grupo']." where participacion = 2;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['participacion']; ?>
			
				<?php } ?>],
            ['Alumnos que participan <br> constantemente',  <?php 
				$consulta = mysqli_query($conexion,"SELECT count(participacion) as participacion FROM ".$_SESSION['grupo']." where participacion = 3;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['participacion']; ?>
			
				<?php } ?> ],
            ['Alumnos con promedios<br> de calificaciones entre 5 y 6', <?php 
				$consulta = mysqli_query($conexion,"SELECT count(desempeno) as desempeno FROM ".$_SESSION['grupo']." where desempeno = 1;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['desempeno']; ?>
			
				<?php } ?> ],
            ['Alumnos con promedios<br> de calificaciones entre 7 y 8', <?php 
				$consulta = mysqli_query($conexion,"SELECT count(desempeno) as desempeno FROM ".$_SESSION['grupo']." where desempeno = 2;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['desempeno']; ?>
			
				<?php } ?>],
            ['Alumnos con promedios<br> de calificaciones entre 9 y 10',  <?php 
				$consulta = mysqli_query($conexion,"SELECT count(desempeno) as desempeno FROM ".$_SESSION['grupo']." where desempeno = 3;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['desempeno']; ?>
			
				<?php } ?> ],
            ['Alumnos que siempre <br> requieren apoyo adicional', <?php 
				$consulta = mysqli_query($conexion,"SELECT count(lectura) as lectura FROM ".$_SESSION['grupo']." where lectura = 1;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['lectura']; ?>
			
				<?php } ?> ],
            ['Alumnos que casi siempre <br> requieren apoyo adicional', <?php 
				$consulta = mysqli_query($conexion,"SELECT count(lectura) as lectura FROM ".$_SESSION['grupo']." where lectura = 2;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['lectura']; ?>
			
				<?php } ?>],
            ['Alumnos que en ocasiones <br> requieren apoyo adicional',  <?php 
				$consulta = mysqli_query($conexion,"SELECT count(lectura) as lectura FROM ".$_SESSION['grupo']." where lectura = 3;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['lectura']; ?>
			
				<?php } ?> ],
            ['Alumnos que no requieren <br> apoyo adicional',  <?php 
				$consulta = mysqli_query($conexion,"SELECT count(lectura) as lectura FROM ".$_SESSION['grupo']." where lectura = 4;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['lectura']; ?>
			
				<?php } ?> ],
            ['Alumnos con promedios<br>de calificaciones entre 5 y 6', <?php 
				$consulta = mysqli_query($conexion,"SELECT count(c_matematica) as c_matematica FROM ".$_SESSION['grupo']." where c_matematica = 1;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['c_matematica']; ?>
			
				<?php } ?> ],
            ['Alumnos con promedios de <br>calificaciones entre 7 y 8', <?php 
				$consulta = mysqli_query($conexion,"SELECT count(c_matematica) as c_matematica FROM ".$_SESSION['grupo']." where c_matematica = 2;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['c_matematica']; ?>
			
				<?php } ?>],
            ['Alumnos con promedios de <br>calificaciones entre 9 y 10',  <?php 
				$consulta = mysqli_query($conexion,"SELECT count(c_matematica) as c_matematica FROM ".$_SESSION['grupo']." where c_matematica = 3;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['c_matematica']; ?>
			
				<?php } ?> ],
            ['Alumnos que constantemente<br> agreden a sus compañeros', <?php 
				$consulta = mysqli_query($conexion,"SELECT count(convivencia) as convivencia FROM ".$_SESSION['grupo']." where convivencia = 1;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['convivencia']; ?>
			
				<?php } ?> ],
            ['Alumnos que en ocasiones<br> agreden a sus compañeros', <?php 
				$consulta = mysqli_query($conexion,"SELECT count(convivencia) as convivencia FROM ".$_SESSION['grupo']." where convivencia = 2;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['convivencia']; ?>
			
				<?php } ?>],
            ['Alumnos que nunca<br> agreden a sus compañeros',  <?php 
				$consulta = mysqli_query($conexion,"SELECT count(convivencia) as convivencia FROM ".$_SESSION['grupo']." where convivencia = 3;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['convivencia']; ?>
			
				<?php } ?> ],
            ['Alumnos que siempre<br> requieren apoyo adicional', <?php 
				$consulta = mysqli_query($conexion,"SELECT count(escritura) as escritura FROM ".$_SESSION['grupo']." where escritura = 1;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['escritura']; ?>
			
				<?php } ?> ],
            ['Alumnos que casi siempre<br> requieren apoyo adicional', <?php 
				$consulta = mysqli_query($conexion,"SELECT count(escritura) as escritura FROM ".$_SESSION['grupo']." where escritura = 2;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['escritura']; ?>
			
				<?php } ?>],
            ['Alumnos que en ocasiones requieren <br>apoyo adicional',  <?php 
				$consulta = mysqli_query($conexion,"SELECT count(escritura) as escritura FROM ".$_SESSION['grupo']." where escritura = 3;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['escritura']; ?>
			
				<?php } ?> ],
            ['Alumnos que no requieren apoyo<br> adicional',  <?php 
				$consulta = mysqli_query($conexion,"SELECT count(escritura) as escritura FROM ".$_SESSION['grupo']." where escritura = 4;");
				while($row = mysqli_fetch_array($consulta))
				{
			 echo $row['escritura']; ?>
			
				<?php } ?> ]
        ],
        dataLabels: {
            enabled: true,
            allowDecimals: false,
            rotation: -90,
            color: '#FFFFFF',
            align: 'right',
            format: '{point.y:.0f}', // one decimal
            y: 10, // 10 pixels down from the top
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    }]
});
		</script>
	</body>
</html>