<?php
  session_start();

  // Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)

  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 2){
    header('location: ../../index.html');
  }
    require_once 'conexion.php';
    $consulta = mysqli_query($conexion,'select * from '.$_SESSION['grupo'].' order by id ASC;');
    $todos = mysqli_query($conexion,'select count(*) as todos from '.$_SESSION['grupo'].';');
?>
<!DOCTYPE html>
<html lang="es">
    <head>
     <style>
    .glyphicon-download-alt 
    {
       color: royalblue;
       width: 50px;
       height: 20px;
       
    }
    </style>
    <script src="../../js/notificaciones.js"></script>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<link rel="stylesheet" href="../../css/css.css">
	
    <title>Indicadores</title>
        
        <style>
        #mdialTamanio
        {
            width: 95% !important;
        }
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
        <form name="formulario1" id="formaulario1" method="post" action="registro.php">
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
                                <div class="text background" disabled>&nbsp;<?php echo ucwords($_SESSION['nombre']); ?></div>                   
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
                                                                  
                                 <div class="col-xs-6">
                                <label for ="ina1"> No. de Inasistencias del Docente (Justificadas):</label>
                                 </div>
                                 <div class="col-xs-6">      
                                <label for ="ina2"> No. de Inasistencias del Docente (Sin Justificar):</label>
                                 </div>   
                                 <div class="col-xs-2">
                                <input maxlength="2" name="j" type="text" class="form-control input-sm" value="<?php echo $_SESSION['asistenciaj']; ?>" id="ina1"/>
                                 </div>
                                   <div class="col-md-4"/>
                                 <div class="col-xs-2">
                                <input maxlength="2" name="nj" type="text" class="form-control input-sm" value="<?php echo $_SESSION['asistencianj']; ?>" id="ina2"/>
                                 </div>
                                 
                                 
                        </div>
                    </div>       
    
<!-- Comienzo de los indicadores --> 
           
            <div class="panel panel-default">
        <div class="panel-heading"> Indicadores de Ruta de Mejora
                </div>
        <div class="panel-body">
             
                 <div class="col-xs-5">
                <label for ="alumno"> Nombre del Alumno:</label>
                     <input type="text" name="alumno" class="form-control input-sm" id="alumno"/>
                     <span data-alertid = "ejemplo"> </span>
            </div>                      
            <div class="col-xs-3">
            <label for ="asistencia"> A) Asistencia:</label>
            <div class="radio">
        <label><input type="radio" name="optradio1" id="optradio1" value="1">Falta varias clases (+ de 5 faltas)</label>
                    </div>
                    <div class="radio">
        <label><input type="radio" name="optradio1" id="optradio1" value="2">Falta algunos días (hasta 5 faltas) </label>
                </div>
                <div class="radio">
    <label><input type="radio" name="optradio1" id="optradio1" value="3">No ha faltado </label>
                </div> 
            </div>
            <div class="col-xs-4">
            <label for ="participacion"> B) Participación en Clase:</label>
            <div class="radio">
        <label><input type="radio" name="optradio2" id="optradio2" value="1">No participa en clase.</label>
                    </div>
                    <div class="radio">
        <label><input type="radio" name="optradio2" id="optradio2" value="2">Paticipa algunas veces). </label>
                </div>
                <div class="radio">
    <label><input type="radio" name="optradio2" id="optradio2" value="3">Participa en clase constantementte. </label>
</div>
                </div>
              <div class="row voffset2">
    <div class="col-lg-12">
    <p></p>
                  </div>
  </div>
  
            <div class="col-xs-4">
            <label for ="participacion"> C) Niveles de Desempeño:</label>
            <div class="radio">
        <label><input type="radio" name="optradio3" id="optradio3" value="1">Promedio de calificaciones entre 5 y 6</label>
                    </div>
                    <div class="radio">
        <label><input type="radio" name="optradio3" id="optradio3" value="2">Promedio de calificaciones entre 7 y 8</label>
                </div>
                <div class="radio">
    <label><input type="radio" name="optradio3" id="optradio3" value="3">Promedio de calificaciones entre 9 y 10</label>
