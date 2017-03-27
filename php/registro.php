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


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

			<!--costum css-->
			<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
			<link rel="stylesheet" href="../css/costum.css">
	</head>
	<body>
			<div class="container">
				<div class="omb_login">

				 <div class="row omb_row-sm-offset-3">
			<div class="col-xs-12 col-sm-6">
			<img src="../img/logo_17-03(v2).png">
				<br><br>

				<form name="fr_sig" class="form-horizontal" role="form" action="./register.proc.php" method="POST">
				<!--nombre -->
				 <div class="input-group">
					   		<span class="input-group-addon"><i class="fa fa-user"></i></span>
					    		  <input type="text" class="form-control" id="s_name" name="s_name" placeholder="Introduzca su nombre" required>
					  </div>
					    <br>
				<!-- end nombre -->
				<!--Apellido1 -->
				 <div class="input-group">
					   		<span class="input-group-addon"><i class="fa fa-user"></i></span>

					    		  <input type="text" class="form-control" id="s_lastname1" name="s_lastname1" placeholder="Introduzca sus apellidos" required>

					  </div>
					    <br>
				<!-- end Apellido1 -->
				<!--Apellido2 -->

			<div class="input-group">
					   		<span class="input-group-addon"><i class="fa fa-female" aria-hidden="true"></i>/<i class="fa fa-male" aria-hidden="true"></i></span>
					    		  <select  class="form-control" id="s_lastname2" name="s_lastname2" >
											<option value="Masculino">Masculino</option>
											<option value="Femenino">Femenino</option>
											<option value="Otro">Otro</option>
										</select>

					  </div>
					    <br>
				<!-- end Apellido2 -->
				<!--Correo -->
					  <div class="input-group">
					   		<span class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>

					    		  <input type="email" class="form-control" id="s_email" name="s_email" placeholder="Email" required>

					  </div>
					    <br>
				<!--End Correo -->
				<!--Dirección -->
						<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
					    		  <input type="text" class="form-control" id="s_dirección" name="s_dirección" placeholder="Dirección" required>
					  </div>
					    <br>
				<!--End Dirección -->
				<!--Nickname -->
					  <div class="input-group">
					  <span class="input-group-addon"><i class="fa fa-user"></i></span>
					    		  <input type="text" class="form-control" id="s_nickname" name="s_nickname" placeholder="Nickname" required>

					  </div>
					    <br>
				<!--End Nickname -->
				<!--Contraseña -->
					  <div class="input-group">
					    	<span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>

					  			    <input type="password" class="form-control" id="s_password" name="s_password" placeholder="Contraseña" required>

					  </div>
					    <br>
				<!--End contraseña -->
				<!--Contraseña -->
					  <div class="input-group">
					  <span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>
								    <input type="password" class="form-control" id="s_rpassword" name="s_rpassword" placeholder="Por favor repita su contraseña" required>
					  </div>
					    <br>
				<!--End contraseña -->
				<div class="row omb_row-sm-offset-3">
					  <div class="col-xs-12 col-sm-6">
					  	<button class="btn btn-lg btn-primary btn-block" onclick="return reg_validar();">¡Regístrate!</button>
							<br>
					  	<input type="reset" class=" btn btn-lg btn-primary btn-block" value="Borrar datos" />
					  </div>
				</div>
				</form></div></div>

	</div><!--END CONTENT  FORM-->
