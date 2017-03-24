<?php
	include '../php/conexion.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<!-- jQuery lib -->
	    <script type="text/javascript" src="../js/jquery.min.js"></script>
	    <!-- transform2d lib -->
	    <script type="text/javascript" src="../js/jquery.transform2d.js"></script>
	    <!-- jTinder lib -->
	    <script type="text/javascript" src="../js/jquery.jTinder.js"></script>
	    <!-- jTinder initialization script -->
	    <script type="text/javascript" src="../js/main.js"></script>

		<meta http-equiv="Content-Type" content="text/html, charset=UTF-8">

    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<title>jTinder Touch Slider</title>
    	<link rel="stylesheet" type="text/css" href="../css/jTinder.css">
		<link href="../css/costum.css" rel="stylesheet" type="text/css">
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
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
							echo "<li class='pane1'>";
						        echo "<div class='img'></div>";
						        echo "<div>".$datos['cat_nombre']."</div>";
						        echo "<div class='like'></div>";
						        echo "<div class='dislike'></div>";
						    echo "</li>";
						}
					echo "</ul>";
				}
			echo "</div>";
			echo "</div>";
	?>


    <!-- jTinder trigger by buttons  -->
    <div class="actions">
        <a href="#" class="dislike"><i></i></a>
        <a href="#" class="like"><i></i></a>
    </div>

    <!-- jTinder status text  -->
    <div id="status"></div>

	<div id="footer">
	        <div id ="opcion1"><img id="img" src="../img/footer/ajuste1.png"></div>
	        <div id="opcion2"><img id="img" src="../img/footer/agenda.png"></div>
	        <div id="opcion3"><img id="logo" src="../img/footer/logo.png"></div>
	        <div id="opcion4"><img id="img" src="../img/footer/perfil1.png"></div>
	        <div id="opcion5"><img id="img"  src="../img/footer/ubicacion.png"></div>
	        <!-- <div id="matchmaking"><img id="logo" src="footer/logo.png"></div> -->
	</div>

	</body>
</html>
