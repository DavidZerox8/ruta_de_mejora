<?php
  error_reporting(E_ERROR);
  session_start();

  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 2){
    header('location: ../index.html');
  }
   
    require_once 'php/conexion.php';
        
    $id = $_POST['id'];
    $name = $_POST['name'];
    $optradio1 = $_POST['optradio1'];
    $optradio2 = $_POST['optradio2'];
    $optradio3 = $_POST['optradio3'];
    $optradio4 = $_POST['optradio4'];
    $optradio5 = $_POST['optradio5'];  
    $optradio6 = $_POST['optradio6'];
    $optradio7 = $_POST['optradio7'];
    $optradio8 = $_POST['optradio8'];
    
    
    if(empty($name) || empty($optradio1) || empty($optradio2) || empty($optradio3) || empty($optradio4) || empty($optradio5) || empty($optradio6) || empty($optradio7) || empty($optradio8))
    {
        print "<script>alert(\"Error.\");window.location='index.php';</script>";
        
    }

    else
    {
        if (!($sql = $con->prepare("UPDATE ".$_SESSION['grupo']." set nombre = ?, asistencia = ?, participacion = ?, desempeno = ?, lectura = ?, c_matematica = ?, convivencia = ?, escritura = ?, riesgo = ? where id = ?"))) 
        {
            print "<script>alert(\"No se pudo actualizar.\");window.location='index.php';</script>";
        }
        
        
        if (!$sql->bind_param("siiiiiiiii", $name,$optradio1,$optradio2,$optradio3,$optradio4,$optradio5,$optradio6,$optradio7,$optradio8,$id)) 
        {
           print "<script>alert(\"No se pudo actualizar.\");window.location='index.php';</script>";
        }
         
        
        if(!$sql->execute())
        {
            print "<script>alert(\"No se pudo actualizar.\");window.location='index.php';</script>";
        }
        
        else      
        {
            print "<script>window.location='index.php';</script>";		
        } 
    }

?>
