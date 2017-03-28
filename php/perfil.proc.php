<?php
include('conexion.php');
//include('perfil.php');
//extract($_POST);
$usu_nombre=$_POST["usu_nombre"];
$usu_apellidos=$_POST["usu_apellidos"];
$usu_sexo=$_POST["usu_sexo"];
$usu_correo=$_POST["usu_correo"];
$usu_nickname=$_POST["usu_nickname"];
$usu_direccion=$_POST["usu_direccion"];
$usu_pass=$_POST["usu_pass"];

session_start();
if (!isset($_SESSION["usu_id"])){
	header("location:../index.php");
}
$array = "UPDATE `tbl_usuario` SET `usu_nombre` ='".$usu_nombre."', `usu_apellidos`='".$usu_apellidos."', `usu_sexo` = '".$usu_sexo."', `usu_correo` ='".$usu_correo."', `usu_nickname` ='".$usu_nickname."', `usu_direccion` ='".$usu_direccion."', `usu_pass` ='".$usu_pass."'  WHERE tbl_usuario.usu_id =". $_SESSION['usu_id']."";

echo $array;
mysqli_query($conexion,$array);

echo "<script type='text/javascript'>alert('registro actualizado');
location.href='../index.php';</script>";
?>
