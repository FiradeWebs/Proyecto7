<?php
	include ("conexion.php");
	extract($_REQUEST);
		$sql_con = "SELECT * FROM tbl_usuario WHERE usu_nickname = '" . $name . "' AND usu_pass = '" . $pass . "'";
		$result = mysqli_query($conexion, $sql_con);
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
			print_r("degfdsgds");

			header("location: ../login.php");
		}


?>
