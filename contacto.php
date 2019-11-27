<?php
    include_once("header.php");
?>

	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image:url(img/s5.jpg);">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Contáctanos</h1>
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
					<h3>¿Alguna pregunta?</h3>
					<p>Escribe tus datos y cuéntanos tu inquietud. Te daremos una respuesta en menos de 24 horas laborables.</p>
					<form method="post" action="envio-cmt.php">
						<div class="row form-group">
							<div class="col-md-6">
								<label for="nombre">Nombre</label>
								<input type="text" id="fname" name="nombre" class="form-control" placeholder="Su nombre" required>
							</div>
							<div class="col-md-6">
								<label for="apellido">Apellido</label>
								<input type="text" id="lname" name="apellido" class="form-control" placeholder="Su apellido" required>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="correo">Correo</label>
								<input type="text" id="email" name="correo" class="form-control" placeholder="Su correo electronico" required>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="mensaje">Mensaje</label>
								<textarea name="mensaje" id="message" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..." required></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Enviar" class="btn btn-primary">
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
