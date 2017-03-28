<?php
include('conexion.php');
session_start();
if (!isset($_SESSION["usu_id"])){
	header("location:../index.php");
}


?>
<html>
	<head>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
			<link rel="stylesheet" href="../css/costum.css">
	</head>
	<body>
<div class="container">

<a href="logout.php" style="float:right;font-size:32px;">Cerrar Sesión</a>

<div class="omb_login">
<div class="row omb_row-sm-offset-3 omb_loginOr">
<hr class="omb_hrOr">
<form name="fr_modify" action="perfil.proc.php" method="POST">
           <table class="table table-striped">
            <?php
                 //preparamos la consulta para sacar información de la tabla de co-ntactos
                  $array="SELECT * FROM tbl_usuario WHERE tbl_usuario.usu_id =". $_SESSION['usu_id']."";

                  $display_user=mysqli_query($conexion,$array);
                    while($print_user = mysqli_fetch_array($display_user))

                    {

                            echo "<tr><td><h1 class='titulo'>Nombre</h1></td><td>  <input type='text' id='usu_nombre' class='form-control' name='usu_nombre' value= '".$print_user['usu_nombre']."'></td></tr>";
                            echo "<tr><td><h1 class='titulo'>Apellidos</h1></td><td>  <input type='text' id='usu_apellidos'  class='form-control' name='usu_apellidos' value= '".$print_user['usu_apellidos']."'></td></tr>";
                            echo "<tr><td><h1 class='titulo'>Sexo</h1></td><td>  <input type='text' id='usu_sexo'  class='form-control' name='usu_sexo' value= '".$print_user['usu_sexo']."'></td></tr>";
                            echo "<tr><td><h1 class='titulo'>Correo</h1></td><td>  <input type='mail' id='usu_correo' name='usu_correo'  class='form-control' value= '".$print_user['usu_correo']."'></td></tr>";
                            echo "<tr><td><h1 class='titulo'>Nickname</h1></td><td>  <input type='text' id='usu_nickname'  class='form-control' name='usu_nickname' value= '".$print_user['usu_nickname']."'></td></tr>";
                            echo "<tr><td><h1 class='titulo'>Dirección</h1></td><td> <input type='text' id='usu_direccion'  class='form-control' name='usu_direccion' value= '".$print_user['usu_direccion']."'></td></tr>";
                            echo "<tr><td><h1 class='titulo'>Contraseña</h1></td><td> <input type='text' id='usu_pass'  class='form-control' name='usu_pass' value= '".$print_user['usu_pass']."'></td></tr>";

                         }
            ?>
             <tr><td><input type="submit" class="btn btn-info btn-primary" value="enviar"/></td></tr></table>
            </form>
</div>
</div>
</div>
<footer>
		<div id ="opcion1"><a href="perfil.php"><img id="img" src="../img/footer/ajuste_p.png"></a></div>
			<div id="opcion2"><a href="agenda.php"><img id="img" src="../img/footer/contacto_m.png"></a></div>
			<div id="opcion3"></div>
			<div id="opcion4"><a href="mylist.php"><img id="img" src="../img/footer/perfil_m.png"></a></div>
			<div id="opcion5"><a href="near.php"><img id="img"  src="../img/footer/ubicacion_m.png"></a></div>
			<div id="matchmaking"><a href="discover.php"><img id="logo" src="../img/footer/logo.png"></a></div>
</footer>
	</body>
</html>
