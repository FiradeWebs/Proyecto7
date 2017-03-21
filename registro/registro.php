<!--FORMULARIO DE REGISTRO-->
			<div class="content-sig-form" id="reg">
				<form name="fr_sig" class="form-horizontal" role="form" action="php/proc/register.proc.php" method="POST">
				<!--nombre -->
				 <div class="form-group">
					   		<label for="ename" class="col-lg-2 control-label">Nombre</label>
					  		  <div class="col-lg-7">
					    		  <input type="text" class="form-control" id="s_name" name="s_name" placeholder="Introduzca su nombre">*
					    	  </div>
					  </div>
				<!-- end nombre -->
				<!--Apellido1 -->
				 <div class="form-group">
					   		<label for="elast1" class="col-lg-2 control-label">Apellidos</label>
					  		  <div class="col-lg-7">
					    		  <input type="text" class="form-control" id="s_lastname1" name="s_lastname1" placeholder="Introduzca sus apellidos">*
					    	  </div>
					  </div>
				<!-- end Apellido1 -->
				<!--Apellido2 -->
				 <div class="form-group">
					   		<label for="elast2" class="col-lg-2 control-label">Sexo</label>
					  		  <div class="col-lg-7">
					    		  <input type="text" class="form-control" id="s_lastname2" name="s_lastname2" placeholder="Introduzca su sexo">
					    	  </div>
					  </div>
				<!-- end Apellido2 -->
				<!--Correo -->
					  <div class="form-group">
					   		<label for="email" class="col-lg-2 control-label">Email</label>
					  		  <div class="col-lg-7">
					    		  <input type="email" class="form-control" id="s_email" name="s_email" placeholder="Email">
					    	  </div>
					  </div>
				<!--End Correo -->
				<!--Dirección -->
						<div class="form-group">
					   		<label for="email" class="col-lg-2 control-label">Dirección</label>
					  		  <div class="col-lg-7">
					    		  <input type="text" class="form-control" id="s_dirección" name="s_dirección" placeholder="Dirección">
					    	  </div>
					  </div>
				<!--End Dirección -->
				<!--Nickname -->
					  <div class="form-group">
					   		<label for="email" class="col-lg-2 control-label">Nickname</label>
					  		  <div class="col-lg-7">
					    		  <input type="text" class="form-control" id="s_nickname" name="s_nickname" placeholder="Nickname">
					    	  </div>
					  </div>
				<!--End Nickname -->
				<!--Contraseña -->
					  <div class="form-group">
					    	<label for="pass" class="col-lg-2 control-label">Contraseña</label>
					   			 <div class="col-lg-7">
					  			    <input type="password" class="form-control" id="s_password" name="s_password" placeholder="Contraseña">
					    		</div>
					  </div>
				<!--End contraseña -->
				<!--Contraseña -->
					  <div class="form-group">
					    	<label for="rpass" class="col-lg-2 control-label">repita su contraseña</label>
					   			 <div class="col-lg-7">
					  			    <input type="password" class="form-control" id="s_rpassword" placeholder="Por favor repita su contraseña">
					    		</div>
					  </div>
				<!--End contraseña -->
					  <div class="access">
					  	<button class="btn btn-success" onclick="return reg_validar();">¡Registrate!</button>
					  	<input type="reset" class=" btn btn-danger" value="Borrar datos" />
					  </div>
	

	</div><!--END CONTENT  FORM-->