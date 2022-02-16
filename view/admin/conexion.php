<?php

$servidor = "127.0.0.1";
$usuario = "root";
$pass = "";
$base = "ruta_de_mejora";

$conexion = new mysqli($servidor,$usuario,$pass,$base);
    if ($conexion->connect_errno) 
    {
        echo "Falló la conexión a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
    }

?>