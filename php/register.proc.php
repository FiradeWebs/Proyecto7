<?php
extract($_POST);
	require_once('conexion.php');
	//primero comprobamos que el usuario no exista
		$con="SELECT * FROM `tbl_usuario` WHERE `correo_usuario` LIKE '".$s_email."'";
		//echo $con;
	//Lanzamos la consulta a la BD
		$result	=	mysqli_query($conexion,$con);
	//Contamos los resultados que nos devuelve
		$total  = mysqli_num_rows($result);
	//Comprobamos si el resultado ya existe
	if($total>=1){
		echo "<script type='text/javascript'>alert('Ya se encuentra registrado');
			location.href='../index.php';</script>";
	}
		//Si no existe, lo añadimos a la base de datos
	else{
		if ($_POST['s_password'] != $_POST['s_rpassword'])
					{
						?>
							<script>
 
							alert('Las claves no coinciden');
							location.href = "registro.php";
							</script>
 
						<?php 
 
					}
				else
		//preparamos la consulta de inserción
		$inser_con="INSERT INTO `tbl_usuario` (`usu_nombre`, `usu_apellidos`, `usu_sexo`, `usu_correo`, `usu_direccion`, `usu_nickname`, `usu_pass`) VALUES ('".$s_name."', '".$s_lastname1."', '".$s_lastname2."', '".$s_email."', '".$s_dirección."', '".$s_nickname."', '".$s_password."');";
		//echo $inser_con;die;
		mysqli_query($conexion,$inser_con);
		echo "<script type='text/javascript'>alert('registro completado');
			location.href='../index.php';</script>";
	}
 ?>
