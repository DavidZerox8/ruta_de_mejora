<?php
  session_start();

  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 2){
    header('location: ../index.html');
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
     <style>
        #modalc
        {
            width: 95% !important;
        }
    </style>
</head>

<?php

include "conexion.php";

$user_id=null;
$sql1= "select * from ".$_SESSION['grupo']." where nombre like '%$_GET[s]%' or id like '%$_GET[s]%'";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover">
<thead>
	<th>ID</th>
	<th><center>Nombre</center></th>
	<th onclick="return info1();">Asistencia</th>
	<th onclick="return info2();">Participaci&oacute;n en Clase</th>
	<th onclick="return info3();">Niveles de Desempe&ntilde;o</th>
	<th onclick="return info4();">Comprensi&oacute;n Lectora</th>
    <th onclick="return info5();">Competencia Matem&aacute;tica</th>
    <th onclick="return info6();">Convivencia Escolar</th>
    <th onclick="return info7();">Escritura</th>
    <th onclick="return info8();">¿En Riesgo?</th>
	<th><center>Opciones</center></th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["id"]; ?></td>
	<td><?php echo $r["nombre"]; ?></td>
	<td><?php echo $r["asistencia"]; ?></td>
	<td><?php echo $r["participacion"]; ?></td>
	<td><?php echo $r["desempeno"]; ?></td>
	<td><?php echo $r["lectura"]; ?></td>
	<td><?php echo $r["c_matematica"]; ?></td>
	<td><?php echo $r["convivencia"]; ?></td>
	<td><?php echo $r["escritura"]; ?></td>
	<td><?php echo $r["riesgo"]; ?></td>
	<td style="width:150px;"><center>
		<a data-id="<?php echo $r["id"];?>" class="btn btn-edit btn-sm btn-warning">Editar</a>
		<a href="#" id="del-<?php echo $r["id"];?>" class="btn btn-sm btn-danger">Eliminar</a>
			<script>
		$("#del-"+<?php echo $r["id"];?>).click(function(e){
			e.preventDefault();
            
            swal({ 
                title: "¿Deseas eliminar este registro?",
                text: "Esta accion no se puede deshacer",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Aceptar",
                cancelButtonText: "Cancelar", 
                closeOnConfirm: false,
                closeOnCancel: true },

                function(isConfirm)
                { 
                    if(isConfirm) 
                    {
                        $.get("./php/eliminar.php","id="+<?php echo $r["id"];?>,function(data){
				        loadTabla();
				        });
                        
                        swal("¡Hecho!",
                        "Registro Eliminado",
                         "success"); 
                    } 
                    else 
                    { 
                        
                    } 
                });
		});
		</script>
		</center>
	</td>
</tr>
<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>

  <!-- Modal -->
  <script>
  	$(".btn-edit").click(function(){
  		id = $(this).data("id");
  		$.get("./php/formulario.php","id="+id,function(data){
  			$("#form-edit").html(data);
  		});
  		$('#editModal').modal('show');
  	});
  </script>
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" id="modalc">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Actualizar</h4>
        </div>
        <div class="modal-body">
        <div id="form-edit"></div>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->