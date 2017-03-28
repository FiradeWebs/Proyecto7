<?php
	include '../php/conexion.php';
	session_start();
		if(!isset($_SESSION["usu_id"])) {
			header("location:../index.php?nolog=2");
		}
?>
<!DOCTYPE html>
<html>
	<head>



		<meta http-equiv="Content-Type" content="text/html, charset=UTF-8">

    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<title>jTinder Touch Slider</title>
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
							$foto='../img/'.$datos['cat_img'];
							echo "<li class='pane1' id=".$datos['cat_id'].">";
						        echo "<div class='img'>";

									if (file_exists ($foto)){
										echo "<img src='" . $foto . "'>";
									} else {
										echo "<img src='img/0.jpg'";
									}
								

								echo "</div>";
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

    
     <!-- jQuery lib -->
	    <script type="text/javascript" src="../js/jquery.min.js"></script>
	    <!-- transform2d lib -->
	    <script type="text/javascript" src="../js/jquery.transform2d.js"></script>
	    <!-- jTinder lib -->
	    <script type="text/javascript" src="../js/jquery.jTinder.js"></script>
	    <!-- jTinder initialization script -->
	    <script type="text/javascript" src="../js/main.js"></script>


   

	</body>
</html>