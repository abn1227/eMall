<?php  
    session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>eMall</title>
	
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
  <script type="text/javascript" src="Recursos/Scripts/fotorama.js"></script>
</head>
<body style="background-color: #e0e9f4">
  <!-- Barra Principal-->
  <div id="barra" class="ui fixed top"></div>
  <!--Fin de Barra Principal-->

  <div style="margin-top: 60px;"> 
    <div class="fotorama" data-width="100%" data-transition="crossfade" data-autoplay="3000" data-loop="true">
      <img height="220px" src="Recursos/Imagenes/Carrusel/carr2.jpg">
      <img height="220px" src="Recursos/Imagenes/Carrusel/carr1.jpg">
      <img height="220px" src="Recursos/Imagenes/Carrusel/carr3.jpg">
    </div>
  </div>
  <div id="cargar"></div>
  <div id="cuerpo"></div>

  <p class="mt-5 mb-3 text-muted text-center">&copy; 2018-2019</p>
  
  <script type="text/javascript">
    $(document).ready(function() {
      cargarDiv("barra","Contenido/barra.php");
      cargarDiv("cuerpo","Contenido/indexCuerpo.php");
    });
  </script>
</body>
</html> 	