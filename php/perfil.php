<?php 
include('conexion.php'); 
session_start();



if (!isset($_SESSION["usu_id"])){
	header("location:../index.php");					
}
							

?>
<html>
	<head>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
			<link rel="stylesheet" href="./css/costum.css">
	</head>
	<body>
<div class="container">

<a href="logout.php">Cerrar Sesión</a>

<div class="omb_login">
<div class="row omb_row-sm-offset-3 omb_loginOr">
<hr class="omb_hrOr">
<?php 

		$usu_id=$_SESSION['usu_id'];	

// Extraemos los datos de la tbl_usuario de la base de datos
$query_tb = "SELECT * FROM `tbl_usuario` WHERE`usu_id`=$usu_id"; 

$recupero = mysqli_query($conexion,$query_tb); 

			
				if (mysqli_num_rows($recupero)>0) {
						while ($recuperos = mysqli_fetch_array($recupero)) {
							echo "<div>".$recuperos['icon_id']."</div>";
							echo "<div>".$recuperos['usu_nombre']."</div>";
							echo "<div>".$recuperos['usu_apellidos']."</div>";
							echo "<div>".$recuperos['usu_sexo']."</div>";
							echo "<div>".$recuperos['usu_direccion']."</div>";
							echo "<div>".$recuperos['usu_correo']."</div>";
							echo "<div>".$recuperos['usu_nickname']."</div>";
						}
				}
						       
// ------------------------------------------------------------------------ 

?>
</div>
</div>
</div>
	</body>
</html>
