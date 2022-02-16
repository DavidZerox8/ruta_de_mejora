<?php

  /*
    En ocasiones el usuario puede volver al login
    aun si ya existe una sesion iniciada, lo correcto
    es no mostrar otra ves el login sino redireccionarlo
    a su pagina principal mientras exista una sesion entonces
    creamos un archivo que controle el redireccionamiento
  */

  session_start();

  // isset verifica si existe una variable o eso creo xd
 if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 1){
    header('location: ../../index.html');
 }
?>
<!DOCTYPE html>
<html>
  <head>
   <link rel="shortcut icon" type="image/x-icon" href="../../img/add-button.png" />
    <meta charset="utf-8">
    <title>Registrar Usuario</title>

    <!-- Importamos los estilos de Bootstrap -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <!-- Font Awesome: para los iconos -->
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <!-- Sweet Alert: alertas JavaScript presentables para el usuario (más bonitas que el alert) -->
    <link rel="stylesheet" href="../../css/sweetalert.css">
    <!-- Estilos personalizados: archivo personalizado 100% real no feik -->
    <link rel="stylesheet" href="../../css//style.css">
    
    <script>
        
        function ocultar()
        {
           load.style.display = "none"; 
        }
        
    </script>

  </head>
  <body>

    <!--
      Las clases que utilizo en los divs son propias de Bootstrap
      si no tienes conocimiento de este framework puedes consultar la documentacion en
      https://v4-alpha.getbootstrap.com/getting-started/introduction/
    -->


    <!-- Formulario Login -->
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-4">
          <!-- Margen superior (css personalizado )-->
          <div class="spacing-1"></div>

          <form id="formulario_registro" method="post">
            <!-- Estructura del formulario -->
            <fieldset>

              <legend class="center">Registro</legend>

              <!-- Caja de texto para usuario -->
              <label class="sr-only" for="user">Nombre</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                <input type="text" class="form-control" name="name" placeholder="Ingresa tu nombre" onfocus="return ocultar();">
              </div>

              <!-- Div espaciador -->
              <div class="spacing-2"></div>

              <!-- Caja de texto para usuario -->
              <label class="sr-only" for="user">Nombre de Usuario</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                <input type="text" class="form-control" name="user" placeholder="Ingresa tu nombre de usuario" onfocus="return ocultar();">
              </div>
              
               <!-- Div espaciador -->
              <div class="spacing-2"></div>

              <!-- Caja de texto para grupo -->
              <label class="sr-only" for="user">Grado y Grupo</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                <input type="text" class="form-control" name="grupo" placeholder="Ingresa tu grupo. Ejemplo 1A, 3B, 6C" maxlength="2" onfocus="return ocultar();">
              </div>

              <!-- Div espaciador -->
              <div class="spacing-2"></div>

              <!-- Caja de texto para la clave-->
              <label class="sr-only" for="clave">Contraseña</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                <input type="password" autocomplete="off" class="form-control" name="clave" placeholder="Ingresa tu clave" onfocus="return ocultar();">
              </div>

              <!-- Div espaciador -->
              <div class="spacing-2"></div>

              <!-- Caja de texto para la clave-->
              <label class="sr-only" for="clave">Verificar contraseña</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                <input type="password" autocomplete="off" class="form-control" name="clave2" placeholder="Verificar contraseña" onfocus="return ocultar();">
              </div>
              
              <!-- Div espaciador -->
              <div class="spacing-2"></div>

              <!-- Animacion de load (solo sera visible cuando el cliente espere una respuesta del servidor )-->
              <div class="row" id="load" hidden="hidden">
                <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-5">
                  <img src="../../img/icono_verde.png" width="100%" alt="">
                </div>
                <div class="col-xs-12 center text-accent">
                  <span>Usuario creado correctamente</span>
                </div>
              </div>
              <!-- Fin load -->
                <div class="spacing-2"></div>
              <!-- boton #login para activar la funcion click y enviar el los datos mediante ajax -->
              <div class="row">
                   
                <div class="col-md-4 col-md-offset-1">
                  <button type="button" class="btn btn-primary btn-block" name="button" id="registro">Registrate</button>
                </div>
                <div class="col-md-4 col-md-offset-2">
                  <button type="reset" class="btn btn-danger btn-block" name="borrar" id="Limpiar" onclick="return ocultar();">Borrar</button>
                </div>
              </div>

            </fieldset>
          </form>
          <form action="index.php">
             <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                  <div class="spacing-2"></div>
                  <input type="submit" class="btn btn-info btn-block" value="Regresar">
                </div>
              </div>
          </form>
        </div>
      </div>
    </div>

    <!-- / Final Formulario login -->

    <!-- Jquery -->
    <script src="../../js/jquery.js"></script>
    <!-- Bootstrap js -->
    <script src="../../js/bootstrap.min.js"></script>
    <!-- SweetAlert js -->
    <script src="../../js/sweetalert.min.js"></script>
    <!-- Js personalizado -->
    <script src="../../js/operaciones.js"></script>
  </body>
</html>
