<?php
  session_start();

  // Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)


  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 1){
    header('location: ../../index.html');
  }


    require_once 'conexion.php';
    $consulta = mysqli_query($conexion,'select * from '.$_SESSION['grupo'].' order by id ASC;');

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <style>
    .glyphicon-download-alt 
    {
       color: royalblue;
       width: 50px;
       height: 20px;
       
    }
    </style>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <script>
        
        function info()
        {
            swal({ 
            title: "Bienvenido",
            text: "Esta es la lista de los alumnos que has agregado al sistema, los numeros que aparecen en cada una de las categorias tienen un significado, para verlo solo necesitas hacer clic encima de cualquiera de estas, adelante y pruebalo.",
            type: "info",
            showCancelButton: false,
            cancelButtonText: "Mmm... mejor no",
            confirmButtonColor: "lightblue",
            confirmButtonText: "¡Aceptar!",
            closeOnConfirm: false });
            
        }
        
        function info1()
        {
            swal({ 
            title: "Simbologia",
            text: "1.- Alumnos que faltan varias veces (+ de 5 faltas)\n2.- Alumnos que faltan algunas veces (hasta 5 faltas)\n3.- Alumnos que no faltan",
            type: "info",
            showCancelButton: false,
            cancelButtonText: "Mmm... mejor no",
            confirmButtonColor: "lightblue",
            confirmButtonText: "¡Aceptar!",
            closeOnConfirm: false });
        }
        
        function info2()
        {
            swal({ 
            title: "Simbologia",
            text: "1.- Alumnos que no participan en clase\n2.- Alumnos que participan algunas veces\n3.- Alumnos que participan constantemente",
            type: "info",
            showCancelButton: false,
            cancelButtonText: "Mmm... mejor no",
            confirmButtonColor: "lightblue",
            confirmButtonText: "¡Aceptar!",
            closeOnConfirm: false });
        }
        
        function info3()
        {
            swal({ 
            title: "Simbologia",
            text: "1.- Alumnos con promedio entre 5 y 6\n2.- Alumnos con promedio entre 7 y 8\n3.- Alumnos con promedio entre 9 y 10",
            type: "info",
            showCancelButton: false,
            cancelButtonText: "Mmm... mejor no",
            confirmButtonColor: "lightblue",
            confirmButtonText: "¡Aceptar!",
            closeOnConfirm: false });
            
        }
        
        function info4()
        {
            swal({ 
            title: "Simbologia",
            text: "1.- Alumnos que requieren apoyo siempre\n2.- Alumnos que requieren apoyo casi siempre\n3.- Alumnos que requieren ayuda ocasionalmente\n4.- Alumnos que no requieren ayuda",
            type: "info",
            showCancelButton: false,
            cancelButtonText: "Mmm... mejor no",
            confirmButtonColor: "lightblue",
            confirmButtonText: "¡Aceptar!",
            closeOnConfirm: false });
        }
        
        function info5()
        {
            swal({ 
            title: "Simbologia",
            text: "1.- Alumnos con promedio entre 5 y 6\n2.- Alumnos con promedio entre 7 y 8\n3.- Alumnos con promedio entre 9 y 10",
            type: "info",
            showCancelButton: false,
            cancelButtonText: "Mmm... mejor no",
            confirmButtonColor: "lightblue",
            confirmButtonText: "¡Aceptar!",
            closeOnConfirm: false });
        }
        
        function info6()
        {
            swal({ 
            title: "Simbologia",
            text: "1.- Alumnos que agreden a sus compañeros constantemente\n2.- Alumnos que agreden a sus compañeros ocasionalmente\n3.- Alumnos que nunca agreden a sus compañeros",
            type: "info",
            showCancelButton: false,
            cancelButtonText: "Mmm... mejor no",
            confirmButtonColor: "lightblue",
            confirmButtonText: "¡Aceptar!",
            closeOnConfirm: false });
        }
        
        function info7()
        {
            swal({ 
            title: "Simbologia",
            text: "1.- Alumnos que requieren apoyo siempre\n2.- Alumnos que requieren apoyo casi siempre\n3.- Alumnos que requieren ayuda ocasionalmente\n4.- Alumnos que no requieren ayuda",
            type: "info",
            showCancelButton: false,
            cancelButtonText: "Mmm... mejor no",
            confirmButtonColor: "lightblue",
            confirmButtonText: "¡Aceptar!",
            closeOnConfirm: false });
        }
        
        function info8()
        {
            swal({ 
            title: "Simbologia",
            text: "1.- El alumno esta en riesgo\n 2.- El alumno no esta en riesgo",
            type: "info",
            showCancelButton: false,
            cancelButtonText: "Mmm... mejor no",
            confirmButtonColor: "lightblue",
            confirmButtonText: "¡Aceptar!",
            closeOnConfirm: false });
        }
        
    </script>
    
</head>
<body>
    <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" align="center">Lista de Alumnos Grupo <?php echo $_SESSION["grupo"];?></h4>
          <br> 
            <a href="#" onclick="return info();"><h5 align = "center">¿Qué significan los numeros?</h5></a>
        </div>
        <div class="modal-body">
          <table class="table table-hover">
              <thead>
            <tr>
                <th>N.P</th>
                <th>Nombre</th>
                <th onclick="return info1();">Asistencia</th>
                <th onclick="return info2();">Participación en Clase</th>
                <th onclick="return info3();">Niveles de Desempeño</th>
                <th onclick="return info4();">Comprensión Lectora</th>
                <th onclick="return info5();">Competencia Matematica</th>
                <th onclick="return info6();">Convivencia Escolar</th>
                <th onclick="return info7();">Escritura</th>
                <th onclick="return info8();">¿En Riesgo?</th>
              </tr>
              </thead>
            <?php
              while($row = mysqli_fetch_array($consulta))
              {
                  $v1 = $row['id'];
                  $v2 = $row['nombre'];
                  $v3 = $row['asistencia'];
                  $v4 = $row['participacion'];
                  $v5 = $row['desempeno'];
                  $v6 = $row['lectura'];
                  $v7 = $row['c_matematica'];
                  $v8 = $row['convivencia'];
                  $v9 = $row['escritura'];
                  $v10 = $row['riesgo'];
                  echo "<tr>";
                  echo "<td>$v1</td>";
                  echo "<td>$v2</td>";
                  echo "<td>$v3</td>";
                  echo "<td>$v4</td>";
                  echo "<td>$v5</td>";
                  echo "<td>$v6</td>";
                  echo "<td>$v7</td>";
                  echo "<td>$v8</td>";
                  echo "<td>$v9</td>";
                  echo "<td>$v10</td>";
                  echo "</tr>";
              }
              echo "</table>";
              ?>
            </table>
        </div>
        <div class="modal-footer">
            <div class="btn-group">  
          
            <a href="ListadoAlumnos.php" target="_blank">  <button type="button" class="btn btn-default">Imprimir <span class="glyphicon glyphicon-download-alt"></span></button> </a>
          
        </div>
        </div>
      </div>
</body>
</html>