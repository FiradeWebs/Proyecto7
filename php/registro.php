<!DOCTYPE html>
<html>
	<head>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script>
	    //Funcion para validar  el formulario
	    function validar(){
	    	var error ="";
	    	var mystring = document.getElementById('name').value;
		    if(!mystring.match(/\S/)) {
		    	error+="Error, el nombre no puede estar vacio \n";
		        document.getElementById("name").style.borderColor="red";
		    } else {
		        document.getElementById("name").style.borderColor="black";
		    }

			alert(error);


		    // } if(document.getElementById("pass").value==""){
		    //     error+="Error, la contraseña no puede estar vacio \n";
		    //     document.getElementById("pass").style.borderColor="red";
		    // } if(error!=""){
		    //     alert(error);
		    //     return false;
		    // } else{
		    //     return true;
		    // }
	    }
	    </script>
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
					    		  <input type="text" class="form-control" id="s_name" name="s_name" placeholder="Introduzca su nombre">
					  </div>
					    <br>
				<!-- end nombre -->
				<!--Apellido1 -->
				 <div class="input-group">
					   		<span class="input-group-addon"><i class="fa fa-user"></i></span>

					    		  <input type="text" class="form-control" id="s_lastname1" name="s_lastname1" placeholder="Introduzca sus apellidos">

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

					    		  <input type="email" class="form-control" id="s_email" name="s_email" placeholder="Email">

					  </div>
					    <br>
				<!--End Correo -->
				<!--Dirección -->
						<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
					    		  <input type="text" class="form-control" id="s_dirección" name="s_dirección" placeholder="Dirección">
					  </div>
					    <br>
				<!--End Dirección -->
				<!--Nickname -->
					  <div class="input-group">
					  <span class="input-group-addon"><i class="fa fa-user"></i></span>
					    		  <input type="text" class="form-control" id="s_nickname" name="s_nickname" placeholder="Nickname">

					  </div>
					    <br>
				<!--End Nickname -->
				<!--Contraseña -->
					  <div class="input-group">
					    	<span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>

					  			    <input type="password" class="form-control" id="s_password" name="s_password" placeholder="Contraseña">

					  </div>
					    <br>
				<!--End contraseña -->
				<!--Contraseña -->
					  <div class="input-group">
					  <span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>
								    <input type="password" class="form-control" id="s_rpassword" placeholder="Por favor repita su contraseña">
					  </div>
					    <br>
				<!--End contraseña -->
				<div class="row omb_row-sm-offset-3">
					  <div class="col-xs-12 col-sm-6">
					  	<button class="btn btn-lg btn-primary btn-block" onclick="return reg_validar();">¡Registrate!</button>
					  	<input type="reset" class=" btn btn-lg btn-primary btn-block" value="Borrar datos" />
					  </div>
				</div>
				</form></div></div>

	</div><!--END CONTENT  FORM-->
