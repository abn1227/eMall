<?php  
  session_start();
  include("../Clases/Conexion.php");
  $conexion = new Conexion();
  $conexion->mysql_set_charset("utf8");
?>

<div class="ui fixed top inverted secondary menu navbar navbar-expand-md" style="background-color: #2a4a72;">
  <a class="navbar-brand" href="index.php"><img height="40px" src="Recursos/Imagenes/eMall.png"></a>
    
  <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#divCollapse">
    <i class="bars icon"></i>
  </button>

  <!--Botones de izquierda-->
  <div class="collapse navbar-collapse" id="divCollapse">
    <a class="item" href="index.php">Inicio</a>

  
  <?php
    if (empty($_SESSION)){
      echo '<a class="item" href="login.php">Iniciar Sesión</a>
            <a class="item" href="registro.php">Registrarse</a>';
    } else{
      if (!isset($_SESSION["ID"])) {
      echo '<a class="item" href="login.php">Iniciar Sesión</a>
            <a class="item" href="registro.php">Registrarse</a>';
    }
  }
  ?>
  
  <!--Barra de busqueda-->
  <div class="ui fluid search mx-auto">
    <form method="get" action="busqueda.php">
      <div class="ui icon input">
        <input class="prompt" type="text" name="q" size="30" id="q" placeholder="Buscar productos..." onkeyup="buscar()">
        <i class="search icon"></i>
      </div>
    </form>
    <div class="results"></div>
  </div>
  
  <!--Botones de derecha-->
  <?php  
    if (!empty($_SESSION) && isset($_SESSION["ID"])) {
      if ($_SESSION['Imagen'] == NULL || $_SESSION['Imagen'] == "") {
        $img = 'Recursos/Imagenes/perfilDefecto.png';
      } else{
        $img = 'data:image/png;base64,'.base64_encode($_SESSION['Imagen']);
      }
      echo '<a class="item" href="perfil.php"><img class="ui avatar image" src="'.$img.'">'.$_SESSION['Nombre'].'</a>
            <a class="item" href="#"><i class="envelope icon"></i><div class="floating ui red circular label">2</div></a>
            <a class="item" href="#"><i class="bell icon"></i><div class="floating ui red circular label">2</div></a>
          ';
    }
   ?>
  <a class="item" href="#"><i class="shopping cart icon"></i><!--<div class="floating ui red circular label">2</div>--></a>

  <!--Dropdown Opciones-->
  <?php  
    if (!empty($_SESSION) && isset($_SESSION["ID"])) {
      echo '<div class="ui top pointing dropdown item">
    <a onclick="$(\'.ui.dropdown\').dropdown();"><i class="dropdown  icon"></i></a>
    <div class="menu">
      <div class="header">Personal</div>
      <div class="item"><i class="envelope icon"></i> Mensajes</div>
      <div class="item"><i class="bell icon"></i> Notificaciones</div>
      <div class="item"><i class="cog icon"></i> Configuraciones</div>
      <div class="divider"></div>
      <div class="header">Tus Paginas</div>
      <a class="item" href="perfil.php"><img class="ui avatar image" src="'.$img.'">Perfil</a>
      <div class="divider"></div>
      <a class="item" href="Acciones/cerrarSesion.php"><i class="sign out icon"></i>Cerrar sesion</a>
    </div>
  </div>
';
    }
  ?>
</div>
</div>