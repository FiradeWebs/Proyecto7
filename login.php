
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
			<link rel="stylesheet" href="./css/costum.css">
	</head>
	<body>
		<div class="container">
		  <div class="row">

		    <div class="main">
					<img src="./img/logo_17-03(v2).png">
		      <h3>Please Log In, or <a href="#">Sign Up</a></h3>
		      <div class="row">
		        <div class="col-xs-6 col-sm-6 col-md-6">
		          <a href="#" class="btn btn-lg btn-primary btn-block">Facebook</a>
		        </div>
		        <div class="col-xs-6 col-sm-6 col-md-6">
		          <a href="#" class="btn btn-lg btn-info btn-block">Google</a>
		        </div>
		      </div>
		      <div class="login-or">
		        <hr class="hr-or">
		        <span class="span-or">or</span>
		      </div>

		      <form name="login" action="php/iniciar_sesion_proc.php" method="POST" role="form">
		        <div class="form-group">
		          <label for="inputUsernameEmail">Username or email</label>
		          <input type="text" class="form-control name" name="name" id="name" maxlength="15">
		        </div>
		        <div class="form-group">
		          <a class="pull-right" href="#">Forgot password?</a>
		          <label for="inputPassword">Password</label>
		          <input type="password" class="form-control pass" name="pass" id="pass" >
		        </div>
		        <div class="checkbox pull-right">
		          <label>
		            <input type="checkbox">
		            Remember me </label>
		        </div>
		        <button type="submit" class="btn btn btn-primary send" id="send" value="Acceder">
		          Log In
		        </button>
		      </form>

		    </div>

		  </div>
		</div>


	</body>
</html>
