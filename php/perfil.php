<?php 
include('conexion.php'); 
session_start();
if (!isset($_SESSION["usu_id"])){
	header("location:../index.php");					
}
?>
<!DOCTYPE html>
<html>
	<head>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
			<link rel="stylesheet" href="./css/costum.css">
			<head>
	<link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="../favicon/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="../favicon/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="../favicon/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="../favicon/manifest.json">
	<link rel="mask-icon" href="../favicon/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="../favicon/favicon.ico">
	<meta name="apple-mobile-web-app-title" content="KnewAboutIt">
	<meta name="application-name" content="KnewAboutIt">
	<meta name="msapplication-TileColor" content="#00aba9">
	<meta name="msapplication-TileImage" content="../favicon/mstile-144x144.png">
	<meta name="msapplication-config" content="../favicon/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
		<!-- Latest compiled and minified CSS -->
	<meta http-equiv="Content-Type" content="text/html, charset=UTF-8">
	<meta name="mobile-web-app-capable" content="yes">
		
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0, user-scalable=0"> -->
    
    <link rel="stylesheet" type="text/css" href="../css/jTinder.css">
    	<!-- jQuery lib -->
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	    <!-- transform2d lib -->
	<script type="text/javascript" src="../js/jquery.transform2d.js"></script>
	    <!-- jTinder lib -->
	<script type="text/javascript" src="../js/jquery.jTinder.js"></script>
	    <!-- jTinder initialization script -->
	<script type="text/javascript" src="../js/main.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/costum.css">
	<link rel="stylesheet" type="text/css" href="../css/jTinder.css">
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
<div id="status"></div>


	<div id="footer">
	    <div id ="opcion1"><a href="perfil.php"><img id="img" src="../img/footer/ajuste_p.png"></a></div>
        <div id="opcion2"><a href="agenda.php"><img id="img" src="../img/footer/contacto_m.png"></a></div>
        <div id="opcion3"></div>
        <div id="opcion4"><a href="perfil.php"><img id="img" src="../img/footer/perfil_m.png"></a></div>
        <div id="opcion5"><a href="near.php"><img id="img"  src="../img/footer/ubicacion_m.png"></a></div>
        <div id="matchmaking"><a href="discover.php"><img id="logo" src="../img/footer/logo.png"></a></div>
	</div>

	</body>
</html>
