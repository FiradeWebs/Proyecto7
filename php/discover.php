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
	<?php
		$sql = "SELECT * FROM tbl_categoria";
		$dato= mysqli_query($conexion, $sql);
			echo "<div class='wrap'>";
			echo "<div id='tinderslide'>";
			
				if (mysqli_num_rows($dato)>0) {
					echo "<ul>";
						while ($datos = mysqli_fetch_array($dato)) {
							$cat_id=$datos['cat_id'];
							echo "<li class='pane1'>";
						        echo "<div class='img'></div>";
						        echo "<div>".$datos['cat_nombre']."</div>";
						        echo "<div class='like'></div>";
						        echo "<div class='dislike'></div>";
						    echo "</li>"; 
						    echo"<form class='form-horizontal' id='formcatid' onsubmit='return addcat()'' method='POST'>";
						    echo "<input type='radio' name='cat_id' value='$cat_id' checked>";
						    echo "</form>";
						}
					echo "</ul>";
				}
			echo "</div>";
			echo "</div>";
			?>

	<script>
	function addcat(){

         $.ajax({
                    type: "POST",
                    url: "insert_interes.proc.php",
                    data: $("#formcatid").serialize(), // Adjuntar los campos del formulario enviado.
                    success: function(data){

                                
            }
        });

    }
	</script>
	
	

    <!-- jTinder trigger by buttons  -->
    <div class="actions">
        <a href="#" class="dislike"><i></i></a>
        <a href="#" class="like"><i></i></a>
    </div>

    <!-- jTinder status text  -->
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