</div>
                </div>   
                        <div class="col-xs-4">
            <label for ="participacion"> D) Comprensión Lectora:</label>
            <div class="radio">
        <label><input type="radio" name="optradio4" id="optradio4" value="1">Requiere apoyo adicional</label>
                    </div>
                    <div class="radio">
        <label><input type="radio" name="optradio4" id="optradio4" value="2">Casi siempre requiere apoyo adicional</label>
                </div>
                <div class="radio">
    <label><input type="radio" name="optradio4" id="optradio4" value="3">En ocasiones requiere apoyo adicional</label>
                            </div>
                    <div class="radio">
 <label><input type="radio" name="optradio4" id="optradio4" value="4">No requiere apoyo adicional</label>
                    </div>
                    

                </div> 
            <div class="col-xs-4">
            <label for ="participacion"> E) Competencia Matemática:</label>
                  <div class="radio">
        <label><input type="radio" name="optradio5" id="optradio5" value="1">Promedio de calificaciones entre 5 y 6</label>
                    </div>
                    <div class="radio">
        <label><input type="radio" name="optradio5" id="optradio5" value="2">Promedio de calificaciones entre 7 y 8</label>
                </div>
                <div class="radio">
    <label><input type="radio" name="optradio5" id="optradio5" value="3">Promedio de calificaciones entre 9 y 10</label>
</div>
                       </div> 
                          <div class="row voffset2">
    <div class="col-lg-12">
    <p></p>
                  </div>
  </div>
            
            <div class="col-xs-4">
            <label for ="participacion"> F) Convivencia Escolar:</label>
                  <div class="radio">
        <label><input type="radio" name="optradio6" id="optradio6" value="1">Agrede constantemente a sus compañeros</label>
                    </div>
                    <div class="radio">
        <label><input type="radio" name="optradio6" id="optradio6" value="2">Agrede ocasionalmente a sus compañeros</label>
                </div>
                <div class="radio">
    <label><input type="radio" name="optradio6" id="optradio6" value="3">Nunca agrede a sus compañeros</label>
</div>
                          </div> 
            <div class="col-xs-4">
            <label for ="participacion"> G) Escritura:</label>
           <div class="radio">
        <label><input type="radio" name="optradio7" id="optradio7" value="1">Requiere apoyo adicional</label>
                    </div>
                    <div class="radio">
        <label><input type="radio" name="optradio7" id="optradio7" value="2">Casi siempre requiere apoyo adicional</label>
                </div>
                <div class="radio">
    <label><input type="radio" name="optradio7" id="optradio7" value="3">En ocasiones requiere apoyo adicional</label>
                </div>
                    <div class="radio">
 <label><input type="radio" name="optradio7" id="optradio7" value="4">No requiere apoyo adicional</label>
                    </div>
    </div>
           <div class="col-xs-4">
            <label for ="participacion">¿En Riesgo?</label>
           <div class="radio">
        <label><input type="radio" name="optradio8" id="optradio8" value="1">SI</label>
                    </div>
                    <div class="radio">
        <label><input type="radio" name="optradio8" id="optradio8" value="2">NO</label>
                </div>
            </div>
                
                    </div>
                    
                    <!-- Animacion de Confirmacion-->
              <div class="row" id="load" hidden="hidden">
                <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-5 center">
                  <img src="../../img/icono_verde.png" width="50" height="50" alt="">
                </div>
                <div class="col-xs-12 center text-accent">
                  <span>Informacion guardada correctamente</span>
                </div>
              </div>
              <!-- Fin load -->
                    </div>
                     <div align = "right">
                            <button name="insertar" id="insertar" type="submit" class="btn btn-primary">Guardar</button>
                            
                    </div>    
                </div>
            </div>              
           <!-- <script src="operaciones.js"></script> -->
            </form>
            <div class="container">
                <center><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Listado de Alumnos</button></center><br>
                <!-- Modal -->
   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" id="mdialTamanio">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" align="center">Lista de Alumnos Grupo <?php echo strtoupper($_SESSION["grupo"]);?></h4>
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
			<a href = "../../crud/index.php" target = "_self"><button type = "button" class = "btn btn-primary"> Editar </button></a>
			<button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
          
           
             <div class="btn-group">  
          
            <a href="ListadoAlumnos.php" target="_blank">  <button type="button" class="btn btn-default">Imprimir <span class="glyphicon glyphicon-download-alt"></span></button> </a>
			
        </div>
      
       </div>
                        </div>
        
      </div>
      
    </div>
  </div>
    
    </body>
</html>
