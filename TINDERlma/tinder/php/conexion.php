<?php
$conexion = new mysqli("localhost", "root", "", "bd_proyecto7");
$acentos = mysqli_query($conexion, "SET NAMES 'utf8'");
?>