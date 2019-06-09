<?php
	$servidor = "localhost";
	$usuario= "root";
	$password = "root";
	$base_datos = "chat_bd";



$conexion = new mysqli($servidor, $usuario, $password, $base_datos);
	
	function formatearFecha($fecha){
	return date('g:i a', strtotime($fecha));
}
?>