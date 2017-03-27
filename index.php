
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
		 function validar()
		 {
			 var error ="";

			 if(document.getElementById("name").value=="")
			 {
				 error+="Error, el nombre no puede estar vacio \n";
				 document.getElementById("name").style.borderColor="red";
			 }
				if(document.getElementById("pass").value=="")
			 {
				 error+="Error, la contraseña no puede estar vacio \n";
				 document.getElementById("pass").style.borderColor="red";
			 }
			 if(error!="")
			 {
				 alert(error);
				 return false;
			 }
			 else{
				 return true;
			 }
		 }
		 //END VALIDAR()
	    </script>
			<!--costum css-->
			<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
			<link rel="stylesheet" href="./css/costum.css">
	</head>
	<body>

<div class="container">


    <div class="omb_login">
			<img src="./img/logo_17-03(v2).png">
    	<h5 class="omb_authTitle">Inicia Sesión o<a href="./php/registro.php"> Registrate</a></h5>
		<div class="row omb_row-sm-offset-3 omb_loginOr">
			<div class="">
				<hr class="omb_hrOr">
				<span class="omb_spanOr"></span>
			</div>
		</div>

		<div class="row omb_row-sm-offset-3">
			<div class="">
			    <form class="omb_loginForm" name="f1" action="php/iniciar_sesion.proc.php" method="POST">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						<input type="text" class="form-control" id="name" name="name" placeholder="Username">
					</div>
					<span class="help-block"></span>

					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-lock"></i></span>
						<input  type="password" class="form-control" id="pass" name="pass" placeholder="Password">
					</div>
          <br>

					<button class="btn btn-lg btn-primary btn-block" id="send" type="submit">Login</button>
				</form>
			</div>
    	</div>
	</div>



        </div>


	</body>
</html>
