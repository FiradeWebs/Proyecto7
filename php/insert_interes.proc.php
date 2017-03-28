<?php 
include('conexion.php'); 
session_start();
if (!isset($_SESSION["usu_id"])){
	header("location:../index.php");					
}
//realizamos la conexión
		
		extract($_REQUEST);
		$fecha = date("Y-m-d H:i:s");
		$usu_id=$_SESSION["usu_id"];

	

		$sql_usuario = "INSERT INTO `tbl_interes_usuario` (`int_fecha`, `usu_id`, `cat_id`, `int_tipo`) VALUES ('$fecha', '$usu_id', '$cat_id', '$dec')";
		
		$usuario=mysqli_query($conexion, $sql_usuario);
	
?>