<?php
    error_reporting(E_ERROR);
  session_start();

  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 2){
    header('location: ../index.html');
  }

if(empty($_GET))
{
    $todos = $_POST['todos'];
    
    if(empty($todos))
    {
        print "<script>alert(\"No se pudo eliminar.\");window.location='../index.php';</script>";  
    }
    if($todos == 'Si')
    {
        include "conexion.php";
			
        $sql = "DELETE FROM ".$_SESSION['grupo']."";
        $query = $con->query($sql);
        if($query!=null)
        {
            print "<script>window.location='../index.php';</script>";
        }
        else
        {
            print "<script>alert(\"No se pudo eliminar.\");window.location='../index.php';</script>";

        }
    }
}


if(!empty($_GET))
{
    
    include "conexion.php";
			
    $sql = "DELETE FROM ".$_SESSION['grupo']." WHERE id=".$_GET["id"];
    $query = $con->query($sql);
    if($query!=null)
    {
        print "<script>alert(\"Eliminado exitosamente.\");window.location='../index.php';</script>";
    }
    else
    {
        print "<script>alert(\"No se pudo eliminar.\");window.location='../index.php';</script>";

    }
}



?>