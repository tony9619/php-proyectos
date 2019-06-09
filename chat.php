<?php
	include "conexion.php";
	
	$obtener_mensajes="SELECT * FROM chat ORDER BY id_chat DESC";
	$ejecutar = $conexion->query($obtener_mensajes);
	while($fila = $ejecutar -> fetch_array()):
?>
	<div id="datos_chat">
		<span style="color: #1c62c4;"><?php echo $fila['usuario']; ?></span>
		<span style="color: #848484;"><?php echo $fila['mensaje']; ?></span>
		<span style="float: right"><?php echo formatearFecha($fila['fecha']); ?></span>
	</div>
<?php
						
	endwhile;
?>