<?php
extract($_POST);

//Realizamos la conexión a la BD
include ("conexion.php");
//Consulta de busqueda del usuario
	$con =	"SELECT * FROM `tbl_usuario` WHERE `usu_nickname` = '". $name ."' AND `usu_pass` = '" . $pass . "'";	
	//Lanzamos la consulta a la BD
	$result	=	mysqli_query($mysqli,$con);
	//Contamos los resultados que nos devuelve
	$total  = mysqli_num_rows($result); 
	//Ponemos el condicional según el nombre de registros que nos devuelva
	if($total>=1){
		//Iniciamos sessión para las variables de sesion
		session_start();
		while ($fila = mysqli_fetch_row($result)) 
		{
			//Asignamos la variable de session "usu_id" al ID del usuario
			$_SESSION['usu_id']	=	$fila[0];
			//Redireccionamos
			
			header("location:discover.php");	
		}
	}
	//Si no nos devuelve registros significa que el usuario o contraseña han sido incorrectos.
	else{		
		header("location: ../index.php?nolog=1");
	}
?>