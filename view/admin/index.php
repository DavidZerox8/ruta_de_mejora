<?php
  session_start();

  // Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)


  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 1){
    header('location: ../../index.html');
    header("Content-Type: text/html;charset=utf-8");
      
  }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="../../img/home.png" />
    <title>Ruta de Mejora Adolfo López Mateos</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/sweetalert.css"> 
    <script src="../../js/jquery-1.12.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script> 
    <script>
      $(document).ready(function()
      {
         $("#mostrarmodal").modal("show");
      });
        
        function validar()
        {
            var fallo = false;
            
            if(formulario.grupo.value == "")
            {
                fallo = true;
            }
            
            if(fallo)
            {
                swal('Error','Por favor seleccione un grupo','warning');
                return false;
            }
            
            else
            {
                return true;
            }
        }
        
    </script>
    <style>
   .glyphicon-download-alt 
    {
       color: royalblue;
       width: 50px;
       height: 20px;
       
    }
    </style>
</head>
<body>
    
   <div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog" >
        <div class="modal-content">
           <div class="modal-header">
          <!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>-->
              <h3 class="text-center">SUBDIRECCIÓN DE EDUCACIÓN PRIMARIA REGIÓN  NAUCALPAN</h3>
           </div>
           <div class="modal-body">
              <h4 class="text-center">INDICADORES DE LOGRO EN LA RUTA DE MEJORA</h4>
                        <form action="menu.php" method="post" name="formulario" onsubmit="return validar();">
                     <div class="form-group">
                         <br><br>
                <label for="sel1">Seleccione el grupo que desea revisar:</label>
                <select class="form-control" id="sel1" name="grupo" data-toggle ="dropdown">
                            <option value="">-- Seleccionar grupo --</option>
                            <option value="1A">1°"A"</option>
                            <option value="1B">1°"B"</option>
                            <option value="2A">2°"A"</option>
                            <option value="2B">2°"B"</option>
                            <option value="3A">3°"A"</option>
                            <option value="3B">3°"B"</option>
                            <option value="4A">4°"A"</option>
                            <option value="4B">4°"B"</option>
                            <option value="5A">5°"A"</option>
                            <option value="5B">5°"B"</option>
                            <option value="5C">5°"C"</option>
                            <option value="6A">6°"A"</option>
                            <option value="6B">6°"B"</option>
                            <option value="6C">6°"C"</option>
                    </select>
                    </div>
           <div class="modal-footer">
           
           <div class="row">
                   
                <div class="col-md-2 col-md-offset-2">
                    <button type="submit" value="Aceptar" class="btn btn-primary">Aceptar</button>
                               </div>
               
                            
               </form>
                <div class="col-md-2 col-md-offset-1">
                  <form action="../../controller/cerrarSesion.php">
                   <button type="submit" value="Cerrar Sesion" class="btn btn-danger">Cerrar Sesion</button>
               </form>
                </div>
                 <div class="col-md-2 col-md-offset-1">
                   <form action="registro.php">
                   <button type="submit" value="Cerrar Sesion" class="btn btn-success">Registrar Usuario</button>
               </form>
                </div>
              </div>
        
               
                            </div>

              
               </div>
            </div>
          </div>
       </div>
    <script src="../../js/sweetalert.min.js"></script>
    
    </body>
</html>