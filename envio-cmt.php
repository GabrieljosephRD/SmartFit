<?php 
	include_once("header.php");
?>
   	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image:url(images/img_bg_1.jpg);">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Contactonos</h1>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>¡Gracias por tu comentario!</h2>
					<p>Volver a <a href="index.php">inicio</a></p>
				</div>
			</div>
    
    </div>
				<?php
					if($_POST)
					{
						//echo"FORM ENVIADOS";
						/*2-Recibimos los Datos*/
						$Nombre=$_POST['nombre'];
						$Apellido=$_POST['apellido'];
						$Correo=$_POST['correo'];
						$Mensaje=$_POST['mensaje'];
						
						/*3-Validamos los datos*/
						if(empty($Nombre))
						{
							echo"<h4>Debe indicar su nombre</h4>";
						}
						if(empty($Apellido))
						{
							echo"<h4>Debe indicar su apellido</h4>";
						}
						if(empty($Correo))
						{
							echo"<h4>Debe indicar su correo</h4>";
						}
						if(empty($Mensaje))
						{
							echo"<h4>Debe indicar su mensaje</h4>";
						}
						if( (!empty($Nombre)) && (!empty($Apellido)) && (!empty($Correo)) && (!empty($Mensaje)) )
						{
							/*Conectarse al Servidor DB y Guardar*/
							$Servidor="localhost";
							$UserDB="root";
							$ClaveDB="";
							$DB="db_smartfit";
							
							$Conectar=mysqli_connect($Servidor,$UserDB,$ClaveDB,$DB) or die("Error con la Base de Datos");
							
							/*Sentencia SQL para Guardar*/
							$Guardar="
							INSERT INTO comentario
								(Nombre, Apellido, Correo, Mensaje)
							VALUES ('$Nombre','$Apellido','$Correo','$Mensaje')							
							";
							if(mysqli_query($Conectar,$Guardar))
							{
								echo"
								<div class='col-md-8 col-md-offset-2 text-center gtco-heading'>
									<h5>Datos registrados</h5>
								</div>";
							}else{
								echo"<h5>Fallo el registro</h5>";
							}
								
							
						}else
						{
							echo"<h5>Faltan campos por llenar</h5>";
						}
						
					}else
					{
						echo"Sin datos para procesar";						
					}
				?>
				<!-- /. Formulario Inscribirte -->

			</div> <!-- /.container -->
<!--Fin del Cuerpo -->
    
</section>

<?php 
	include_once("Footer.php");
?>