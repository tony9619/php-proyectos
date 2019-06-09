<?php
	include "conexion.php";
?>
<!DOCTYPE html>
	<head>
		<title>Chat C.E La Ponderosa</title>
		<link rel="stylesheet" type="text/css" href="estilos.css"/>
		<script type="text/javascript">
			function ajax(){
				var req = new XMLHttpRequest();

				req.onreadystatechange = function(){
					if (req.readyState == 4 && req.status == 200) {
						document.getElementById('chat').innerHTML = req.responseText;
					}
				}

				req.open('GET', 'chat.php', true);
				req.send();
			}

			//linea que hace que se refreseque la pagina cada segundo
			setInterval(function(){ajax();}, 1000);
		</script>
	</head>
	<body onload="ajax();">
		<div id="contenedor">
			<div id="caja_chat">
				<div id="chat">
					
				</div>
			</div>
			<form method="POST" action="index.php">
				<input type="text" name="nombre" placeholder="Ingrese su nombre">
				<textarea name="mensaje" placeholder="Ingresa el mensaje"></textarea>
				<input type="submit" name="enviar" value="Enviar">
			</form>
			<?php
				if(isset($_POST["enviar"])){
					
					$nombre= $_POST["nombre"];
					$mensaje= $_POST["mensaje"];
					
					$insertar_mensaje="INSERT INTO chat (usuario,mensaje) VALUES ('$nombre','$mensaje') ";
					$ejecutar_insert_msj = $conexion->query($insertar_mensaje);
					
					if($ejecutar_insert_msj){
						
						echo "<embed loop='false' src='beep.mp3' hidden='true' autoplay='true'>";
					}
					
				}
			?>
		</div>
		
	</body>
</html>