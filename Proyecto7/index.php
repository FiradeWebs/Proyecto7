<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
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
</head>
<body>	
	<?php
	extract($_GET);
		//En caso que exista la variable nolog, significa que ha habido un error de login o el usuario ha intentado entrar en una página directamente
		if (isset($nolog)) 
		{
			switch ($nolog) {
				case '1':
					?>
					<div class="login_failed">
						<p class="user_failed">
							Upps! parece que tu usuario y/o contraseña no son correctos
						</p>
					</div>
				<?php
					break;
				case '2':
				?>
				<div class="login_failed">
						<p class="user_failed">
							¡Necesita estar registrado!
						</p>
					</div>
				<?php
				default:
					//En caso que el usuario envie cualquier variable por URL, que salga del Switch sin que haga nada
					break;
			}
		}
	?>
	<!-- start padding container -->
    <div class="wrap">
        <!-- start jtinder container -->
        <div id="tinderslide">
            <ul>
                <li class="pane1">
                    <div class="img"></div>
                    <div>Miami Beach</div>
                    <div class="like"></div>
                    <div class="dislike"></div>
                </li>
                <li class="pane2">
                    <div class="img"></div>
                    <div>San Francisco</div>
                    <div class="like"></div>
                    <div class="dislike"></div>
                </li>
                <li class="pane3">
                    <div class="img"></div>
                    <div>Chicago</div>
                    <div class="like"></div>
                    <div class="dislike"></div>
                </li>
                <li class="pane4">
                    <div class="img"></div>
                    <div>New York</div>
                    <div class="like"></div>
                    <div class="dislike"></div>
                </li>
                <li class="pane5">
                    <div class="img"></div>
                    <div>Beach</div>
                    <div class="like"></div>
                    <div class="dislike"></div>
                </li>
            </ul>
        </div>
        <!-- end jtinder container -->
    </div>
    <!-- end padding container -->

    <!-- jTinder trigger by buttons  -->
    <div class="actions">
        <a href="#" class="dislike"><i></i></a>
        <a href="#" class="like"><i></i></a>
    </div>

    <!-- jTinder status text  -->
    <div id="status"></div>

    <!-- jQuery lib -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- transform2d lib -->
    <script type="text/javascript" src="js/jquery.transform2d.js"></script>
    <!-- jTinder lib -->
    <script type="text/javascript" src="js/jquery.jTinder.js"></script>
    <!-- jTinder initialization script -->
    <script type="text/javascript" src="js/main.js"></script>
	<form name="login" action="php/login.proc.php" method="POST" onsubmit="return validar();" >
		<div class="login">
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