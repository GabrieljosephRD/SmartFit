<?php
    include_once("header.php");
?>

	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image:url(img/s7.jpg);">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Crear Cuenta</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-6 animate-box">
					<h3>Llene los campos para continuar</h3>
					<form method="post" action="cuenta.php">
						<div class="row form-group">
							<div class="col-md-12">
								<label for="">Usuario</label>
								<input type="text" id="fname" name="usuario" class="form-control" placeholder="Su nombre de usuario" required>
							</div>
							<div class="col-md-12">
								<label for="">Nombre</label>
								<input type="text" id="lname" name="nombre" class="form-control" placeholder="Su nombre" required>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-6">
								<label for="">Contraseña</label>
								<input type="password" id="fname" name="clave" class="form-control" placeholder="Su contraseña" required>
							</div>
							<div class="col-md-6">
								<label for="">Repetir contraseña</label>
								<input type="password" id="lname" name="repclave" class="form-control" placeholder="Repita su contraseña" required>
							</div>
                        </div>
                        
						<div class="row form-group">
							<div class="col-md-12">
								<label for="">Correo</label>
								<input type="text" id="email" name="correo" class="form-control" placeholder="Su correo electronico" required>
							</div>
						</div>
                        
						<div class="row form-group">
							<div class="col-md-12">
								<label for="">Sexo</label>
								<select name="sexo">	
                                    <option>Seleccione</option>
                                    <option>Masculino</option>
                                    <option>Femenino</option>
                                    <option>Otro</option>
                                </select>
							</div>
                        </div>
                        
						<div class="row form-group">
							<div class="col-md-12">
								<label for="">Cedula</label>
								<input type="text" id="email" name="cedula" class="form-control" placeholder="00-0000000-0" required>
							</div>
						</div>
                        
						<div class="row form-group">
							<div class="col-md-12">
								<label for="">Fecha de nacimiento</label>
								<input type="text" id="email" name="FechaNacimiento" class="form-control" placeholder="dd/mm/aaaaa" required>
							</div>
						</div>

						<div class="form-group">
							<input type="submit" value="Siguiente >" class="btn btn-primary">
						</div>

					</form>		
				</div>
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="gtco-contact-info">
					<h3>Santo Domingo</h3>
						<ul>
							<li class="address">Av. John F. Kennedy (Esquina Paseo Los Aviadores) - Nivel Acuario <br> DISTRITO NACIONAL, Rep Dominicana - 10413 </li>
							<li class="phone">809 123 4567</li>
							<li class="email">info@smartfit.com</li>
						</ul>
					</div>
				</div>
			</div>
			
		</div>
	</div>

<?php
    include_once("footer.php");
?>
