<?php 
	session_start();
	if (empty($_SESSION)) {
		header('Location: index.php');
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title><?php  echo $_SESSION["Usuario"]; ?></title>
	<link rel="icon" type="png" href="Recursos/Imagenes/logo.png">
	
	<link rel="stylesheet" type="text/css" href="Frameworks/Semantic/semantic.css">
  	<link rel="stylesheet" type="text/css" href="Frameworks/Bootstrap/css/bootstrap.css">
  	<link rel="stylesheet" type="text/css" href="Recursos/Estilos/styles.css">
  	<link rel="stylesheet" type="text/css" href="Recursos/Estilos/fotorama.css">

	<script src="https://code.jquery.com/jquery-3.1.1.min.js"
  	integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  	crossorigin="anonymous"></script>


	<script src="Frameworks/Bootstrap/js/bootstrap.min.js"></script>
	<script src="Frameworks/Semantic/semantic.min.js"></script>
  	<script type="text/javascript" src="Recursos/Scripts/scripts.js"></script>
</head>
<body style="background-color: #e0e9f4">
	<!-- Barra Principal-->
  	<div id="barra" class="ui fixed top"></div>
  	<!--Fin de Barra Principal-->
  	<div id="cargar"></div>

    <div class="row" style="margin-top: 80px;">
      <!--Zona #1 Reservada para navegación del usuario-->
      <div id="columnaOpciones" class="col-md-3"></div>
      <!--Zona #2 Reservada para información del contacto y productos del usuario-->
      <div id="columnaContenido" class="col-md-7"></div>
      <!--Zona #3 Reservada para publicidad-->
      <div class="col-md-2"></div>
    </div>

  	<script type="text/javascript">
  		$(document).ready(function() {
      		cargarDiv("barra","Contenido/barra.php");
          cargarDiv("columnaOpciones","Contenido/columnaPerfil.php");
          cargarDiv("columnaContenido","Contenido/informacionDeContacto.php");
    	});
  	</script>
</body>
</html>