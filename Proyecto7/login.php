
<!DOCTYPE html>
<html>
	<head>
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
	</head>
	<body>
		<form name="login" action="php/iniciar_sesion_proc.php" method="POST" onsubmit="return validar();">
			<div>
				<p class="nickname">
					Nombre de usuario:<br/>
					<input type="text" class="name" name="name" id="name" maxlength="15" />
				</p>
				<p class="password">
					Contraseña: <br/>
					<input type="password" class="pass" name="pass" id="pass" />
				</p>
				<input class="send" id="send" type="submit" value="Acceder" />
				
			</div>
		</form>



	</body>
</html>