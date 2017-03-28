<?php
include('conexion.php');
session_start();
if (!isset($_SESSION["usu_id"])){
	//nada
}
else {
	header("location:/php/discover.php");
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
			<link rel="stylesheet" href="./css/costum.css">
	</head>
	<body>

<div class="container">


    <div class="omb_login">
			<img src="./img/logo_17-03(v2).png">
    	<h5 class="omb_authTitle">Inicia Sesión o<a href="#"> Registrate</a></h5>
		<div class="row omb_row-sm-offset-3 omb_socialButtons">
    	    <div class="col-xs-4 col-sm-2">
		        <a href="#" class="btn btn-lg btn-block omb_btn-facebook">
			        <i class="fa fa-facebook visible-xs"></i>
			        <span class="hidden-xs">Facebook</span>
		        </a>
	        </div>
        	<div class="col-xs-4 col-sm-2">
		        <a href="#" class="btn btn-lg btn-block omb_btn-twitter">
			        <i class="fa fa-twitter visible-xs"></i>
			        <span class="hidden-xs">Twitter</span>
		        </a>
	        </div>
        	<div class="col-xs-4 col-sm-2">
		        <a href="#" class="btn btn-lg btn-block omb_btn-google">
			        <i class="fa fa-google-plus visible-xs"></i>
			        <span class="hidden-xs">Google+</span>
		        </a>
	        </div>
		</div>

		<div class="row omb_row-sm-offset-3 omb_loginOr">
			<div class="col-xs-12 col-sm-6">
				<hr class="omb_hrOr">
				<span class="omb_spanOr">o</span>
			</div>
		</div>

		<div class="row omb_row-sm-offset-3">
			<div class="col-xs-12 col-sm-6">
			    <form class="omb_loginForm" name="f1" action="php/iniciar_sesion_proc.php" method="GET">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						<input type="text" class="form-control" name="usuario" placeholder="email address">
					</div>
					<span class="help-block"></span>

					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-lock"></i></span>
						<input  type="password" class="form-control" name="pass" placeholder="Password">
					</div>
          <br>

					<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
				</form>
			</div>
    	</div>
	</div>



        </div>


	</body>
</html>
