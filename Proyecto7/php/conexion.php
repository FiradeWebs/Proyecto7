<?php
	$conexion = mysqli_connect('localhost', 'root', '', 'bd_proyecto7');
	$acentos = mysqli_query($conexion, "SET NAMES 'utf8'");
	if (!$conexion) {
		echo "Error: No se puede conectar a Mysql" . PHP_EOL;
		echo "errno de depuracióm: " . mysqli_connect_errno() . PHP_EOL;
		echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
		exit;
	}

?>