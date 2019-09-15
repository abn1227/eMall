<?php 
session_start();
?>
<div class="container" align="center"> 	
	<img style="width: 200px; height: 200px" class="ui rounded small bordered image" src="
	<?php 
	if ($_SESSION['Imagen'] == NULL || $_SESSION['Imagen'] == "") {
		echo 'img/png/014-support.png';
		} else{
			echo 'data:image/png;base64,'.base64_encode($_SESSION['Imagen']);
		}
		?>">
		<p class="fixed top">
			<h5><?php echo $_SESSION['Usuario']; ?>
			&nbsp;<button class="circular ui icon blue button" onclick="cargarDiv('columnaContenido', 'Contenido/modificarPerfil.php')" title="Modifica tu perfil"><i class="edit icon"></i>
			</button></h5>
		</p>
		<div class="ui vertical fluid buttons">
  			<button class="ui basic button" onclick="cargarDiv()">Perfil</button>
  			<button class="ui basic button">Inventario</button>
  			<button class="ui basic button">Pedidos</button>
  			<button class="ui basic button">Tu tienda</button>
  			<button class="ui basic button">Historial de compra</button>
  			<button class="ui basic button">Estadistica</button>
		</div>
	</div>
</div>