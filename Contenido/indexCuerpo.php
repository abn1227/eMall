<?php 
	session_start();
	include("../Clases/Conexion.php");
	$conexion = new Conexion();
	$conexion->mysql_set_charset("utf8");

	function mostrarProducto($conexion){
		$consulta = sprintf("SELECT Cantidad, IDProducto, NombreProducto, ImagenPrincipal, PrecioActual, IDMoneda, Valoracion, tbl_categoria.NombreCategoria as NombreCategoria, tbl_proveedor.NombreProveedor as NombreProveedor FROM tbl_producto, tbl_categoria, tbl_proveedor WHERE tbl_producto.IDCategoria = tbl_categoria.IDCategoria AND tbl_producto.IDProveedor = tbl_proveedor.IDProveedor ORDER BY RAND() LIMIT 8");
		$resultado = $conexion->ejecutarconsulta($consulta);
		$contador = 0;
		$iter = $conexion->cantidadRegistros($resultado);
		for ($i=0; $i < $iter; $i++) {
			if ($contador == 0) {
				echo '<div class="row mt-3">';
			}

			$data = $conexion->obtenerFila($resultado);
			$valoracion = (intval($data["Valoracion"]));

			echo '<div class="col-md-3">
					<div class="product">
						<div class="product-img">	
								<img src="data:image/jpg;base64,'.base64_encode($data["ImagenPrincipal"]).'" alt="">';
			if ($data["Cantidad"] == 0) {
				echo '			<div class="product-label">
										<span class="new">AGOTADO</span>
								</div>';
			} elseif ($data["Cantidad"] <= 10) {
				echo '			<div class="product-label">
										<span class="new">POCOS EN INVENTARIO</span>
								</div>';
			}
			echo		'</div>
						<div class="product-body">
							<p class="product-category">'.$data["NombreCategoria"].'</p>
							<h7 class="product-store">by '.$data["NombreProveedor"].'</h7>
							<h2 class="product-name">'.$data["NombreProducto"].'</h2>
							<h4 class="product-price">'.$data["IDMoneda"].' '.$data["PrecioActual"].'</h4>
							<p class="product-category">Art. en Inventario: '.$data["Cantidad"].'</p>
							<div class="product-rating">';
			for ($j=0; $j < $valoracion ; $j++) { 
				echo '			<i class="star icon"></i>';
			}

			$valoracion = 5 - $valoracion;
			for ($k=0; $k < $valoracion; $k++) { 
				echo '			<i class="star outline icon"></i>';
			}
			echo '				
							</div>
							<div class="product-btns">

												<div class="product-btns">
													<button class="add-to-wishlist" onclick=" location.href=\'http://www.google.com\' "><i class="shopping basket icon"></i><span class="tooltipp">Visitar tienda</span></button>
													<button class="add-to-compare" onclick=" location.href=\'detalle.php?idp='.$data["IDProducto"].'\' "><i class="list ul icon"></i><span class="tooltipp">Detalles del producto</span></button>
												</div>
							</div>
						</div>
						<div class="add-to-cart">
							<button class="add-to-cart-btn" onclick="addCarrito('.$data["IDProducto"].')"><i class="shopping cart icon"></i>Agregar</button>
						</div>
					</div>
				</div>';
		
		$contador++;
		if ($contador == 4) {
			echo '</div>';
			$contador = 0;
		}
	}
}
?>

<div class="ui container">
	<h2>Tiendas</h2>
	<h2>Ofertas</h2>
	<?php 
		mostrarProducto($conexion);
	 ?>
	<h2>Categorias</h2>
</div>
