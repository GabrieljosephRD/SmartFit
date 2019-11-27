<?php
    include_once("header.php");
?>

	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image:url(img/s8.jpg);">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>¡Hola!</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
       <?php
          /**/
          if($_POST)
          {
            //echo"<h2>Formul&aacute;rio enviado</h2>";
            //Recibimos los datos del formulario
            $Usuario=$_POST['Usuario'];
            $Clave=$_POST['Clave'];

            if(empty($Usuario))
            {
              echo"<h2>Elija un Nick de Usuario</h2>";
            }
            if(empty($Clave))
            {
              echo"<h2>Debe indicar una Clave para acceder</h2>";
            }           
				  if((!empty($Usuario)) && (!empty($Clave)))
				  {
					/*Incluimos el archivo que tiene todas las funciones*/
					include_once("Funciones.php");
					/*Encriptamos la Clave*/
					$Clave=md5($Clave);
					/*Llamamos la funcion que Registra el Cliente*/
					Logearse($Usuario,$Clave);
				  }
				  else 
				  {
					echo "<h2>Faltan campos por completar o llenar</h2>";
				  }
          }
          else
          {
            echo"";
          }
        ?>

    <div id="gtco-features-2">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 gtco-heading animate-box">
            <h1 class="text-center"><strong>Inicar Seccion</strong></h1>
              <form method="post" action="inicioSeccion.php">
                  <div class="row form-group">
                    <div class="col-md-6">
                      <label for="nombre">Usuario</label>
                      <input type="text" id="fname" name="Usuario" class="form-control" placeholder="Su usuario" required>
                    </div>
                    <div class="col-md-6">
                      <label for="apellido">Clave</label>
                      <input type="password" id="lname" name="Clave" class="form-control" placeholder="Su contraseña" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Enviar" class="btn btn-primary">
                  </div>
                </form>
                <p>¿No tienes cuenta? <a href="crear_cuenta.php">create una</a></p>
          </div>
        </div>
    </div>
    

<!-- Fin Cuerpo con Desarrollo Agil--->

<?php include_once("Footer.php") ?>