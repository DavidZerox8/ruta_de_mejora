<!DOCTYPE html>
<html lang="es">
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="../../img/cat-black-face.png" />
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../css/main.css" rel="stylesheet">
    <!-- Scroll Menu -->
    <link href="../../css/sweetalert.css" rel="stylesheet">
    
    
    <script type="text/javascript">
    
        function error()
        {
            swal({ 
            title: "Hubo un error",
            text: "Porfavor vuelve a ingresar el registro",
            type: "error",
            showCancelButton: false,
            cancelButtonText: "Mmm... mejor no",
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "¡Corregir!",
            closeOnConfirm: false },

            function(){ 

                window.location = "index.php";
            });
            
        }
        
        function success()
        {
            swal({ 
            title: "Bien",
            text: "El registro fue ingresado exitosamente",
            type: "success",
            showCancelButton: false,
            cancelButtonText: "Mmm... mejor no",
            confirmButtonColor: "#0FD055",
            confirmButtonText: "¡Aceptar!",
            closeOnConfirm: false },

            function(){ 

                window.location = "index.php";
            });
        }
        
        
        
    </script>
    
    
    
</head>


<?php
    error_reporting(E_ERROR);
    session_start();

  require_once "conexion.php";

  // Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)

  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 2){
    header('location: ../../index.html');
  }
    
    $profe = "";
    $j = "";
    $nj = "";
    
    if(empty($_SESSION['nombrec']))
    {
        $_SESSION['nombrec'] = $profe = $_POST['profe'];
    }
    
    if(empty($_SESSION['asistenciaj']))
    {
        $_SESSION['asistenciaj'] = $j = $_POST['j'];
    }
    
    if(empty($_SESSION['asistencianj']))
    {
        $_SESSION['asistencianj'] = $nj = $_POST['nj'];
    }
    
    $name   = $_POST['alumno'];
    $optradio1  = $_POST['optradio1'];
    $optradio2  = $_POST['optradio2'];
    $optradio3  = $_POST['optradio3'];
    $optradio4  = $_POST['optradio4'];
    $optradio5  = $_POST['optradio5'];  
    $optradio6  = $_POST['optradio6'];
    $optradio7  = $_POST['optradio7'];
    $optradio8  = $_POST['optradio8'];

    if(empty($name) || empty($optradio1) || empty($optradio2) || empty($optradio3) || empty($optradio4) || empty($optradio5) || empty($optradio6) || empty($optradio7) || empty($optradio8))
    {
        echo "<body onload='return error();'>";
        
    }

    else
    {
        if (!($sql = $conexion->prepare("INSERT INTO ".$_SESSION['grupo']."(nombre, asistencia, participacion, desempeno, lectura, c_matematica, convivencia, escritura, riesgo) VALUES (?,?,?,?,?,?,?,?,?)"))) 
        {
            echo "Falló la preparación: (" . $conexion->errno . ") " . $conexion->error;
        }
        
        
        if (!$sql->bind_param("siiiiiiii", $name,$optradio1,$optradio2,$optradio3,$optradio4,$optradio5,$optradio6,$optradio7,$optradio8)) 
        {
            echo "Falló la vinculación de parámetros: (" . $sql->errno . ") " . $sentencia->error;
        }
         
        
        if(!$sql->execute())
        {
            echo "Fallo la ejecucion de la insercion: (" . $conexion->errno . ") " . $conexion->error;
        }
        
        else
        {   
            echo "<body onload='return success();'>";
            
        }
        
        
        /*parent::conectar();
        
        parent::query("INSERT INTO ".$_SESSION['grupo']." (nombre, asistencia, participacion, desempeno, lectura, c_matematica, convivencia,escritura,riesgo)VALUES(".$name.",".$optradio1.",".$optradio2.",".$optradio3.",".$optradio4.",".$optradio5.",".$optradio6.",".$optradio7.",1)"); */
        
        
    }

?>
    <div class="" data-keyboard = "false"> </div>
    <script src="../../js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../js/bootstrap.min.js"></script>

    <!-- Custom functions file -->
    <script src="../../js/functions.js"></script>
    <!-- Sweet Alert Script -->
    <script src="../../js/sweetalert.min.js"></script>
</html>
