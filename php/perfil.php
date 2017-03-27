
<?php 
// Extraemos el nombre y el email del registro con id = 3 +
session_start();
$usu_id=$_SESSION['usu_id'];

include('conexion.php'); 

$query_tb = "SELECT * FROM `tbl_usuario` WHERE`usu_id`=$usu_id"; 

$recupero = mysqli_query($conexion,$query_tb); 

			
				if (mysqli_num_rows($recupero)>0) {
						while ($recuperos = mysqli_fetch_array($recupero)) {
							echo "<div>".$recuperos['icon_id']."</div>";
							echo "<div>".$recuperos['usu_nombre']."</div>";
							echo "<div>".$recuperos['usu_apellidos']."</div>";
							echo "<div>".$recuperos['usu_sexo']."</div>";
							echo "<div>".$recuperos['usu_direccion']."</div>";
							echo "<div>".$recuperos['usu_correo']."</div>";
							echo "<div>".$recuperos['usu_nickname']."</div>";
						}
				}
						       
// ------------------------------------------------------------------------ 

?>
