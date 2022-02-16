<?php
  session_start();

    if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 1){
        header('location: ../../index.html');
    }

    $_SESSION['grupo'] = $_POST['grupo'];

    if(!isset($_SESSION['grupo']) || empty($_SESSION['grupo']))
    {
        header('location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="shortcut icon" type="image/x-icon" href="../../img/team.png" />
    <script type='text/javascript' src="../../js/jquery.min.js"></script>
    <script src="../../js/highcharts.js"></script>
    <script src="../../js/data.js"></script>
    <script src="../../js/exporting.js"></script>
    <script src="../../js/mostrar.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ruta de Mejora</title>

   <!-- Importamos los estilos de Bootstrap -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <!-- Font Awesome: para los iconos -->
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <!-- Sweet Alert: alertas JavaScript presentables para el usuario (más bonitas que el alert) -->
    <link rel="stylesheet" href="../../css/sweetalert.css">
    <!-- Estilos personalizados: archivo personalizado 100% real no feik -->
    <link rel="stylesheet" href="../../css/style.css">
    
    <script src="../../js/jquery.js"></script>
    <!-- Bootstrap js -->
    <script src="../../js/bootstrap.min.js"></script>
    <!-- SweetAlert js -->
    <script src="../../js/sweetalert.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body onload="return mostrar();">

    <!-- Navigation -->
   <header>
		<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-fm">
						<span class="sr-only">Desplegar / Ocultar Menu</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand">Bienvenido</a>
				</div>
				<!-- Inicia Menu -->
				<div class="collapse navbar-collapse" id="navegacion-fm">
					<ul class="nav navbar-nav">
						<li class="active" class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
								<?php echo ucfirst($_SESSION['nombre']." ".$_SESSION['grupo']); ?> <span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li>
                                   <a href="index.php">
                                        Cambiar Grupo
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                     <a href="../../controller/cerrarSesion.php">
                                        Cerrar sesion
                                    </a>
                                </li>
							</ul>
                        </li>
							<li><a href="#" id = "link1">Concentrado Individual</a></li>
						<li><a href="#" id = "link2">Concentrado General</a></li>
						<li><a href="#" id = "link3">Concentrado Porcentual</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
								Graficas <span class="caret"></span>
							</a>
							
							<ul class="dropdown-menu" role="menu">
								<li>
                                   <a href="#" id="G1">Grafica Asistencia</a> 
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#" id="G2">Grafica Participacion en Clase</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#" id="G3">Grafica Niveles de Desempeño</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#" id="G4">Grafica Compresion Lectora</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#" id="G5">Grafica Competencia Matemática</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#" id="G6">Grafica Conviviencia Escolar</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#" id="G7">Grafica Escritura</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#" id="G8">Grafica General</a>
                                </li>
							</ul>
							<li><a href="registro.php">Registrar Usuarios</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id = "capa">
    
                
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    
    
    
    <!-- Js personalizado -->

    
    <section>
        
    </section>
    
    <footer>
		 
	</footer> 
	
</body>

</html>