<?php

session_start();

  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 2){
    header('location: ../index.html');
  }

include "conexion.php";

$user_id=null;
$sql1= "select * from ".$_SESSION['grupo']." where id = ".$_GET["id"];
$query = $con->query($sql1);
$person = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $person=$r;
  break;
}

  }
?>

<?php if($person!=null):?>

<form role="form" method="post" action = "registro.php">
 
 <!--  -->
 
<div class="panel panel-default">
    <div class="panel-heading"> Indicadores de Ruta de Mejora
    </div>
    <div class="panel-body">
        <div class="col-xs-5">
            <label for ="alumno"> Nombre del Alumno:</label>
            <input type="text" name="name" class="form-control input-sm" value="<?php echo $person->nombre; ?>" id="name" required/>
            <span data-alertid = "ejemplo"> </span>
        </div>                      
        <div class="col-xs-3">
            <label for ="asistencia"> A) Asistencia:</label>
            <div class="radio">
                <label><input type="radio" name="optradio1" id="optradio1" value="1" required>Falta varias clases (+ de 5 faltas)</label>
            </div>
            <div class="radio">
                <label><input type="radio" name="optradio1" id="optradio1" value="2" required>Falta algunos días (hasta 5 faltas) </label>
            </div>
            <div class="radio">
                <label><input type="radio" name="optradio1" id="optradio1" value="3" required>No ha faltado </label>
            </div> 
        </div>
        <div class="col-xs-4">
            <label for ="participacion"> B) Participación en Clase:</label>
            <div class="radio">
                <label><input type="radio" name="optradio2" id="optradio2" value="1" required>No participa en clase.</label>
            </div>
            <div class="radio">
                <label><input type="radio" name="optradio2" id="optradio2" value="2" required>Paticipa algunas veces). </label>
            </div>
            <div class="radio">
                <label><input type="radio" name="optradio2" id="optradio2" value="3" required>Participa en clase constantementte. </label>
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
                <label><input type="radio" name="optradio3" id="optradio3" value="1" required>Promedio de calificaciones entre 5 y 6</label>
            </div>
            <div class="radio">
                <label><input type="radio" name="optradio3" id="optradio3" value="2" required>Promedio de calificaciones entre 7 y 8</label>
            </div>
            <div class="radio">
                <label><input type="radio" name="optradio3" id="optradio3" value="3" required>Promedio de calificaciones entre 9 y 10</label>
            </div>
        </div>   
        <div class="col-xs-4">
            <label for ="participacion"> D) Comprensión Lectora:</label>
            <div class="radio">
                <label><input type="radio" name="optradio4" id="optradio4" value="1" required>Requiere apoyo adicional</label>
            </div>
            <div class="radio">
                <label><input type="radio" name="optradio4" id="optradio4" value="2" required>Casi siempre requiere apoyo adicional</label>
            </div>
            <div class="radio">
                <label><input type="radio" name="optradio4" id="optradio4" value="3" required>En ocasiones requiere apoyo adicional</label>
            </div>
            <div class="radio">
                 <label><input type="radio" name="optradio4" id="optradio4" value="4" required>No requiere apoyo adicional</label>
            </div>
                    
        </div> 
        <div class="col-xs-4">
            <label for ="participacion"> E) Competencia Matemática:</label>
            <div class="radio">
                <label><input type="radio" name="optradio5" id="optradio5" value="1" required>Promedio de calificaciones entre 5 y 6</label>
            </div>
            <div class="radio">
                <label><input type="radio" name="optradio5" id="optradio5" value="2" required>Promedio de calificaciones entre 7 y 8</label>
            </div>
            <div class="radio">
                <label><input type="radio" name="optradio5" id="optradio5" value="3" required>Promedio de calificaciones entre 9 y 10</label>
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
                <label><input type="radio" name="optradio6" id="optradio6" value="1" required>Agrede constantemente a sus compañeros</label>
            </div>
            <div class="radio">
                <label><input type="radio" name="optradio6" id="optradio6" value="2" required>Agrede ocasionalmente a sus compañeros</label>
            </div>
            <div class="radio">
                <label><input type="radio" name="optradio6" id="optradio6" value="3" required>Nunca agrede a sus compañeros</label>
            </div>
        </div> 
        <div class="col-xs-4">
            <label for ="participacion"> G) Escritura:</label>
            <div class="radio">
                <label><input type="radio" name="optradio7" id="optradio7" value="1" required>Requiere apoyo adicional</label>
            </div>
            <div class="radio">
                <label><input type="radio" name="optradio7" id="optradio7" value="2" required>Casi siempre requiere apoyo adicional</label>
            </div>
            <div class="radio">
                <label><input type="radio" name="optradio7" id="optradio7" value="3" required>En ocasiones requiere apoyo adicional</label>
            </div>
            <div class="radio">
                <label><input type="radio" name="optradio7" id="optradio7" value="4" required>No requiere apoyo adicional</label>
            </div>
        </div>
        <div class="col-xs-4">
            <label for ="participacion">¿En Riesgo?</label>
            <div class="radio">
                <label><input type="radio" name="optradio8" id="optradio8" value="1" required>SI</label>
            </div>
            <div class="radio">
                <label><input type="radio" name="optradio8" id="optradio8" value="2" required>NO</label>
            </div>
        </div>
                
    </div>
</div>
 
 <!-- -->
  
<input type="hidden" name="id" value="<?php echo $person->id; ?>">
<center>
    <button type="submit" class="btn btn-success">Actualizar</button>
</center>
</form>

<script>
    $("#actualizar").submit(function(e){
    e.preventDefault();
    $.post("./registro.php",$("#actualizar").serialize(),function(data){
    });
    alert("Agregado exitosamente!");
    $("#actualizar")[0].reset();
    $('#editModal').modal('hide');
$('body').removeClass('modal-open');
$('.modal-backdrop').remove();
    loadTabla();
  });
</script>

<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>